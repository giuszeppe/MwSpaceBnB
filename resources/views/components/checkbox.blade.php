<label>
    <input type="checkbox"
    {!!$value != null ? "value='{$value}'"  : null!!} 
    {{$id != null ? "id=" . $id : null}} 
    {{$class != null ? "class=" . $class  : null}} 
    {{$name != null ? "name=" . $name   : null}} 
    {{$form != null ? "form=" . $form  : null}} 
    {{$checked != null ? 'checked' : null}}
    >
    <span>{{$label != null ? $label : null}} </span>
</label>