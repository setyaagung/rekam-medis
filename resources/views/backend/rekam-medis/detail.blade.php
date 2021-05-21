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
                                Detail Data Rekam Medis
                            </h3>
                            <a href="#" class="btn btn-danger btn-sm float-right"><i class="fas fa-file-pdf"></i> Print PDF</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <th>Nomor Catatan Rekam Medis</th>
                                                    <td>:</td>
                                                    <td>{{ $rm->no_rm}}</td>
                                                    <th>Taruna</th>
                                                    <td>:</td>
                                                    <td>{{ $rm->taruna->nama_taruna }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Dokter</th>
                                                    <td>:</td>
                                                    <td>{{ $rm->dokter->nama_dokter }}</td>
                                                    <th>Sertifikasi</th>
                                                    <td>:</td>
                                                    <td>{{ strtoupper($rm->sertifikat->nama_sertifikat)}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Jabatan</th>
                                                    <td>:</td>
                                                    <td>{{ strtoupper($rm->jabatan->nama_jabatan) }}</td>
                                                    <th>Tanggal Ujian</th>
                                                    <td>:</td>
                                                    <td>{{ \Carbon\Carbon::parse($rm->tanggal_ujian)->isoFormat('D MMMM Y')}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Masa Berlaku</th>
                                                    <td>:</td>
                                                    <td>{{ \Carbon\Carbon::parse($rm->masa_berlaku)->isoFormat('D MMMM Y')}}</td>
                                                    <th>Anamnese</th>
                                                    <td>:</td>
                                                    <td>{{ $rm->anamnese}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <h4 class="font-weight-bold text-primary ml-1">
                                Pemeriksaan Fisik*
                            </h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-sm">
                                        <tbody>
                                            <tr>
                                                <th>Berat Badan</th>
                                                <td>:</td>
                                                <td>
                                                    @if ($pf->berat_badan == null)
                                                        -
                                                    @else
                                                        {{ $pf->berat_badan}} kg
                                                    @endif
                                                </td>
                                                <th>Tinggi Badan</th>
                                                <td>:</td>
                                                <td>
                                                    @if ($pf->tinggi_badan == null)
                                                        -
                                                    @else
                                                        {{ $pf->tinggi_badan}} cm
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Tekanan Darah</th>
                                                <td>:</td>
                                                <td>
                                                    @if ($pf->tekanan_darah == null)
                                                        -
                                                    @else
                                                        {{ $pf->tekanan_darah}} mmHg
                                                    @endif
                                                </td>
                                                <th>Denyut Nadi</th>
                                                <td>:</td>
                                                <td>
                                                    @if ($pf->denyut_nadi == null)
                                                        -
                                                    @else
                                                        {{ $pf->denyut_nadi}} x/menit
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Pernapasan</th>
                                                <td>:</td>
                                                <td>
                                                    @if ($pf->pernapasan == null)
                                                        -
                                                    @else
                                                        {{ $pf->pernapasan}} x/menit
                                                    @endif
                                                </td>
                                                <th>Suhu Badan</th>
                                                <td>:</td>
                                                <td>
                                                    @if ($pf->suhu_badan == null)
                                                        -
                                                    @else
                                                        {{ $pf->suhu_badan}} C
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Kepala dan Leher</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pf->kepala_leher)}}</td>
                                                <th>Dada</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pf->dada)}}</td>
                                            </tr>
                                            <tr>
                                                <th>Jantung</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pf->jantung)}}</td>
                                                <th>Paru - Paru</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pf->paru)}}</td>
                                            </tr>
                                            <tr>
                                                <th>Perut</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pf->perut)}}</td>
                                                <th>Hati</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pf->hati)}}</td>
                                            </tr>
                                            <tr>
                                                <th>Limpa</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pf->limpa)}}</td>
                                                <th>Anggota Gerak</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pf->gerak)}}</td>
                                            </tr>
                                            <tr>
                                                <th>Pemeriksaan Fisik Lainnya</th>
                                                <td>:</td>
                                                <td colspan="4">{{ ucwords($pf->fisik_lain)}}</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">
                                                    <h4 class="font-weight-bold text-primary">
                                                        Pemeriksaan THT*
                                                    </h4>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Hidung</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pt->hidung)}}</td>
                                                <th>Telinga</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pt->telinga)}}</td>
                                            </tr>
                                            <tr>
                                                <th>Tenggorokan</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pt->tenggorokan)}}</td>
                                                <th>Audiogram Kiri</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pt->audiogram_kiri)}}</td>
                                            </tr>
                                            <tr>
                                                <th>Audiogram Kanan</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pt->audiogram_kanan)}}</td>
                                                <th>Pemeriksaan THT Lainnya</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pt->tht_lain)}}</td>
                                            </tr>
                                            <tr>
                                                <th>Pendengaran Memenuhi Standar SCTW A-1/9</th>
                                                <td>:</td>
                                                <td>{{ ucfirst($pt->catatan_pendengaran)}}</td>
                                                <th>Pendengaran Tanpa Alat Bantu</th>
                                                <td>:</td>
                                                <td>{{ ucfirst($pt->catatan_pendengaran_tanpa_alat)}}</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">
                                                    <h4 class="font-weight-bold text-primary">
                                                        Pemeriksaan Mata*
                                                    </h4>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Jarak Pandang Mata Kanan Tanpa Kacamata (OD)</th>
                                                <td>:</td>
                                                <td>{{ ucfirst($pm->jarak_mata_kanan_tanpa_kacamata)}}</td>
                                                <th>Jarak Pandang Mata Kiri Tanpa Kacamata (OS)</th>
                                                <td>:</td>
                                                <td>{{ ucfirst($pm->jarak_kiri_tanpa_kacamata)}}</td>
                                            </tr>
                                            <tr>
                                                <th>Jarak Pandang Mata Kanan Dengan Kacamata (OD)</th>
                                                <td>:</td>
                                                <td>{{ ucfirst($pm->jarak_mata_kanan_dengan_kacamata)}}</td>
                                                <th>Jarak Pandang Mata Kiri Dengan Kacamata (OS)</th>
                                                <td>:</td>
                                                <td>{{ ucfirst($pm->jarak_kiri_kiri_dengan_kacamata)}}</td>
                                            </tr>
                                            <tr>
                                                <th>Buta Warna</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pm->buta_warna)}}</td>
                                                <th>Normal Colour Test</th>
                                                <td>:</td>
                                                <td>{{ $pm->normal_colour_test}}</td>
                                            </tr>
                                            <tr>
                                                <th>Lapang Pandang</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pm->lapang_pandang)}}</td>
                                                <th>Pemeriksaan Mata Lain - lain</th>
                                                <td>:</td>
                                                <td>{{ $pm->mata_lain}}</td>
                                            </tr>
                                            <tr>
                                                <th>Penglihatan Memenuhi Standar SCTW A-1/9</th>
                                                <td>:</td>
                                                <td>{{ ucfirst($pm->catatan_penglihatan)}}</td>
                                                <th>Memerlukan Kacamata atau Lensa Kontak</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pm->alat_bantu_penglihatan)}}</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">
                                                    <h4 class="font-weight-bold text-primary">
                                                        Pemeriksaan Gigi*
                                                    </h4>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Infeksi Visual Rongga Mulut atau Gusi</th>
                                                <td>:</td>
                                                <td>{{ ucfirst($pg->infeksi_visual_mulut_gusi)}}</td>
                                                <th>Rencana Pencabutan</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pg->rencana_pencabutan)}}</td>
                                            </tr>
                                            <tr>
                                                <th>Rencana Penambalan</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pg->rencana_penambalan)}}</td>
                                                <th>Rencana Pembersihan Karang Gigi</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pg->rencana_pembersihan_karang_gigi)}}</td>
                                            </tr>
                                            <tr>
                                                <th>Rencana Pembuatan Gigi Palsu</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pg->rencana_pembuatan_gigi_palsu)}}</td>
                                                <th>Pemeriksaan Gigi Lainnya</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pg->gigi_lain)}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="float-right">
                                <a href="{{ route('rekam-medis.index')}}" class="btn btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
