@extends('admin')

@section('menu')
<div class="row mt-2">
    <div class="col-12 col-md-11 col-lg-11 mx-auto">
        <div class="card">
            <div class="card-header text-dark" id="bg">
                <span>Filtrar por categoria</span>
            </div>
            <div class="card-body">
                <select class="form-select" id="categoria-select">
                    <option value="todos">Todos</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-md-11 col-lg-11 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead id="bg" class="text-dark">
                    <td>Nombre</td>
                    <td>Stock</td>
                    <td>Talla</td>
                    <td>Categoria</td>
                    <td>Precio</td>
                    <td>Acciones</td>
                </thead>
                <tbody id="tbody-ae-producto"></tbody>
            </table>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 col-md-11 col-lg-11 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>Producto a actualizar</span>
                </div>
                <div class="card-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" disabled id="nombre-producto-txt" placeholder="nombre-producto">
                        <label for="nombre-producto-txt">Nombre producto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" disabled id="talla-producto-txt" placeholder="talla-producto">
                        <label for="talla-producto-txt">Talla producto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" disabled id="categoria-txt" aria-label="categoria">
                        </select>
                        <label for="categoria-txt">Tipos de categorias</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" disabled id="precio-producto-txt" placeholder="precio-producto">
                        <label for="precio-producto-txt">Precio producto</label>
                    </div>
                </div>
                <div class="card-footer">
                    <button id="guardar-cambios-btn" class="btn btn-info">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{asset('js/servicios/productosService.js')}}"></script>
    <script src="{{asset('js/a_e_producto.js')}}"></script>
@endsection