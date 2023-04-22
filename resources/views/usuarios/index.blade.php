$idTipoUsu = Auth::user()->tipo_usuario;        
        if($idTipoUsu == 0){
            @extends('layouts.app')
        }else{
            @extends('home.php')
        }

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
                    <th>Id empleado</th>  
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $d)
                    <tr>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->password }}</td>     
                        <td>{{ $d->tipo_usuario }}</td>
                        <td>{{ $d->id_empleado }}</td>
                        <td>
                            <form action="{{ route('usuarios.destroy',$d->id) }}" method="POST">
                                <!--- <a class="btn btn-sm btn-primary " href="{{ route('empleados.show',$d->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a> -->
                                <a class="btn btn-sm btn-success" href="{{ route('usuarios.edit',$d->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                            </form>
                        </td>                             
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>