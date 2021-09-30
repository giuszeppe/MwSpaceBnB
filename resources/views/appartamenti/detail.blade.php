
@extends('layouts.app') @section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    
<link rel="stylesheet" href="/css/modal_image.css">
<!--

    SEARCH BAR START

-->

<x-searchbar> </x-searchbar>
<x-alert> </x-alert>
<!--

    SEARCH BAR END

-->

<section class="tg-sectionspace tg-haslayout bg-light" style="padding-top:30px; padding-bottom:30px">
    <div class="container-fluid" id="myContainer">
        <hr class="path-separator">
    <!--
        Spazio per path separator

                Foligno > Mondo > Centro
    -->
        <div class="row">
            <div class="appartment-header">
                <div class="appartment-title">
                    <h1 class="m-0 p-0">{{$apartment->title}}</h1>
                </div>
                <div class="appartment-address d-flex flex-row align-items-center justify-content-between">
                    <span>{{$apartment->indirizzo}}</span>

                    <!-- Contact button-->
                    <x-button link="#submitButton"></x-button>
                </div>
            </div>
            
            <hr class="path-separator">
        </div>
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="result-img">
                    <x-modal-image :apartment="$apartment"> </x-modal-image>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <ul>
                    <li>Numero di stanze: {{$apartment->numero_stanze}}</li>
                    <li>Numero di posti letto: {{$apartment->numero_letti}} </li>
                    <li>Numero di bagni: {{$apartment->numero_bagni}}</li>
                    <li>Indirizzo: {{$apartment->indirizzo}}</li>
                    <li>Metri quadrati: {{$apartment->metri_quadrati}}</li>
                    <li class="servizi-aggiuntivi">Servizi aggiuntivi:
                        <x-servizi-aggiuntivi :apartment="$apartment"> </x-servizi-aggiuntivi>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="tg-sectionspace tg-haslayout" style="padding-top:30px" >
    <div class="container-fluid myContainer" id="contact-form">
        <h1>Contatta il venditore!</h1>
        <div class="row">
            <div class="col-12">
                <form action="{{route('message.send',$apartment->id)}}">
                    <div class="form-group">
                        <label for="emailField">Email (verrai ricontattato qui) </label>
                        <input type="email" name="email_mittente" id="emailField" class="form-control" @auth
                            value="{{auth()->user()->email}}"
                        @endauth>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Messaggio</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="corpo"></textarea>
                    </div>
                    <input class="btn btn-warning btn-lg" type="submit" value="Invia messaggio" id="submitButton">
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div id="mapid" style="height:500px; z-index:1">

                </div>
            </div>
        </div>
    </div>
</section>
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OverlappingMarkerSpiderfier-Leaflet/0.2.6/oms.min.js"></script>
<script src="/js/map.js" latitude = "{{$apartment->latitude}}" longitude="{{$apartment->longitude}}" title="{{$apartment->title}}"></script>
<script src="/js/modal_image.js"></script>
@endsection
