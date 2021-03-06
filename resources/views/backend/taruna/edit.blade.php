@extends('layouts.back-main')

@section('title','Edit Taruna')

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
                                Edit Taruna
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('taruna.update',$taruna->id_taruna)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="">Nomor Induk Taruna</label>
                                    <input id="nit" type="text" class="form-control @error('nit') is-invalid @enderror" name="nit" value="{{ $taruna->nit }}" required autocomplete="nit" autofocus>
                                    @error('nit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Taruna</label>
                                    <input id="nama_taruna" type="text" class="form-control @error('nama_taruna') is-invalid @enderror" name="nama_taruna" value="{{ $taruna->nama_taruna }}" required autocomplete="nama_taruna">
                                    @error('nama_taruna')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <select name="id_jurusan" class="form-control @error('id_jurusan') is-invalid @enderror" required>
                                        <option value="">-- Pilih Jurusan --</option>
                                        @foreach ($jurusans as $jurusan)
                                            <option value="{{ $jurusan->id_jurusan}}" {{ $taruna->id_jurusan == $jurusan->id_jurusan ? 'selected':''}}>{{ $jurusan->kode_jurusan}} - {{ $jurusan->nama_jurusan}}</option>
                                        @endforeach
                                    </select>
                                    @error('id_jurusan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Nomor Telepon</label>
                                    <input id="no_telp" type="text" class="form-control" name="no_telp" value="{{ $taruna->no_telp }}" autocomplete="no_telp">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" class="form-control" rows="4">{{ $taruna->alamat}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" class="p-1 form-control @error('foto') is-invalid @enderror" name="foto">
                                    @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="float-right">
                                    <a href="{{ route('taruna.index')}}" class="btn btn-secondary">Kembali</a>
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
