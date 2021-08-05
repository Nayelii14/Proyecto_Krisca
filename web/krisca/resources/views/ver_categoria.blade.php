@extends('admin')

@section('menu')
    <div class="row mt-5">
        <div class="col-12 col-md-11 col-lg-11 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead id="bg" class="text-dark">
                    <td>Nombre Categoria</td>
                    <td>Acciones</td>
                </thead> 
                <div class="overflow overflow-scroll">
                    <tbody id="tbody-categorias"></tbody>
                </div>  
            </table>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 col-md-11 col-lg-11 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>Categoria para actualizar</span>
                </div>
                <div class="card-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" disabled id="categoria-txt" placeholder="categoria">
                        <label for="categoria-txt">Nombre Categoría</label>
                    </div>
                </div>
                <div class="card-footer">
                    <button id="guardar-cambios-btn" class="btn btn-info">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{asset('js/servicios/categoriasService.js')}}"></script>
    <script src="{{asset('js/ver_categoria.js')}}"></script>
@endsection