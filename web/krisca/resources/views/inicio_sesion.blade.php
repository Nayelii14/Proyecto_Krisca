@extends('layouts.master')

@section('body')
<div class="row">
    <div class="col-lg-5 col-md-6 col-sm-12 mx-auto mt-5">
        <div class="card">
            <div class="card-header text-dark text-center" id="bg">
                <span>Iniciar sesión</span>
            </div>
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Correo electrónico</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Contraseña</label>
                  </div>
                </div>
                <div class="card-footer text-center">
                    <div class="row mx-auto">
                        <button type="button" id="iniciar-btn" class="btn btn-success">Iniciar</button>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-6">
                            <a href="{{route('registrar_cliente')}}">Regístrese aquí</a>
                        </div>
                        <div class="col-6 col-md col-lg">
                            <a href="{{route('error_pass')}}">¿Olvidó su contraseña?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection