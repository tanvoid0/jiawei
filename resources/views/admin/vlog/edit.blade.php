@extends('admin/includes/app')
@section('body')



    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <div class="card">
                        <div class="header">
                            <h4 class="title text-center">Change Channel ID</h4>
                        </div>
                        <div class="content">
                            <form action="{{ route('vlog.update', $vlog->id) }}" method="post">
                                @csrf
                                @method("PUT")
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Channel ID</label>
                                            <input type="text" class="form-control border-input" placeholder="Vlog link (e.g: Extrovert)" value="{{ $vlog->title }}" name="link" required>
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