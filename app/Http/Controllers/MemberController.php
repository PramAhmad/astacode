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
        $validated = $request->validate([
            'name' => '  min:3 | max:255 |string',
            'jabatan_id' => 'required',
            'about' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
            'twitter' => 'required',
            'photo' => 'required | image | mimes:jpeg,png,jpg,gif,svg,webp | max:2048',
        ]);

        // handle file upload
        $name = $request->photo->getClientOriginalName();
        $destination = 'public/images/member';
        $request->photo->move($destination, $name);
        $url = $destination.'/'.$name;
        
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
        if($request->has('skills') != null){
            foreach($request->skills as $skill){
                SkillMember::create([
                    'member_id' => $member->id,
                    'name' => $skill['name'],
                    'percentage' => $skill['percentage'],
                ]);
            }
        }
        if($request->has('educations') != null){
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
        $data['member'] = Member::where('id',$id)->with('skillmember','jabatan','education')->first();
        return view('admin.member.edit',$data);
    }

  
    public function update(Request $request, string $id)
    {
        // dd($request->all());
            
        // Validate the input
        $validated = $request->validate([
            'name' => 'required|min:3|max:255|string',
            'jabatan_id' => 'required',
            'about' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
            'twitter' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $member = Member::findOrFail($id);
    
        if ($request->hasFile('photo')) {
            $name = $request->photo->getClientOriginalName();
            $destination = 'public/images/member';
            $request->photo->move($destination, $name);
            $url = $destination . '/' . $name;
        } else {
            $url = $member->photo;
        }
    
        // Update member details
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
        try{
            // Update skills
        if ($request->has('skills')) {
            $skills = $request->input('skills', []);
            foreach ($skills as $skill) {
                $member->skillmember()->updateOrCreate(
                    ['id' => $skill['id'] ?? null],
                    ['name' => $skill['name'], 'percentage' => $skill['percentage']]
                );
            }
        }
    
        // Update education
        if ($request->has('educations')) {
            $educations = $request->input('educations', []);
            foreach ($educations as $education) {
                EducationMember::updateOrCreate(
                    ['id' => $education['id'] ?? null],
                    [
                        'member_id' => $member->id,
                        'name' => $education['name'],
                        'from' => $education['from'],
                        'to' => $education['to'],
                        'degree' => $education['degree'],
                        'description' => $education['desc'],
                    ]
                );
            }
        }
                
      
        }catch(\Exception $e){
            return redirect()->back()->with('error', 'Data Gagal Diubah');
        }
        // kalo gada request skill dan education delete
        if($request->has('skills') == null){
            $member->skillmember()->delete();
        }
        if($request->has('educations') == null){
            $member->education()->delete();
        }


        return redirect()->route('member.index')->with('success', 'Data Berhasil Diubah');
    }
    
   
    public function destroy(string $id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect()->route('member.index')->with('success','Data Berhasil Dihapus');    
    }
    public function destroySkill(string $id)
    {
        $skill = SkillMember::find($id);
        $skill->delete();
        return redirect()->back()->with('success','Data Berhasil Dihapus');
    }
}
