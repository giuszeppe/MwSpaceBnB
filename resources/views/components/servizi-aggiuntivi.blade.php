@foreach (explode(',',$apartment->servizi_aggiuntivi) as $servizio)
    @if($servizio != '')
        <div>
            <i class="fa fa-check" aria-hidden="true"></i>
            {{$servizio}}
        </div>
    @endif
@endforeach