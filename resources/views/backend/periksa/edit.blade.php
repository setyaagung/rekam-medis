@extends('layouts.back-main')

@section('title','Edit Pemeriksaan')

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
                                Edit Pemeriksaan
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('periksa.update',$periksa->id_periksa)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="">Tanggal Periksa</label>
                                    <input type="date" class="form-control" name="tanggal_periksa" value="{{ \Carbon\Carbon::parse($periksa->tanggal_periksa)->format('Y-m-d')}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Taruna</label>
                                    <select class="form-control taruna" name="id_taruna" style="width: 100%;" required>
                                        <option value=""></option>
                                        @foreach ($tarunas as $taruna)
                                            <option value="{{ $taruna->id_taruna}}" {{ $periksa->id_taruna == $taruna->id_taruna ? 'selected':''}}>{{ $taruna->nama_taruna}} - {{ $taruna->nit}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Dokter Pemeriksa</label>
                                    <select class="form-control dokter" name="id_dokter" style="width: 100%;" required>
                                        <option value=""></option>
                                        @foreach ($dokters as $dokter)
                                            <option value="{{ $dokter->id_dokter}}" {{ $periksa->id_dokter == $dokter->id_dokter ? 'selected':''}}>{{ $dokter->nama_dokter}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Keluhan</label>
                                    <textarea name="keluhan" class="form-control" rows="3" required>{{ $periksa->keluhan}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Tindakan</label>
                                    <textarea name="tindakan" class="form-control" rows="3" required>{{ $periksa->tindakan}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Upload File</label>
                                    <input type="file" class="p-1 form-control @error('file') is-invalid @enderror" name="file">
                                    @error('file')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="float-right">
                                    <a href="{{ route('periksa.index')}}" class="btn btn-secondary">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
