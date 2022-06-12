@extends('layouts.frontbase')

@section('title', 'Contact | ' . $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')
    <div class="fh5co-parallax">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div
                    class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center">Contact Us</h1>
                        <p>You can contact us in any way </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="col-md-6">
        <div class="section-title">
            <h3 class="title">Contact Form</h3>
        </div>
        @include('home.messages')
        <h1>{{\Illuminate\Support\Facades\Session::get('info')}}</h1>
        <form id="checkout-form" action="{{route("storemessage")}}" class="clearfix" method="post">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name & Surname">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="form-control" type="text" name="message" placeholder="Your Message"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Send Message">
                </div>
            </div>
        </form>

    </div>
    <div id="fh5co-contact-section">
        <div class="row">
            <div class="col-md-6">
                <h3>Contact Information</h3>
                {!! $setting->contact !!}
            </div>
        </div>
    </div>
@endsection
