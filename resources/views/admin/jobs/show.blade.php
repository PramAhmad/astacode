@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Job Details</h1>
        <div>
            <a href="{{ route('admin.jobs.edit', $job->id) }}" class="btn btn-sm btn-primary">
                Edit Job
            </a>
            <a href="{{ route('admin.jobs.index') }}" class="btn btn-sm btn-secondary">
                Back to Jobs List
            </a>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ $job->name }}</h6>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Job Type:</div>
                <div class="col-md-9">
                    <span class="badge 
                        {{ $job->type === 'fulltime' ? 'badge-primary' : 
                           ($job->type === 'parttime' ? 'badge-info' : 'badge-warning') }}">
                        {{ ucfirst($job->type) }}
                    </span>
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Application Deadline:</div>
                <div class="col-md-9">
                    {{ $job->deadline ? $job->deadline->format('F d, Y') : 'No Deadline Set' }}
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Created At:</div>
                <div class="col-md-9">
                    {{ $job->created_at->format('F d, Y h:i A') }}
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Last Updated:</div>
                <div class="col-md-9">
                    {{ $job->updated_at->format('F d, Y h:i A') }}
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="font-weight-bold mb-2">Job Description:</div>
                    <div class="p-3 bg-light border rounded">
                        {!! nl2br(e($job->description)) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection