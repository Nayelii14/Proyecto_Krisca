@extends('layouts.master')

@section('body')
<div class="row mt-3">
    <div class="col-4 col-md-4 col-lg-4">
        <nav id="navbar-example3" class="navbar navbar-light bg-light flex-column align-items-stretch p-3 shadow-lg">
            <a class="navbar-brand" href="#">CATEGORIAS</a>
            <nav class="nav nav-pills flex-column">
              <nav class="nav nav-pills flex-column" id="categorias-nav">
              </nav>
            </nav>
          </nav>
    </div>
    <div class="col-8 col-md col-lg text-center" id="div-usuario">
        <div class="shadow-sm p-3 mb-5 bg-body rounded">Seleccione una opcion de la lista</div>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset('js/explora.js')}}"></script>
@endsection