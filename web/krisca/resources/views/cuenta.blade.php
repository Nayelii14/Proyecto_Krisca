@extends('layouts.master')

@section('body')
<div class="row mt-5">
    <div class="col-4 col-md-6 col-lg-6 mx-auto">
        <div class="card">
            <div class="card-header text-center">
                <span>Cuenta del usuario o cliente</span>
            </div>
            <div class="card-body text-center">

                <div class="form-floating mt-3">
                    <input type="text" class="form-control" id="pass" placeholder="Password" value="CORREO">
                    <label for="pass">Correo</label>
                </div>
                <div class="form-floating mt-3">
                    <input type="text" class="form-control" id="nombre" placeholder="nombre" value="NOMBRE">
                    <label for="nombre">Nombre</label>
                </div>
                <div class="form-floating mt-3">
                    <input type="text" class="form-control" id="nombre" placeholder="apellidos" value="APELLIDOS">
                    <label for="apellidos">Apellidos</label>
                </div>
                <div class="form-floating mt-3">
                    <input type="text" class="form-control" id="rut" placeholder="rut" value="RUT">
                    <label for="rut">Rut</label>
                </div>
                <div class="form-floating mt-3">
                    <input type="text" class="form-control" id="num_celular" placeholder="num_celular" value="NUMERO DE CELULAR">
                    <label for="num_celular">Numero de celular</label>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection