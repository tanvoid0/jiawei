@extends('admin/includes/app')
@section('body')



    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <div class="card">
                        <div class="header">
                            <h4 class="title text-center">Add Skill</h4>
                        </div>
                        <div class="content">
                            <form action="{{ route('skill.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control border-input" placeholder="Expertise in (e.g: Extrovert)" value="{{ old('title') }}" name="title" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Proficiency</label>
                                            <input type="number" class="form-control border-input" placeholder="Proficiency(e.g: 90)" value="{{ old('proficiency') }}" name="proficiency" required>
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