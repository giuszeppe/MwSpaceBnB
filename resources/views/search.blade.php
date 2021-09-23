@extends('layouts.app') @section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    


<x-searchbar required="false"> </x-searchbar>

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
            <div id="mapid" class="col-xs-12 col-sm-4 mb-4 mb-sm-0 shadow-div" style="height: 200px; z-index:1"> </div>
            <div class="col-xs-12 col-sm-8 d-flex flex-column justify-content-between">
                <div class="container search-result bg-light pb-2 shadow-div">
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
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xs-12 col-sm-4">

                    <div class="form-group bg-light p-5 shadow-div">
                        <h3>Filtri</h3>    
                        <div class="filtri-row">
                            <div class="filtri-label">Titolo appartamento</div>
                            <div class="filtri-limit"><input type="text" name="title" form="searchForm" class="form-control" value={{old('title')}}></div>
                        </div>

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
            <hr class="path-separator">
                        <div class="filtri-row">
                            <div class="filtri-label"><h3>Servizi</h3></div>
                            @foreach ($servizi as $servizio)
                                <div class="filtri-chechbox">

                                    @if(old('servizi') != null)
                                        <x-checkbox 
                                            :label="$servizio->nome_servizio" 
                                            name="servizi[{{$loop->index}}]" 
                                            id="servizio[{{$loop->index}}]" 
                                            :value="$servizio->nome_servizio" 
                                            form="searchForm"
                                            :loop_index="$loop->index"
                                            checked="{{array_key_exists($loop->index,old('servizi'))}}"
                                        > 
                                        </x-checkbox>
                                    @else
                                        <x-checkbox 
                                            :label="$servizio->nome_servizio" 
                                            name="servizi[{{$loop->index}}]" 
                                            id="servizio[{{$loop->index}}]" 
                                            :value="$servizio->nome_servizio" 
                                            form="searchForm"
                                            :loop_index="$loop->index"
                                        > 
                                        </x-checkbox>
                                    @endif
                                </div>
                            @endforeach
                            </div>
                       </div>
                    <div class="filtri-btn d-flex justify-content-center">
                        <input type="submit" class="btn btn-block btn-warning" form="searchForm">
                    </div>
            </div>
            <div class="col-xs-12 col-sm-8" id="result-wrapper">
                @foreach ($apartments as $apartment)
                
                    <div class="result-box border p-3 mb-4">
                        <input type="hidden" name="lat" value="{{$apartment->latitude}}">
                        <input type="hidden" name="long" value="{{$apartment->longitude}}">
                        <input type="hidden" name="title" value="{{$apartment->title}}">
                        <input type="hidden" name="id" value="{{$apartment->id}}">
                        <div class="row rb-corpo">
                            <div class="col-sm-3 col-xs-12">
                                <div class="result-img">
                                    <a href="{{route('apartment.show',$apartment->id)}}">
                                        <x-modal-image :apartment="$apartment"> </x-modal-image>
                                    </a>
                                </div>
                            </div>

                            <div class="col">
                                        <h3 class="title"><a href="{{route('apartment.show',$apartment->id)}}">{{$apartment->title}}</a></h3>
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
                                            @if($servizio != '')
                                                <div>
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                    {{$servizio}}
                                                </div>
                                            @endif
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

 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OverlappingMarkerSpiderfier-Leaflet/0.2.6/oms.min.js"></script>
   <script src="/js/map.js" latitude="{{$coordinates['latitude']}}" longitude="{{$coordinates['longitude']}}"> </script>
@endsection
