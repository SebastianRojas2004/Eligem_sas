<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <table class="table">
            <div class="float-right">
                <a href="{{ route('cargarPdf.listado') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                {{ __('Create New') }}
                </a>
            </div>
            <br>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Documento</th>                    
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $d)
                    <tr>
                        <td>{{ $d->id_doc }}</td>
                        <td>{{ $d->nombre }}</td>
                        <td>{{ $d->documento }}</td>     
                        <td><a href="Archivos/{{$d->documento}}" target="blank_">Ver Documento</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>