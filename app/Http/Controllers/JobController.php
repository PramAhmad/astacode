<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->paginate(10);
        return view('admin.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'title_desc' => 'nullable|string|max:255',
            'deadline' => 'nullable|date',
            'type' => 'required|in:fulltime,parttime,internship',
            'description' => 'required|string',
            'criteria' => 'nullable|array',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.jobs.create')
                ->withErrors($validator)
                ->withInput();
        }

        // Filter out empty criteria values
        $criteria = array_filter($request->criteria ?? [], function($value) {
            return !empty(trim($value));
        });

        // Create the job with all fields
        $jobData = $request->except('criteria');
        $jobData['criteria'] = !empty($criteria) ? array_values($criteria) : null;
        
        Job::create($jobData);

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Job created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('admin.jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('admin.jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'title_desc' => 'nullable|string|max:255',
            'deadline' => 'nullable|date',
            'type' => 'required|in:fulltime,parttime,internship',
            'description' => 'required|string',
            'criteria' => 'nullable|array',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.jobs.edit', $job->id)
                ->withErrors($validator)
                ->withInput();
        }

        // Filter out empty criteria values
        $criteria = array_filter($request->criteria ?? [], function($value) {
            return !empty(trim($value));
        });

        // Update the job with all fields
        $jobData = $request->except('criteria');
        $jobData['criteria'] = !empty($criteria) ? array_values($criteria) : null;
        
        $job->update($jobData);

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Job updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Job deleted successfully');
    }
}