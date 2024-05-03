<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>ape_examen_back</title>
    <link rel="stylesheet" href="{{ asset('styles/index.css')}}">
</head>
    <body>
        <h1>Usuarios Aleatorios.</h1>

        <div class="tabla">
            <table class="tabla-usuarios">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Edad</th>
                        <th>Domicilio</th>
                        <th>No. Exterior</th>
                        <th>Colonia</th>
                        <th>CP</th>
                        <th>Ciudad</th>
                    </tr>
                </thead>
                <tbody id="bodyTabla"></tbody>
            </table>
        </div>

        <script src="{{asset('js/index.js')}}"></script>
        
    </body>
</html>

