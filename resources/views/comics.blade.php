@extends('layout.default')

@section('page_title', 'Elenco comics')

@section( 'content')

<section class="section_com">

    <div class="card-container container">

        {{-- @dump($listaComics) --}}
        @foreach($listaComics as $key=> $com)

        <div class="card">

            <a href="{{route('pagina-singola-card', ['index' => $key])}}">
                <img src="{{$com['thumb']}}" alt="">
                <h4 class="uppercase">{{$com['title']}}</h4>
            </a>
        </div>
        @endforeach

        <div class="load_more">
            <h3>
                <a class="uppercase" href="#">load more</a>
            </h3>
        </div>

    </div>

</section>

{{-- <section class="info_section">
    <div class="container flex">
        <div class="menu flex col-2">
            <div class="infoMenu flex">
                <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
                <h4 class="uppercase">DIGITAL COMICS</h4>
            </div>
        </div>

        <div class="menu flex col-2">
            <div class="infoMenu flex">
                <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
                <h4 class="uppercase">DC Merchandise</h4>
            </div>
        </div>

         <div class="menu flex col-2">
            <div class="infoMenu flex">
                <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
                <h4 class="uppercase">Subscription</h4>
            </div>
        </div>

         <div class="menu flex col-2">
            <div class="infoMenu flex">
                <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
                <h4 class="uppercase">Comic shop locator</h4>
            </div>
        </div>

         <div class="menu flex col-2">
            <div class="infoMenu flex">
                <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
                <h4 class="uppercase">Dc Power visa</h4>
            </div>
        </div>
    </div>

</section> --}}

@endsection
