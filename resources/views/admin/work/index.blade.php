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
                                    <th>Company</th>
                                    <th>Address</th>
                                    <th>Start</th>
                                    <th>End</th>
                                </tr></thead>
                                <tbody>
                                @php($i=1)
                                @foreach($works as $work)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $work->title }}</td>
                                        <td>{{ $work->company }}</td>
                                        <td>{{ $work->address }}</td>
                                        <td>{{ $work->start }}</td>
                                        <td>
                                            @if( $work->end == 0)
                                                Present
                                            @else
                                                {{ $work->end }}
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{ route('work.edit', $work->id) }}"><i class="ti-pencil btn btn-info"></i></a>
                                            <form id="delete-form-{{ $work->id }}" method="post" action="{{ route('work.destroy', $work->id) }}" style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
                                            <i class="ti-trash btn btn-danger" onclick="
                                                    if(confirm('Are you sure, you want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $work->id }}').submit();
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
                                <a href="{{ route('work.create') }}" class="btn btn-success btn-fill btn-wd"><i class="ti-plus"></i> Add Work</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection