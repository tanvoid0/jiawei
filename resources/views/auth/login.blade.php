<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online CV - Professional HTML CSS Resume Website Template</title>

    <!-- favicon -->
    <link href="{{ asset('portfolio/favicon.png') }}" rel=icon>

    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <!-- font-awesome -->
    <link href="{{ asset('portfolio/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('portfolio/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style CSS -->
    <link href="{{ asset('portfolio/css/style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
    <!-- Page Preloader -->
    {{--<div id="preloader">--}}
    {{--<div id="status">--}}
    {{--<div class="status-mes"></div>--}}
    {{--</div>--}}
    {{--</div>--}}

    <div class="columns-block">
        <div class="left-col-block blocks">
            <header class="header">
                <div class="content text-center">
                    <h1>Hi, I'm Amelie Ebert!</h1>

                    <p class="lead">Marketing Consultant</p>
                    <ul class="social-icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-slack" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="profile-img"></div>
            </header>
            <!-- .header-->
        </div>


        <div class="right-col-block blocks">
            <section class="intro section-wrapper ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <center><h2 align="text-center">Enter Credentials</h2></center>
                        </div>
                        <div class="col-md-12">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" placeholder="Email or User Name" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" type="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" name="remember" id="remember">
                                        <label class="custom-control-label" for="remember" {{ old('remember') ? 'checked' : '' }}>Remember me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn vizew-btn w-100 mt-30">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!--.section-contact-->

            <footer class="footer">
                <div class="copyright-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copytext">&copy; 2015 Online CV. All rights reserved | Design By: <a
                                            href="https://themehippo.com">ThemeHippo</a></div>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!-- .container-fluid -->
                </div>
                <!-- .copyright-section -->
            </footer>
            <!-- .footer -->
        </div>
        <!-- .right-col-block -->
    </div>
    <!-- .columns-block -->
</div>
<!-- #main-wrapper -->

<!-- jquery -->
<script src="{{ asset('portfolio/js/jquery-2.1.4.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('portfolio/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('portfolio/js/scripts.js') }}"></script>
</body>
</html>