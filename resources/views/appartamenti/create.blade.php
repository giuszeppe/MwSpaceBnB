@extends('layouts.app')
@section('content')
    <section class="tg-sectionspace tg-haslayout bg-light" style="padding-bottom:30px">
        <div class="container-fluid" id="myContainer">
            <h1>Aggiungi un appartamento</h1>
                <form action="#">
                    <div class="form-row">
                        <div class="col">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Titolo dell'appartamento" required>
                        </div>
                    </div>
                    <div class="form-row mt-4 form-number">
                        <div class="col">
                            <div class="form-group">
                                <label for="title">Numero stanze</label>
                                <input type="number" class="form-control" id="title" placeholder="0" min=0 required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="title">Numero posti letto</label>
                                <input type="number" class="form-control" id="title" placeholder="0" min=0 required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="title">Numero bagni</label>
                                <input type="number" class="form-control" id="title" placeholder="0" min=0 required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="title">Metri quadrati</label>
                                <input type="number" class="form-control" id="title" placeholder="0" min=0 required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="title">Indirizzo</label>
                            <input type="address" class="form-control" id="title" placeholder="Indirizzo" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="formFile" class="form-label">Carica un immagine</label>
                            <input class="form-control-file" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="form-row">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 ml-0 pl-0">
                                <input class="form-control" type="submit" id="formSubmit">
                            </div> 
                    </div>
                </form>
        </div>            
    </section>
@endsection

