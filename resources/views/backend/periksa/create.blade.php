@extends('layouts.back-main')

@section('title','Tambah Pemeriksaan')

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
                                Tambah Pemeriksaan
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('periksa.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Tanggal Periksa</label>
                                    <input type="date" class="form-control" name="tanggal_periksa" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Taruna</label>
                                    <select class="form-control taruna" name="id_taruna" style="width: 100%;" required>
                                        <option value=""></option>
                                        @foreach ($tarunas as $taruna)
                                            <option value="{{ $taruna->id_taruna}}" {{ old('id_taruna') == $taruna->id_taruna ? 'selected':''}}>{{ $taruna->nama_taruna}} - {{ $taruna->nit}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Dokter Pemeriksa</label>
                                    <select class="form-control dokter" name="id_dokter" style="width: 100%;" required>
                                        <option value=""></option>
                                        @foreach ($dokters as $dokter)
                                            <option value="{{ $dokter->id_dokter}}" {{ old('id_dokter') == $dokter->id_dokter ? 'selected':''}}>{{ $dokter->nama_dokter}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Keluhan</label>
                                    <textarea name="keluhan" class="form-control" rows="3" required>{{ old('keluhan')}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Tindakan</label>
                                    <textarea name="tindakan" class="form-control" rows="3" required>{{ old('tindakan')}}</textarea>
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
