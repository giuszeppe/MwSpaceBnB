<div class="result-box border p-3 mb-4">
    <div class="row rb-corpo">
        <div class="col-xs-12 col-sm-3 mb-3 mb-sm-0">
            <div class="result-img">
                <a href="#">
                    <img src="{{$apartment->immagine}}" alt="">
                </a>
            </div>
        </div>
        
        <div class="col">
            <div class="d-flex flex-row justify-content-between">
                <h3><a href="{{route('apartment.show',$apartment->id)}}" class="">{{$apartment->title}}</a></h3>
                <div class="btn-wrapper">
                    <span class="btn btn-danger" onclick="event.preventDefault();document.getElementById('deleteForm{{$apartment->id}}').submit()">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </span>
                    <a class="btn btn-warning" href="{{route('apartment.edit',$apartment->id)}}">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <form action="{{route('apartment.destroy',$apartment->id)}}" style="display:none" id="deleteForm{{$apartment->id}}" method="POST">@csrf @method('DELETE')</form>
                    <span class="badge @if($apartment->active == 1)badge-success @else badge-danger @endif">{{$apartment->active==1 ? "on" : "off"}}</span>
                </div>
            </div>
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
            <hr>
            <div class="row text-wrap">
                <div class="col d-flex flex-row justify-content-around ">
                    <div class="rb-action d-flex flex-column flex-sm-row justify-content-between px-5 mb-4 mb-sm-0">
                        <span class="text-wrap">
                            <a href="{{route('apartment.stat',$apartment->id)}}">22 visite</a>
                        </span>
                        <span class="text-wrap"><a href="{{route('apartment.stat',$apartment->id)}}">{{$apartment->messages->count()}} {{$apartment->messages->count() > 1 || $apartment->messages->count() == 0 ? "messaggi" : "messaggio"}}</a></span>
                    </div>
                        <x-button link="{{ route('apartment.stat',$apartment->id) }}" message="STATISTICHE"> </x-button>
                </div>
            </div>
        </div>
    </div>
</div>