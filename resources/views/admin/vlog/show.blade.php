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
                                    <th>Name</th>
                                    <th>Description</th>
                                </tr></thead>
                                <tbody>
                                @php($i=1)
                                @foreach($videos->items as $video)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>
{{--                                            @php(print_r(json_encode($playlists[$i-1]->items[0]->snippet->thumbnails->medium->url)))--}}
                                            <img src="{{ $video->snippet->thumbnails->default->url}}" alt="">
                                        </td>
                                        <td>
                                            {{ $video->snippet->title }}
                                        </td>
                                        <td>
                                            {{ $video->snippet->description }}
                                        </td>
{{--                                        <td>{{ $video->title }}</td>--}}
{{--                                        <td>{{ $video->description }}</td>--}}
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