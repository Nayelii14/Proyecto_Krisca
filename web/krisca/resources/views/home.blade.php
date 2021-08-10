  
@extends('layouts.master')

@section('body')
    <div class="card-header text-center">
        <img src="{{asset('img/nuevos_productos.png')}}" id="imagen" class="animate__animated animate__heartBeat">
    </div>
    <div class="card-body">
        <div class="col-11 col-md-11 col-sm-12 col-lg-11 ms-5 ">
            <div id="carouselExampleDark" class="carousel carousel-dark slide mt-3" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{asset('img/ropa1.jpg')}}" style="height: 610px" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block text-white" style="background-color: brown">
                      <h5>Novedades</h5>
                      <p>Descubre nuestra nueva colección de poleras.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{asset('img/ropa2.jpg')}}" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block text-white" style="background-color: gray">
                      <h5>Nuestros conjuntos</h5>
                      <p>Descubre nuevas mezclas de productos y nuestros nuevos chalecos</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/ropa3.jpg')}}" class="d-block w-100" >
                    <div class="carousel-caption d-none d-md-block text-white shadow-lg" style="background-color: cornflowerblue">
                      <h5>Coleccion de Pantalones</h5>
                      <p>Han llegado nuevos pantalones para que puedas elegir <i class="fas fa-smile-wink"></i></p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        
    </div>
    <div class="card-footer"></div>
@endsection