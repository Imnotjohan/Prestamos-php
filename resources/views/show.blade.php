<!DOCTYPE html>
<html>
<head>
    <title>Personas - Show</title>
</head>
<body>
    <h1>Personas - Show</h1>

    <h2>Persona Details</h2>
    <ul>
        <li>ID: {{ $persona->id }}</li>
        <li>Nombre: {{ $persona->nombre }}</li>
        <li>Correo: {{ $persona->correo }}</li>
        <li>Teléfono: {{ $persona->telefono }}</li>
        <li>Estado Civil: {{ $persona->ecivil }}</li>
        <li>Edad: {{ $persona->edad }}</li>
    </ul>
</body>
</html>
