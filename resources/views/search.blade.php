@extends('layouts.app') @section('content')
<section class="tg-sectionspace">
    <div class="container">
        <div class="row">
            <form class="tg-formtheme tg-formtrip">
                <fieldset class="search-form-wrapper">
                    <div class="form-group">
                        <div class="tg-input">
                            <input
                                type="text"
                                name="address"
                                class="tg-input-text"
                                placeholder="Dove vuoi alloggiare?"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="tg-date">
                            <input
                                type="date"
                                name=""
                                id=""
                                class="tg-input-date"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="tg-date">
                            <input
                                type="date"
                                name=""
                                id=""
                                class="tg-input-date"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="tg-select">
                            <select
                                class="selectpicker"
                                data-live-search="true"
                                data-width="100%"
                            >
                                <option data-tokens="adul>ti">Adulti</option>
                                <option data-tokens="2 persone">
                                    2 persone
                                </option>
                                <option data-tokens="3 persone">
                                    3 persone
                                </option>
                                <option data-tokens="4 persone">
                                    4 persone
                                </option>
                                <option data-tokens="5 persone">
                                    5 persone
                                </option>
                                <option data-tokens="6 persone">
                                    6 persone
                                </option>
                                <option data-tokens="7 persone">
                                    7 persone
                                </option>
                                <option data-tokens="8 persone">
                                    8 persone
                                </option>
                                <option data-tokens="9 persone">
                                    9 persone
                                </option>
                                <option data-tokens="10 persone">
                                    10 persone
                                </option>
                            </select>
                        </div>
                    </div>
                    <div id="tg-search-submit">
                        <button class="tg-btn" type="submit">
                            <span>find tours</span>
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</section>

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
                                    <h3>Le Flaneur</h3>
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
                                    <div>
                                        <h3 class="mb-0">355€</h3>
                                        <p class="m-0"><i>1 notte, 1 persona</i></p>
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
                                    <a href="#" class="">Contatta</a>
                                </span>
                                <span><a href="#" class="">Recensione</a></span>
                                
                            </div>
                                <a href="#" class="btn btn-danger d-flex flex-row align-items-center">
                                    <i class="fa fa-bolt" aria-hidden="true"></i>
                                    <span class="ml-1"> PRENOTA </span>
                                </a>
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
                                    <h3>Le Flaneur</h3>
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
                                    <a href="#" class="">Contatta</a>
                                </span>
                                <span><a href="#" class="">Recensione</a></span>
                                
                            </div>
                                <a href="#" class="btn btn-danger d-flex flex-row align-items-center">
                                    <i class="fa fa-bolt" aria-hidden="true"></i>
                                    <span class="ml-1"> PRENOTA </span>
                                </a>
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
                                    <h3>Le Flaneur</h3>
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
                                    <a href="#" class="">Contatta</a>
                                </span>
                                <span><a href="#" class="">Recensione</a></span>
                                
                            </div>
                                <a href="#" class="btn btn-danger d-flex flex-row align-items-center">
                                    <i class="fa fa-bolt" aria-hidden="true"></i>
                                    <span class="ml-1"> PRENOTA </span>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
