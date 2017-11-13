<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Merőkanál Ultras</title>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Slick slider -->
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <!-- Theme color -->
    <link href="{{ asset('css/theme-color/green-theme.css') }}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Montserrat for title -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Start Header -->
<section id="header" class="green_stripe">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <ul class="navbar-right">
                <!-- Authentication Links -->
                @auth
                    <li>
                        <a class="navi" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endauth
            </ul>
            <header>
                &nbsp;&nbsp;
            </header>
        </div>
    </div>
</section>
<!-- End Header -->
@yield('content')
<!-- Start footer -->
<footer id="mu-footer" class="green_stripe" role="contentinfo">
    <div class="container">
        <div class="mu-footer-area">
            <div class="mu-footer-top">
                <div class="mu-social-media">
                    <a href="https://www.facebook.com/groups/873458919499164/"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
            <div class="mu-footer-bottom">
                <p class="mu-copy-right">&copy; Copyright 2017 <a rel="nofollow" href="http://z-poc.hu">z-poc</a>. All right reserved.</p>
            </div>
        </div>
    </div>

</footer>
<!-- End footer -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Slick slider -->
<script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
<!-- Event Counter -->
<script type="text/javascript" src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<!-- Ajax contact form  -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>



<!-- Custom js -->
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>




</body>
</html>