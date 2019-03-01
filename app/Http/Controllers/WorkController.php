<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();
        return view('admin.work.index', compact('works'));
    }

    public function create()
    {
        return view('admin.work.create');
    }

    public function store(Request $request)
    {
        $work = new Work;
        $work->title = $request->title;
        $work->company = $request->company;
        $work->address = $request->address;
        $work->start = $request->start;
        $work->end = $request->end;
        $work->save();
        return redirect(route('work.index'));
    }

    public function show(Work $work)
    {
        //
    }

    public function edit($id)
    {
        $work = Work::find($id);
        return view('admin.work.edit', compact('work'));
    }

    public function update(Request $request, $id)
    {
        $work = Work::find($id);
        $work->title = $request->title;
        $work->company = $request->company;
        $work->address = $request->address;
        $work->start = $request->start;
        $work->end = $request->end;
        $work->save();
        return redirect(route('work.index'));
    }

    public function destroy($id)
    {
        Work::find($id)->delete();
        return redirect()->back();
    }
}
