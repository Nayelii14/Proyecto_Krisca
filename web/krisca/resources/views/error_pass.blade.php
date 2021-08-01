@extends('layouts.master')

@section('body')
<div class="row">
    <div class="col-lg-5 col-md-6 col-sm-12 mx-auto mt-5">
        <div class="card">
            <div class="card-header text-dark text-center" id="bg">
                <span>Cambiar contraseña</span>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Correo electrónico</label>
                    <input class="form-control" id="validationTextarea" placeholder="nombre@ejemplo.cl" required>
                    <div class="invalid-feedback">
                      Ingrese correo electrónico
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row text-center">
                    <div class="col-12 col-md-12 col-lg-12">
                        <button type="button" id="iniciar-btn" class="btn btn-success">Enviar</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection