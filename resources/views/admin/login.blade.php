<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- PAGE LEVEL STYLES -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/login.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/magic/magic.css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body >

<!-- PAGE CONTENT -->
<div class="container">
    <div class="text-center">
        <img src="{{asset('assets')}}/admin/img/logo.png" id="logoimg" alt=" Logo" />
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            @include('home.messages')
            <form action="{{route('loginadmincheck')}}" class="form-signin" method="post">
                @csrf
                <p class="tex t-muted text-center btn-block btn btn-primary btn-rect">
                    Enter your username and password
                </p>
                <input type="email" name="email" placeholder="Email" class="form-control" />
                <input type="password" name="password" placeholder="Password" class="form-control" />
                <button class="btn text-muted text-center btn-danger" type="submit">Sign in</button>
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            <form action="index.html" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Enter your valid e-mail</p>
                <input type="email"  name="email" required="required" placeholder="Your E-mail"  class="form-control" />
                <br />
                <button class="btn text-muted text-center btn-success" type="submit">Recover Password</button>
            </form>
        </div>
        <div id="signup" class="tab-pane">
            <form action="index.html" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Please Fill Details To Register</p>
                <input type="text" placeholder=" First Name" class="form-control" />
                <input type="text" placeholder="Last Name" class="form-control" />
                <input type="text" placeholder="Username" class="form-control" />
                <input type="email" placeholder="Your E-mail" class="form-control" />
                <input type="password" placeholder="password" class="form-control" />
                <input type="password" placeholder="Re type password" class="form-control" />
                <button class="btn text-muted text-center btn-success" type="submit">Register</button>
            </form>
        </div>
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="/loginuser" data-toggle="tab">Login</a></li>
            <li><a class="text-muted" href="/registeruser" data-toggle="tab">Signup</a></li>
        </ul>
    </div>


</div>
<!--END FOOTER -->
<!-- GLOBAL SCRIPTS -->
<script src="{{asset('assets')}}/admin/plugins/jquery-2.0.3.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<!-- END GLOBAL SCRIPTS -->

<!-- PAGE LEVEL SCRIPTS -->
<script src="{{asset('assets')}}/admin/plugins/jquery-2.0.3.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/admin/js/login.js"></script>
<!--END PAGE LEVEL SCRIPTS -->

</body>
<!-- END BODY -->
</html>
