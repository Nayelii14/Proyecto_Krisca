@extends('layouts.master')

@section('body')
<div class="row">
    <div class="col-lg-5 col-md-6 col-sm-12 mx-auto mt-5">
        <div class="card">
            <div class="card-header text-dark text-center" id="bg">
                <span>Registrar cliente</span>
            </div>
            <div class="card-body">
                <form class="row g-3">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="correo-txt" placeholder="correo">
                        <label for="correo-txt">Correo electrónico</label>
                    </div>
                    <div class="col-5 col-md-5 col-lg-5">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nombre-txt" placeholder="nombre">
                            <label for="nombre-txt">Nombre</label>
                        </div>
                    </div>
                    <div class="col-7 col-md-7 col-lg-7">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="apellidos-txt" placeholder="apellidos">
                            <label for="apellidos-txt">Apellidos</label>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="pass-txt" placeholder="pass">
                            <label for="pass-txt">Contraseña</label>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="passR-txt" placeholder="pass repeat">
                            <label for="passR-txt">Repetir contraseña</label>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-lg-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="fono-txt" placeholder="celular">
                            <label for="fono-txt">Número celular</label>
                        </div>
                    </div>
                    <div class="col-8 col-md-8 col-lg-8">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="rut-txt" placeholder="rut">
                            <label for="rut-txt">Rut</label>
                        </div>
                    </div>
                    <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                        <label class="form-check-label" for="invalidCheck3">
                        Aceptar términos y condiciones.
                        </label>
                        <div id="invalidCheck3Feedback" class="feedback">
                        Debes estar de acuerdo antes de registrarte.
                        </div>
                    </div>
                    </div>
                    <div class="col-12">
                    <button class="btn btn-success" id="registrar-btn" type="submit">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{asset('js/servicios/usuariosService.js')}}"></script>
    <script src="{{asset('js/registrar_cliente.js')}}"></script>
@endsection