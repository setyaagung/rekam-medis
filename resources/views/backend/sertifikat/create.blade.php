@extends('layouts.back-main')

@section('title','Tambah Sertifikat')

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
                                Tambah Sertifikat
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('sertifikat.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama Sertifikat</label>
                                    <input id="nama_sertifikat" type="text" class="form-control @error('nama_sertifikat') is-invalid @enderror" name="nama_sertifikat" value="{{ old('nama_sertifikat') }}" required autocomplete="nama_sertifikat" autofocus>
                                    @error('nama_sertifikat')
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
                                    <a href="{{ route('sertifikat.index')}}" class="btn btn-secondary">Kembali</a>
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
