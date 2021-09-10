
@extends('layouts.app') @section('content')
<!--

    SEARCH BAR START

-->
<section class="tg-sectionspace" style="padding-bottom:30px">
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
                    <h1 class="m-0 p-0">Appartamento</h1>
                </div>
                <div class="appartment-address d-flex flex-row align-items-center justify-content-between">
                    <span>VIA XX SETTEMBRE, 10 - <strong>Montaleghe(TO)</strong></span>
                    <x-button link="#"> </x-button>
                </div>
            </div>
            
            <hr class="path-separator">
        </div>
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <img src="/images/img-01.jpg" alt="immagine rappresentativa appartamento" class="detail-img ml-2">
            </div>
            <div class="col-sm-6 col-xs-12">
                <ul>
                    <li>Numero di stanze: 3</li>
                    <li>Numero di posti letto: 8 </li>
                    <li>Numero di bagni: 2</li>
                    <li>Indirizzo: Via della pescara</li>
                    <li>Metri quadrati: 60mq</li>
                    <li class="servizi-aggiuntivi">Servizi aggiuntivi:
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
                    <input class="btn btn-warning btn-lg" type="submit" value="Invia messaggio">
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
