@extends('layouts.app')

@section('content')
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