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
                    <h1 class="m-0 p-0">Appartamento</h1>
                        <span class="tags-wrapper">
                            <span class="tag mx-5">Bed and Breakfast</span>
                        </span>
                </div>
                <div class="appartment-address d-flex flex-row align-items-center justify-content-between">
                    <span>VIA XX SETTEMBRE, 10 - <strong>Montaleghe(TO)</strong></span>
                </div>
            </div>
            
            <hr class="path-separator">

        <table>
            <thead>
                <th>Email</th>
                <th>Messaggio</th>
            </thead>
            <tbody>
                <tr> 
                    <td> <a href="mailto: email@example.com"> email@example.com </a> </td>
                    <td>Vorrei saperne di più...</td>
                </tr>
                <tr> 
                    <td> <a href="mailto: email@example.com"> email@example.com </a> </td>
                    <td>Vorrei saperne di più...</td>
                </tr>
                <tr> 
                    <td> <a href="mailto: email@example.com"> email@example.com </a> </td>
                    <td>Vorrei saperne di più...</td>
                </tr>
                <tr> 
                    <td> <a href="mailto: email@example.com"> email@example.com </a> </td>
                    <td>Vorrei saperne di più...</td>
                </tr>
            </tbody>
        </table>
    </div>            
</section>
@endsection

