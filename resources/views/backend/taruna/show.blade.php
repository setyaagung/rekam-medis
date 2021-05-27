@extends('layouts.back-main')

@section('title')
    Riwayat Periksa dan Rekam Medis
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">

    </div>
    <!-- /.content-header -->
    <section class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">RIWAYAT PERIKSA DAN REKAM MEDIS</h3>
                            <div class="float-right">
                                <a href="{{ route('taruna.index')}}" class="btn btn-sm btn-secondary">Kembali</a>
                                <a href="{{ route('taruna.cetak',$taruna->id_taruna)}}" class="btn btn-danger btn-sm" target="_blank"><i class="fas fa-file-pdf"></i> Print PDF</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if ($rm)
                                @php
                                    $pf = \App\Model\PemeriksaanFisik::where('id_rm', $rm->id_rm)->get()->first();
                                    $pt = \App\Model\PemeriksaanTht::where('id_rm', $rm->id_rm)->get()->first();
                                    $pm = \App\Model\PemeriksaanMata::where('id_rm', $rm->id_rm)->get()->first();
                                    $pg = \App\Model\PemeriksaanGigi::where('id_rm', $rm->id_rm)->get()->first();
                                    $pr = \App\Model\PemeriksaanReproduksi::where('id_rm', $rm->id_rm)->get()->first();
                                    $lab = \App\Model\Laboratorium::where('id_rm', $rm->id_rm)->get()->first();
                                    $pu = \App\Model\PemeriksaanUmum::where('id_rm', $rm->id_rm)->get()->first();
                                @endphp
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

                                                        <th>Anamnese</th>
                                                        <td>:</td>
                                                        <td>{{ $rm->anamnese}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-bold text-primary">
                                            Pemeriksaan Fisik*
                                        </h4>
                                        <table class="table table-sm">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 32%">Berat Badan</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">
                                                        @if ($pf->berat_badan == null)
                                                            -
                                                        @else
                                                            {{ $pf->berat_badan}} kg
                                                        @endif
                                                    </td>
                                                    <th style="width: 32%">Tinggi Badan</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">
                                                        @if ($pf->tinggi_badan == null)
                                                            -
                                                        @else
                                                            {{ $pf->tinggi_badan}} cm
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Tekanan Darah</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">
                                                        @if ($pf->tekanan_darah == null)
                                                            -
                                                        @else
                                                            {{ $pf->tekanan_darah}} mmHg
                                                        @endif
                                                    </td>
                                                    <th style="width: 32%">Denyut Nadi</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">
                                                        @if ($pf->denyut_nadi == null)
                                                            -
                                                        @else
                                                            {{ $pf->denyut_nadi}} x/menit
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Pernapasan</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">
                                                        @if ($pf->pernapasan == null)
                                                            -
                                                        @else
                                                            {{ $pf->pernapasan}} x/menit
                                                        @endif
                                                    </td>
                                                    <th style="width: 32%">Suhu Badan</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">
                                                        @if ($pf->suhu_badan == null)
                                                            -
                                                        @else
                                                            {{ $pf->suhu_badan}} C
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Kepala dan Leher</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pf->kepala_leher)}}</td>
                                                    <th style="width: 32%">Dada</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pf->dada)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Jantung</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pf->jantung)}}</td>
                                                    <th style="width: 32%">Paru - Paru</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pf->paru)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Perut</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pf->perut)}}</td>
                                                    <th style="width: 32%">Hati</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pf->hati)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Limpa</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pf->limpa)}}</td>
                                                    <th style="width: 32%">Anggota Gerak</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pf->gerak)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Pemeriksaan Fisik Lainnya</th>
                                                    <td style="width: 1%">:</td>
                                                    <td colspan="4" style="width: 17%">{{ ucwords($pf->fisik_lain)}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-bold text-primary">
                                            Pemeriksaan THT*
                                        </h4>
                                        <table class="table table-sm">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 32%">Hidung</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pt->hidung)}}</td>
                                                    <th style="width: 32%">Telinga</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pt->telinga)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Tenggorokan</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pt->tenggorokan)}}</td>
                                                    <th style="width: 32%">Audiogram Kiri</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pt->audiogram_kiri)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Audiogram Kanan</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pt->audiogram_kanan)}}</td>
                                                    <th style="width: 32%">Pemeriksaan THT Lainnya</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pt->tht_lain)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Catatan Kemampuan Pendengaran Memenuhi Standar SCTW A-1/9</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucfirst($pt->catatan_pendengaran)}}</td>
                                                    <th style="width: 32%">Catatan Kemampuan Pendengaran Tanpa Alat Bantu</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucfirst($pt->catatan_pendengaran_tanpa_alat)}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-bold text-primary">
                                            Pemeriksaan Mata*
                                        </h4>
                                        <table class="table table-sm">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 32%">Jarak Pandang Mata Kanan Tanpa Kacamata (OD)</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucfirst($pm->jarak_mata_kanan_tanpa_kacamata)}}</td>
                                                    <th style="width: 32%">Jarak Pandang Mata Kiri Tanpa Kacamata (OS)</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucfirst($pm->jarak_kiri_tanpa_kacamata)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Jarak Pandang Mata Kanan Dengan Kacamata (OD)</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucfirst($pm->jarak_mata_kanan_dengan_kacamata)}}</td>
                                                    <th style="width: 32%">Jarak Pandang Mata Kiri Dengan Kacamata (OS)</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucfirst($pm->jarak_kiri_kiri_dengan_kacamata)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Buta Warna</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pm->buta_warna)}}</td>
                                                    <th style="width: 32%">Normal Colour Test</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ $pm->normal_colour_test}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Lapang Pandang</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pm->lapang_pandang)}}</td>
                                                    <th style="width: 32%">Pemeriksaan Mata Lain - lain</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ $pm->mata_lain}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Catatan Kemampuan Penglihatan Memenuhi Standar SCTW A-1/9</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucfirst($pm->catatan_penglihatan)}}</td>
                                                    <th style="width: 32%">Apakah Kacamata atau Lensa Kontak Diperlukan Untuk Standar Penglihatan ?</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pm->alat_bantu_penglihatan)}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-bold text-primary">
                                            Pemeriksaan Gigi*
                                        </h4>
                                        <table class="table table-sm">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 32%">Pemohon Terbebas dari Infeksi Visual Rongga Mulut atau Gusi</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucfirst($pg->infeksi_visual_mulut_gusi)}}</td>
                                                    <th style="width: 32%">Rencana Pencabutan</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pg->rencana_pencabutan)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Rencana Penambalan</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pg->rencana_penambalan)}}</td>
                                                    <th style="width: 32%">Rencana Pembersihan Karang Gigi</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pg->rencana_pembersihan_karang_gigi)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Rencana Pembuatan Gigi Palsu</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pg->rencana_pembuatan_gigi_palsu)}}</td>
                                                    <th style="width: 32%">Pemeriksaan Gigi Lainnya</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pg->gigi_lain)}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-bold text-primary">
                                            Pemeriksaan Reproduksi*
                                        </h4>
                                        <table class="table table-sm">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 32%">Pemeriksaan Alat Kelamin Luar</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pr->kelamin_luar)}}</td>
                                                    <th style="width: 32%">Pemeriksaan Kandungan</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pr->kandungan)}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-bold text-primary">
                                            Laboratorium*
                                        </h4>
                                        <table class="table table-sm">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 32%">Urine - Albumin</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->urine_albumin)}}</td>
                                                    <th style="width: 32%">Urine - Reduksi</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->urine_reduksi)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Urine - Bilirubin</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->urine_bilirubin)}}</td>
                                                    <th style="width: 32%">Urine - Sedimen</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->urine_sedimen)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Urine - Tes Kehamilan</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->urine_kehamilan)}}</td>
                                                    <th style="width: 32%">Urine - PH</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->urine_ph)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Urine - BJ(Berat Jenis)</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->urine_bj)}}</td>
                                                    <th style="width: 32%">Urine - Lekosite</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->urine_lekosite)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">LED</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->led)}}</td>
                                                    <th style="width: 32%">HB</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->hb)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Lekosit (Leucocyte)</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->lekosit)}}</td>
                                                    <th style="width: 32%">Hitung Jenis</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->hitung_jenis)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Trombosite</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->trombosite)}}</td>
                                                    <th style="width: 32%">Gula Darah</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->gula_darah)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">N</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->n)}}</td>
                                                    <th style="width: 32%">PP</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->pp)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">VDRL</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->vdrl)}}</td>
                                                    <th style="width: 32%">SGOT</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->sgot)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">SGPT</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->sgpt)}}</td>
                                                    <th style="width: 32%">Kreatinin</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->kreatinin)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Ureum</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->ureum)}}</td>
                                                    <th style="width: 32%">Kolesterol</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->kolesterol)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Trigiliserid</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->trigiliserid)}}</td>
                                                    <th style="width: 32%">Uric Acid</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->uric_acid)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">HbsAg</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->hbsag)}}</td>
                                                    <th style="width: 32%">HbeAg</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->hbeag)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Temuan Laboratorium</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->temuan_lab)}}</td>
                                                    <th style="width: 32%">Gambarkan Kelainan</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($lab->gambar_kelainan)}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-bold text-primary">
                                            Pemeriksaan Umum*
                                        </h4>
                                        <table class="table table-sm">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 32%">Pemeriksaan Spirometri</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pu->spirometri)}}</td>
                                                    <th style="width: 32%">Istirahat</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pu->istirahat)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">MST</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pu->mst)}}</td>
                                                    <th style="width: 32%">Thorax</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pu->thorax)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Tulang Panjang (Hanya Untuk Penyelam dan Rescue Tim)</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pu->tulang_panjang)}}</td>
                                                    <th style="width: 32%">Pemeriksaan Psikologis</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pu->psikologis)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Tes Toleransi Oksigen</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pu->toleransi_oksigen)}}</td>
                                                    <th style="width: 32%">Apakah Cara Bicara Tidak Terganggu Untuk Komunikasi Suara Normal</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pu->cara_bicara_tidak_terganggu)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Pemohon Kemungkinan Menderita Penyakit Akibat Pekerjaan Di Laut atau Penyakit yang Membahayakan Orang Lain Di Kapal</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pu->menderita_penyakit)}}</td>
                                                    <th style="width: 32%">Deskripsi</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pu->deskripsi_menderita_penyakit)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Mengonsumsi Obat - Obatan tanpa Resep Dokter atau dengan Resep Dokter</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pu->mengonsumsi_obat)}}</td>
                                                    <th style="width: 32%">Deskripsi</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pu->deskripsi_tanpa_obat)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Sehat Untuk Melaksanakan Tugas Jaga</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pu->sehat_untuk_jaga)}}</td>
                                                    <th style="width: 32%">Deskripsi</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pu->deskripsi_sehat)}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Catatan Tidak Memiliki Keterbatasan dan Masalah Kesehatan</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pu->catatan_kesehatan)}}</td>
                                                    <th style="width: 32%">Kesimpulan</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ $pu->kesimpulan}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 32%">Remarks</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pu->remarks)}}</td>
                                                    <th style="width: 32%">Catatan Hasil Rujukan</th>
                                                    <td style="width: 1%">:</td>
                                                    <td style="width: 17%">{{ ucwords($pu->hasil_rujukan)}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endif
                            <table id="example1" class="table table-sm table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>TANGGAL PERIKSA</th>
                                        <th>DOKTER</th>
                                        <th>KELUHAN</th>
                                        <th>TINDAKAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_riwayat as $riwayat)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ \Carbon\Carbon::parse($riwayat->tanggal_periksa)->isoFormat('D MMMM Y')}}</td>
                                            <td>{{ $riwayat->dokter->nama_dokter}}</td>
                                            <td>{{ $riwayat->keluhan}}</td>
                                            <td>{{ $riwayat->tindakan}}</td>
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
