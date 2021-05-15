@extends('layouts.back-main')

@section('title','Edit User')

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
                                Edit User
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('user.update',$user->id_user)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">HAK AKSES</label>
                                    <select name="id_role" id="id_role" class="form-control @error('id_role') is-invalid @enderror" onchange="return showdokter();" required>
                                        <option value="">-- Pilih Hak Akses --</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id_role}}" {{ $user->id_role == $role->id_role ? 'selected':''}}>{{ strtoupper($role->nama_role)}}</option>
                                        @endforeach
                                    </select>
                                    @error('id_role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group" id="nid" style="display: none">
                                    <label for="">Nomor Induk Dokter</label>
                                    <input id="nid" type="text" class="form-control" name="nid" value="{{ old('nid') }}" autocomplete="nid">
                                </div>
                                <div class="form-group" id="no_telp" style="display: none">
                                    <label for="">No Telp</label>
                                    <input id="no_telp" type="number" class="form-control" name="no_telp" value="{{ old('no_telp') }}" autocomplete="no_telp">
                                </div>
                                <div class="form-group" id="alamat" style="display: none">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" id="alamat" class="form-control" rows="3">{{ old('alamat')}}</textarea>
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
                                    <a href="{{ route('user.index')}}" class="btn btn-secondary">Kembali</a>
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

@push('scripts')
    <script>
        //karyawan
        function showdokter(){
                var selectBox = document.getElementById('id_role');
                var id_role = selectBox.options[selectBox.selectedIndex].value;
                if (id_role == 2)
                {
                    document.getElementById('nid').style.display = 'block';
                    document.getElementById('no_telp').style.display = 'block';
                    document.getElementById('alamat').style.display = 'block';
                }else{
                    document.getElementById('nid').style.display= 'none';
                    document.getElementById('no_telp').style.display = 'none';
                    document.getElementById('alamat').style.display = 'none';
                }
                return false;
            }
    </script>
@endpush


