<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Get a list of available jobs
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Job::query();
        
        // Filter by job type if provided
        if ($request->has('type') && in_array($request->type, ['fulltime', 'parttime', 'internship'])) {
            $query->where('type', $request->type);
        }
        

        // Get the jobs with pagination
        $jobs = $query->latest()->paginate(10);
        
        return response()->json([
            'success' => true,
            'data' => $jobs
        ]);
    }
    
    /**
     * Get details of a specific job
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::findOrFail($id);
        
        return response()->json([
            'success' => true,
            'data' => $job
        ]);
    }
}