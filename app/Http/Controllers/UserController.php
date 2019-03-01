<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return Session::get('msg');
        $user = User::find(1);
        return view('admin.user', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::find($id);

        if(Input::hasFile('image')){
            $file = Input::file('image');
            $file->move('img/user/', $file->getClientOriginalName());
            $user->image = $file->getClientOriginalName();
            $msg = "Image";
        }
        else if(Input::hasFile('cv')){
            $file = Input::file('cv');
            $file->move('cv/', $file->getClientOriginalName());
            $user->cv = $file->getClientOriginalName();
            $msg = "CV";
        } else {
            if ($request->name != ""){
                $user->name = $request->name;
            }

            if($request->designation != ""){
                $user->designation = $request->designation;
            }
            if($request->phone != ""){
                $user->phone = $request->phone;
            }
            if($request->email != ""){
                $user->email = $request->email;
            }
            if($request->password != ""){
                $user->password = Hash::make($request->password);
            }
            if($request->address != ""){
                $user->address = $request->address;
            }


            if($request->facebook != ""){
                $user->facebook = $request->facebook;
            }
            if($request->twitter != ""){
                $user->twitter = $request->twitter;
            }
            if($request->linkedin != ""){
                $user->linkedin = $request->linkedin;
            }
            if($request->tumblr != ""){
                $user->tumblr = $request->tumblr;
            }
            if($request->dribble != ""){
                $user->dribble = $request->dribble;
            }
            if($request->about != ""){
                $user->about = $request->about;
            }
            $msg = "Bio";
        }


        $user->save();
        session (['msg' => "$msg Has Been Updated!", "type" => "info"]);
        return redirect(route('user.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
