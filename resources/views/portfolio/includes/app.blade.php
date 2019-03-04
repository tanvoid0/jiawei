@include('portfolio.includes.head')
<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
    <!-- Page Preloader -->
    <div id="preloader">
    <div id="status">
    <div class="status-mes"></div>
    </div>
    </div>

    <div class="columns-block">
        <div class="left-col-block blocks">
            <header class="header">
                <div class="content text-center">
                    <h1>Hi, I'm {{ $user->name }}!</h1>

                    <p class="lead">{{ $user->designation }}</p>
                    <ul class="social-icon">
                        <li><a target="_blank" href="https://www.facebook.com/{{ $user->facebook }}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/{{ $user->twitter }}"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/in/{{ $user->linkedin }}"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://www.tumblr.com/blog/{{ $user->tumblr }}"><i class="fab fa-tumblr" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://dribbble.com/{{ $user->dribble }}"><i class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                    </ul>
                    <br>
                    <a href="{{ route('cv') }}" class="btn"  style="color: white;"><i class="fa fa-download fa-lg"></i> Download CV</a>
                </div>
                <div class="profile-img" style="background-image:url({{ asset('img/user/'.$user->image) }})"></div>

            </header>
            <!-- .header-->
        </div>


        <div class="right-col-block blocks">
            @section('body')
                @show

        @include('portfolio.includes.script')
        <!-- .footer -->
        </div>
        <!-- .right-col-block -->
    </div>
    <!-- .columns-block -->
</div>
<!-- #main-wrapper -->
@include('portfolio.includes.script')

</body>
</html>