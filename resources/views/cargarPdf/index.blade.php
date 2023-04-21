@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <div class="float-right">
                <a href="{{ route('cargarPdf.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                {{ __('Create New') }}
                </a>
            </div>
            <br>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Documento</th>
                    <th>id empleado</th>
                    <th>Ver documento</th>
                    <th>Descargar documento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $d)
                    <tr>
                        <td>{{ $d->id_doc }}</td>
                        <td>{{ $d->nombre }}</td>
                        <td>{{ $d->documento }}</td>     
                        <td>{{ $d->id_empleado }}</td>
                        <td><a href="Archivos/{{$d->documento}}" target="blank_">Ver Documento</a></td>
                        <td><a href="Archivos/{{$d->documento}}" download>descargar documento</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>