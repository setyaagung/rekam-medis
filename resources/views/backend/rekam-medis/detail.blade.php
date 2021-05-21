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
                                                <th style="width: 35%">Berat Badan</th>
                                                <td>:</td>
                                                <td>
                                                    @if ($pf->berat_badan == null)
                                                        -
                                                    @else
                                                        {{ $pf->berat_badan}} kg
                                                    @endif
                                                </td>
                                                <th style="width: 35%">Tinggi Badan</th>
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
                                                <th style="width: 35%">Tekanan Darah</th>
                                                <td>:</td>
                                                <td>
                                                    @if ($pf->tekanan_darah == null)
                                                        -
                                                    @else
                                                        {{ $pf->tekanan_darah}} mmHg
                                                    @endif
                                                </td>
                                                <th style="width: 35%">Denyut Nadi</th>
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
                                                <th style="width: 35%">Pernapasan</th>
                                                <td>:</td>
                                                <td>
                                                    @if ($pf->pernapasan == null)
                                                        -
                                                    @else
                                                        {{ $pf->pernapasan}} x/menit
                                                    @endif
                                                </td>
                                                <th style="width: 35%">Suhu Badan</th>
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
                                                <th style="width: 35%">Kepala dan Leher</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pf->kepala_leher)}}</td>
                                                <th style="width: 35%">Dada</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pf->dada)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Jantung</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pf->jantung)}}</td>
                                                <th style="width: 35%">Paru - Paru</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pf->paru)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Perut</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pf->perut)}}</td>
                                                <th style="width: 35%">Hati</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pf->hati)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Limpa</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pf->limpa)}}</td>
                                                <th style="width: 35%">Anggota Gerak</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pf->gerak)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Pemeriksaan Fisik Lainnya</th>
                                                <td>:</td>
                                                <td colspan="4">{{ ucwords($pf->fisik_lain)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%" colspan="6">
                                                    <h4 class="font-weight-bold text-primary">
                                                        Pemeriksaan THT*
                                                    </h4>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Hidung</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pt->hidung)}}</td>
                                                <th style="width: 35%">Telinga</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pt->telinga)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Tenggorokan</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pt->tenggorokan)}}</td>
                                                <th style="width: 35%">Audiogram Kiri</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pt->audiogram_kiri)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Audiogram Kanan</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pt->audiogram_kanan)}}</td>
                                                <th style="width: 35%">Pemeriksaan THT Lainnya</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pt->tht_lain)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Catatan Kemampuan Pendengaran Memenuhi Standar SCTW A-1/9</th>
                                                <td>:</td>
                                                <td>{{ ucfirst($pt->catatan_pendengaran)}}</td>
                                                <th style="width: 35%">Catatan Kemampuan Pendengaran Tanpa Alat Bantu</th>
                                                <td>:</td>
                                                <td>{{ ucfirst($pt->catatan_pendengaran_tanpa_alat)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%" colspan="6">
                                                    <h4 class="font-weight-bold text-primary">
                                                        Pemeriksaan Mata*
                                                    </h4>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Jarak Pandang Mata Kanan Tanpa Kacamata (OD)</th>
                                                <td>:</td>
                                                <td>{{ ucfirst($pm->jarak_mata_kanan_tanpa_kacamata)}}</td>
                                                <th style="width: 35%">Jarak Pandang Mata Kiri Tanpa Kacamata (OS)</th>
                                                <td>:</td>
                                                <td>{{ ucfirst($pm->jarak_kiri_tanpa_kacamata)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Jarak Pandang Mata Kanan Dengan Kacamata (OD)</th>
                                                <td>:</td>
                                                <td>{{ ucfirst($pm->jarak_mata_kanan_dengan_kacamata)}}</td>
                                                <th style="width: 35%">Jarak Pandang Mata Kiri Dengan Kacamata (OS)</th>
                                                <td>:</td>
                                                <td>{{ ucfirst($pm->jarak_kiri_kiri_dengan_kacamata)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Buta Warna</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pm->buta_warna)}}</td>
                                                <th style="width: 35%">Normal Colour Test</th>
                                                <td>:</td>
                                                <td>{{ $pm->normal_colour_test}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Lapang Pandang</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pm->lapang_pandang)}}</td>
                                                <th style="width: 35%">Pemeriksaan Mata Lain - lain</th>
                                                <td>:</td>
                                                <td>{{ $pm->mata_lain}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Catatan Kemampuan Penglihatan Memenuhi Standar SCTW A-1/9</th>
                                                <td>:</td>
                                                <td>{{ ucfirst($pm->catatan_penglihatan)}}</td>
                                                <th style="width: 35%">Apakah Kacamata atau Lensa Kontak Diperlukan Untuk Standar Penglihatan ?</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pm->alat_bantu_penglihatan)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%" colspan="6">
                                                    <h4 class="font-weight-bold text-primary">
                                                        Pemeriksaan Gigi*
                                                    </h4>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Pemohon Terbebas dari Infeksi Visual Rongga Mulut atau Gusi</th>
                                                <td>:</td>
                                                <td>{{ ucfirst($pg->infeksi_visual_mulut_gusi)}}</td>
                                                <th style="width: 35%">Rencana Pencabutan</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pg->rencana_pencabutan)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Rencana Penambalan</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pg->rencana_penambalan)}}</td>
                                                <th style="width: 35%">Rencana Pembersihan Karang Gigi</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pg->rencana_pembersihan_karang_gigi)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Rencana Pembuatan Gigi Palsu</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pg->rencana_pembuatan_gigi_palsu)}}</td>
                                                <th style="width: 35%">Pemeriksaan Gigi Lainnya</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pg->gigi_lain)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%" colspan="6">
                                                    <h4 class="font-weight-bold text-primary">
                                                        Pemeriksaan Reproduksi*
                                                    </h4>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Pemeriksaan Alat Kelamin Luar</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pr->kelamin_luar)}}</td>
                                                <th style="width: 35%">Pemeriksaan Kandungan</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pr->kandungan)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%" colspan="6">
                                                    <h4 class="font-weight-bold text-primary">
                                                        Laboratorium*
                                                    </h4>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Urine - Albumin</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->urine_albumin)}}</td>
                                                <th style="width: 35%">Urine - Reduksi</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->urine_reduksi)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Urine - Bilirubin</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->urine_bilirubin)}}</td>
                                                <th style="width: 35%">Urine - Sedimen</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->urine_sedimen)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Urine - Tes Kehamilan</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->urine_kehamilan)}}</td>
                                                <th style="width: 35%">Urine - PH</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->urine_ph)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Urine - BJ(Berat Jenis)</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->urine_bj)}}</td>
                                                <th style="width: 35%">Urine - Lekosite</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->urine_lekosite)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">LED</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->led)}}</td>
                                                <th style="width: 35%">HB</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->hb)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Lekosit (Leucocyte)</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->lekosit)}}</td>
                                                <th style="width: 35%">Hitung Jenis</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->hitung_jenis)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Trombosite</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->trombosite)}}</td>
                                                <th style="width: 35%">Gula Darah</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->gula_darah)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">N</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->n)}}</td>
                                                <th style="width: 35%">PP</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->pp)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">VDRL</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->vdrl)}}</td>
                                                <th style="width: 35%">SGOT</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->sgot)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">SGPT</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->sgpt)}}</td>
                                                <th style="width: 35%">Kreatinin</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->kreatinin)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Ureum</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->ureum)}}</td>
                                                <th style="width: 35%">Kolesterol</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->kolesterol)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Trigiliserid</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->trigiliserid)}}</td>
                                                <th style="width: 35%">Uric Acid</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->uric_acid)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">HbsAg</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->hbsag)}}</td>
                                                <th style="width: 35%">HbeAg</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->hbeag)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Temuan Laboratorium</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->temuan_lab)}}</td>
                                                <th style="width: 35%">Gambarkan Kelainan</th>
                                                <td>:</td>
                                                <td>{{ ucwords($lab->gambar_kelainan)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%" colspan="6">
                                                    <h4 class="font-weight-bold text-primary">
                                                        Pemeriksaan Umum*
                                                    </h4>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Pemeriksaan Spirometri</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pu->spirometri)}}</td>
                                                <th style="width: 35%">Istirahat</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pu->istirahat)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">MST</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pu->mst)}}</td>
                                                <th style="width: 35%">Thorax</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pu->thorax)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Tulang Panjang (Hanya Untuk Penyelam dan Rescue Tim)</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pu->tulang_panjang)}}</td>
                                                <th style="width: 35%">Pemeriksaan Psikologis</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pu->psikologis)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Tes Toleransi Oksigen</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pu->toleransi_oksigen)}}</td>
                                                <th style="width: 35%">Apakah Cara Bicara Tidak Terganggu Untuk Komunikasi Suara Normal</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pu->cara_bicara_tidak_terganggu)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Pemohon Kemungkinan Menderita Penyakit Akibat Pekerjaan Di Laut atau Penyakit yang Membahayakan Orang Lain Di Kapal</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pu->menderita_penyakit)}}</td>
                                                <th style="width: 35%">Deskripsi</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pu->deskripsi_menderita_penyakit)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Mengonsumsi Obat - Obatan tanpa Resep Dokter atau dengan Resep Dokter</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pu->mengonsumsi_obat)}}</td>
                                                <th style="width: 35%">Deskripsi</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pu->deskripsi_tanpa_obat)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Sehat Untuk Melaksanakan Tugas Jaga</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pu->sehat_untuk_jaga)}}</td>
                                                <th style="width: 35%">Deskripsi</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pu->deskripsi_sehat)}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Catatan Tidak Memiliki Keterbatasan dan Masalah Kesehatan</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pu->catatan_kesehatan)}}</td>
                                                <th style="width: 35%">Kesimpulan</th>
                                                <td>:</td>
                                                <td>{{ $pu->kesimpulan}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width: 35%">Remarks</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pu->remarks)}}</td>
                                                <th style="width: 35%">Catatan Hasil Rujukan</th>
                                                <td>:</td>
                                                <td>{{ ucwords($pu->hasil_rujukan)}}</td>
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
