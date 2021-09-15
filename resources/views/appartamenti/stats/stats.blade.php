@extends('layouts.app') @section('content')
<!--

    SEARCH BAR START

-->
<x-searchbar> </x-searchbar>

<x-alert> </x-alert>
<!--

    SEARCH BAR END

-->

<section class="tg-sectionspace tg-haslayout bg-light" style="padding-top:30px; padding-bottom:30px">
    <div class="container-fluid" id="myContainer">
	<h1 class="h1"> Tutti gli appartamenti ({{$apartments->count()}})</h1>
	<a href="{{route('apartment.create')}}" class="btn btn-primary mb-3"> Crea </a>
        @foreach ($apartments as $apartment)
        <x-stats-result-box :apartment="$apartment">
        </x-stats-result-box>
        @endforeach
    </div>
</section>
@endsection

