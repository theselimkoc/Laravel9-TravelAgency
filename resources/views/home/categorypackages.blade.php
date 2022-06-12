@extends('layouts.frontbase')

@section('title', $category->title . ' Packages')

@section('content')
    <div class="fh5co-parallax" style="background-image: url('{{Storage::url($category->image)}}'); background-position: 0px 0px;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center">{{$category->title}}</h1>
                        <p>{{$category->title}}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <p>{!! $rs->info !!}</p>
                        </div>
                    </div>
                </div>
                </div>
            @endforeach

            </div>
        </div>
@endsection
