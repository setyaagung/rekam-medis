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
                                        @include('backend.rekam-medis.formulir1')
                                    </div>
                                    <div class="tab-pane fade" id="form2" role="tabpanel" aria-labelledby="form2-tab">
                                        @include('backend.rekam-medis.formulir2')
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
