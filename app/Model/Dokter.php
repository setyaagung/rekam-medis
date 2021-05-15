<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dokter extends Model
{
    use SoftDeletes;
    protected $table = 'dokter';
    protected $primaryKey = 'id_dokter';
    protected $fillable = ['id_user', 'nid', 'nama_dokter', 'no_telp', 'alamat'];
}
