<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PemeriksaanGigi extends Model
{
    protected $table = 'pemeriksaan_gigi';
    protected $primaryKey = 'id_pg';
    protected $fillable = [
        'id_rm', 'infeksi_visual_mulut_gusi', 'rencana_pencabutan',
        'rencana_penambalan', 'rencana_pembersihan_karang_gigi',
        'rencana_pembuatan_gigi_palsu', 'gigi_lain'
    ];
}
