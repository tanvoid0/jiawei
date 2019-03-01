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
                                    <th>Degree</th>
                                    <th>Institution</th>
                                    <th>Address</th>
                                    <th>Start</th>
                                    <th>End</th>
                                </tr></thead>
                                <tbody>
                                @php($i=1)
                                @foreach($educations as $education)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $education->degree }}</td>
                                        <td>{{ $education->institution }}</td>
                                        <td>{{ $education->address }}</td>
                                        <td>{{ $education->start }}</td>
                                        <td>
                                            @if( $education->end == 0)
                                                Present
                                            @else
                                                {{ $education->end }}
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{ route('education.edit', $education->id) }}"><i class="ti-pencil btn btn-info"></i></a>
                                            <form id="delete-form-{{ $education->id }}" method="post" action="{{ route('education.destroy', $education->id) }}" style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
                                            <i class="ti-trash btn btn-danger" onclick="
                                                    if(confirm('Are you sure, you want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $education->id }}').submit();
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
                                <a href="{{ route('education.create') }}" class="btn btn-success btn-fill btn-wd"><i class="ti-plus"></i> Add education</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection