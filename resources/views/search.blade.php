@extends('layouts.app') @section('content')


<x-searchbar> </x-searchbar>


<section class="tg-sectionspace tg-haslayout" style="padding-top:30px;">
    <div class="container-fluid" id="myContainer">
        <div class="row">
            <a href="#">Home</a>
             > 
            <a href="#">Foligno</a>
             >
            <a href="#">Centro</a>
             >
            <a href="#">Mondo</a>
            <hr class="path-separator">
        </div>
        <div class="row">
            <h1>MwSpaceBnB</h1>
        </div>
        <div class="row">
            <div class="col-xs-4">
                    <img src="/images/img-01.jpg">
            </div>
            <div class="col-xs-8 d-flex flex-column justify-content-between">
                <div class="container search-result bg-light pb-2">
                    <div>
                        <h3>33 Strutture trovate</h3>
                        <p>Prezzi calcolati per 1 notte (data odierna) per 1 ospite</p>
                        <span>
                            <a href="#">
                                Cambia date
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </a>
                        </span>
                        <select name="order" id="order select">
                            <option value="">Ordina Per</option>
                        </select>
                    </div>
                </div>
                <div>
                    <p class="m-0">
                        33 Strutture nei dintorni di Foligno
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xs-4">
                <form action="#" class="bg-light p-5">
                    <div class="form-group">

                        <div class="filtri-row">
                            <div class="filtri-label">Numero minimo di stanze</div>
                            <div class="filtri-limit"><input type="number" name="" id="" class="form-control"></div>
                        </div>
                        <div class="filtri-row">
                            <div class="filtri-label">Numero minimo di posti letto</div>
                            <div class="filtri-limit"><input type="number" name="" id="" class="form-control"></div>
                        </div>
                        <div class="filtri-row">
                            <div class="filtri-label">Servizi</div>
                            <div class="filtri-chechbox">
                                <label for="servizio-0"> Servizio 1
                                    <input type="checkbox" name="" id="servizio-0">
                                </label>
                                
                            </div>
                            <div class="filtri-chechbox">
                                <label for="servizio-1"> Servizio 2
                                    <input type="checkbox" name="" id="servizio-1">

                                </label>
                                
                            </div>
                            <div class="filtri-chechbox">
                                <label for="servizio-2">Servizio 3
                                    <input type="checkbox" name=""  id="servizio-2">
                                </label>
                                
                            </div>
                            <div class="filtri-chechbox">
                                <label for="servizio-3">Servizio 4
                                    <input type="checkbox" name=""id="servizio-3">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="filtri-btn d-flex justify-content-center">
                        <input type="submit" class="btn btn-block btn-primary">
                    </div>
                </form>
            </div>
            <div class="col-xs-8">
                <div class="result-box border p-3 mb-4">
                    <div class="row rb-corpo">
                        <div class="col-3">
                            <div class="result-img">
                                <a href="#">
                                    <img src="/images/img-01.jpg" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col">
                                    <h3><a href="{{route('detail')}}">Le Flaneur</a></h3>
                            <div class="row">
                                <div class="col-6">
                                    <div> 8 Stanze</div>
                                    <div>3 Posti letto</div>
                                    <div>5 bagni</div>
                                    <div>95 metri quadrati</div>
                                    <div>Indirizzo</div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Wi-Fi
                                    </div>
                                    <div>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Riscaldamento
                                    </div>
                                    <div>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Parcheggio coperto
                                    </div>
                                    <div>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Piscina
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="row ">
                        <div class="col d-flex flex-row justify-content-around ">
                            <div class="rb-action d-flex flex-row justify-content-between px-5">

                                <span>
                                    <a href="#" class="">Dettagli</a>
                                </span>

                                
                            </div>
                                <x-button link="#"> </x-button>
                        </div>
                    </div>
                </div>

                <div class="result-box border p-3 mb-4">
                    <div class="row rb-corpo">
                        <div class="col-3">
                            <div class="result-img">
                                <a href="#">
                                    <img src="/images/img-01.jpg" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col">
                                    <h3><a href="{{route('detail')}}">Le Flaneur</a></h3>
                            <div class="row">
                                <div class="col-6">
                                    <div> 8 Stanze</div>
                                    <div>3 Posti letto</div>
                                    <div>5 bagni</div>
                                    <div>95 metri quadrati</div>
                                    <div>Indirizzo</div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Wi-Fi
                                    </div>
                                    <div>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Riscaldamento
                                    </div>
                                    <div>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Parcheggio coperto
                                    </div>
                                    <div>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Piscina
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="row ">
                        <div class="col d-flex flex-row justify-content-around ">
                            <div class="rb-action d-flex flex-row justify-content-between px-5">

                                <span>
                                    <a href="#" class="">Dettagli</a>
                                </span>

                                
                            </div>
                                <x-button link="#"> </x-button>
                        </div>
                    </div>
                </div>
                <div class="result-box border p-3">
                    <div class="row rb-corpo">
                        <div class="col-3">
                            <div class="result-img">
                                <a href="#">
                                    <img src="/images/img-01.jpg" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col">
                                    <h3><a href="{{route('detail')}}">Le Flaneur</a></h3>
                            <div class="row">
                                <div class="col-6">
                                    <div>8 Stanze</div>
                                    <div>3 Posti letto</div>
                                    <div>5 bagni</div>
                                    <div>95 metri quadrati</div>
                                    <div>Indirizzo</div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Wi-Fi
                                    </div>
                                    <div>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Riscaldamento
                                    </div>
                                    <div>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Parcheggio coperto
                                    </div>
                                    <div>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Piscina
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="row ">
                        <div class="col d-flex flex-row justify-content-around ">
                            <div class="rb-action d-flex flex-row justify-content-between px-5">

                                <span>
                                    <a href="#" class="">Dettagli</a>
                                </span>

                                
                            </div>
                                <x-button link="#"> </x-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
