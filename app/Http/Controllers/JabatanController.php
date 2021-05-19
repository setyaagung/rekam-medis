<?php

namespace App\Http\Controllers;

use App\Model\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatans = Jabatan::orderBy('nama_jabatan', 'ASC')->get();
        return view('backend.jabatan.index', compact('jabatans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.jabatan.create');
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
            'nama_jabatan.unique' => 'Nama jabatan ini sudah ada'
        ];
        $request->validate([
            'nama_jabatan' => 'required|string|unique:jabatan'
        ], $message);
        jabatan::create($data);
        return redirect()->route('jabatan.index')->with('create', 'Data jabatan berhasil ditambahkan');
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
        $jabatan = Jabatan::findOrFail($id);
        return view('backend.jabatan.edit', compact('jabatan'));
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
        $jabatan = Jabatan::findOrFail($id);
        $data = $request->all();
        $message = [
            'nama_jabatan.unique' => 'Nama jabatan ini sudah ada'
        ];
        $request->validate([
            'nama_jabatan' => 'required|string|unique:jabatan,nama_jabatan,' . $id . ',id_jabatan'
        ], $message);
        $jabatan->update($data);
        return redirect()->route('jabatan.index')->with('update', 'Data jabatan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->delete();
        return redirect()->route('jabatan.index')->with('delete', 'Data jabatan berhasil dihapus');
    }
}
