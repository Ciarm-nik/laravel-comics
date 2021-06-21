@extends('layout.default')

@section('page_title', 'Dettaglio card')

@section('content')

{{-- <h1>dettaglio card</h1> --}}

<div class="container">


    <h1>{{$cards["title"]}}</h1>
    <h4>{{$cards["price"]}}</h4>
    <p>{{$cards["description"]}}</p>


    <h5>Art by:</h5>
    <p> @foreach ($cards['artists'] as $artist)
        <a href="#">{{ $artist }}</a>
        @endforeach
    </p>


    <h5>Written by:</h5>
    <p>@foreach ($cards['writers'] as $writer)
        <a href="#">{{ $writer }}</a>
        @endforeach
    </p>

    <p>{{$cards["series"]}}</p>
    <p>{{$cards["price"]}}</p>
    <p>{{$cards["sale_date"]}}</p>
</div>







</div>



@endsection
