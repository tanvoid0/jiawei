<?php

namespace App\Http\Controllers;

use App\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function index()
    {
        $interests = Interest::all();
        return view('admin.interest.index', compact('interests'));
    }

    public function create()
    {
        return view('admin.interest.create');
    }

    public function store(Request $request)
    {
        $interest = new Interest;
        $interest->title = $request->title;
        $interest->description = $request->description;
        $interest->save();
        return redirect(route('interest.index'));
    }

    public function show(interest $interest)
    {
        //
    }

    public function edit($id)
    {
        $interest = Interest::find($id);
        return view('admin.interest.edit', compact('interest'));
    }

    public function update(Request $request, $id)
    {
        $interest = Interest::find($id);
        $interest->title = $request->title;
        $interest->description = $request->description;
        $interest->save();
        return redirect(route('interest.index'));
    }

    public function destroy($id)
    {
        Interest::find($id)->delete();
        return redirect()->back();
    }
}
