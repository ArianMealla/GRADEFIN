<table>
    <thead class="thead">
        <tr>


            <th>Estudiantes Id</th>
            <br>

            <th>Profesor Id</th>
            <br>

            <th>Nota</th>
            <br>

            <th>Comentario</th>
            <br>



            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notas as $nota)
            <tr>


                <td>{{ $nota->estudiante->paterno }}</td>
                <br>
                <td>{{ $nota->profesor->nombre }}</td>
                <br>
                <td>{{ $nota->nota }}</td>
                <br>
                <td>{{ $nota->comentario }}</td>
                <br>


            </tr>
        @endforeach
    </tbody>
</table>
