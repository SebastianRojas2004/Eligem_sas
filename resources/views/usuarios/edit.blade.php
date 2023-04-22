@extends('layouts.app')

@section('template_title')
    Update Usuario
@endsection

@section('content')
<div class="container">
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Usuario</span>
                    </div>
                    <div class="card-body">
                        <form method="PUT" action="{{ route('usuarios.update', $usuarios) }}"  role="form" enctype="multipart/form-data">                        
                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    <div class="form-group">
                                    {{ Form::label('Nombre') }}
                                    {{ Form::text('name', $usuarios->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                    {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Correo') }}
                                        {{ Form::text('Correo', $usuarios->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
                                        {!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Contraseña') }}
                                        {{ Form::Number('Contraseña', $usuarios->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
                                        {!! $errors->first('Contraseña', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Tipo de usuario') }}
                                        {{ Form::Number('Contraseña', $usuarios->tipo_usuario, ['class' => 'form-control' . ($errors->has('tipo_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de usuario']) }}
                                        {!! $errors->first('Tipo de usuario', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Id empleado') }}
                                        {{ Form::Number('Id empleado', $usuarios->id_empleado, ['class' => 'form-control' . ($errors->has('id_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Id empleado']) }}
                                        {!! $errors->first('Id empleado', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
