<div class="group">      
    <input type="{{$type}}" class="{{$class}}" id="{{$id ?? ''}}" value="{{$value}}" placeholder="{{$placeholder ?? ''}}" @if($required ?? ''!="") required @endif>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>{{--$label--}}</label>
</div>