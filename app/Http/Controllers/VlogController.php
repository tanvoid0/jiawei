<?php

namespace App\Http\Controllers;

use App\Vlog;
use Illuminate\Http\Request;

class VlogController extends Controller
{
    static function  youtube($playlist_id){
        $API_key = "AIzaSyAhcCeAbG-c04lF2LNwGsJkP2sR5SzJ-w8";
//        $playlist_id =  'PLrc99hFIZhJpb1Hhl-Nif6LtnHSNlk1p2';
        $videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=25&playlistId='. $playlist_id . '&key=' . $API_key));
        return $videoList;
    }

    public function index()
    {
        $vlogs = Vlog::all();
        $playlists = [];
        $i = 0;
        foreach($vlogs as $vlog){
            $playlists[$i] = $this->youtube($vlog->link);
            $i++;
        }
        return view('admin.vlog.index', compact('vlogs', 'playlists'));
    }

    public function create()
    {
        return view('admin.vlog.create');
    }

    public function store(Request $request)
    {
        $vlog = new Vlog;
        $vlog->link = $request->link;
        $vlog->save();
        return redirect(route('vlog.index'));
    }

    public function show($id)
    {
        $videos = $this->youtube(Vlog::find($id)->link);
        return view('admin.vlog.show', compact('videos'));
    }

    public function edit($id)
    {
        $vlog = Vlog::find($id);
        return view('admin.vlog.edit', compact('vlog'));
    }

    public function update(Request $request, $id)
    {
        $vlog = Vlog::find($id);
        $vlog->link = $request->link;
        $vlog->save();
        return redirect(route('vlog.index'));
    }

    public function destroy($id)
    {
        Vlog::find($id)->delete();
        return redirect()->back();
    }


    public function thumbnail ($url){
        $url = 'https://www.youtube.com/watch?v=O3Z_LKxPJXQ';
        $value = explode("v=", $url);
        $videoId= $value[1];

        return '<img src="https://img.youtube.com/vi/'.$videoId.'/hqdefault.jpg" width="250">';
    }
}
