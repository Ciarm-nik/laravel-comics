@extends('layout.default')

@section('page_title', 'elenco comics')

@section( 'content')

<section class="section_com">

    <div class="card-container container">

        {{-- @dump($listaComics) --}}
        @foreach($listaComics as $com)
        <div class="card">
            <img src="{{$com['thumb']}}" alt="">
            <h4 class="uppercase">{{$com['title']}}</h4>
        </div>
        @endforeach

        <div class="load_more">
            <h3>
                <a class="uppercase" href="#">load more</a>
            </h3>
        </div>


    </div>

</section>

@endsection
