@extends('layout.default')

@section('page_title', 'Dettaglio card')

@section('content')

{{-- <h1>dettaglio card</h1> --}}

<div class="containerSingle">

    <section class="top flex">

        <div class="contentLeft col-8">
            <h1 class="uppercase">{{$cards["title"]}}</h1>
            <h4>{{$cards["price"]}}</h4>
            <p>{{$cards["description"]}}</p>
        </div>

        <div class="contentRight col-4">
            <img src="{{asset('images/adv.jpg')}}" alt="">
        </div>
    </section>



    <section class="bottom">

        <div class="row flex">
            <div class="col-6">
                <h3 class="uppercase">Talent</h3>
            </div>
            <div class="col-6">
                <h3 class="uppercase">Specs</h3>
            </div>
        </div>

        <div class="row flex">
            <div class="col-2">
                <h5>Art by:</h5>
            </div>
            <div class="col-4">
                <p> @foreach ($cards['artists'] as $artist)
                    <a href="#">{{ $artist }}</a>
                    @endforeach
                </p>
            </div>
            <div class="col-2">
                <p>Series <br> <br> US.Price:</p>
            </div>
           
            <div class="col-4">
             <p class="uppercase">{{$cards["series"]}} <br> <br> {{$cards["price"]}}</p>
            </div>
        </div>
        <div class="row flex">
            <div class="col-2">
                <h5>Written by:</h5>
            </div>

            <div class="col-4">
                <p>@foreach ($cards['writers'] as $writer)
                    <a href="#">{{ $writer }}</a>
                    @endforeach
                </p>
            </div>
            <div class="col-2">
                <p>On Sale Date: </p>
            </div>
            <div class="col-2">
                <p>{{$cards["sale_date"]}}</p>

            </div>
        </div>





    </section>


</div>







</div>



@endsection
