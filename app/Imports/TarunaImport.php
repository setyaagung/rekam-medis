<?php

namespace App\Imports;

use App\Model\Taruna;
use Maatwebsite\Excel\Concerns\ToModel;

class TarunaImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        //dd($row);
        return new Taruna([
            'nama_taruna' => $row[1],
            'nit' => $row[2],
            'id_jurusan' => $row[3],
            'no_telp' => $row[4],
            'alamat' => $row[5],
        ]);
    }
}
