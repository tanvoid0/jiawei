<?php

namespace App\Http\Controllers;

use App\Vlog;
use Illuminate\Http\Request;

class VlogController extends Controller
{
     function youtube(){
         $API_key = "AIzaSyAhcCeAbG-c04lF2LNwGsJkP2sR5SzJ-w8";
         $channelID = "UC1d_rmS5S0Y59dIOzL0Px5Q";
         $maxResults = 10;
         $videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));
         return $videoList;
    }

    public function index()
    {
        $vlogs = $this->youtube();
        return $vlogs;
//        return view('test', compact('vlogs'));
        return view('admin.vlog.index', compact('vlogs'));
    }

    public function create()
    {
        return view('admin.vlog.create');
    }

    public function store(Request $request)
    {
        $vlog = new Vlog;
        $vlog->title = $request->title;
        $vlog->description = $request->description;
        $vlog->save();
        return redirect(route('vlog.index'));
    }

    public function show(vlog $vlog)
    {
        //
    }

    public function edit($id)
    {
        $vlog = Vlog::find($id);
        return view('admin.vlog.edit', compact('vlog'));
    }

    public function update(Request $request, $id)
    {
        $vlog = Vlog::find($id);
        $vlog->title = $request->title;
        $vlog->description = $request->description;
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
