<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class MasterJabatanMember extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Jabatan::orderBy('created_at', 'asc')->get();
        $title = 'Jabatan Member';
        $text = 'Are you sure to delete this data?';
        confirmDelete($title, $text, 'jabatanmember');
        return view('admin.master.jabatan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.master.jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required | min:3 | max:255 |string | unique:jabatans,name',
        ]);
        $active = $request->is_active == 'on' ? 1 : 0;
         Jabatan::create([
            'name' => $validated['name'],
            'is_active' => $active,
            'created_at' => now(),
        ]);
        return redirect()->route('jabatan.index')->with('success', 'Data has been added successfully');
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
        $data = Jabatan::find($id);
        $data->is_active = $data->is_active == 1 ? 'checked' : '';
      
        return view('admin.master.jabatan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required | min:3 | max:255 |string | unique:jabatans,name,' . $id,
        ]);
        $active = $request->is_active == 'on' ? 1 : 0;
        Jabatan::where('id', $id)->update([
            'name' => $validated['name'],
            'is_active' => $active,
            'updated_at' => now(),
        ]);
        return redirect()->route('jabatan.index')->with('success', 'Data has been updated successfully');
    }

    public function destroy(string $id)
    {
        try {
            Jabatan::destroy($id);
            return redirect()->route('jabatan.index')->with('success', 'Data has been deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->route('jabatan.index')->with('error', 'Data cannot be deleted');
        }
    }
}
