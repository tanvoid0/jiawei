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
                                    <th>Description</th>
                                    <th>Control</th>
                                </tr></thead>
                                <tbody>
                                @php($i=1)
                                @foreach($expertises as $expertise)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $expertise->title }}</td>
                                        <td>{{ $expertise->description }}</td>
                                        <td>
                                            <a href="{{ route('expertise.edit', $expertise->id) }}"><i class="ti-pencil btn btn-info"></i></a>
                                            <form id="delete-form-{{ $expertise->id }}" method="post" action="{{ route('expertise.destroy', $expertise->id) }}" style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
                                            <i class="ti-trash btn btn-danger" onclick="
                                                    if(confirm('Are you sure, you want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $expertise->id }}').submit();
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
                                <a href="{{ route('expertise.create') }}" class="btn btn-success btn-fill btn-wd"><i class="ti-plus"></i> Add Expertise</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection