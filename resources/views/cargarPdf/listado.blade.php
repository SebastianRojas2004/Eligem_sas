@extends('layouts.app')

@section('content')
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
            <div class="form-group">
                <label for="exampleFormControlFile1">Id empleado</label>
                <input class="form-control" type="text" name="id_empleado" class="form-control-file">
            </div>
            <br>
            <button class="btn btn-success" type="submit">Cargar</button>
        </form>
    </div>
