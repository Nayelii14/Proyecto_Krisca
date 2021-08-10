@extends('layouts.master')

@section('body')
<div class="row">
    <div class="col-lg-5 col-md-6 col-sm-12 mx-auto mt-5">
        <div class="card">
            <div class="card-header text-dark text-center" id="bg">
                <span>Cambiar contraseña - CLIENTES</span>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="correo-txt" class="form-label">Correo electrónico</label>
                    <input class="form-control" id="correo-txt" placeholder="nombre@ejemplo.cl" required>
                    <div class="invalid-feedback">
                      Ingrese correo electrónico
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pass-txt" class="form-label">Nueva Contraseña</label>
                    <input class="form-control" id="pass-txt" type="password" placeholder="12345678" required>
                    <div class="invalid-feedback">
                      Ingrese nueva contraseña
                    </div>
                </div>
                <div class="mb-3">
                    <label for="passR-txt" class="form-label">Respetir Nueva Contraseña</label>
                    <input class="form-control" id="passR-txt" type="password" placeholder="12345678" required>
                    <div class="invalid-feedback">
                      Reingrese nueva contraseña
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row text-center">
                    <div class="col-12 col-md-12 col-lg-12">
                        <button type="button" id="enviar-btn" class="btn btn-success">Enviar</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset('js/servicios/usuariosService.js')}}"></script>
<script src="{{asset('js/error_pass.js')}}"></script>

@endsection