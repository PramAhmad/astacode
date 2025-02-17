<?php

namespace App\Http\Controllers;

use App\Models\CategoryProject;
use App\Models\ImageProject;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Project::orderBy('created_at', 'desc')->with('firstimage','category_project','images')->get();
        $title = 'Project';
        $text = 'Are you sure to delete this data?';
        confirmDelete($title, $text, 'project');
        return view('admin.project.index', compact('data'));
    }

   
    public function create()
    {
        $data['category'] = CategoryProject::orderBy('created_at', 'asc')->get();
        return view('admin.project.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required | min:3 | max:255 |string',
            'category_project_id' => 'required',
            'client_name' => 'required',
            'client_city' => 'required',
            'description_project' => 'required',
            'challenge' => 'required',
            'description_result' => 'required',
          
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $project = Project::create([
            'name' => $validated['name'],
            'client_name' => $validated['client_name'],
            'client_city' => $validated['client_city'],
            'description_project' => $validated['description_project'],
            'challenge' => $validated['challenge'],
            'description_result' => $validated['description_result'],
            'category_project_id' => $validated['category_project_id'],
            'created_at' => now(),
        ]);
        
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $name = $image->getClientOriginalName();
                $path = $image->storeAs('public/images/project', $name);
                
                ImageProject::create([
                    'project_id' => $project->id,
                    'name' => $name,
                    'path' => $path,
                    'created_at' => now(),
                ]);
            }
        }
    
        return redirect()->route('project.index')->with('success', 'Data has been added successfully');
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
        $project = Project::with('images')->findOrFail($id);
        $categories = CategoryProject::all();
        return view('admin.project.edit', compact('project', 'categories'));
   }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'category_project_id' => 'required|exists:category_projects,id',
            'client_name' => 'required|string|max:255',
            'client_city' => 'required|string|max:255',
            'description_project' => 'required|string',
            'challenge' => 'required|string',
            'description_result' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $project->update([
            'name' => $request->name,
            'category_project_id' => $request->category_project_id,
            'client_name' => $request->client_name,
            'client_city' => $request->client_city,
            'description_project' => $request->description_project,
            'challenge' => $request->challenge,
            'description_result' => $request->description_result,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $name = $image->getClientOriginalName();
                $destination = 'public/images/project';
                $image->move($destination, $name);
                $path = $destination . '/' . $name;
                ImageProject::create([
                    'project_id' => $project->id,
                    'name' => $name,
                    'path' => $path,
                ]);
            }
        }

        return redirect()->route('project.edit', $project->id)->with('success', 'Project updated successfully');
    }

    public function destroy(string $id)
    {
        try {
            $project = Project::findOrFail($id);
            $project->delete();
            return redirect()->route('project.index')->with('success', 'Data has been deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('project.index')->with('error', 'Data cannot be deleted');
        }
   }
    public function destroyImage($id)
    {
        $image = ImageProject::findOrFail($id);
        Storage::delete($image->path);
        $image->delete();
        return response()->json(['success' => 'Image deleted successfully']);
    }
}
