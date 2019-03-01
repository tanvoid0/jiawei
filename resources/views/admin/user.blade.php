@extends('admin/includes/app')
@section('body')



    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="card card-user">
                        <form action="{{ route('user.update', 1) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="image" style="width: 200px;">
                                <input type="file" id="image" name="image" class="dropify"
                                       @if($user->image != "")
                                       data-default-file="{{ asset('img/user/'.$user->image) }}"
                                        @endif
                                />

                            </div>

                            <hr>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Update Imagee</button>
                            </div>
                        </form>
                        <br>
                    </div>

                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Edit Profile</h4>
                        </div>
                        <div class="content">
                            <form action="{{ route('user.update', $user->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control border-input" placeholder="Name" value="{{ $user->name }}" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" class="form-control border-input" placeholder="Designation (e.g:Photographer)" value="{{ $user->designation }}" name="designation">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone</label>
                                            <input type="text" class="form-control border-input" placeholder="Phone" value="{{ $user->phone }}" name="phone">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control border-input" placeholder="Email" value="{{ $user->email }}" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control border-input" placeholder="Password" value="" name="password">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control border-input" placeholder="Home Address" value="{{ $user->address }}" name="address">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" class="form-control border-input" placeholder="Facebook" value="{{ $user->facebook }}" name="facebook">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" class="form-control border-input" placeholder="Twitter" value="{{ $user->twitter }}" name="twitter">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Linkedin</label>
                                            <input type="text" class="form-control border-input" placeholder="LinkedIn" value="{{ $user->linkedin }}" name="linkedin">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tumblr</label>
                                            <input type="text" class="form-control border-input" placeholder="Tumblr" value="{{ $user->tumblr }}" name="tumblr">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Dribble</label>
                                            <input type="text" class="form-control border-input" placeholder="Dribble" value="{{ $user->dribble }}" name="dribble">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>About Me</label>
                                            <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" name="about">{{ $user->about }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>



@endsection