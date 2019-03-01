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
                            <form action="{{ route('education.update', $education->id) }}" method="post">
                                @csrf
                                @method("PUT")
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Degree</label>
                                            <input type="text" class="form-control border-input" placeholder="Degree (e.g. B.Sc. in Computer Science)" value="{{ $education->degree }}" name="degree" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Institution</label>
                                            <input type="text" class="form-control border-input" placeholder="Institution Name (e.g: University of Southwales)" value="{{ $education->institution }}" name="institution">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control border-input" placeholder="Institution Address (e.g: United Kingdom, London)" value="{{ $education->address }}" name="address" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Start Year</label>
                                            <input type="number" class="form-control border-input" placeholder="End Year (e.g: 2017)" value="{{ $education->start }}" name="start" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>End Year</label>
                                            <input type="number" class="form-control border-input" placeholder="End Year (e.g: 2018/Present)" value="{{ $education->end }}" name="end" required>
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