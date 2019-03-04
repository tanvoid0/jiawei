
@extends('portfolio.includes.app')
@section('body')
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

            <!--Modal: modalPush-->


            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Portfolio</h2>
                    </div>
                </div>
            </div>
            @foreach($playlists as $vlog)
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3>Playlists #</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($vlog->items as $item)
                <div class="col-md-6" class="btn btn-primary" data-toggle="modal" data-target="#modalYT-{{ $item->snippet->resourceId->videoId }}">
                    <a class="portfolio-item">
                        <div class="portfolio-thumb">
                            <img src="{{ $item->snippet->thumbnails->medium->url }}" alt="">
                        </div>

                        <div class="portfolio-info">
                            <h3>{{ $item->snippet->title }}</h3>
                            <small></small>
                        </div>
                        <!-- portfolio-info -->
                    </a>
                    <!-- .portfolio-item -->
                </div>

                    <div class="modal fade" id="modalYT-{{ $item->snippet->resourceId->videoId }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">

                            <!--Content-->
                            <div class="modal-content">

                                <!--Body-->
                                <div class="modal-body mb-0 p-0">

                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $item->snippet->resourceId->videoId }}" allowfullscreen></iframe>
                                    </div>

                                </div>

                                <!--Footer-->
                                <div class="modal-footer justify-content-center flex-column flex-md-row">
                                    <span class="mr-4">Spread the word!</span>
                                    <div>
                                        <a type="button" class="btn-floating btn-sm btn-fb">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <!--Twitter-->
                                        <a type="button" class="btn-floating btn-sm btn-tw">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <!--Google +-->
                                        <a type="button" class="btn-floating btn-sm btn-gplus">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                        <!--Linkedin-->
                                        <a type="button" class="btn-floating btn-sm btn-ins">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>


                                </div>

                            </div>
                            <!--/.Content-->

                        </div>
                    </div>
                    <!--Modal: modalYT-->
                    <br>
                @endforeach
                    <br>
            </div>
            @endforeach
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
@endsection