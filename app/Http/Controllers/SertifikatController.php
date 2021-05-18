<?php

namespace App\Http\Controllers;

use App\Model\Sertifikat;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sertifikats = Sertifikat::orderBy('nama_sertifikat', 'ASC')->get();
        return view('backend.sertifikat.index', compact('sertifikats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sertifikat.create');
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
            'nama_sertifikat.unique' => 'Nama sertifikat ini sudah ada'
        ];
        $request->validate([
            'nama_sertifikat' => 'required|string|unique:sertifikat'
        ], $message);
        Sertifikat::create($data);
        return redirect()->route('sertifikat.index')->with('create', 'Data sertifikat berhasil ditambahkan');
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
        $sertifikat = Sertifikat::findOrFail($id);
        return view('backend.sertifikat.edit', compact('sertifikat'));
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
        $sertifikat = Sertifikat::findOrFail($id);
        $data = $request->all();
        $message = [
            'nama_sertifikat.unique' => 'Nama sertifikat ini sudah ada'
        ];
        $request->validate([
            'nama_sertifikat' => 'required|string|unique:sertifikat,nama_sertifikat,' . $id . ',id_sertifikat'
        ], $message);
        $sertifikat->update($data);
        return redirect()->route('sertifikat.index')->with('update', 'Data sertifikat berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sertifikat = Sertifikat::findOrFail($id);
        $sertifikat->delete();
        return redirect()->route('sertifikat.index')->with('delete', 'Data sertifikat berhasil dihapus');
    }
}
