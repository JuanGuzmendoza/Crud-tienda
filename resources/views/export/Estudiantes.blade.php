<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>

        <tr>
            <th>id</th>
            <th>Curso</th>
            <th>Identificacion</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>n1</th>
            <th>n2</th>
            <th>n3</th>
            <th>promedio</th>
        </tr>
    </thead>
    <tfoot>

    </tfoot>
    <tbody>
     
            @foreach ($Estudiantes as $Estudiante)
        <tr>
            <td>{{$Estudiante->id}}</td>
            <td>{{$Estudiante->cursos->Curso}}-{{$mejore[$Estudiante->cursos->Programa_id]->programa}}</td>
            <td>{{$Estudiante->Identificacion}}</td>
            <td>{{$Estudiante->nombre}}</td>
            <td>{{$Estudiante->apellido}}</td>
            <td>{{$Estudiante->edad}}</td>
            <td>{{$Estudiante->correo}}</td>
            <td>{{$Estudiante->contraseña}}</td>
            <td>{{$Estudiante->n1}}</td>
            <td>{{$Estudiante->n2}}</td>
            <td>{{$Estudiante->n3}}</td>
            <td>{{$Estudiante->promedio}}</td>
      <tr>
        @endforeach
     
    </tbody>
</table>