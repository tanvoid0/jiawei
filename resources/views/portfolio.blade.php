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
                    <h1>Hi, I'm {{ $user->name }}!</h1>

                    <p class="lead">{{ $user->designation }}</p>
                    <ul class="social-icon">
                        <li><a target="_blank" href="https://www.facebook.com/{{ $user->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/{{ $user->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/in/{{ $user->linkedin }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://www.tumblr.com/blog/{{ $user->tumblr }}"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://dribbble.com/{{ $user->dribble }}"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    </ul>
                    <br>
                    <a href="{{ route('cv') }}"  style="color: white;"><i class="fa fa-file fa-lg"></i> Download CV</a>
                </div>
                <div class="profile-img" style="background-image:url({{ asset('img/user/profile.jpg') }})"></div>

            </header>
            <!-- .header-->
        </div>


        <div class="right-col-block blocks">
            <section class="intro section-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>What I am all about.</h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p>{{ $user->about }}</p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="expertise-wrapper section-wrapper gray-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Expertise</h2>
                            </div>
                        </div>
                    </div>
                    <!-- .row -->
                    @foreach($expertises as $expertise)
                        <div class="row">
                            <div class="col-md-6">
                                <div class="expertise-item">
                                    <h3>{{ $expertise->title }}</h3>

                                    <p>
                                        {{ $expertise->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!--.container-fluid-->
            </section>
            <!-- .expertise-wrapper -->

            <section class="section-wrapper skills-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Skills</h2>
                            </div>
                        </div>
                    </div>

                    @foreach($skills as $skill)
                        <!--.row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="progress-wrapper">

                                    <div class="progress-item">
                                        <span class="progress-title">{{ $skill->title }}</span>

                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->proficiency }}" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: {{ $skill->proficiency }}%"><span class="progress-percent"> {{ $skill->proficiency }}%</span>
                                            </div>
                                        </div>
                                        <!-- .progress -->
                                    </div>
                                    <!-- .skill-progress -->

                                </div>
                                <!-- /.progress-wrapper -->
                            </div>
                        </div>
                        <!--.row -->
                    @endforeach
                </div>
                <!-- .container-fluid -->
            </section>
            <!-- .skills-wrapper -->

            <section class="section-wrapper section-experience gray-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title"><h2>Work Experience</h2></div>
                        </div>
                    </div>
                    <!--.row-->
                    <div class="row">
                        <div class="col-md-12">
                            @foreach($works as $work)
                                <div class="content-item">
                                    <small>{{ $work->start }} - {{ $work->end }}</small>
                                    <h3>{{ $work->designation }}</h3>
                                    <h4>{{ $work->company }}</h4>

                                    <p>{{ $work->address }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!--.row-->
                </div>
                <!-- .container-fluid -->

            </section>
            <!-- .section-experience -->

            <section class="section-wrapper section-education">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title"><h2>Education</h2></div>
                        </div>
                    </div>
                    <!--.row-->
                    <div class="row">
                        <div class="col-md-12">
                            @foreach($educations as $education)
                                <div class="content-item">
                                    <small>{{ $education->start }} - {{ $education->end }}</small>
                                    <h3>{{ $education->degree }}</h3>
                                    <h4>{{ $education->institution }}</h4>

                                    <p>{{ $education->address }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!--.row-->
                </div>
                <!-- .container-fluid -->

            </section>
            <!-- .section-education -->

            <section class="section-wrapper section-interest gray-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Interest</h2>
                            </div>
                        </div>
                    </div>
                    <!-- .row -->

                    <div class="row">
                        <div class="col-md-12">
                            @foreach($interests as $interest)
                                <div class="content-item">
                                    <h3>{{ $interest->title }}</h3>

                                    <p>{{ $interest->description }}</p>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- .row -->

                </div>
            </section>
            <!-- .section-publications -->

            <section class="section-wrapper portfolio-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Portfolio</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a class="portfolio-item" href="#">
                                <div class="portfolio-thumb">
                                    <img src="{{ asset('img/portfolio/01.jpg') }}" alt="">
                                </div>

                                <div class="portfolio-info">
                                    <h3>Creative concepts</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                        <div class="col-md-6">
                            <a class="portfolio-item" href="#">
                                <div class="portfolio-thumb">
                                    <img src="{{ asset('img/portfolio/02.jpg') }}" alt="">

                                </div>

                                <div class="portfolio-info">
                                    <h3>Customer focused</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                        <div class="col-md-6">
                            <a class="portfolio-item" href="#">
                                <div class="portfolio-thumb">
                                    <img src="{{ asset('img/portfolio/03.jpg') }}" alt="">

                                </div>

                                <div class="portfolio-info">
                                    <h3>Management methodology</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>
                        <div class="col-md-6">
                            <a class="portfolio-item" href="#">
                                <div class="portfolio-thumb">
                                    <img src="{{ asset('img/portfolio/04.jpg') }}" alt="">

                                </div>

                                <div class="portfolio-info">
                                    <h3>Market research</h3>
                                    <small>domain.com</small>
                                </div>
                                <!-- portfolio-info -->
                            </a>
                            <!-- .portfolio-item -->
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
            </section>
            <!-- .portfolio -->

            <section class="section-contact section-wrapper gray-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Contact</h2>
                            </div>
                        </div>
                    </div>
                    <!--.row-->
                    <div class="row">
                        <div class="col-md-12">
                            <address>
                                <strong>Address</strong><br>
                                {{ $user->address }}
                            </address>
                            <address>
                                <strong>Mobile Number</strong><br>
                                {{ $user->phone }}
                            </address>
                            <address>
                                <strong>Email</strong><br>
                                <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                            </address>
                        </div>
                    </div>
                    <!--.row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="feedback-form">
                                <h2>Get in touch</h2>

                                <form id="contactForm" action="sendemail.php" method="POST">
                                    <div class="form-group">
                                        <label for="InputName">Name</label>
                                        <input type="text" name="name" required="" class="form-control" id="InputName"
                                               placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputEmail">Email address</label>
                                        <input type="email" name="email" required="" class="form-control" id="InputEmail"
                                               placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputSubject">Subject</label>
                                        <input type="text" name="subject" class="form-control" id="InputSubject"
                                               placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label">Message</label>
                                        <textarea class="form-control" rows="4" required="" name="message" id="message-text"
                                                  placeholder="Write message"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <!-- .feedback-form -->


                        </div>
                    </div>
                </div>
                <!--.container-fluid-->
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