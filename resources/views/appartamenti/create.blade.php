@extends('layouts.app')
@section('content')

    <section class="tg-sectionspace tg-haslayout bg-light" style="padding-bottom:30px">
        <div class="container-fluid" id="myContainer">
            <h1 class="h1">Aggiungi un appartamento</h1>
                <form action="{{route('apartment.store')}}" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"placeholder="Titolo dell'appartamento" required>
                        </div>
                    </div>
                    <div class="form-row mt-4 form-number">
                        <div class="col">
                            <div class="form-group">
                                <label for="numero_stanze">Numero stanze</label>
                                <input type="number" class="form-control" id="numero_stanze" name="numero_stanze" placeholder="0" min=0 required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="numero_letti">Numero posti letto</label>
                                <input type="number" class="form-control" id="numero_letti" name="numero_letti" placeholder="0" min=0 required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="numero_bagni">Numero bagni</label>
                                <input type="number" class="form-control" id="numero_bagni" name="numero_bagni" placeholder="0" min=0 required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="metri_quadrati">Metri quadrati</label>
                                <input type="number" class="form-control" id="metri_quadrati" name="metri_quadrati" placeholder="0" min=0 required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="indirizzo">Indirizzo</label>
                            <input type="address" class="form-control" id="indirizzo" name="indirizzo" placeholder="Indirizzo" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="formFile" class="form-label">Carica un immagine</label>
                            <input class="form-control-file" type="file" id="formFile" name="immagine">
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="servizio">Servizi aggiuntivi</label>
                        <input type="text" name="servizio" id="servizio" class="form-control">
                        <button id="add_btn">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                        <ul id="servizi_aggiuntivi">
                            
                        </ul>
                    </div>
                    <div class="form-row">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 ml-0 pl-0">
                                <input class="form-control" type="submit" id="formSubmit">
                            </div> 
                    </div>
                </form>
        </div>            
    </section>
    <script src="/js/additional_services.js"></script>
@endsection

