@extends('layouts.master')
@section('title')
    Homepage
    @endsection
@section('body-content')


{{--this is the carousel section---------------------------------}}
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="{{ URL::to('images/teaserfinal/image2.jpg')}}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Example headline.</h1>
                        <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="{{ URL::to('images/teaserfinal/image3.jpg')}}" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="{{ URL::to('images/teaserfinal/image4.jpg')}}" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



{{--this is the comic books section-----------------------------}}

    <div class="card-deck clearfix padding-x-xl">
        @foreach($comics as $comic)
        <div class="col-sm-6 col-md-4">

            <div class="card" style="">
                <img class="card-img-top" src="{{ URL::to($comic->imagePath)}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{ $comic->title }}</h4>
                    <p class="card-text">{{ $comic->description }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Catagory : {{$comic->category}}</li>
                    <li class="list-group-item">Starring : {{$comic->starring}}</li>
                    <li class="list-group-item">Author : {{$comic->author}}</li>
                </ul>
                <div class="card-body my-card-body-style">
                    <a href="{{route('product.addToWish',['id'=> $comic->id])}}" class="card-link text-warning">Add to Wishlist</a>
                    <a href="{{route('product.addToCart',['id'=> $comic->id])}}" class="btn btn-success">Buy</a>
                </div>
            </div>

        </div>
        @endforeach
    </div>


    @endsection