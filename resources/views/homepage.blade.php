@extends('layouts.app')

@section('content')

    <x-alert> </x-alert>
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
        
                    <div id="tg-search-submit">
                        <button class="tg-btn searchbar" type="submit">
                            <span>Trova appartamenti</span>
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

      <!--************************************
					Popular Tour Start
			*************************************-->
        <section
          class="bg-light"
        >
          <div class="tg-sectionspace tg-haslayout">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="tg-sectiontitle tg-sectiontitleleft">
                    <h2>Appartamenti in tendenza</h2>
                    <a class="tg-btnvtwo" href="javascript:void(0);"
                      >Tutti gli appartamenti</a
                    >
                  </div>
                  <div
                    id="tg-populartoursslider"
                    class="tg-populartoursslider tg-populartours owl-carousel"
                  >
                    <div class="item tg-populartour bg-warning">
                      <figure>
                        <a href="tourbookingdetail.html"
                          ><img
                            src="/images/tours/img-01.jpg"
                            alt="image destinations"
                        /></a>
                      </figure>
                      <div class="tg-populartourcontent">
                        <div class="tg-populartourtitle">
                          <h3>
                            <a href="tourbookingdetail.html"
                              >City Tours in Europe, Paris</a
                            >
                          </h3>
                        </div>
                        <div class="tg-description">
                          <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh...
                          </p>
                        </div>
                        <div class="tg-populartourfoot">
                    
                        </div>
                      </div>
                    </div>
                    <div class="item tg-populartour bg-warning">
                      <figure>
                        <a href="tourbookingdetail.html"
                          ><img
                            src="/images/tours/img-02.jpg"
                            alt="image destinations"
                        /></a>
                      </figure>
                      <div class="tg-populartourcontent">
                        <div class="tg-populartourtitle">
                          <h3>
                            <a href="tourbookingdetail.html"
                              >Best of Canada Tours and Travel</a
                            >
                          </h3>
                        </div>
                        <div class="tg-description">
                          <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh...
                          </p>
                        </div>
                        <div class="tg-populartourfoot">

                        </div>
                      </div>
                    </div>
                    <div class="item tg-populartour bg-warning">
                      <figure>
                        <a href="tourbookingdetail.html"
                          ><img
                            src="/images/tours/img-03.jpg"
                            alt="image destinations"
                        /></a>
                      </figure>
                      <div class="tg-populartourcontent">
                        <div class="tg-populartourtitle">
                          <h3>
                            <a href="tourbookingdetail.html"
                              >Italy – 3 Days in Rome, Golden Gate</a
                            >
                          </h3>
                        </div>
                        <div class="tg-description">
                          <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh...
                          </p>
                        </div>
                        <div class="tg-populartourfoot">
                         

                        </div>
                      </div>
                    </div>
                    <div class="item tg-populartour bg-warning">
                      <figure>
                        <a href="tourbookingdetail.html"
                          ><img
                            src="/images/tours/img-04.jpg"
                            alt="image destinations"
                        /></a>
                      </figure>
                      <div class="tg-populartourcontent">
                        <div class="tg-populartourtitle">
                          <h3>
                            <a href="tourbookingdetail.html"
                              >Best of Canada Tours and Travel</a
                            >
                          </h3>
                        </div>
                        <div class="tg-description">
                          <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh...
                          </p>
                        </div>
                        <div class="tg-populartourfoot">

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <!--************************************
					Popular Tour End
			*************************************-->
@endsection