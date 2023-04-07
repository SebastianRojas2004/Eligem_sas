@extends('layouts.app')

@section('template_title')
    Create Empleado
@endsection

@section('content')
<div class="container">
                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Empleado</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('empleados.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('empleado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
