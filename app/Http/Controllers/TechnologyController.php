<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data["tech"] = Technology::orderBy("id","asc")->get();
        $title = "Technology";
        $msg = "Are you sure want to delete this data?";
        confirmDelete($title,$msg,"tech");
        return view("admin.tech.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.tech.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      try {
        $validated = $request->validate([
            'name' => 'required | min:3 | max:255 | string',
            'foto' => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
        ]);
        
     
        $name = time().'_'.$request->foto->getClientOriginalName();
        $destination = 'public/images/tech';
        // move
        $request->foto->move($destination,$name);
        $url = $destination.'/'.$name;
        // create
        Technology::create([
            'name' => $validated['name'],
            'foto' => $url,
        ]);

        return redirect()->route('tech.index')->with('success','Data berhasil disimpan');
      } catch (\Throwable $th) {
        return redirect()->route('tech.index')->with('failed','Data gagal disimpan');
      }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['tech'] = Technology::where('id',$id)->first();
        return view('admin.tech.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    try {
        $validated = $request->validate([
            'name' => 'required | min:3 | max:255 | string',
            'foto' => 'image | mimes:jpeg,png,jpg,gif,svg | max:2048',
        ]);
        $tech = Technology::find($id);
        if($request->hasFile('foto')){
            $name = $request->foto->getClientOriginalName();
            $destination = 'public/images/tech';
            // move
            $request->foto->move($destination,$name);
            $url = $destination.'/'.$name;
            // create
            
        }else{
            $url = $tech->foto;
        }
        $tech->update([
            'name' => $validated['name'],
            'foto' => $url,
        ]);
        return redirect()->back()->with('success','Data berhasil diupdate');
    } catch (\Throwable $th) {
        return redirect()->back()->with('failed','Data gagal diupdate');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $tech = Technology::find($id);
            $tech->delete();
            return redirect()->route('tech.index')->with('success','Data berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->route('tech.index')->with('failed','Data gagal dihapus');
        }
    }
}
