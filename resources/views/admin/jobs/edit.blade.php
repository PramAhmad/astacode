@extends('admin.layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        
<div class="row">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Job</h4>
          <p class="card-description"> update job details </p>  
          <form class="forms-sample" action="{{ route('admin.jobs.update', $job->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="inputName">Job Title</label>
                <input type="text" class="form-control" id="inputName" placeholder="Job Title" name="name" value="{{ old('name', $job->name) }}">
            </div>
            <div class="form-group">
                <label for="titleDesc">Title Description</label>
                <input type="text" class="form-control" id="titleDesc" placeholder="Title Description" name="title_desc" value="{{ old('title_desc', $job->title_desc) }}">
            </div>
            <div class="form-group">
                <label for="jobType">Job Type</label>
                <select class="form-control form-control-lg" id="jobType" name="type">
                    <option value="">Select Job Type</option>
                    <option value="fulltime" {{ old('type', $job->type) == 'fulltime' ? 'selected' : '' }}>Full Time</option>
                    <option value="parttime" {{ old('type', $job->type) == 'parttime' ? 'selected' : '' }}>Part Time</option>
                    <option value="internship" {{ old('type', $job->type) == 'internship' ? 'selected' : '' }}>Internship</option>
                </select>
            </div>
            <div class="form-group">
                <label for="deadlineInput">Application Deadline</label>
                <input type="date" class="form-control" id="deadlineInput" name="deadline" 
                    value="{{ old('deadline', $job->deadline ? $job->deadline->format('Y-m-d') : '') }}">
            </div>
            
            <!-- Job Criteria Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Job Criteria</h5>
                </div>
                <div class="card-body" id="criteria-container">
                    @if(old('criteria', $job->criteria))
                        @foreach(old('criteria', $job->criteria ?? []) as $index => $criteria)
                            <div class="row criteria-row mb-3">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" name="criteria[]" value="{{ $criteria }}" placeholder="Enter job criteria">
                                </div>
                                <div class="col-md-1">
                                    @if(!$loop->first)
                                        <button type="button" class="btn btn-danger btn-sm remove-criteria">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="row criteria-row mb-3">
                            <div class="col-md-11">
                                <input type="text" class="form-control" name="criteria[]" placeholder="Enter job criteria">
                            </div>
                            <div class="col-md-1">
                                <!-- Empty for the first row -->
                            </div>
                        </div>
                    @endif
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-sm btn-info" id="add-criteria">+ Add Criteria</button>
                </div>
            </div>
            
            <div class="form-group">
                <label for="description">Job Description</label>
                <textarea class="form-control " id="description" rows="10" name="description">{{ old('description', $job->description) }}</textarea>
            </div>
            
            <div>
                <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                <a href="{{ route('admin.jobs.index') }}" class="btn btn-light">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
</div>  

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

@endsection