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

    public function taruna()
    {
        return $this->belongsTo(Taruna::class, 'id_taruna');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }

    public function sertifikat()
    {
        return $this->belongsTo(Sertifikat::class, 'id_sertifikat');
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan');
    }
}
