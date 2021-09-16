@extends('layouts.app') @section('content')


<x-searchbar> </x-searchbar>


<section class="tg-sectionspace tg-haslayout" style="padding-top:30px;">
    <div class="container-fluid" id="myContainer">
        <hr class="path-separator">
        <!--
        Spazio per path separator

                Foligno > Mondo > Centro
        -->
        <div class="row">
            <h1>MwSpaceBnB</h1>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 mb-4 mb-sm-0">
                    <img src="/images/img-01.jpg" alt="MAPPA">
            </div>
            <div class="col-xs-12 col-sm-8 d-flex flex-column justify-content-between">
                <div class="container search-result bg-light pb-2">
                    <div>
                        <h3>{{$apartments->count()}} Strutture trovate</h3>
                        <select name="order" id="order select" form="searchForm">
                            <option value="">--Ordina Per--</option>
                            <option value="numero_letti_asc" {{$order == 'numero_letti_asc' ? 'selected' : ''}}>Numero letti crescente</option>
                            <option value="numero_letti_desc" {{$order == 'numero_letti_desc' ? 'selected' : ''}}>Numero letti decrescente</option>
                            <option value="numero_bagni_asc" {{$order == 'numero_bagni_asc' ? 'selected' : ''}}>Numero bagni crescente</option>
                            <option value="numero_bagni_desc" {{$order == 'numero_bagni_desc' ? 'selected' : ''}}>Numero letti descrescente</option>
                            <option value="numero_stanze_asc" {{$order == 'numero_stanze_asc' ? 'selected' : ''}}>Numero stanze crescente</option>
                            <option value="numero_stanze_desc" {{$order == 'numero_stanze_desc' ? 'selected' : ''}}>Numero stanze descrescente</option>
                            <option value="metri_quadrati_asc" {{$order == 'metri_quadrati_asc' ? 'selected' : ''}}>Metri quadrati crescente</option>
                            <option value="metri_quadrati_desc" {{$order == 'metri_quadrati_desc' ? 'selected' : ''}}>Metri quadrati decrescente</option>
                        </select>
                    </div>
                </div>
                <div>
                    <p class="m-0">
                        {{$apartments->count()}} ricerche trovate con i parametri specificati.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xs-12 col-sm-4">

                    <div class="form-group bg-light p-5">
                        
                        <div class="filtri-row">
                            <div class="filtri-label">Numero minimo di stanze</div>
                            <div class="filtri-limit"><input type="number" name="numero_stanze" form="searchForm" class="form-control" value={{old('numero_stanze')}}></div>
                        </div>
                        <div class="filtri-row">
                            <div class="filtri-label">Numero minimo di posti letto</div>
                            <div class="filtri-limit"><input type="number" name="numero_letti" form="searchForm" class="form-control" value={{old('numero_letti')}}></div>
                        </div>
                        <div class="filtri-row">
                            <div class="filtri-label">Numero minimo di bagni</div>
                            <div class="filtri-limit"><input type="number" name="numero_bagni"  form="searchForm" class="form-control" value={{old('numero_bagni')}}></div>
                        </div>
                        <div class="filtri-row">
                            <div class="filtri-label">Numero minimo di metri quadrati</div>
                            <div class="filtri-limit"><input type="number" name="metri_quadrati"  form="searchForm" class="form-control" value={{old('metri_quadrati')}}></div>
                        </div>
                        <div class="filtri-row">
                            <div class="filtri-label">Servizi</div>
                            @foreach ($servizi as $servizio)
                                <div class="filtri-chechbox">
                                    <label for="servizio[{{$loop->index}}]"> {{$servizio->nome_servizio}}
                                        <input type="checkbox" name="servizi[{{$loop->index}}]" id="servizio[{{$loop->index}}]" value="{{$servizio->nome_servizio}}" @if(old('servizi') != null) @if(in_array($loop->index,array_keys(old('servizi')))) checked @endif @endif form="searchForm">
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="filtri-btn d-flex justify-content-center">
                        <input type="submit" class="btn btn-block btn-warning" form="searchForm">
                    </div>
            </div>
            <div class="col-xs-12 col-sm-8" style="word-break: ">
                @foreach ($apartments as $apartment)
                        
                    <div class="result-box border p-3 mb-4">
                        <div class="row rb-corpo">
                            <div class="col-sm-3 col-xs-12">
                                <div class="result-img">
                                    <a href="#">
                                        <img src="{{$apartment->immagine}}" alt="immagine rappresentativo appartamento">
                                    </a>
                                </div>
                            </div>

                            <div class="col">
                                        <h3><a href="{{route('apartment.show',$apartment->id)}}">{{$apartment->title}}</a></h3>
                                <div class="row">
                                    <div class="col-6">
                                        <div>{{$apartment->numero_stanze}} stanze</div>
                                        <div>{{$apartment->numero_letti}} posti letto</div>
                                        <div>{{$apartment->numero_bagni}} bagni</div>
                                        <div>{{$apartment->metri_quadrati}} metri quadrati</div>
                                        <div>{{$apartment->indirizzo}}</div>
                                    </div>
                                    <div class="col-6">
                                        @foreach (explode(',',$apartment->servizi_aggiuntivi) as $servizio)
                                            <div>
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                                {{$servizio}}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="row ">
                            <div class="col d-flex flex-row justify-content-around ">
                                <div class="rb-action d-flex flex-row justify-content-between px-5">
                                    <span>
                                        <a href="{{route('apartment.show',$apartment->id)}}">Dettagli</a>
                                    </span>
                                </div>
                                    <x-button link="{{route('apartment.show',$apartment->id)}}"> </x-button>
                            </div>
                        </div>
                    </div>
                @endforeach

        
            </div>
        </div>
    </div>
</section>
@endsection
