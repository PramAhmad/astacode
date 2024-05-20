<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Project;
use Illuminate\Http\Request;

class FeController extends Controller
{
    public function index()
    {
        $data["project"] = Project::with('category_project','firstimage')->get();
        $data["member"] = Member::orderBy('id','asc')->with('skillmember','jabatan','education')->limit(3)->get();
        return view('fe.index', $data);
    }
    public function project()
    {
        $data["project"] = Project::with('category_project','firstimage')->get();
        return view('fe.project.index',$data);
    }
    public function detailProject($id)
    {
        $data["project"] = Project::with('category_project','images')->find($id);
        $data["next_project"] =Project::where("id",$id + 1)->with("firstimage",'category_project')->get()->first();
        $data["prev_project"] = Project::where("id",$id - 1)->with("firstimage",'category_project')->get()->first();
    
        return view('fe.project.detail',$data);
    }
    public function member()
    {
        return view('fe.member');
    }
}
