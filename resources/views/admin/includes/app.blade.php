<!doctype html>
<html lang="en">
@include('admin.includes.head')
<body>

<div class="wrapper">
    @include('admin.includes.sidebar')
    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>

            </div>
        </nav>
    @section('body')
        @show
    @include('admin.includes.footer')
    </div>
</div>


@include('admin.includes.script')
</body>


</html>
