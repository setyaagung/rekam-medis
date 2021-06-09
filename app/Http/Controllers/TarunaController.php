<?php

namespace App\Http\Controllers;

use App\Imports\TarunaImport;
use App\Model\Jurusan;
use App\Model\Periksa;
use App\Model\RekamMedis;
use App\Model\Taruna;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use File;

class TarunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarunas = Taruna::orderBy('nit', 'ASC')->get();
        return view('backend.taruna.index', compact('tarunas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusans = Jurusan::orderBy('kode_jurusan', 'ASC')->get();
        return view('backend.taruna.create', compact('jurusans'));
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
            'nit.unique' => 'NIT sudah digunakan taruna lain'
        ];
        $request->validate([
            'nit' => 'required|string|unique:taruna',
            'nama_taruna' => 'required|string|max:191',
            'id_jurusan' => 'required',
            'foto' => 'mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], $message);
        $data['nama_taruna'] = strtoupper($request->input('nama_taruna'));
        if ($request->hasFile('foto')) {
            $image_file = $request->file('foto');
            $image_extension = $image_file->getClientOriginalExtension();
            $image_filename = time() . '.' . $image_extension;
            $data['foto'] = $image_file->move('foto', $image_filename);
        }
        Taruna::create($data);
        return redirect()->route('taruna.index')->with('create', 'Data taruna berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $taruna = Taruna::findOrFail($id);
        $rm = RekamMedis::where('id_taruna', $taruna->id_taruna)->get()->first();
        $data_riwayat = Periksa::where('id_taruna', $taruna->id_taruna)->get();
        return view('backend.taruna.show', compact('taruna', 'data_riwayat', 'rm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taruna = Taruna::findOrFail($id);
        $jurusans = Jurusan::orderBy('kode_jurusan', 'ASC')->get();
        return view('backend.taruna.edit', compact('taruna', 'jurusans'));
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
        $taruna = Taruna::findOrFail($id);
        $data = $request->all();
        $message = [
            'nit.unique' => 'NIT sudah digunakan taruna lain'
        ];
        $request->validate([
            'nit' => 'required|string|unique:taruna,nit,' . $id . ',id_taruna',
            'nama_taruna' => 'required|string|max:191',
            'id_jurusan' => 'required',
            'foto' => 'mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], $message);
        $data['nama_taruna'] = strtoupper($request->input('nama_taruna'));
        if ($request->hasFile('foto')) {
            File::delete($taruna->foto);
            $image_file = $request->file('foto');
            $image_extension = $image_file->getClientOriginalExtension();
            $image_filename = time() . '.' . $image_extension;
            $data['foto'] = $image_file->move('foto', $image_filename);
        }
        $taruna->update($data);
        return redirect()->route('taruna.index')->with('update', 'Data taruna berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taruna = Taruna::findOrFail($id);
        $taruna->delete();
        File::delete($taruna->foto);
        return redirect()->route('taruna.index')->with('delete', 'Data taruna berhasil dihapus');
    }

    public function import(Request $request)
    {
        // validasi
        $request->validate([
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        DB::beginTransaction();
        try {
            Excel::import(new TarunaImport, $request->file('file'));
            DB::commit();
            return redirect()->route('taruna.index')->with('import', 'Import data taruna berhasil');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            DB::rollback();
            return redirect()->back()->with('errorImport', 'Kemungkingan format file anda salah atau data nit ada yang sama');
        }
    }

    public function cetak($id)
    {
        $taruna = Taruna::findOrFail($id);
        $rm = RekamMedis::where('id_taruna', $taruna->id_taruna)->get()->first();
        $data_riwayat = Periksa::where('id_taruna', $taruna->id_taruna)->get();

        //$filename = 'RM-' . $rm->no_rm . '.pdf';
        $pdf = PDF::loadView('backend.taruna.cetak', compact('taruna', 'rm', 'data_riwayat'));
        return $pdf->stream();
    }
}
