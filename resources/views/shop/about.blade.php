@extends('layouts.master')

@section('title')
    About Page
@endsection


@section('body-content')

    <main role="main">




        <div class="container marketing ">

            <div class="row featurette col-md-12">
                <img src="{{ URL::to('images/teaserfinal/image5.jpg')}}" alt="teaser-image">
            </div>
            <hr class="featurette-divider">
            <hr class="featurette-divider">

            <div class="row featurette my-padding-top">
                <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span>
                    </h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                        euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                        tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="{{ URL::to('images/teaserfinal/image2.jpg')}}"
                         alt="Generic placeholder image">
                </div>
            </div>


            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Oh yeah, it's that good. <span
                                class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                        euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                        tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="{{ URL::to('images/teaserfinal/image6.jpg')}}"
                         alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                        euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                        tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="{{ URL::to('images/teaserfinal/image7.jpg')}}"
                         alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


    </main>


@endsection