@extends('layouts.master')

@section('body')

<div class="row mt-3">
    <div class="col-4 col-md-4 col-lg-4">
        <nav id="navbar-example3" class="navbar navbar-light bg-light flex-column align-items-stretch p-3 shadow-lg">
            <a class="navbar-brand text-center mb-2" id="bg" href="#">CATEGORIAS</a>
            <nav class="nav nav-pills flex-column mt-1">
              <nav class="nav nav-pills flex-column" id="categorias-nav">
              </nav>
            </nav>
          </nav>
    </div>
    <div class="col-8 col-md col-lg text-center" id="div-usuario">
      <div class="card-body mt-2 text-center me-4 shadow-sm" id="bg">
        <img src="{{asset('img/explora.png')}}" id="imagen2">
      </div>
      <div class="col-10 col-md-10 col-lg-10">
        <div id="body-productos"></div>
      </div>
      
    </div>
    
</div>
@endsection

@section('js')
<script src="{{asset('js/servicios/exploraService.js')}}"></script>
<script src="{{asset('js/explora.js')}}"></script>
@endsection