<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Education;
use App\Expertise;
use App\Interest;
use App\Skill;
use App\User;
use App\Vlog;
use App\Work;
use Illuminate\Support\Facades\App;
use Alaouy\Youtube\Facades\Youtube;

Route::get('/', function () {
//    $channel = youtube();
    $user = User::find(1);
    $expertises = Expertise::all();
    $skills = Skill::all();
    $works = Work::all();
    $educations = Education::all();
    $interests = Interest::all();
    $vlogs = Vlog::all();
    $playlists = [];
    $i = 0;
    foreach($vlogs as $vlog){
        $playlists[$i] = \App\Http\Controllers\VlogController::youtube($vlog->link);
        $i++;
    }
//    return $playlists;
    return view('portfolio.index', compact('user', 'expertises', 'skills', 'works', 'educations', 'interests', 'vlogs', 'playlists'));
});

Route::get('/cvs', function(){
    $user = User::find(1);
    return response()->download(public_path('cv/'.$user->cv));
})->name('cv');

Route::get('/test', function(){
    $vlogs = Vlog::all();
    $playlists = [];
    $i = 0;
    foreach($vlogs as $vlog){
        $playlists[$i] = \App\Http\Controllers\VlogController::youtube($vlog->link);
        $i++;
    }
    return $playlists;
//    return $vlogs;
    return view('test', compact('channel'));
});
Route::resource('user', 'UserController')->middleware('auth');
Route::resource('expertise', 'ExpertiseController');
Route::resource('skill', 'SkillController');
Route::resource('work', 'WorkController');
Route::resource('education', 'EducationController');
Route::resource('interest', 'InterestController');
Route::resource('portfolio', 'PortfolioController');
Route::resource('vlog', 'VlogController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

function youtube(){
    $API_key = "AIzaSyAhcCeAbG-c04lF2LNwGsJkP2sR5SzJ-w8";
//    $channelID = "PLrc99hFIZhJpb1Hhl-Nif6LtnHSNlk1p2";
    $playlist_id =  'PLrc99hFIZhJpb1Hhl-Nif6LtnHSNlk1p2';
    $maxResults = 10;
//    $videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));
    $videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=25&playlistId='. $playlist_id . '&key=' . $API_key));
    return $videoList;
}


