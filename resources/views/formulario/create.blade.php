<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="{{ route('Formulario.store')}}" method="post">
        @csrf
        <label for="">Empresa en mision en la que termino su contrato</label>
        <br>
        <input type="radio" name="EmpresaContrato" id="">Alborada<br>
        <input type="radio" name="EmpresaContrato" id="">Agricola cardenal (Facatativa)<br>
        <input type="radio" name="EmpresaContrato" id="">Agricola cardenal (Rosal)<br>
        <input type="radio" name="EmpresaContrato" id="">Inverpalmas<br>
        <input type="radio" name="EmpresaContrato" id="">Flores colon<br>
        <input type="radio" name="EmpresaContrato" id="">Flores del rio<br>
        <input type="radio" name="EmpresaContrato" id="">Flores Funza<br>
        <input type="radio" name="EmpresaContrato" id="">Flexport de Colombia<br>
        Otro <input type="text" name="EmpresaContrato" id=""><br>
        <br>

        <label for="">¿Cual de los siguiente motivos se ajusta mas a la terminacion de su contrato?</label>
        <br>
        <input type="radio" name="Motivo" id="">Terminacion de contrato<br>
        <input type="radio" name="Motivo" id="">Retiro voluntario<br>
        <input type="radio" name="Motivo" id="">Una mejor opcion laboral<br>
        <input type="radio" name="Motivo" id="">Viaje<br>
        <input type="radio" name="Motivo" id="">Motivos familiares<br>
        Otro <input type="text" name="Motivo" id=""><br>
        <br>

        <label for="">Nos gustaria saber tu opinion de trabajar con nosotros(cuentanos aqui)</label>
        <br>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>