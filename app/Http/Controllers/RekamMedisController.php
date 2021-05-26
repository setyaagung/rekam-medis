<?php

namespace App\Http\Controllers;

use App\Model\Dokter;
use App\Model\Jabatan;
use App\Model\Laboratorium;
use App\Model\PemeriksaanFisik;
use App\Model\PemeriksaanGigi;
use App\Model\PemeriksaanMata;
use App\Model\PemeriksaanReproduksi;
use App\Model\PemeriksaanTht;
use App\Model\PemeriksaanUmum;
use App\Model\RekamMedis;
use App\Model\Sertifikat;
use App\Model\Taruna;
use Illuminate\Http\Request;
use PDF;

class RekamMedisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rms = RekamMedis::orderBy('created_at', 'DESC')->get();
        return view('backend.rekam-medis.index', compact('rms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarunas = Taruna::orderBy('nama_taruna', 'ASC')->get();
        $dokters = Dokter::orderBy('nama_dokter', 'ASC')->get();
        $sertifikats = Sertifikat::orderBy('nama_sertifikat', 'ASC')->get();
        $jabatans = Jabatan::orderBy('nama_jabatan', 'ASC')->get();
        return view('backend.rekam-medis.create', compact('tarunas', 'dokters', 'sertifikats', 'jabatans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'id_taruna.unique' => 'Taruna yang dipilih sudah pernah melakukan tes medis',
        ];
        $request->validate([
            'id_taruna' => 'required|unique:rekam_medis'
        ], $message);
        $data = $request->all();
        $rm = RekamMedis::create($data);
        PemeriksaanFisik::create(
            [
                'id_rm' => $rm->id_rm,
                'berat_badan' => $request->input('berat_badan'),
                'tinggi_badan' => $request->input('tinggi_badan'),
                'tekanan_darah' => $request->input('tekanan_darah'),
                'denyut_nadi' => $request->input('denyut_nadi'),
                'pernapasan' => $request->input('pernapasan'),
                'kepala_leher' => $request->input('kepala_leher'),
                'dada' => $request->input('dada'),
                'jantung' => $request->input('jantung'),
                'paru' => $request->input('paru'),
                'perut' => $request->input('perut'),
                'hati' => $request->input('hati'),
                'limpa' => $request->input('limpa'),
                'gerak' => $request->input('gerak'),
                'fisik_lain' => $request->input('fisik_lain')
            ]
        );
        PemeriksaanTht::create([
            'id_rm' => $rm->id_rm,
            'hidung' => $request->input('hidung'),
            'telinga' => $request->input('telinga'),
            'tenggorokan' => $request->input('tenggorokan'),
            'audiogram_kiri' => $request->input('audiogram_kiri'),
            'audiogram_kanan' => $request->input('audiogram_kanan'),
            'tht_lain' => $request->input('tht_lain'),
            'catatan_pendengaran' => $request->input('catatan_pendengaran'),
            'catatan_pendengaran_tanpa_alat' => $request->input('catatan_pendengaran_tanpa_alat')
        ]);
        PemeriksaanMata::create([
            'id_rm' => $rm->id_rm,
            'jarak_mata_kanan_tanpa_kacamata' => $request->input('jarak_mata_kanan_tanpa_kacamata'),
            'jarak_mata_kiri_tanpa_kacamata' => $request->input('jarak_mata_kiri_tanpa_kacamata'),
            'jarak_mata_kanan_dengan_kacamata' => $request->input('jarak_mata_kanan_dengan_kacamata'),
            'jarak_mata_kiri_dengan_kacamata' => $request->input('jarak_mata_kiri_dengan_kacamata'),
            'buta_warna' => $request->input('buta_warna'),
            'normal_colour_test' => $request->input('normal_colour_test'),
            'lapang_pandang' => $request->input('lapang_pandang'),
            'mata_lain' => $request->input('mata_lain'),
            'catatan_penglihatan' => $request->input('catatan_penglihatan'),
            'alat_bantu_penglihatan' => $request->input('alat_bantu_penglihatan')
        ]);
        PemeriksaanGigi::create([
            'id_rm' => $rm->id_rm,
            'infeksi_visual_mulut_gusi' => $request->input('infeksi_visual_mulut_gusi'),
            'rencana_pencabutan' => $request->input('rencana_pencabutan'),
            'rencana_penambalan' => $request->input('rencana_penambalan'),
            'rencana_pembersihan_karang_gigi' => $request->input('rencana_pembersihan_karang_gigi'),
            'rencana_pembuatan_gigi_palsu' => $request->input('rencana_pembuatan_gigi_palsun'),
            'gigi_lain' => $request->input('gigi_lain')
        ]);
        PemeriksaanReproduksi::create([
            'id_rm' => $rm->id_rm,
            'kelamin_luar' => $request->input('kelamin_luar'),
            'kandungan' => $request->input('kandungan')
        ]);
        Laboratorium::create([
            'id_rm' => $rm->id_rm,
            'urine_albumin' => $request->input('urine_albumin'),
            'urine_reduksi' => $request->input('urine_reduksi'),
            'urine_bilirubin' => $request->input('urine_bilirubin'),
            'urine_sedimen' => $request->input('urine_sedimen'),
            'urine_kehamilan' => $request->input('urine_kehamilan'),
            'urine_ph' => $request->input('urine_ph'),
            'urine_bj' => $request->input('urine_bj'),
            'urine_lekosite' => $request->input('urine_lekosite'),
            'led' => $request->input('led'),
            'hb' => $request->input('hb'),
            'lekosit' => $request->input('lekosit'),
            'hitung_jenis' => $request->input('hitung_jenis'),
            'trombosite' => $request->input('trombosite'),
            'gula_darah' => $request->input('gula_darah'),
            'n' => $request->input('n'),
            'pp' => $request->input('pp'),
            'vdrl' => $request->input('vdrl'),
            'sgot' => $request->input('sgot'),
            'sgpt' => $request->input('sgpt'),
            'kreatinin' => $request->input('kreatinin'),
            'ureum' => $request->input('ureum'),
            'kolesterol' => $request->input('kolesterol'),
            'trigiliserid' => $request->input('trigiliserid'),
            'uric_acid' => $request->input('uric_acid'),
            'hbsag' => $request->input('hbsag'),
            'hbeag' => $request->input('hbeag'),
            'temuan_lab' => $request->input('temuan_lab'),
            'gambar_kelainan' => $request->input('gambar_kelainan')
        ]);
        PemeriksaanUmum::create([
            'id_rm' => $rm->id_rm,
            'spirometri' => $request->input('spirometri'),
            'istirahat' => $request->input('istirahat'),
            'mst' => $request->input('mst'),
            'thorax' => $request->input('thorax'),
            'tulang_panjang' => $request->input('tulang_panjang'),
            'psikologis' => $request->input('psikologis'),
            'toleransi_oksigen' => $request->input('gtoleransi_oksigen'),
            'cara_bicara_tidak_terganggu' => $request->input('cara_bicara_tidak_terganggu'),
            'menderita_penyakit' => $request->input('menderita_penyakit'),
            'deskripsi_menderita_penyakit' => $request->input('deskripsi_menderita_penyakit'),
            'mengonsumsi_obat' => $request->input('mengonsumsi_obat'),
            'deskripsi_tanpa_obat' => $request->input('deskripsi_tanpa_obat'),
            'sehat_untuk_jaga' => $request->input('sehat_untuk_jaga'),
            'deskripsi_sehat' => $request->input('deskripsi_sehat'),
            'catatan_kesehatan' => $request->input('catatan_kesehatan'),
            'kesimpulan' => $request->input('kesimpulan'),
            'remarks' => $request->input('remarks'),
            'hasil_rujukan' => $request->input('hasil_rujukan')
        ]);
        return redirect()->route('rekam-medis.create')->with('create', 'Data rekam medis berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rm = RekamMedis::findOrFail($id);
        $pf = PemeriksaanFisik::where('id_rm', $rm->id_rm)->get()->first();
        $pt = PemeriksaanTht::where('id_rm', $rm->id_rm)->get()->first();
        $pm = PemeriksaanMata::where('id_rm', $rm->id_rm)->get()->first();
        $pg = PemeriksaanGigi::where('id_rm', $rm->id_rm)->get()->first();
        $pr = PemeriksaanReproduksi::where('id_rm', $rm->id_rm)->get()->first();
        $lab = Laboratorium::where('id_rm', $rm->id_rm)->get()->first();
        $pu = PemeriksaanUmum::where('id_rm', $rm->id_rm)->get()->first();
        return view('backend.rekam-medis.detail', compact('rm', 'pf', 'pt', 'pm', 'pg', 'pr', 'lab', 'pu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rm = RekamMedis::findOrFail($id);
        $pf = PemeriksaanFisik::where('id_rm', $rm->id_rm)->get()->first();
        $pt = PemeriksaanTht::where('id_rm', $rm->id_rm)->get()->first();
        $pm = PemeriksaanMata::where('id_rm', $rm->id_rm)->get()->first();
        $pg = PemeriksaanGigi::where('id_rm', $rm->id_rm)->get()->first();
        $pr = PemeriksaanReproduksi::where('id_rm', $rm->id_rm)->get()->first();
        $lab = Laboratorium::where('id_rm', $rm->id_rm)->get()->first();
        $pu = PemeriksaanUmum::where('id_rm', $rm->id_rm)->get()->first();
        $tarunas = Taruna::orderBy('nama_taruna', 'ASC')->get();
        $dokters = Dokter::orderBy('nama_dokter', 'ASC')->get();
        $sertifikats = Sertifikat::orderBy('nama_sertifikat', 'ASC')->get();
        $jabatans = Jabatan::orderBy('nama_jabatan', 'ASC')->get();
        return view('backend.rekam-medis.edit', compact('tarunas', 'dokters', 'sertifikats', 'jabatans', 'rm', 'pf', 'pt', 'pm', 'pg', 'pr', 'lab', 'pu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rm = RekamMedis::findOrFail($id);
        $pf = PemeriksaanFisik::where('id_rm', $rm->id_rm)->get()->first();
        $pt = PemeriksaanTht::where('id_rm', $rm->id_rm)->get()->first();
        $pm = PemeriksaanMata::where('id_rm', $rm->id_rm)->get()->first();
        $pg = PemeriksaanGigi::where('id_rm', $rm->id_rm)->get()->first();
        $pr = PemeriksaanReproduksi::where('id_rm', $rm->id_rm)->get()->first();
        $lab = Laboratorium::where('id_rm', $rm->id_rm)->get()->first();
        $pu = PemeriksaanUmum::where('id_rm', $rm->id_rm)->get()->first();

        $message = [
            'id_taruna.unique' => 'Taruna yang dipilih sudah pernah melakukan tes medis',
        ];
        $request->validate([
            'id_taruna' => 'required|unique:rekam_medis,id_taruna,' . $id . ',id_rm',
        ], $message);
        $data = $request->all();
        $rm->update($data);
        $pf->update(
            [
                'id_rm' => $rm->id_rm,
                'berat_badan' => $request->input('berat_badan'),
                'tinggi_badan' => $request->input('tinggi_badan'),
                'tekanan_darah' => $request->input('tekanan_darah'),
                'denyut_nadi' => $request->input('denyut_nadi'),
                'pernapasan' => $request->input('pernapasan'),
                'kepala_leher' => $request->input('kepala_leher'),
                'dada' => $request->input('dada'),
                'jantung' => $request->input('jantung'),
                'paru' => $request->input('paru'),
                'perut' => $request->input('perut'),
                'hati' => $request->input('hati'),
                'limpa' => $request->input('limpa'),
                'gerak' => $request->input('gerak'),
                'fisik_lain' => $request->input('fisik_lain')
            ]
        );
        $pt->update([
            'id_rm' => $rm->id_rm,
            'hidung' => $request->input('hidung'),
            'telinga' => $request->input('telinga'),
            'tenggorokan' => $request->input('tenggorokan'),
            'audiogram_kiri' => $request->input('audiogram_kiri'),
            'audiogram_kanan' => $request->input('audiogram_kanan'),
            'tht_lain' => $request->input('tht_lain'),
            'catatan_pendengaran' => $request->input('catatan_pendengaran'),
            'catatan_pendengaran_tanpa_alat' => $request->input('catatan_pendengaran_tanpa_alat')
        ]);
        $pm->update([
            'id_rm' => $rm->id_rm,
            'jarak_mata_kanan_tanpa_kacamata' => $request->input('jarak_mata_kanan_tanpa_kacamata'),
            'jarak_mata_kiri_tanpa_kacamata' => $request->input('jarak_mata_kiri_tanpa_kacamata'),
            'jarak_mata_kanan_dengan_kacamata' => $request->input('jarak_mata_kanan_dengan_kacamata'),
            'jarak_mata_kiri_dengan_kacamata' => $request->input('jarak_mata_kiri_dengan_kacamata'),
            'buta_warna' => $request->input('buta_warna'),
            'normal_colour_test' => $request->input('normal_colour_test'),
            'lapang_pandang' => $request->input('lapang_pandang'),
            'mata_lain' => $request->input('mata_lain'),
            'catatan_penglihatan' => $request->input('catatan_penglihatan'),
            'alat_bantu_penglihatan' => $request->input('alat_bantu_penglihatan')
        ]);
        $pg->update([
            'id_rm' => $rm->id_rm,
            'infeksi_visual_mulut_gusi' => $request->input('infeksi_visual_mulut_gusi'),
            'rencana_pencabutan' => $request->input('rencana_pencabutan'),
            'rencana_penambalan' => $request->input('rencana_penambalan'),
            'rencana_pembersihan_karang_gigi' => $request->input('rencana_pembersihan_karang_gigi'),
            'rencana_pembuatan_gigi_palsu' => $request->input('rencana_pembuatan_gigi_palsun'),
            'gigi_lain' => $request->input('gigi_lain')
        ]);
        $pr->update([
            'id_rm' => $rm->id_rm,
            'kelamin_luar' => $request->input('kelamin_luar'),
            'kandungan' => $request->input('kandungan')
        ]);
        $lab->update([
            'id_rm' => $rm->id_rm,
            'urine_albumin' => $request->input('urine_albumin'),
            'urine_reduksi' => $request->input('urine_reduksi'),
            'urine_bilirubin' => $request->input('urine_bilirubin'),
            'urine_sedimen' => $request->input('urine_sedimen'),
            'urine_kehamilan' => $request->input('urine_kehamilan'),
            'urine_ph' => $request->input('urine_ph'),
            'urine_bj' => $request->input('urine_bj'),
            'urine_lekosite' => $request->input('urine_lekosite'),
            'led' => $request->input('led'),
            'hb' => $request->input('hb'),
            'lekosit' => $request->input('lekosit'),
            'hitung_jenis' => $request->input('hitung_jenis'),
            'trombosite' => $request->input('trombosite'),
            'gula_darah' => $request->input('gula_darah'),
            'n' => $request->input('n'),
            'pp' => $request->input('pp'),
            'vdrl' => $request->input('vdrl'),
            'sgot' => $request->input('sgot'),
            'sgpt' => $request->input('sgpt'),
            'kreatinin' => $request->input('kreatinin'),
            'ureum' => $request->input('ureum'),
            'kolesterol' => $request->input('kolesterol'),
            'trigiliserid' => $request->input('trigiliserid'),
            'uric_acid' => $request->input('uric_acid'),
            'hbsag' => $request->input('hbsag'),
            'hbeag' => $request->input('hbeag'),
            'temuan_lab' => $request->input('temuan_lab'),
            'gambar_kelainan' => $request->input('gambar_kelainan')
        ]);
        $pu->update([
            'id_rm' => $rm->id_rm,
            'spirometri' => $request->input('spirometri'),
            'istirahat' => $request->input('istirahat'),
            'mst' => $request->input('mst'),
            'thorax' => $request->input('thorax'),
            'tulang_panjang' => $request->input('tulang_panjang'),
            'psikologis' => $request->input('psikologis'),
            'toleransi_oksigen' => $request->input('gtoleransi_oksigen'),
            'cara_bicara_tidak_terganggu' => $request->input('cara_bicara_tidak_terganggu'),
            'menderita_penyakit' => $request->input('menderita_penyakit'),
            'deskripsi_menderita_penyakit' => $request->input('deskripsi_menderita_penyakit'),
            'mengonsumsi_obat' => $request->input('mengonsumsi_obat'),
            'deskripsi_tanpa_obat' => $request->input('deskripsi_tanpa_obat'),
            'sehat_untuk_jaga' => $request->input('sehat_untuk_jaga'),
            'deskripsi_sehat' => $request->input('deskripsi_sehat'),
            'catatan_kesehatan' => $request->input('catatan_kesehatan'),
            'kesimpulan' => $request->input('kesimpulan'),
            'remarks' => $request->input('remarks'),
            'hasil_rujukan' => $request->input('hasil_rujukan')
        ]);
        return redirect()->back()->with('update', 'Data rekam medis berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rm = RekamMedis::findOrFail($id);
        $rm->delete();
        return redirect()->back()->with('delete', 'Data rekam medis berhasil dihapus');
    }

    public function cetak($id)
    {
        $rm = RekamMedis::findOrFail($id);
        $pf = PemeriksaanFisik::where('id_rm', $rm->id_rm)->get()->first();
        $pt = PemeriksaanTht::where('id_rm', $rm->id_rm)->get()->first();
        $pm = PemeriksaanMata::where('id_rm', $rm->id_rm)->get()->first();
        $pg = PemeriksaanGigi::where('id_rm', $rm->id_rm)->get()->first();
        $pr = PemeriksaanReproduksi::where('id_rm', $rm->id_rm)->get()->first();
        $lab = Laboratorium::where('id_rm', $rm->id_rm)->get()->first();
        $pu = PemeriksaanUmum::where('id_rm', $rm->id_rm)->get()->first();

        //$filename = 'RM-' . $rm->no_rm . '.pdf';
        $pdf = PDF::loadView('backend.rekam-medis.cetak', compact('rm', 'pf', 'pt', 'pm', 'pg', 'pr', 'lab', 'pu'));
        return $pdf->stream();
    }
}
