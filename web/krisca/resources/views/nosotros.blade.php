@extends('layouts.master')

@section('body')
<div class="card text-center">
    <div class="card-header">
        <img src="{{asset('img/nosotros.png')}}" class="animate__animated animate__heartBeat">
        <!--<h1 class="animate__animated animate__heartBeat">Nosotros</h1>-->
        
    </div>
    <div class="card-body ms-5 me-5">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
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