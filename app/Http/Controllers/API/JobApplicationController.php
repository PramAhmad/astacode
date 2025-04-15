<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class JobApplicationController extends Controller
{
    /**
     * Submit a new job application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submit(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'job_id' => 'required|exists:jobs,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'gender' => 'nullable|in:male,female',
            'alamat' => 'nullable|string',
            'telp' => 'nullable|string|max:20',
            'linkedin' => 'nullable|url|max:255',
            'github' => 'nullable|url|max:255',
            'portfolio' => 'nullable|url|max:255',
            'tentang' => 'nullable|string',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:5120', // Max 5MB
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Check if job exists and is still open
        $job = Job::findOrFail($request->job_id);
        
        if ($job->deadline && now()->greaterThan($job->deadline)) {
            return response()->json([
                'success' => false,
                'message' => 'This job application deadline has passed'
            ], 400);
        }

        // Handle CV upload if provided
        $cvPath = null;
        if ($request->hasFile('cv')) {
            $cvFile = $request->file('cv');
            $fileName = time() . '_' . $cvFile->getClientOriginalName();
            $cvPath = $cvFile->storeAs('cv', $fileName, 'public');
        }

        // Create the application record
        try {
            $application = Pelamar::create([
                'job_id' => $request->job_id,
                'name' => $request->name,
                'email' => $request->email,
                'gender' => $request->gender,
                'alamat' => $request->alamat,
                'telp' => $request->telp,
                'linkedin' => $request->linkedin,
                'github' => $request->github,
                'portfolio' => $request->portfolio,
                'tentang' => $request->tentang,
                'cv' => $cvPath,
                'status' => 'pending', // Default status
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Job application submitted successfully',
                'data' => $application
            ], 201);
            
        } catch (\Exception $e) {
            // If something goes wrong, delete the uploaded file if it exists
            if ($cvPath && Storage::disk('public')->exists($cvPath)) {
                Storage::disk('public')->delete($cvPath);
            }
            
            return response()->json([
                'success' => false,
                'message' => 'Failed to submit application',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
    /**
     * Check the status of an application
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'job_id' => 'required|exists:jobs,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $application = Pelamar::where('email', $request->email)
            ->where('job_id', $request->job_id)
            ->first();

        if (!$application) {
            return response()->json([
                'success' => false,
                'message' => 'No application found with this email for the specified job'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => [
                'name' => $application->name,
                'job' => $application->job->name,
                'status' => $application->status,
                'submitted_at' => $application->created_at->format('Y-m-d H:i:s'),
                'interview_date' => $application->interview_date ? $application->interview_date->format('Y-m-d H:i:s') : null
            ]
        ]);
    }
}