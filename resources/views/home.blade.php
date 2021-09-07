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
					Advantures Start
		*************************************-->
        <section class="tg-sectionspace tg-haslayout">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-toursdestinations">
                  <div class="tg-tourdestination tg-tourdestinationbigbox">
                    <figure>
                      <a href="javascript:void(0);">
                        <img
                          src="/images/destination/img-01.jpg"
                          alt="image destinations"
                        />
                        <div class="tg-hoverbox">
                          <div class="tg-adventuretitle">
                            <h2>Ice Adventure Vacations</h2>
                          </div>
                          <div class="tg-description">
                            <p>your best vacation ever</p>
                          </div>
                        </div>
                      </a>
                    </figure>
                  </div>
                  <div class="tg-tourdestination">
                    <figure>
                      <a href="javascript:void(0);">
                        <img
                          src="/images/destination/img-02.jpg"
                          alt="image destinations"
                        />
                        <div class="tg-hoverbox">
                          <div class="tg-adventuretitle">
                            <h2>National Park</h2>
                          </div>
                        </div>
                      </a>
                    </figure>
                  </div>
                  <div class="tg-tourdestination">
                    <figure>
                      <a href="javascript:void(0);">
                        <img
                          src="/images/destination/img-03.jpg"
                          alt="image destinations"
                        />
                        <div class="tg-hoverbox">
                          <div class="tg-adventuretitle">
                            <h2>Adult Vacations</h2>
                          </div>
                        </div>
                      </a>
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <!--************************************
					Advantures End
			*************************************-->
      <!--************************************
					Features Start
			*************************************-->
        <section class="tg-sectionspace tg-zerotoppadding tg-haslayout">
          <div class="container">
            <div class="row">
              <div class="tg-features">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <div class="tg-feature">
                    <div class="tg-featuretitle">
                      <h2><span>01</span>Luxury Hotels</h2>
                    </div>
                    <div class="tg-description">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit, sed diam nonummy nibh tempor cum soluta nobis
                        consectetuer nihil imperdiet doming...
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <div class="tg-feature">
                    <div class="tg-featuretitle">
                      <h2><span>02</span>Tourist Guide</h2>
                    </div>
                    <div class="tg-description">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit, sed diam nonummy nibh tempor cum soluta nobis
                        consectetuer nihil imperdiet doming...
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <div class="tg-feature">
                    <div class="tg-featuretitle">
                      <h2><span>03</span>Flights Tickets</h2>
                    </div>
                    <div class="tg-description">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit, sed diam nonummy nibh tempor cum soluta nobis
                        consectetuer nihil imperdiet doming...
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <!--************************************
					Features End
			*************************************-->
      <!--************************************
					Popular Tour Start
			*************************************-->
        <section
          class="tg-parallax"
          data-appear-top-offset="600"
          data-parallax="scroll"
          data-image-src="/images/parallax/bgparallax-01.jpg"
        >
          <div class="tg-sectionspace tg-haslayout">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="tg-sectiontitle tg-sectiontitleleft">
                    <h2>Popular Tours</h2>
                    <a class="tg-btnvtwo" href="javascript:void(0);"
                      >All Tours</a
                    >
                  </div>
                  <div
                    id="tg-populartoursslider"
                    class="tg-populartoursslider tg-populartours owl-carousel"
                  >
                    <div class="item tg-populartour">
                      <figure>
                        <a href="tourbookingdetail.html"
                          ><img
                            src="/images/tours/img-01.jpg"
                            alt="image destinations"
                        /></a>
                        <span class="tg-descount">25% Off</span>
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
                          <div class="tg-durationrating">
                            <span class="tg-tourduration">7 Days</span>
                            <span class="tg-stars"><span></span></span>
                            <em>(3 Review)</em>
                          </div>
                          <div class="tg-pricearea">
                            <del>$2,800</del>
                            <h4>$2,500</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item tg-populartour">
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
                          <div class="tg-durationrating">
                            <span class="tg-tourduration">7 Days</span>
                            <span class="tg-stars"><span></span></span>
                            <em>(3 Review)</em>
                          </div>
                          <div class="tg-pricearea">
                            <span>from</span>
                            <h4>$600</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item tg-populartour">
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
                          <div class="tg-durationrating">
                            <span class="tg-tourduration">7 Days</span>
                            <span class="tg-stars"><span></span></span>
                            <em>(3 Review)</em>
                          </div>
                          <div class="tg-pricearea">
                            <span>from</span>
                            <h4>$1,430</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item tg-populartour">
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
                          <div class="tg-durationrating">
                            <span class="tg-tourduration">7 Days</span>
                            <span class="tg-stars"><span></span></span>
                            <em>(3 Review)</em>
                          </div>
                          <div class="tg-pricearea">
                            <span>from</span>
                            <h4>$600</h4>
                          </div>
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