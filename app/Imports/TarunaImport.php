<?php

namespace App\Imports;

use App\Model\Taruna;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;

class TarunaImport implements ToModel, WithValidation
{
    use Importable;
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

    public function rules(): array
    {
        return [
            '1' => 'required|string|max:191',
            '2' => 'unique:taruna,nit',
        ];
    }

    public function customValidationMessages()
    {
        return [
            '2.unique' => 'Nomor Induk Taruna terdapat data yang sama',
        ];
    }
}
