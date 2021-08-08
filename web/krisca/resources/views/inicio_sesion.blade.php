@extends('layouts.master')

@section('body')
<div class="row">
    <div class="col-lg-5 col-md-6 col-sm-8 mx-auto mt-5">
        <div class="card">
            <div class="card-header text-dark text-center" id="bg">
                <span>Iniciar sesión</span>
            </div>
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="correo-txt" placeholder="name@example.com">
                    <label for="correo-txt">Correo electrónico</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control" id="pass-txt" placeholder="Password">
                    <label for="pass-txt">Contraseña</label>
                  </div>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-6">
                            <button type="button" id="iniciar-admin-btn" class="btn btn-success">Iniciar como admin</button>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <button type="button" id="iniciar-cliente-btn" class="btn btn-success">Iniciar como cliente</button>
                        </div>
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

@section('js')
<script src="{{asset('js/servicios/usuariosService.js')}}"></script>
<script src="{{asset('js/inicio_sesion.js')}}"></script>

@endsection