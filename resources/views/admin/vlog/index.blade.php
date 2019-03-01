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
                                    <th>Thumbnail</th>
                                    <th>Title</th>
                                </tr></thead>
                                <tbody>
                                @php($i=1)
                                @foreach($vlogs->items as $vlog)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>
{{--                                            @php(print_r($vlog->snippet->thumbnails->default->url))--}}
                                            <img src="{{ $vlog->snippet->thumbnails->default->url }}" alt="">
                                        </td>

                                        <td>{{ $vlog->snippet->title }}</td>
{{--                                        <td>{{ $vlog->title }}</td>--}}
{{--                                        <td>{{ $vlog->description }}</td>--}}
                                    </tr>
                                    @php($i++)
                                @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                <a href="{{ route('vlog.update', 1) }}" class="btn btn-info btn-fill btn-wd"><i class="ti-pencil"></i> Change Channel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection