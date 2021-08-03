@extends('admin')

@section('menu')
<div class="card">
    <div class="card-header text-dark" id="bg">
        <span>Ajuste de stock</span>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="id-producto-txt" placeholder="id-producto">
                <label for="id-producto-txt">Id producto</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="fecha-txt" placeholder="fecha">
                <label for="fecha-txt">Fecha ajuste</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="cantidad-txt" placeholder="cantidad">
                <label for="cantidad-txt">cantidad</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option>--------</option>
                    <option value="1">Agregar</option>
                    <option value="2">Eliminar</option>
                </select>
                <label for="floatingSelect">Seleccione tipo de ajuste</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="id-usuario-txt" placeholder="id-usuario">
                <label for="id-usuario-txt">Id usuario</label>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-success" id="registrar-btn" type="submit">Registrar</button>
    </div>
</div>
@endsection