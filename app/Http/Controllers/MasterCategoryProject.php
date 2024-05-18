<?php

namespace App\Http\Controllers;

use App\Models\CategoryProject;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use function Laravel\Prompts\confirm;

class MasterCategoryProject extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CategoryProject::orderBy('created_at', 'asc')->get();
        $title = 'Category Project';
        $text = 'Are you sure to delete this data?';
        confirmDelete($title, $text, 'categoryproject');
        return view('admin.master.category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.master.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required | min:3 | max:255 |string | unique:category_projects,name',
            'slug' => 'required| min:3 | max:255 | string | unique:category_projects,slug',
        ]);
      
         CategoryProject::create([
            'name' => $validated['name'],
            'slug' => $validated['slug'],
            'created_at' => now(),
        ]);
        return redirect()->route('categoryproject.index')->with('success', 'Data has been added successfully');  
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
        $data = CategoryProject::find($id);
        return view('admin.master.category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       try {
            CategoryProject::destroy($id);
            return redirect()->route('category.index')->with('success', 'Data has been deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('category.index')->with('error', 'Data cannot be deleted');
        }

    }
}
