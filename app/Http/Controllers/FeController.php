<?php

namespace App\Http\Controllers;

use App\Models\CategoryProject;
use App\Models\Member;
use App\Models\Project;
use Illuminate\Http\Request;

class FeController extends Controller
{
    public function index()
    {
        $data["project"] = Project::with('category_project','firstimage')->get();
        $data["member"] = Member::orderBy('id','asc')->with('skillmember','jabatan','education')->limit(3)->get();
        $data["category_project"] = CategoryProject::all();
        $data['rencent_project'] = Project::with('category_project','firstimage')->limit(2)->get();
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
        $data["member"] = Member::orderBy('id','asc')->get();
        return view('fe.member.index',$data);
    }
    public function detailMember($id)
    {
        $data["member"] = Member::where('id',$id)->with('skillmember','jabatan','education')->first();
        // dd($data["member"]);
        return view('fe.member.detail',$data);
    }
    public function categoryProject($cid)
    {
        
        $data["project"] = Project::where('category_project_id',$cid)->with('category_project','firstimage')->get();
        return view('fe.project.index',$data);
    }
}
