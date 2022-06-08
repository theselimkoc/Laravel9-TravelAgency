@extends('layouts.frontbase')
@include("home.sidebar")
@section('title', $category->title . ' Packages')

@section('content')
    <div id="fh5co-hotel-section">
        <div class="container">
            <div class="row">
                @foreach($packages as $rs)
                <div class="col-md-4">
                    <div class="hotel-content">
                        <div class="hotel-grid" style="background-image: url('{{Storage::url($rs->image)}}');">
                            <div class="price"><small>For as low as</small><span>${{$rs->price}}</span></div>
                            <a class="book-now text-center" href="{{route('package',['id'=>$rs->id])}}"><i class="ti-calendar"></i> Book Now</a>
                        </div>
                        <div class="desc">
                            <h3><a href="{{route('package',['id'=>$rs->id])}}">{{$rs->title}}</a></h3>
                            <p>{{$rs->detail}}</p>
                        </div>
                    </div>
                </div>
                </div>
            @endforeach

            </div>
        </div>
@endsection
