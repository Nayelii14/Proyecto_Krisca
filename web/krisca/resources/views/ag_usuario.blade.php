@extends('admin')

@section('menu')
    <div class="card mt-2">
        <div class="card-header text-dark" id="bg">
            <span>Creacion de nuevo usuario Administrador</span>
        </div>
        <div class="card-body">
            <div class="row">
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
            <div class="col-12 col-md-12 col-lg-12">
                <div class="form-floating mb-3">
                    <select class="form-select" id="usuario-select" aria-label="Floating label select example">
                        <option>--------</option>
                        <option value="A">Usuario Admin</option>
                        <option value="V">Usuario Vendedor</option>
                    </select>
                    <label for="usuario-select">Selección tipo de acceso</label>
                </div>
            </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-success" id="agregar-usuario-btn" type="submit">Agregar</button>
        </div>

    </div>
@endsection

@section('js')
<script src="{{asset('js/servicios/usuariosService.js')}}"></script>
<script src="{{asset('js/ag_usuario.js')}}"></script>

@endsection