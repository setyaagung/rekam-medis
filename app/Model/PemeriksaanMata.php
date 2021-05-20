<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PemeriksaanMata extends Model
{
    protected $table = 'pemeriksaan_mata';
    protected $primaryKey = 'id_pm';
    protected $fillable = [
        'id_rm', 'jarak_mata_kanan_tanpa_kacamata', 'jarak_mata_kiri_tanpa_kacamata',
        'jarak_mata_kanan_dengan_kacamata', 'jarak_mata_kiri_dengan_kacamata',
        'buta_warna', 'normal_colour_test', 'lapang_pandang',
        'mata_lain', 'catatan_penglihatan', 'alat_bantu_penglihatan'
    ];
}
