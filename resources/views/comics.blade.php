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

@endsection
