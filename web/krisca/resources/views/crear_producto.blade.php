@extends('admin')

@section('menu')
    <div class="card">
        <div class="card-header text-dark" id="bg">
            <span>Crear producto</span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nombre-txt" placeholder="nombre">
                    <label for="nombre-txt">Nombre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="stock-txt" placeholder="stock">
                    <label for="stock-txt">Stock</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="talla-txt" placeholder="talla">
                    <label for="talla-txt">Talla</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="categoria-select" aria-label="Floating label select example">
                        <option value="none">--------</option>
                        
                    </select>
                    <label for="floatingSelect">Tipo de categoria</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="precio-txt" placeholder="precio">
                    <label for="precio-txt">Precio</label>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-success" id="crear-btn" type="submit">Crear</button>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/servicios/productosService.js')}}"></script>
    <script src="{{asset('js/crear_producto.js')}}"></script>
@endsection