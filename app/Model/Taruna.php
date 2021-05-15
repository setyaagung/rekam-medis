<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taruna extends Model
{
    use SoftDeletes;
    protected $table = 'taruna';
    protected $primaryKey = 'id_taruna';
    protected $fillable = ['nit', 'nama_taruna', 'id_jurusan', 'no_telp', 'alamat'];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }
}
