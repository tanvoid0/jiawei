@extends('admin/includes/app')
@section('body')



    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <div class="card">
                        <div class="header">
                            <h4 class="title text-center">Add Work Experience</h4>
                        </div>
                        <div class="content">
                            <form action="{{ route('education.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Degree</label>
                                            <input type="text" class="form-control border-input" placeholder="Degree (e.g. B.Sc. in Computer Science)" value="" name="degree" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Institution</label>
                                            <input type="text" class="form-control border-input" placeholder="Institution Name (e.g: University of Southwales)" value="" name="institution">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control border-input" placeholder="Company Address (e.g: United Kingdom, London)" value="" name="address" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Start Year</label>
                                            <input type="number" class="form-control border-input" placeholder="End Year (e.g: 2017)" value="" name="start" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>End Year</label>
                                            <input type="number" class="form-control border-input" placeholder="End Year (e.g: 2018/Present)" value="" name="end" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-fill btn-wd">Create</button>
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