@extends('layouts.master')

@section('body')

    <div class="row mt-3">
        <div class="col-4 col-md-4 col-lg-4">
            <nav id="navbar-example3" class="navbar navbar-light bg-light flex-column align-items-stretch p-3 shadow-lg">
                <a class="navbar-brand" href="#">ADMINISTRADOR</a>
                <nav class="nav nav-pills flex-column">
                  <nav class="nav nav-pills flex-column">
                    <a class="nav-link ms-3 my-1" href="{{asset('ag_usuario')}}" id="ag_usuario">Agregar a un usuario administrador</a>
                    <a class="nav-link ms-3 my-1" href="{{asset('crear_producto')}}">Crear Producto</a>
                    <a class="nav-link ms-3 my-1" href="{{asset('a_e_producto')}}">Actualizar o Eliminar Producto</a>
                    <!--<a class="nav-link ms-3 my-1" href="{{asset('ajuste_stock')}}">Ajuste Stock</a>-->
                    <a class="nav-link ms-3 my-1" href="{{asset('crear_categoria')}}">Crear categoría</a>
                    <a class="nav-link ms-3 my-1" href="{{asset('ver_categoria')}}">Ver categorías</a>

                  </nav>
                </nav>
              </nav>
        </div>
        <div class="col-8 col-md col-lg text-center" id="div-usuario">
            <div class="shadow-sm p-3 mb-5 bg-body rounded">Seleccione una opcion de la lista</div>
            @yield('menu')
        </div>
    </div>

@endsection

@section('js')

@endsection