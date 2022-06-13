@extends('layouts.frontbase')

@section('title', ' FAQ | ' . $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))
@section('head')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#accordion").accordion();
        });
    </script>
@endsection
@section('content')
    <div class="fh5co-parallax">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div
                    class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center"> FAQ</h1>
                        <p>Your Questions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-hotel-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Frequently Asked Questions</h3>
                    </div>
                    <div id="accordion">
                        @foreach($datalist as $rs)
                            <h1>{{$rs->question}}</h1>
                        <div>
                            <p>{!! $rs->answer !!}</p>
                        </div>

                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
