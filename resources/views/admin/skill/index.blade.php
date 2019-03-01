@extends('admin.includes.app')
@section('body')



    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Striped Table</h4>
                            <p class="category">Here is a subtitle for this table</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                <tr><th>ID</th>
                                    <th>Title</th>
                                    <th>Proficiency</th>
                                    <th>Control</th>
                                </tr></thead>
                                <tbody>
                                @php($i=1)
                                @foreach($skills as $skill)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $skill->title }}</td>
                                        <td><div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->proficiency }}" aria-valuemin="0"
                                                     aria-valuemax="100" style="width: {{ $skill->proficiency }}%"><span class="progress-percent"> {{ $skill->proficiency }}%</span>
                                                </div>
                                            </div></td>
                                        <td>
                                            <a href="{{ route('skill.edit', $skill->id) }}"><i class="ti-pencil btn btn-info"></i></a>
                                            <form id="delete-form-{{ $skill->id }}" method="post" action="{{ route('skill.destroy', $skill->id) }}" style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
                                            <i class="ti-trash btn btn-danger" onclick="
                                                    if(confirm('Are you sure, you want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $skill->id }}').submit();
                                                    } else {
                                                    event.preventDefault();
                                                    }
                                            "></i>
                                        </td>
                                    </tr>
                                    @php($i++)
                                @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                <a href="{{ route('skill.create') }}" class="btn btn-success btn-fill btn-wd"><i class="ti-plus"></i> Add Skill</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection