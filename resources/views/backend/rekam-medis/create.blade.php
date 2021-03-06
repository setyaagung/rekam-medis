@extends('layouts.back-main')

@section('title','Tambah Rekam Medis')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">

    </div>
    <!-- /.content-header -->
    <section class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">
                                Tambah Rekam Medis
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('rekam-medis.store')}}" method="POST">
                                @csrf
                                @if ($message = Session::get('create'))
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <strong>Success!</strong> {{$message}}.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="form1-tab" data-toggle="tab" href="#form1" role="tab">Formulir 1</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="form2-tab" data-toggle="tab" href="#form2" role="tab">Formulir 2</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="form3-tab" data-toggle="tab" href="#form3" role="tab">Formulir 3</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="form4-tab" data-toggle="tab" href="#form4" role="tab">Formulir 4</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="form5-tab" data-toggle="tab" href="#form5" role="tab">Formulir 5</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="form6-tab" data-toggle="tab" href="#form6" role="tab">Formulir 6</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="form1" role="tabpanel" aria-labelledby="form1-tab">
                                        @include('backend.rekam-medis.form-create.formulir1')
                                    </div>
                                    <div class="tab-pane fade" id="form2" role="tabpanel" aria-labelledby="form2-tab">
                                        @include('backend.rekam-medis.form-create.formulir2')
                                    </div>
                                    <div class="tab-pane fade" id="form3" role="tabpanel" aria-labelledby="form3-tab">
                                        @include('backend.rekam-medis.form-create.formulir3')
                                    </div>
                                    <div class="tab-pane fade" id="form4" role="tabpanel" aria-labelledby="form4-tab">
                                        @include('backend.rekam-medis.form-create.formulir4')
                                    </div>
                                    <div class="tab-pane fade" id="form5" role="tabpanel" aria-labelledby="form5-tab">
                                        @include('backend.rekam-medis.form-create.formulir5')
                                    </div>
                                    <div class="tab-pane fade" id="form6" role="tabpanel" aria-labelledby="form6-tab">
                                        @include('backend.rekam-medis.form-create.formulir6')
                                    </div>
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
