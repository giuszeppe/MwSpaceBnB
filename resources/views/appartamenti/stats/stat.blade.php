@extends('layouts.app') @section('content')
<!--

    SEARCH BAR START

-->
<x-searchbar> </x-searchbar>
<!--

    SEARCH BAR END

-->

<section class="tg-sectionspace tg-haslayout bg-light" style="padding-top:30px; padding-bottom:30px">
    <div class="container-fluid" id="myContainer">
            <div class="appartment-header">
                <div class="appartment-title">
                    <h1 class="m-0 p-0"><a href="{{route('apartment.show',$apartment->id)}}">{{$apartment->title}}</a></h1>
                </div>
                <div class="appartment-address d-flex flex-row align-items-center justify-content-between">
                    <span>{{$apartment->indirizzo}}</span>
                </div>
            </div>
            
            <hr class="path-separator">

        <table>
            <thead>
                <th>Email</th>
                <th>Messaggio</th>
            </thead>
            <tbody>
                @foreach ($apartment->messages as $messaggio)
                <tr>
                    <td><a href="mailto: {{$messaggio->email_mittente}}" class=""></a></td>
                    <td>{{$messaggio->corpo}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>            
</section>
@endsection

