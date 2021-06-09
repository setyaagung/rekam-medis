@extends('layouts.back-main')

@section('title','Data Pemeriksaan')

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
                                Data Pemeriksaan
                            </h3>
                            <a href="{{ route('periksa.create')}}" class="btn btn-primary btn-sm float-right">Tambah</a>
                        </div>
                        <div class="card-body">
                            @if ($message = Session::get('create'))
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong> {{$message}}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if ($message = Session::get('update'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Updated!</strong> {{$message}}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if ($message = Session::get('delete'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Deleted!</strong> {{$message}}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <table id="example1" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>TANGGAL PERIKSA</th>
                                        <th>TARUNA</th>
                                        <th>DOKTER</th>
                                        <th>KELUHAN</th>
                                        <th>TINDAKAN</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($periksas as $periksa)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ \Carbon\Carbon::parse($periksa->tanggal_periksa)->isoFormat('D MMMM Y')}}</td>
                                            <td>
                                                {{ $periksa->taruna->nama_taruna}}
                                            </td>
                                            <td>{{ $periksa->dokter->nama_dokter}}</td>
                                            <td>{{ $periksa->keluhan}}</td>
                                            <td>{{ $periksa->tindakan}}</td>
                                            <td>
                                                <a href="{{ asset($periksa->file)}}" class="btn btn-sm btn-info" target="_blank"><i class="fas fa-file"></i> Lihat File</a>
                                                <a href="{{ route('periksa.edit',$periksa->id_periksa)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                                <form action="{{ route('periksa.destroy',$periksa->id_periksa)}}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?')"><i class="fas fa-trash"></i> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
