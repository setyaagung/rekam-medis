@extends('layouts.back-main')

@section('title','Data Rekam Medis')

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
                                Data Rekam Medis
                            </h3>
                            <a href="{{ route('rekam-medis.create')}}" class="btn btn-primary btn-sm float-right">Tambah</a>
                        </div>
                        <div class="card-body">
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
                                        <th>NOMOR REKAM MEDIS</th>
                                        <th>TARUNA</th>
                                        <th>TANGGAL UJIAN</th>
                                        <th>MASA BERLAKU</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rms as $rm)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $rm->no_rm}}</td>
                                            <td>{{ $rm->taruna->nama_taruna}}</td>
                                            <td>
                                                @if ($rm->tanggal_ujian == null)

                                                @else
                                                    {{ \Carbon\Carbon::parse($rm->tanggal_ujian)->isoFormat('D MMMM Y')}}
                                                @endif
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($rm->masa_berlaku)->isoFormat('D MMMM Y')}}</td>
                                            <td>
                                                <a href="{{ route('rekam-medis.show',$rm->id_rm)}}" class="btn btn-sm btn-info"><i class="fas fa-file-alt"></i> Lihat Detail</a>
                                                <a href="{{ route('rekam-medis.edit',$rm->id_rm)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                                <form action="{{ route('rekam-medis.destroy',$rm->id_rm)}}" method="POST" class="d-inline">
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
