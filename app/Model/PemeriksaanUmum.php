<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PemeriksaanUmum extends Model
{
    protected $table = 'pemeriksaan_umum';
    protected $primaryKey = 'id_pu';
    protected $fillable = [
        'id_rm', 'spirometri', 'istirahat', 'mst', 'thorax',
        'tulang_panjang', 'psikologis', 'toleransi_oksigen', 'cara_bicara_tidak_terganggu',
        'menderita_penyakit', 'deskripsi_menderita_penyakit', 'mengonsumsi_obat',
        'deskripsi_tanpa_obat', 'sehat_untuk_jaga', 'deskripsi_sehat', 'catatan_kesehatan',
        'kesimpulan', 'remarks', 'hasil_rujukan'
    ];
}
