<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PemeriksaanTht extends Model
{
    protected $table = 'pemeriksaan_tht';
    protected $primaryKey = 'id_pt';
    protected $fillable = [
        'id_rm', 'hidung', 'telinga', 'tenggorokan',
        'audiogram_kiri', 'audiogram_kanan', 'tht_lain',
        'catatan_pendengaran', 'catatan_pendengaran_tanpa_alat'
    ];
}
