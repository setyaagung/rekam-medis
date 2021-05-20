<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PemeriksaanReproduksi extends Model
{
    protected $table = 'pemeriksaan_reproduksi';
    protected $primaryKey = 'id_pr';
    protected $fillable = ['id_rm', 'kelamin_luar', 'kandungan'];
}
