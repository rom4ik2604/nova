<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home | Nova</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="{{asset('css')}}/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/main.css">
    <link rel="stylesheet" href="{{asset('css')}}/sl-slide.css">

    <script src="{{asset('js')}}/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="{{asset('images')}}/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images')}}/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images')}}/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images')}}/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images')}}/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>

<!--Header-->
@include('layout.header')
<!-- /header -->

@yield('content')

<!--Bottom-->
@include('layout.bottom')
<!--/bottom-->

<!--Footer-->
@include('layout.footer')
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="{{asset('js')}}/vendor/jquery-1.9.1.min.js"></script>
<script src="{{asset('js')}}/vendor/bootstrap.min.js"></script>
<script src="{{asset('js')}}/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="{{asset('js')}}/jquery.ba-cond.min.js"></script>
<script src="{{asset('js')}}/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript">
    $(function() {
        var Page = (function() {

            var $navArrows = $( '#nav-arrows' ),
                slitslider = $( '#slider' ).slitslider( {
                    autoplay : true
                } ),

                init = function() {
                    initEvents();
                },
                initEvents = function() {
                    $navArrows.children( ':last' ).on( 'click', function() {
                        slitslider.next();
                        return false;
                    });

                    $navArrows.children( ':first' ).on( 'click', function() {
                        slitslider.previous();
                        return false;
                    });
                };

            return { init : init };

        })();

        Page.init();
    });
</script>
<!-- /SL Slider -->
</body>
</html>