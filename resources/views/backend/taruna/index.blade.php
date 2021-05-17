@extends('layouts.back-main')

@section('title','Data Taruna')

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
                                Data Taruna
                            </h3>
                            <div class="float-right">
                                <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#importTaruna"><i class="fas fa-file-excel"></i> Import</a>
                                <a href="{{ route('taruna.create')}}" class="btn btn-primary btn-sm">Tambah</a>
                            </div>
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
                            @if ($message = Session::get('import'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong> {{$message}}.
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
                                        <th>NIT</th>
                                        <th>NAMA TARUNA</th>
                                        <th>JURUSAN</th>
                                        <th>NO TELP</th>
                                        <th>ALAMAT</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tarunas as $taruna)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $taruna->nit}}</td>
                                            <td>{{ $taruna->nama_taruna}}</td>
                                            <td>{{ $taruna->jurusan->nama_jurusan}}</td>
                                            <td>{{ $taruna->no_telp}}</td>
                                            <td>{{ $taruna->alamat}}</td>
                                            <td>
                                                <a href="{{ route('taruna.edit',$taruna->id_taruna)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                                <form action="{{ route('taruna.destroy',$taruna->id_taruna)}}" method="POST" class="d-inline">
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

    <!-- Import Taruna -->
	<div class="modal fade" id="importTaruna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="{{ route('taruna.import')}}" method="POST" enctype="multipart/form-data">
                @csrf
				<div class="modal-content">
					<div class="modal-header">
                        <h5 class="modal-title font-weight-bold">Import Taruna</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
					<div class="modal-body">
						<div class="form-group">
							<input type="file" class="form-control p-1" name="file" required>
                        </div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Import</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection
