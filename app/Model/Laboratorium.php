<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Laboratorium extends Model
{
    protected $table = 'laboratorium';
    protected $primaryKey = 'id_lab';
    protected $fillable = [
        'id_rm', 'urine_albumin', 'urine_reduksi', 'urine_bilirubin',
        'urine_sedimen', 'urine_kehamilan', 'urine_ph', 'urine_bj',
        'urine_lekosite', 'led', 'hb', 'lekosit', 'hitung_jenis',
        'trombosite', 'gula_darah', 'n', 'pp', 'vdrl', 'sgot', 'sgpt', 'kreatinin',
        'ureum', 'kolesterol', 'trigiliserid', 'uric_acid', 'hbsag',
        'hbeag', 'temuan_lab', 'gambar_kelainan'
    ];
}
