@extends('layouts.app')

@section('template_title')
    Create Usuarios
@endsection

@section('content')
    <div class="container">
        <table class="table">
            <div class="float-right">
                <a href="{{ route('register') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">            
                {{ __('Create New') }}
                </a>
            </div>
            <br>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>                    
                    <th>Contraseña</th>                    
                    <th>Tipo de usuario</th>                    
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $d)
                    <tr>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->password }}</td>     
                        <td>{{ $d->tipo_usuario }}</td>                             
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection