<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sertifikat extends Model
{
    use SoftDeletes;
    protected $table = 'sertifikat';
    protected $primaryKey = 'id_sertifikat';
    protected $fillable = ['nama_sertifikat', 'deskripsi'];
}
