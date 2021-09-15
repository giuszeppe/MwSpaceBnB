
@extends('layouts.app') @section('content')
<!--

    SEARCH BAR START

-->

<x-searchbar> </x-searchbar>

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
                <img src="{{$apartment->immagine}}" alt="immagine rappresentativa appartamento" class="detail-img ml-2">
            </div>
            <div class="col-sm-6 col-xs-12">
                <ul>
                    <li>Numero di stanze: {{$apartment->numero_stanze}}</li>
                    <li>Numero di posti letto: {{$apartment->numero_letti}} </li>
                    <li>Numero di bagni: {{$apartment->numero_bagni}}</li>
                    <li>Indirizzo: {{$apartment->indirizzo}}</li>
                    <li>Metri quadrati: {{$apartment->metri_quadrati}}</li>
                    <li class="servizi-aggiuntivi">Servizi aggiuntivi:
                        @foreach (explode(',',$apartment->servizi_aggiuntivi) as $servizio)
                            <div>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                {{$servizio}}
                            </div> 
                        @endforeach
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
                <form action="#">
                    <div class="form-group">
                        <label for="emailField">Email (verrai ricontattato qui) </label>
                        <input type="email" name="email" id="emailField" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Messaggio</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message_text"></textarea>
                    </div>
                    <input class="btn btn-warning btn-lg" type="submit" value="Invia messaggio" id="submitButton">
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
