@extends('layouts.master')

@section('body')
<div class="card text-center">
    <div class="card-header">
        <img src="{{asset('img/nosotros.png')}}" class="animate__animated animate__heartBeat">
        <!--<h1 class="animate__animated animate__heartBeat">Nosotros</h1>-->
        
    </div>
    <div class="card-body ms-5 me-5">
        <div class="row mt-5 mb-5" style="background-color: rgb(166, 229, 231);border-radius: 10px">
            <div class="card-body">
                <p>Somos una tienda de ropa que lleva creciendo 4 años, desde entonces, hemos permanecido en rapel, de la región de bernardo O'higgins. Tenemos todo tipo de productos de vestuario que te pueden encantar, te invitamos a conocernos!</p>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header" id="bg">
                    <span>Nuestra ubicación</span>
                </div>
                <div class="card-body text-center">
                    <div id="mapid" class="text-center"></div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="card-footer"></div>
</div>



@endsection

@section('js')
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
    <script src="{{asset('js/map.js')}}"></script>
@endsection