@extends('layouts.back-main')

@section('title','Tambah Jurusan')

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
                                Tambah Jurusan
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('jurusan.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Kode Jurusan</label>
                                    <input id="kode_jurusan" type="text" class="form-control @error('kode_jurusan') is-invalid @enderror" name="kode_jurusan" value="{{ old('kode_jurusan') }}" required autocomplete="kode_jurusan" autofocus>
                                    @error('kode_jurusan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Jurusan</label>
                                    <input id="nama_jurusan" type="text" class="form-control @error('nama_jurusan') is-invalid @enderror" name="nama_jurusan" value="{{ old('nama_jurusan') }}" required autocomplete="nama_jurusan">
                                    @error('nama_jurusan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="float-right">
                                    <a href="{{ route('jurusan.index')}}" class="btn btn-secondary">Kembali</a>
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
