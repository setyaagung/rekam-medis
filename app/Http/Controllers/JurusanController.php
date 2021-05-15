<?php

namespace App\Http\Controllers;

use App\Model\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusans = Jurusan::orderBy('kode_jurusan', 'ASC')->get();
        return view('backend.jurusan.index', compact('jurusans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $message = [
            'kode_jurusan.unique' => 'Kode jurusan ini sudah ada',
            'nama_jurusan.unique' => 'Nama jurusan ini sudah ada'
        ];
        $request->validate([
            'kode_jurusan' => 'required|string|unique:jurusan',
            'nama_jurusan' => 'required|string|unique:jurusan'
        ], $message);
        Jurusan::create($data);
        return redirect()->route('jurusan.index')->with('create', 'Data jurusan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('backend.jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $data = $request->all();
        $message = [
            'kode_jurusan.unique' => 'Kode jurusan ini sudah ada',
            'nama_jurusan.unique' => 'Nama jurusan ini sudah ada'
        ];
        $request->validate([
            'kode_jurusan' => 'required|string|unique:jurusan,kode_jurusan,' . $id . ',id_jurusan',
            'nama_jurusan' => 'required|string|unique:jurusan,nama_jurusan,' . $id . ',id_jurusan'
        ], $message);
        $jurusan->update($data);
        return redirect()->route('jurusan.index')->with('update', 'Data jurusan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();
        return redirect()->route('jurusan.index')->with('delete', 'Data jurusan berhasil dihapus');
    }
}
