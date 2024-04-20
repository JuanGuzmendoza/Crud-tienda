<?php

namespace App\Exports;
use App\Models\cursos;
use App\Models\programas;
use App\Models\Estudiantes;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collect():
    // {
    //     return Estudiantes::all();
    // }
    public function view(): View
    {
        $Estudiantes=Estudiantes::all();
        $cursos=cursos::all();
        $mejore=[];
        $programas=programas::all();
        foreach ($Estudiantes as $Estudiante) {
            foreach ($programas as $programa) {
                $programa->where('id','=',$Estudiante->cursos->Programa_id)->get();
                $mejore[$programa->id]=$programa;
            }
        }
        return view('export.Estudiantes',compact('Estudiantes','mejore',));

    }
}
