<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    protected $table = 'rekam_medis';
    protected $primaryKey = 'id_rm';
    protected $fillable = [
        'id_taruna', 'id_dokter', 'no_rm', 'id_sertifikat',
        'id_jabatan', 'tanggal_ujian', 'masa_berlaku', 'anamnese'
    ];
}
