@extends('layouts.back-main')

@section('title','Tambah Jabatan')

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
                                Tambah Jabatan
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('jabatan.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama Jabatan</label>
                                    <input id="nama_jabatan" type="text" class="form-control @error('nama_jabatan') is-invalid @enderror" name="nama_jabatan" value="{{ old('nama_jabatan') }}" required autocomplete="nama_jabatan" autofocus>
                                    @error('nama_jabatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" rows="3">{{ old('deskripsi')}}</textarea>
                                </div>
                                <div class="float-right">
                                    <a href="{{ route('jabatan.index')}}" class="btn btn-secondary">Kembali</a>
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
