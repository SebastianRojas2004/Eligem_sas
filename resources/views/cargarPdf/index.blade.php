<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Pdf</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <form action="EnvioDatos" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlFile1">Nombre</label>
                <input class="form-control" type="text" name="nombre" class="form-control-file">
            </div>            
            <div class="form-group">
                <label for="exampleFormControlFile1">Cargar archivo PDF</label>
                <input class="form-control" type="file" name="pdf" class="form-control-file">
            </div>
            <button class="btn btn-success" type="submit">Cargar</button>
        </form>
    </div>
</body>
</html>