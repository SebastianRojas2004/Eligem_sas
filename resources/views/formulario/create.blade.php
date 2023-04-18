@extends('home')

@section('content')
    <div class="container">
    <form action="{{ route('formulario.store') }}" method="post">
        @csrf
        <label for="">Empresa en mision en la que termino su contrato</label>
        <br>
        <input type="radio" name="empresaContrato" value="Alborada">Alborada<br>
        <input type="radio" name="empresaContrato" value="Agricola cardenal (Facatativa)">Agricola cardenal (Facatativa)<br>
        <input type="radio" name="empresaContrato" value="Agricola cardenal (Rosal)">Agricola cardenal (Rosal)<br>
        <input type="radio" name="empresaContrato" value="Inverpalmas">Inverpalmas<br>
        <input type="radio" name="empresaContrato" value="Flores colon">Flores colon<br>
        <input type="radio" name="empresaContrato" value="Flores del rio">Flores del rio<br>
        <input type="radio" name="empresaContrato" value="Flores Funza">Flores Funza<br>
        <input type="radio" name="empresaContrato" value="Flexport de Colombia">Flexport de Colombia<br>
        Otro <input type="text" name="empresaContrato" id=""><br>
        <br>

        <label for="">¿Cual de los siguiente motivos se ajusta mas a la terminacion de su contrato?</label>
        <br>
        <input type="radio" name="motivo" id="">Terminacion de contrato<br>
        <input type="radio" name="motivo" id="">Retiro voluntario<br>
        <input type="radio" name="motivo" id="">Una mejor opcion laboral<br>
        <input type="radio" name="motivo" id="">Viaje<br>
        <input type="radio" name="motivo" id="">Motivos familiares<br>
        Otro <input type="text" name="motivo" id=""><br>
        <br>

        <label for="">Nos gustaria saber tu opinion de trabajar con nosotros(cuentanos aqui)</label>
        <br>
        <textarea name="opinion" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>    