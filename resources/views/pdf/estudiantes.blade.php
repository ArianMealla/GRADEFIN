<table>
    <thead class="bg-dark text black">
        
        <tr>
            <th scope="col">ACCIONES </th>
            <th scope="col">ID</th>
            <th scope="col">PATERNO</th>
            <th scope="col">MATERNO</th>
            <th scope="col">NOMBRES</th>
            <th scope="col">CI </th>
            <th scope="col">ZONA</th>
            <th scope="col">DIRECCION</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">NOMBRE-PADRE</th>
            <th scope="col">NOMBRE-MADRE</th>
            <th scope="col">OCUPACION</th>
            <th scope="col">CI MADRE </th>
            <th scope="col">CI PADRE </th>
            <th scope="col">FECHA NACIMIENTO </th>
            <th scope="col">LUGAR NAC </th>
            <th scope="col">GENERO </th>
            <th scope="col">LUGAR ESTUDIO </th>
            <th scope="col">EMAIL </th>
            <th scope="col">AÑO ESCOLAR </th>
            <th scope="col">AÑO BACHILLER </th>
            <th scope="col">ASIGNACION </th>
            <th scope="col">NOTA</th>
            <th scope="col">COMENTARIO </th>
            
            
            


        
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantes as $estudiante)
        <tr>
            









                <td>{{$estudiante->id}}</td>
                <td>{{$estudiante->paterno}}</td>
                <td>{{$estudiante->materno}}</td>
                <td>{{$estudiante->nombres}}</td>
                <td>{{$estudiante->ci}}</td>
                <td>{{$estudiante->zona}}</td>
                <td>{{$estudiante->direccion}}</td>
                <td>{{$estudiante->telefono}}</td>
                <td>{{$estudiante->NomPadre}}</td>
                <td>{{$estudiante->NomMadre}}</td>
                <td>{{$estudiante->ocupacion}}</td>
                <td>{{$estudiante->CImadre}}</td>
                <td>{{$estudiante->CIpadre}}</td>
                <td>{{$estudiante->fecnac}}</td>
                <td>{{$estudiante->lugarnac}}</td>
                <td>{{$estudiante->genero}}</td>
                <td>{{$estudiante->lugarEstu}}</td>
                <td>{{$estudiante->email}}</td>
                <td>{{$estudiante->añoEscolar}}</td>
                <td>{{$estudiante->añoBachiller}}</td>
                <td>{{$estudiante->asignacion->materia}}</td>
                <td>{{$estudiante->calificacion}}</td>
                <td>{{$estudiante->comentario}}</td>
            
            
            </td>
        </tr>
        @endforeach

    </tbody>
    
</table>