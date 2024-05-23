<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data["service"] = Services::orderBy('id','asc')->get();
        $title = 'Service';
        $msg = "are you sure want to delete this data?";
        confirmDelete($title,$msg,'service');
        return view('admin.service.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);
        $name = time().'_'.$request->icon->getClientOriginalName();
        $destination = 'images/icon';
        $request->icon->move($destination,$name);
        $url = $destination.'/'.$name;

        Services::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'icon' => $url,
            'created_at' => now(),
        ]);
        return redirect()->route('service.index')->with('success','Data berhasil ditambahkan');
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
        $data['service'] = Services::where('id',$id)->first();
        return view('admin.service.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        
        if ($request->hasFile('icon')) {
            $name = time().'_'.$request->icon->getClientOriginalName();

            $destination = 'public/images/icon';
            $request->icon->move($destination,$name);
            $icon = $destination.'/'.$name;
 
        } else {
            $icon = $request->old_icon;
        }
    
        Services::where('id', $id)->update([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'icon' => $icon,
        ]);
    
        return redirect()->route('service.index')->with('success', 'Data berhasil diubah');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Services::destroy($id);
        return redirect()->route('service.index')->with('success','Data berhasil dihapus');
    }
}
