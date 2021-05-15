<?php

namespace App\Http\Controllers;

use App\Model\Dokter;
use App\User;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokters = Dokter::all();
        return view('backend.dokter.index', compact('dokters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'email.unique' => 'Maaf, Email ini sudah digunakan user lain',
            'nid.unique' => 'Maaf, NID ini sudah digunakan'
        ];
        $request->validate([
            'nid' => 'required|string|unique:dokter',
            'nama_dokter' => 'required|string|max:191',
            'no_telp' => 'required',
            'alamat' => 'required',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ], $message);
        $user = User::create([
            'name' => $request->input('nama_dokter'),
            'email' => $request->input('email'),
            'id_role' => 2,
            'password' => bcrypt($request->input('password'))
        ]);
        $data = $request->all();
        $data['id_user'] = $user->id_user;
        Dokter::create($data);
        return redirect()->route('dokter.index')->with('create', 'Data dokter berhasil ditambahkan');
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
        $dokter = Dokter::findOrFail($id);
        $user = User::where('id_user', $dokter->id_user)->get()->first();
        return view('backend.dokter.edit', compact('dokter', 'user'));
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
        $dokter = Dokter::findOrFail($id);
        $user = User::where('id_user', $dokter->id_user)->get()->first();
        $message = [
            'email.unique' => 'Maaf, Email ini sudah digunakan user lain',
            'nid.unique' => 'Maaf, NID ini sudah digunakan'
        ];
        $request->validate([
            'nid' => 'required|string|unique:dokter,nid,' . $id . ',id_dokter',
            'nama_dokter' => 'required|string|max:191',
            'no_telp' => 'required',
            'alamat' => 'required',
            'email' => 'required|string|email|max:191|unique:users,email,' . $user->id_user . ',id_user',
        ], $message);
        $data = $request->all();
        $user->update([
            'name' => $request->input('nama_dokter'),
            'email' => $request->input('email')
        ]);
        $dokter->update($data);
        return redirect()->route('dokter.index')->with('update', 'Data dokter berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();
        return redirect()->route('dokter.index')->with('delete', 'Data dokter berhasil dihapus');
    }
}
