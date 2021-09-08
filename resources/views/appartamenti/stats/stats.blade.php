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

<!--

    SEARCH BAR END

-->

<section class="tg-sectionspace tg-haslayout bg-light" style="padding-top:30px; padding-bottom:30px">
    <div class="container-fluid" id="myContainer">
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
                            <div class="d-flex flex-row justify-content-between">
                                <h3>Le Flaneur</h3>
                                <div class="btn-wrapper">
                                    <a href="" class="btn btn-danger">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                    <a href="" class="btn btn-warning">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <input type="checkbox" checked data-toggle="toggle" data-size="md">
                                </div>
                            </div>
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
                                    <a href="#" class="">22 visite</a>
                                </span>
                                <span><a href="#" class="">3 messaggi</a></span>
                                
                            </div>
                                <a href="#" class="btn btn-danger d-flex flex-row align-items-center">
                                    <i class="fa fa-bolt" aria-hidden="true"></i>
                                    <span class="ml-1"> <a href="{{ route('stat') }}"> STATISTICHE </a></span>
                                </a>
                        </div>
                    </div>
                </div>
                </div>
</section>
@endsection

