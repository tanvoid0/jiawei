@extends('admin/includes/app')
@section('body')



    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <div class="card">
                        <div class="header">
                            <h4 class="title text-center">Add Expertise</h4>
                        </div>
                        <div class="content">
                            <form action="{{ route('expertise.update', $expertise->id) }}" method="post">
                                @csrf
                                @method("PUT")
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control border-input" placeholder="Expertise in (e.g: Extrovert)" value="{{ $expertise->title }}" name="title" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>About Me</label>
                                            <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" name="description">{{ $expertise->description }}</textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Update</button>
                                </div>
                                <div class="clearfix"></div>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>



@endsection