@extends('admin')

@section('menu')
<div class="card">
    <div class="card-header">
        <span>Crear Categoría</span>
    </div>
    <div class="card-body">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="categoria-txt" placeholder="categoria">
            <label for="categoria-txt">Nombre Categoría</label>
        </div>
    </div>
    <div class="card-footer">
        <button id="registrar-categoria-btn" class="btn btn-success">Agregar Categoría</button>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset('js/servicios/categoriasService.js')}}"></script>
<script src="{{asset('js/categoria.js')}}"></script>
@endsection