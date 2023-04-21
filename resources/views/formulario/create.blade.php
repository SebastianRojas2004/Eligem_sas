@extends('home')

@section('content')
    <div class="container">
    <form action="{{ route('formulario.store') }}" method="post" class="form-formulario">
        @csrf
        <label class="form-label" for="">Empresa en mision en la que termino su contrato</label>
        <br>
        <input class="form-check-input" type="radio" name="empresaContrato" value="Alborada"> Alborada<br>
        <input class="form-check-input" type="radio" name="empresaContrato" value="Agricola cardenal (Facatativa)"> Agricola cardenal (Facatativa)<br>
        <input class="form-check-input" type="radio" name="empresaContrato" value="Agricola cardenal (Rosal)"> Agricola cardenal (Rosal)<br>
        <input class="form-check-input" type="radio" name="empresaContrato" value="Inverpalmas"> Inverpalmas<br>
        <input class="form-check-input" type="radio" name="empresaContrato" value="Flores colon"> Flores colon<br>
        <input class="form-check-input" type="radio" name="empresaContrato" value="Flores del rio"> Flores del rio<br>
        <input class="form-check-input" type="radio" name="empresaContrato" value="Flores Funza"> Flores Funza<br>
        <input class="form-check-input" type="radio" name="empresaContrato" value="Flexport de Colombia"> Flexport de Colombia<br>
        Otro<input class="form-control" type="text" name="empresaContrato" id=""><br>
        <br>

        <label class="form-label" for="">¿Cual de los siguiente motivos se ajusta mas a la terminacion de su contrato?</label>
        <br>
        <input class="form-check-input" type="radio" name="motivo" id=""> Terminacion de contrato<br>
        <input class="form-check-input" type="radio" name="motivo" id=""> Retiro voluntario<br>
        <input class="form-check-input" type="radio" name="motivo" id=""> Una mejor opcion laboral<br>
        <input class="form-check-input" type="radio" name="motivo" id=""> Viaje<br>
        <input class="form-check-input" type="radio" name="motivo" id=""> Motivos familiares<br>
        Otro <input class="form-control" type="text" name="motivo" id=""><br>
        <br>

        <label class="form-label" for="">Nos gustaria saber tu opinion de trabajar con nosotros(cuentanos aqui)</label>
        <br>
        <textarea class="form-control" name="opinion" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>        