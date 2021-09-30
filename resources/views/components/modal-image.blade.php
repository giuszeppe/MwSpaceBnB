<img id="myImg" class="myImg" src="{{$apartment->immagine}}" alt="{{$apartment->title}}" style="width:100%">

<!-- The Modal -->
<div  class="modal">

    <!-- The Close Button -->
    <span  class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-content" src="{{$apartment->immagine}}">

    <!-- Modal Caption (Image Text) -->
    <div class="caption">{{$apartment->title}}</div>

</div>
