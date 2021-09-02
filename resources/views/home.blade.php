@extends('layouts.app')

@section('content')

    </section>
      <!--************************************
				Home Slider Start
		*************************************-->
      <div class="tg-bannerholder">
        <div class="tg-slidercontent">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1>Cerca il tuo appartamento</h1>
                <h2>Ce ne sono per tutti i gusti</h2>
                <form class="tg-formtheme tg-formtrip">
                  <fieldset>
                    <div class="form-group">
                      <div class="tg-input">
                        <input type="text" name="address" class="tg-input-text" placeholder="Dove vuoi alloggiare?">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="tg-date">
                        <input type="date" name="" id="" class="tg-input-date">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="tg-date">
                        <input type="date" name="" id="" class="tg-input-date">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="tg-select">
                        <select
                          class="selectpicker"
                          data-live-search="true"
                          data-width="100%"
                        >
                          <option data-tokens="adulti">Adulti</option>
                          <option data-tokens="2 persone">  2 persone </option>
                          <option data-tokens="3 persone">  3 persone </option>
                          <option data-tokens="4 persone">  4 persone </option>
                          <option data-tokens="5 persone">  5 persone </option>
                          <option data-tokens="6 persone">  6 persone </option>
                          <option data-tokens="7 persone">  7 persone </option>
                          <option data-tokens="8 persone">  8 persone </option>
                          <option data-tokens="9 persone">  9 persone </option>
                          <option data-tokens="10 persone"> 10 persone </option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <button class="tg-btn" type="submit">
                        <span>find tours</span>
                      </button>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div id="tg-homeslider" class="tg-homeslider owl-carousel tg-haslayout">
          <figure
            class="item"
            data-vide-bg="poster: images/slider/img-01.jpg"
            data-vide-options="position: 0% 50%"
          ></figure>
          <figure
            class="item"
            data-vide-bg="poster: images/slider/img-02.jpg"
            data-vide-options="position: 0% 50%"
          ></figure>
          <figure
            class="item"
            data-vide-bg="poster: images/slider/img-03.jpg"
            data-vide-options="position: 0% 50%"
          ></figure>
        </div>
      </div>
      <!--************************************
				Home Slider End
		*************************************-->

@endsection