@extends('layouts.app')

@section('content')

    <x-alert> </x-alert>
    </section>
    <!--************************************
			 Home Slider Start
		*************************************-->
      <div class="tg-bannerholder">
        <div class="tg-slidercontent">
            <x-searchbar> </x-searchbar>
        </div>
        <div id="tg-homeslider" class="tg-homeslider owl-carousel tg-haslayout">
          <figure
            class="item"
            data-vide-bg="poster: images/homepage-01.jpg"
            data-vide-options="position: 0% 50%"
          ></figure>
          <figure
            class="item"
            data-vide-bg="poster: images/homepage-02.jpg"
            data-vide-options="position: 0% 50%"
          ></figure>
          <figure
            class="item"
            data-vide-bg="poster: images/homepage-03.jpg"
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
                    <a class="tg-btnvtwo" href="{{route('getSearch')}}"
                      >Tutti gli appartamenti</a
                    >
                  </div>
                  <div
                    id="tg-populartoursslider"
                    class="tg-populartoursslider tg-populartours owl-carousel"
                  >
                  @foreach ($apartments as $apartment)
                    
                    <div class="item tg-populartour bg-warning">
                      <figure>
                        <a href="tourbookingdetail.html"
                          ><img
                            src="{{$apartment->immagine}}"
                            alt="{{$apartment->title}}"
                        /></a>
                      </figure>
                      <div class="tg-populartourcontent">
                        <div class="tg-populartourtitle">
                          <h3>
                            <a href="{{route('apartment.show',$apartment->id)}}"
                              >{{$apartment->title}}</a
                            >
                          </h3>
                        </div>
                        <div class="tg-description">
                          <p>
                            @foreach (array_slice(explode(',',$apartment->servizi_aggiuntivi),0,4) as $servizio)
                                @if($servizio != '')
                                    <div>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        {{$servizio}}
                                    </div>
                                @endif
                            @endforeach
                          </p>
                        </div>
                        <div class="tg-populartourfoot">
                          <x-button link="{{route('apartment.show',$apartment->id)}}" message="Dettagli"> </x-button>
                        </div>
                      </div>
                    </div>
                  @endforeach
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