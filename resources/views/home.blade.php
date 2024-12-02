@extends('layouts.app') 

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif

                    @role('admin')     
                    {{ __('Usuario Administrador ha ingresado correctamente!') }} 
                    <p> Bienvenido administrador</p> 
                    <p> Para agregar nuevos roles de usuarios realize todo desde la migracion create_roles ;)</p> 
                    @endrole 
                    @role('bibliotecario') 
                    <p> Bienvenido bibliotecario</p> 
                    @endrole
                    @role('usuario') 
                    <p> Bienvenido usuario</p> 
                    @endrole
                </div>
                
            </div>
            <br>
            <a href="{{ route('logout') }}"
                style="background: linear-gradient(to bottom, #ff7f50, #cc4c4c); /* Degradado de rojo a rojo oscuro */
                    box-shadow: inset 0px 2px 5px rgba(255, 0, 0, 0.3); /* Sombra roja */
                    color: #fff;
                    text-decoration: none;
                    padding: 10px 20px;
                    border-radius: 5px;"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
            </a>
        </div>
    </div>
</div>
@endsection
