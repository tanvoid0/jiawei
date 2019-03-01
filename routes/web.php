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
use App\Work;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    $user = User::find(1);
    $expertises = Expertise::all();
    $skills = Skill::all();
    $works = Work::all();
    $educations = Education::all();
    $interests = Interest::all();
    return view('portfolio', compact('user', 'expertises', 'skills', 'works', 'educations', 'interests'));
});

Route::get('/cvs', function(){
    $user = User::find(1);
    return response()->download(public_path('cv/'.$user->cv));
})->name('cv');

Route::get('/test', function(){
    $vlogs  = '';
    return view('video', compact('vlogs'));
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
    $channelID = "UC1d_rmS5S0Y59dIOzL0Px5Q";
    $maxResults = 10;
    $videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));
    return $videoList;
}


