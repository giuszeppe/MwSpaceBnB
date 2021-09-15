
@if($type = Session::get('type'))
    <div class="alert alert-{{$type}}">
        <p class="alert-message">{{Session::get('message')}}</p>
    </div>
@endif