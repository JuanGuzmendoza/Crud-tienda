<?php

namespace App\Imports;

use App\Models\profesores;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
class EstudiantesImport implements ToModel,WithHeadingRow,WithBatchInserts,WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new profesores([
            'cedula'=>$row['cedula'],
            'nombre'=>$row['nombre'],
            'apellido'=>$row['apellido'],
            'edad'=>$row['edad'],
            'correo'=>$row['correo'],
            'contraseña'=>0,
        ]);
    }
    public function batchSize(): int
    {
        return 1000;
    }
    public function chunkSize(): int
    {
        return 1000;
    }
}
