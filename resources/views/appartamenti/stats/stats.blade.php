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
                                <x-button link="{!! route('stat') !!}" message="STATISTICHE"> </x-button>
                        </div>
                    </div>
                </div>
                </div>
</section>
@endsection

