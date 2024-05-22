<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Member;
use App\Models\Project;
use App\Models\Services;
use App\Models\Technology;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data["count_project"] = Project::count();
        $data["count_service"] = Services::count();
        $data["count_tech"] = Technology::count();
        // persentase jabatan member
        $data["persentase"] = Member::selectRaw('jabatan_id, count(*) as total')->groupBy('jabatan_id')->with("jabatan")->get();
        
        $data["persentase"] = $data["persentase"]->map(function($item) use ($data){
            $item->persentase = ($item->total / Jabatan::count()) * 100;
            return $item;
        }); 
    
        $data["tech"] = Technology::paginate(7);
        // return $data['persentase'];
        return view('admin.dashboard',$data);
    }
}
