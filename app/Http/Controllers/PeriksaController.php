<?php

namespace App\Http\Controllers;

use App\Model\Dokter;
use App\Model\Periksa;
use App\Model\Taruna;
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periksas = Periksa::orderBy('tanggal_periksa', 'DESC')->get();
        return view('backend.periksa.index', compact('periksas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarunas = Taruna::orderBy('nama_taruna', 'ASC')->get();
        $dokters = Dokter::orderBy('nama_dokter', 'ASC')->get();
        return view('backend.periksa.create', compact('tarunas', 'dokters'));
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
        Periksa::create($data);
        return redirect()->route('periksa.index')->with('create', 'Data periksa berhasil ditambahkan');
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
        $periksa = Periksa::findOrFail($id);
        $tarunas = Taruna::orderBy('nama_taruna', 'ASC')->get();
        $dokters = Dokter::orderBy('nama_dokter', 'ASC')->get();
        return view('backend.periksa.edit', compact('periksa', 'tarunas', 'dokters'));
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
        $periksa = Periksa::findOrFail($id);
        $data = $request->all();
        $periksa->update($data);
        return redirect()->route('periksa.index')->with('update', 'Data periksa berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
