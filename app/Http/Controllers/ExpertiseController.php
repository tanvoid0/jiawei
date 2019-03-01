<?php

namespace App\Http\Controllers;

use App\Expertise;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{

    public function index()
    {
        $expertises = Expertise::all();
        return view('admin.expertise.index', compact('expertises'));
    }

    public function create()
    {
        return view('admin.expertise.create');
    }

    public function store(Request $request)
    {
        $expertise = new Expertise;
        $expertise->title = $request->title;
        $expertise->description = $request->description;
        $expertise->save();
        return redirect(route('expertise.index'));
    }

    public function show(Expertise $expertise)
    {
        //
    }

    public function edit($id)
    {
        $expertise = Expertise::find($id);
        return view('admin.expertise.edit', compact('expertise'));
    }

    public function update(Request $request, $id)
    {
        $expertise = Expertise::find($id);
        $expertise->title = $request->title;
        $expertise->description = $request->description;
        $expertise->save();
        return redirect(route('expertise.index'));
    }

    public function destroy($id)
    {
        Expertise::find($id)->delete();
        return redirect()->back();
    }
}
