{{--@foreach($videoList->items as $item)--}}
    {{--@if(isset($item->id->videoId))--}}
        {{--<div class="youtube-video">--}}
            {{--<iframe src="https://www.youtube.com/embed/{{$item->id->videoId}}" frameborder="0" allowfullscreen width="280" height="150"></iframe>--}}
            {{--<h2>{{$item->snippet->title}}</h2>--}}
        {{--</div>--}}
    {{--@endif--}}
{{--@endforeach--}}
@php(var_dump(json_encode($channel->items)))