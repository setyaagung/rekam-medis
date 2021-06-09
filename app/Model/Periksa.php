<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Periksa extends Model
{
    use SoftDeletes;
    protected $table = 'periksa';
    protected $primaryKey = 'id_periksa';
    protected $fillable = ['id_taruna', 'id_dokter', 'tanggal_periksa', 'keluhan', 'tindakan', 'file'];

    public function taruna()
    {
        return $this->belongsTo(Taruna::class, 'id_taruna');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }
}
