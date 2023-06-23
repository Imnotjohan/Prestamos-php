<!DOCTYPE html>
<html>
<head>
    <title>Personas - Index</title>
</head>
<body>
    <h1>Personas - Index</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Estado Civil</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{ $persona->id }}</td>
                    <td>{{ $persona->nombre }}</td>
                    <td>{{ $persona->correo }}</td>
                    <td>{{ $persona->telefono }}</td>
                    <td>{{ $persona->ecivil }}</td>
                    <td>{{ $persona->edad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
