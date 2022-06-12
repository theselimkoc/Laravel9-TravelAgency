@extends('layouts.frontbase')

@section('title', 'About Us | ' . $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')
    <div class="fh5co-parallax" >
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center">About Us</h1>
                        <p>Description of why we are The Best</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-hotel-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12"
                    {!! $setting->aboutus !!}
                </div>

            </div>
        </div>
    </div>
    @endsection
