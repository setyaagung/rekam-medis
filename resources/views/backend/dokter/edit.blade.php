@extends('layouts.back-main')

@section('title','Edit Dokter')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">

    </div>
    <!-- /.content-header -->
    <section class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">
                                Edit Dokter
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dokter.update',$dokter->id_dokter)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="">Nomor Induk Dokter</label>
                                    <input id="nid" type="text" class="form-control @error('nid') is-invalid @enderror" name="nid" value="{{ $dokter->nid }}" required autocomplete="nid" autofocus>
                                    @error('nid')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Dokter</label>
                                    <input id="nama_dokter" type="text" class="form-control @error('nama_dokter') is-invalid @enderror" name="nama_dokter" value="{{ $dokter->nama_dokter }}" required autocomplete="nama_dokter">
                                    @error('nama_dokter')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Nomor Telepon</label>
                                    <input id="no_telp" type="text" class="form-control" name="no_telp" value="{{ $dokter->no_telp }}" required autocomplete="no_telp">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" class="form-control" rows="4" required>{{ $dokter->alamat}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="float-right">
                                    <a href="{{ route('dokter.index')}}" class="btn btn-secondary">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
