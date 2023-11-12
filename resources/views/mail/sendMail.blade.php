<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Mail</title>
</head>
<body>
    
    <p>{{$details['mensaje']}}</p>
    <ul>
        <li> Nombre: {{$details['name']}}</li>
        <li> Apellido: {{$details['apellido']}}</li>
        <li> Correo: {{$details['email']}}</li>
    </ul>
</body>
</html>