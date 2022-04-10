<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield("title")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!--
      //////////////////////////////////////////////////////

      FREE HTML5 TEMPLATE
      DESIGNED & DEVELOPED by FREEHTML5.CO

      Website: 		http://freehtml5.co/
      Email: 			info@freehtml5.co
      Twitter: 		http://twitter.com/fh5co
      Facebook: 		https://www.facebook.com/fh5co

      //////////////////////////////////////////////////////
       -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

    <!-- Stylesheets -->
    <!-- Dropdown Menu -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/superfish.css">
    <!-- Owl Slider -->
    <!-- <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.css"> -->
    <!-- <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css"> -->
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap-datepicker.min.css">
    <!-- CS Select -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/cs-select.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/cs-skin-border.css">

    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/themify-icons.css">
    <!-- Flat Icon -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/flaticon.css">
    <!-- Icomoon -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/icomoon.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/flexslider.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

    <!-- Modernizr JS -->
    <script src="{{asset('assets')}}/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets')}}/js/respond.min.js"></script>
    <![endif]-->
    @yield("head")
</head>
<body>


@include("home.header")

@include("home.slider")

@section('sidebar')
    @include("home.sidebar")
@show


@yield('content')


@include("home.footer")
@yield('foot')
</body>
</html>
