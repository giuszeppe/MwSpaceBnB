@extends('layouts.app')
@section('content')

    <section class="tg-sectionspace tg-haslayout bg-light" style="padding-bottom:30px">
        <div class="container-fluid" id="myContainer">
            <h1 class="h1">Modifica un appartamento</h1>
                <form action="{{route('apartment.update',$apartment->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col">
                            <label for="title">Title</label>
                                <input id="title" type="text" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{ old('title') ?? $apartment->title }}" autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-row mt-4 form-number">
                        <div class="col">
                            <div class="form-group">
                                <label for="numero_stanze">Numero stanze</label>

                                <input type="number" class="form-control @error('numero_stanze') is-invalid @enderror" value="{{old('numero_stanze') ?? $apartment->numero_stanze }}" id="numero_stanze" name="numero_stanze" placeholder="0" min=0 >
                                @error('numero_stanze')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="numero_letti">Numero posti letto</label>
                                <input type="number" class="form-control @error('numero_letti') is-invalid @enderror" value="{{old('numero_letti') ?? $apartment->numero_letti}}" id="numero_letti" name="numero_letti" placeholder="0" min=0 >
                                @error('numero_letti')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="numero_bagni">Numero bagni</label>
                                <input type="number" class="form-control @error('numero_bagni') is-invalid @enderror" value="{{old('numero_bagni') ?? $apartment->numero_bagni}}" id="numero_bagni" name="numero_bagni" placeholder="0" min=0 >
                                @error('numero_bagni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="metri_quadrati">Metri quadrati</label>
                                <input type="number" class="form-control @error('metri_quadrati') is-invalid @enderror" value="{{old('metri_quadrati') ?? $apartment->metri_quadrati }}" id="metri_quadrati" name="metri_quadrati" placeholder="0" min=0 >
                                @error('metri_quadrati')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="indirizzo">Indirizzo</label>
                            <input type="text" class="form-control @error('indirizzo') is-invalid @enderror" value="{{old('indirizzo') ?? $apartment->indirizzo}}" id="indirizzo" name="indirizzo" >
                            @error('indirizzo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="formFile" class="form-label">Carica un immagine</label>
                            <input type="file" class="form-control-file @error('immagine') is-invalid @enderror" value="{{old('immagine')}}" id="formFile" name="immagine" placeholder="0" min=0 >
                            @error('immagine')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <div class="input-group">
                                
                                <input type="text" name="servizio" id="servizio" class="form-control" value="servizi aggiuntivi">
                                <div class="input-group-append">
                                    <button id="add_btn" class="btn btn-outline-secondary">
                                        +
                                    </button>
                                </div>
                            </div>
                            <ul id="servizi_aggiuntivi">
                               @foreach (explode(',',$apartment->servizi_aggiuntivi) as $servizio)
                                    <span class="span-services" id="servizio{{$loop->index}}">
                                        <li>
                                            {{$servizio}}
                                        </li>
                                        <button class="btn btn-danger btn-sm mt-2 mb-2 ml-3" name="servizio{{$loop->index}}">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                        <input type="hidden" name="servizi[{{$loop->index}}]" style="display:none" value="{{$servizio}}">
                                    </span>
                                   
                               @endforeach 
                            </ul>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="active" class="mb-1">Attivo</label>
                            <input type="checkbox" {{$apartment->active == 1 ? "checked" : ""}} data-toggle="toggle" data-size="md" name="active">
                        </div>
                        
                    </div>

                    <div class="form-row">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 mx-0 px-0">
                                <input class="form-control" type="submit" id="formSubmit" value="Applica modifiche">
                            </div> 
                    </div>
                </form>
        </div>            
    </section>
    <script src="/js/additional_services.js"></script>
@endsection

