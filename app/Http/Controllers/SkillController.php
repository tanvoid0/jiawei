<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('admin.skill.index', compact('skills'));
    }

    public function create()
    {
//        $columns = Schema::getColumnListing('skills');
//        $columns = array_diff($columns, ['id', 'created_at', 'updated_at']);

        return view('admin.skill.create');
    }

    public function store(Request $request)
    {
        $skill = new Skill;
        $skill->title = $request->title;
        $skill->proficiency = $request->proficiency;
        $skill->save();
        return redirect(route('skill.index'));
    }

    public function show(Skill $skill)
    {
        //
    }

    public function edit($id)
    {
        $skill = Skill::find($id);
        return view('admin.skill.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $skill = Skill::find($id);
        $skill->title = $request->title;
        $skill->proficiency = $request->proficiency;
        $skill->save();
        return redirect(route('skill.index'));
    }

    public function destroy($id)
    {
        Skill::find($id)->delete();
        return redirect()->back();
    }
}
