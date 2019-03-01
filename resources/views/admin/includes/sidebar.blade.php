<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                Jia Wei
            </a>
        </div>

        <ul class="nav">

            <li
            @if(\Request::route()->getName() == "user.index")
                class="active"
            @endif
            >
                <a href="{{ route('user.index') }}">
                    <i class="ti-user"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li
                    @if(\Request::route()->getName() == "expertise.index")
                    class="active"
                    @endif
            >
                <a href="{{ route('expertise.index') }}">
                    <i class="ti-panel"></i>
                    <p>Expertise</p>
                </a>
            </li>
            <li
                    @if(\Request::route()->getName() == "skill.index")
                    class="active"
                    @endif
            >
                <a href="{{ route('skill.index') }}">
                    <i class="ti-view-list-alt"></i>
                    <p>Skills</p>
                </a>
            </li>
            <li
                    @if(\Request::route()->getName() == "work.index")
                    class="active"
                    @endif
            >
                <a href="{{ route('work.index') }}">
                    <i class="ti-text"></i>
                    <p>Work Experience</p>
                </a>
            </li>
            <li
                    @if(\Request::route()->getName() == "education.index")
                    class="active"
                    @endif
            >
                <a href="{{ route('education.index') }}">
                    <i class="ti-pencil-alt2"></i>
                    <p>Education</p>
                </a>
            </li>
            <li
                    @if(\Request::route()->getName() == "interest.index")
                    class="active"
                    @endif
            >
                <a href="{{ route('interest.index') }}">
                    <i class="ti-map"></i>
                    <p>Interest</p>
                </a>
            </li>
            {{--<li--}}
                    {{--@if(\Request::route()->getName() == "portfolio.index")--}}
                    {{--class="active"--}}
                    {{--@endif--}}
            {{-->--}}
                {{--<a href="{{ route('portfolio.index') }}">--}}
                    {{--<i class="ti-bell"></i>--}}
                    {{--<p>Portfolio</p>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li--}}
                    {{--@if(\Request::route()->getName() == "vlog.index")--}}
                    {{--class="active"--}}
                    {{--@endif--}}
            {{-->--}}
                {{--<a href="{{ route('vlog.index') }}">--}}
                    {{--<i class="ti-bell"></i>--}}
                    {{--<p>Vlog</p>--}}
                {{--</a>--}}
            {{--</li>--}}
            <li class="active-pro  text-center" >
                <form action="{{ route('user.update', 1) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="file" id="input-file-now" name="cv" class="dropify" data-height="40"
                    >
                    <button class="btn btn-default" type="submit">
                        <i class="ti-export"></i>
                        Update Resume
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>