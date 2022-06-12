@extends('layouts.frontbase')
@section('title', $data->title)

@section('content')
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                @foreach($images as $rs)
                    <li style="background-image: url('{{Storage::url($rs->image)}}');">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="col-md-12 col-md-offset-0 text-center slider-text">
                                <div class="slider-text-inner js-fullheight">
                                    <div class="desc">
                                        <p><span>{{$rs->title}}</span></p>
                                        <p>
                                            <a href="#" class="btn btn-primary btn-lg">Book Now</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>Other Details</h2>
                        </div>
                        <div id="fh5co-services-section">
                            <span class="super-heading-sm"></span>
                            <h1 class="text-center">{{$data->title}}</h1>
                            <p>{{$data->description}}</p>
                            <p>{!! $data->detail !!}</p>
                            <span>Price:  ${{$data->price}}</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
@endsection




