<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PemeriksaanFisik extends Model
{
    protected $table = 'pemeriksaan_fisik';
    protected $primaryKey = 'id_pf';
    protected $fillable = [
        'id_rm', 'berat_badan',, 'tinggi_badan', 'tekanan_darah',
        'denyut_nadi', 'pernapasan', 'kepala_leher', 'dada',
        'jantung', 'paru', 'perut', 'hati', 'limpa',
        'gerak', 'fisik_lain'
    ];
}
