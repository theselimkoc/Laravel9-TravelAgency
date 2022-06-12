@extends('layouts.frontbase')

@section('title', 'Contact | ' . $setting->title)
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
                        <h1 class="text-center">Contact Us</h1>
                        <p>You can contact us in any way </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    </hr>
    <div class="col-md-6">
        <div class="row">
            <h3>Contact Form</h3>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="submit" value="Send Message" class="btn btn-primary">
                </div>
            </div>
        </div>
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
