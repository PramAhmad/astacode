<?php

namespace App\Http\Controllers;

use App\Models\EducationMember;
use App\Models\Jabatan;
use App\Models\Member;
use App\Models\SkillMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    
    public function index()
    {
        $data = Member::orderBy('id','desc')->with('skillmember','jabatan','education')->get();
        $title = 'Member';
        $msg = "are you sure want to delete this data?";
        confirmDelete($title,$msg,'member');
        return view('admin.member.index',compact('data'));
    }

    public function create()
    {
        $data['jabatan'] = Jabatan::orderBy('created_at', 'asc')->get();
        return view('admin.member.create',$data);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name' => '  min:3 | max:255 |string',
            'jabatan_id' => 'required',
            'about' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
            'twitter' => 'required',
            'photo' => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
        ]);
        // handle file upload
        $name = $request->photo->getClientOriginalName();
        $path = $request->photo->storeAs('public/images/member',$name);
        $url = Storage::url($path);

        
        $member = Member::create([
            'name' => $validated['name'],
            'jabatan_id' => $validated['jabatan_id'],
            'about' => $validated['about'],
            'facebook' => $validated['facebook'],
            'instagram' => $validated['instagram'],
            'linkedin' => $validated['linkedin'],
            'twitter' => $validated['twitter'],
            'photo' => $url,
            'created_at' => now(),
        ]);
        if($request->has('skills')){
            foreach($request->skills as $skill){
                SkillMember::create([
                    'member_id' => $member->id,
                    'name' => $skill['name'],
                    'percentage' => $skill['percentage'],
                ]);
            }
        }
        if($request->has('educations')){
            foreach($request->educations as $education){
                EducationMember::create([
                    'member_id' => $member->id,
                    'name' => $education['name'],
                    'from' => $education['from'], 
                    'to' => $education['to'],
                    'degree'=> $education['degree'],
                    'description' => $education["degree"],
                ]);
            }
        }
        return redirect()->route('member.index')->with('success','Data Berhasil Ditambahkan');
    }

  
    public function show(string $id)
    {
        
    }

    
    public function edit(string $id)
    {   
        $data['jabatan'] = Jabatan::orderBy('created_at', 'asc')->get();
        $data['member'] = Member::find($id)->with('skillmember','jabatan','education')  ->first();
        return view('admin.member.edit',$data);
    }

  
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required | min:3 | max:255 |string',
            'jabatan_id' => 'required',
            'about' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
            'twitter' => 'required',
            'photo' => 'image | mimes:jpeg,png,jpg,gif,svg | max:2048',
        ]);
        $member = Member::find($id);
        if($request->hasFile('photo')){
            $name = $request->photo->getClientOriginalName();
            $path = $request->photo->storeAs('images/member',$name);
            $url = Storage::url($path);
        }else{
            $url = $member->photo;
        }
        $member->update([
            'name' => $validated['name'],
            'jabatan_id' => $validated['jabatan_id'],
            'about' => $validated['about'],
            'facebook' => $validated['facebook'],
            'instagram' => $validated['instagram'],
            'linkedin' => $validated['linkedin'],
            'twitter' => $validated['twitter'],
            'photo' => $url,
            'updated_at' => now(),
        ]);
        if($request->has('skills')){
            foreach($request->skills as $skill){
                SkillMember::create([
                    'member_id' => $member->id,
                    'name' => $skill['name'],
                    'percentage' => $skill['percentage'],
                ]);
            }
        }
        if($request->has('educations')){
            foreach($request->educations as $education){
                EducationMember::create([
                    'member_id' => $member->id,
                    'name' => $education['name'],
                    'from' => $education['from'], 
                    'to' => $education['to'],
                    'degree'=> $education['degree'],
                    'description' => $education["degree"],
                ]);
            }
        }
        return redirect()->route('member.index')->with('success','Data Berhasil Diubah');
    }

   
    public function destroy(string $id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect()->route('member.index')->with('success','Data Berhasil Dihapus');    
    }
}
