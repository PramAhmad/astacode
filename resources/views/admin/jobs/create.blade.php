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
          <h4 class="card-title">Add New Job</h4>
          <p class="card-description"> create a new job posting </p>  
          <form class="forms-sample" action="{{ route('admin.jobs.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="inputName">Job Title</label>
                <input type="text" class="form-control" id="inputName" placeholder="Job Title" name="name" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="titleDesc">Title Description</label>
                <input type="text" class="form-control" id="titleDesc" placeholder="Title Description" name="title_desc" value="{{ old('title_desc') }}">
            </div>
            <div class="form-group">
                <label for="jobType">Job Type</label>
                <select class="form-control form-control-lg" id="jobType" name="type">
                    <option value="">Select Job Type</option>
                    <option value="fulltime" {{ old('type') == 'fulltime' ? 'selected' : '' }}>Full Time</option>
                    <option value="parttime" {{ old('type') == 'parttime' ? 'selected' : '' }}>Part Time</option>
                    <option value="internship" {{ old('type') == 'internship' ? 'selected' : '' }}>Internship</option>
                </select>
            </div>
            <div class="form-group">
                <label for="deadlineInput">Application Deadline</label>
                <input type="date" class="form-control" id="deadlineInput" name="deadline" value="{{ old('deadline') }}">
            </div>
            
            <!-- Job Criteria Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Job Criteria</h5>
                </div>
                <div class="card-body" id="criteria-container">
                    <div class="row criteria-row mb-3">
                        <div class="col-md-11">
                            <input type="text" class="form-control" name="criteria[]" placeholder="Enter job criteria">
                        </div>
                        <div class="col-md-1">
                            <!-- Empty for the first row -->
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-sm btn-info" id="add-criteria">+ Add Criteria</button>
                </div>
            </div>
            
            <div class="form-group">
                <label for="description">Job Description</label>
                <textarea class="form-control " id="description" rows="10" name="description">{{ old('description') }}</textarea>
            </div>
            
            <div>
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
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