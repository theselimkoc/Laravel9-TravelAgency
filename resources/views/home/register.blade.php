@extends('layouts.frontbase')

@section('title', 'User Registration ')

@section('content')
    <div class="fh5co-parallax" >
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center">User Registration</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-hotel-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('auth.register')
                </div>
            </div>
        </div>
    </div>
    @endsection
