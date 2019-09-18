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
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Control</th>
                                </tr></thead>
                                <tbody>
                                @php($i=1)
                                @foreach($vlogs as $vlog)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>
{{--                                            @php(print_r(json_encode($playlists[$i-1]->items[0]->snippet->thumbnails->medium->url)))--}}
                                            <img src="{{ $playlists[$i-1]->items[0]->snippet->thumbnails->default->url}}" alt="">
                                        </td>
                                        <td>
                                            {{ $vlog->link }}
                                        </td>
                                        <td>{{ $playlists[$i-1]->items[0]->snippet->title }}</td>
                                        <td>
                                            <a href="{{ route('vlog.show', $vlog->id) }}"><i class="ti-video-clapper btn btn-success"></i></a>
                                            <a href="{{ route('vlog.edit', $vlog->id) }}"><i class="ti-pencil btn btn-info"></i></a>
                                            <form id="delete-form-{{ $vlog->id }}" method="post" action="{{ route('vlog.destroy', $vlog->id) }}" style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
                                            <i class="ti-trash btn btn-danger" onclick="
                                                    if(confirm('Are you sure, you want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $vlog->id }}').submit();
                                                    } else {
                                                    event.preventDefault();
                                                    }
                                                    "></i>

                                        </td>
{{--                                        <td>{{ $vlog->title }}</td>--}}
{{--                                        <td>{{ $vlog->description }}</td>--}}
                                    </tr>
                                    @php($i++)
                                @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                <a href="{{ route('vlog.create', 1) }}" class="btn btn-info btn-fill btn-wd"><i class="ti-pencil"></i> Add Playlist</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
