<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::all();
        return view('admin.education.index', compact('educations'));
    }

    public function create()
    {
        return view('admin.education.create');
    }

    public function store(Request $request)
    {
        $education = new Education;
        $education->degree = $request->degree;
        $education->institution = $request->institution;
        $education->address = $request->address;
        $education->start = $request->start;
        $education->end = $request->end;
        $education->save();
        return redirect(route('education.index'));
    }

    public function show(Education $education)
    {
        //
    }

    public function edit($id)
    {
        $education = Education::find($id);
        return view('admin.education.edit', compact('education'));
    }

    public function update(Request $request, $id)
    {
        $education = Education::find($id);
        $education->degree = $request->degree;
        $education->institution = $request->institution;
        $education->address = $request->address;
        $education->start = $request->start;
        $education->end = $request->end;
        $education->save();
        return redirect(route('education.index'));
    }

    public function destroy($id)
    {
        Education::find($id)->delete();
        return redirect()->back();
    }
}
