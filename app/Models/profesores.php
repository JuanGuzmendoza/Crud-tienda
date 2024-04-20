<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesores extends Model
{
    use HasFactory;
    protected $table = 'profesores';
protected $fillable = ['cedula','nombre','apellido','edad','correo','contraseña' /*otros atributos permitidos*/];
}
