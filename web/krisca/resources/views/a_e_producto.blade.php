@extends('admin')

@section('menu')
<div class="row mt-2">
    <div class="col-12 col-md-11 col-lg-11 mx-auto">
        <div class="card">
            <div class="card-header text-dark" id="bg">
                <span>Filtar</span>
            </div>
            <div class="card-body">
                <select class="form-select" id="filtro-cbx">
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
</div>
@endsection