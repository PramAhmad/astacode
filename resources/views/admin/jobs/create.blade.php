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
                <div class="card-body">
                    <!-- Criteria selection dropdown -->
                    <div class="mb-4">
                        <label class="form-label">Add Criteria from Master List</label>
                        @php
                            $masterCriterias = App\Models\Criteria::orderBy('name')->get();
                        @endphp
                        <div class="input-group mb-3">
                            <select class="form-control" id="criteria-selector">
                                <option value="">-- Select a criteria --</option>
                                @foreach($masterCriterias as $masterCriteria)
                                    <option value="{{ $masterCriteria->name }}">{{ $masterCriteria->name }}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-info" type="button" id="add-master-criteria">Add</button>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">
                    
                    <h6 class="mb-3">Selected Job Criteria</h6>
                    <div id="criteria-container">
                        @if(old('criteria'))
                            @foreach(old('criteria') as $index => $criteria)
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
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-sm btn-info" id="add-criteria">+ Add Custom Criteria</button>
                </div>
            </div>
            
            <div class="form-group">
                <label for="description">Job Description</label>
                <textarea class="form-control summernote" id="description" rows="10" name="description">{{ old('description') }}</textarea>
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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
<script>
      $('.summernote').summernote({
        placeholder: 'Write job description here...',
        tabsize: 2,
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'italic', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>
<script>
$(document).ready(function() {
    // Initialize Summernote
  

    // Add a custom criteria field
    $('#add-criteria').on('click', function() {
        let newRow = `
        <div class="row criteria-row mb-3">
            <div class="col-md-11">
                <input type="text" class="form-control" name="criteria[]" placeholder="Enter job criteria">
            </div>
            <div class="col-md-1">
                <button type="button" class="btn btn-danger btn-sm remove-criteria">
                    <i class="mdi mdi-delete"></i>
                </button>
            </div>
        </div>
        `;
        $('#criteria-container').append(newRow);
    });
    
    // Add criteria from master list
    $('#add-master-criteria').on('click', function() {
        let selectedCriteria = $('#criteria-selector').val();
        
        if (selectedCriteria) {
            let newRow = `
            <div class="row criteria-row mb-3">
                <div class="col-md-11">
                    <input type="text" class="form-control" name="criteria[]" value="${selectedCriteria}" placeholder="Enter job criteria">
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger btn-sm remove-criteria">
                        <i class="mdi mdi-delete"></i>
                    </button>
                </div>
            </div>
            `;
            $('#criteria-container').append(newRow);
            $('#criteria-selector').val(''); // Reset the dropdown
        }
    });
    
    // Remove a criteria field
    $(document).on('click', '.remove-criteria', function() {
        $(this).closest('.criteria-row').remove();
    });
});
</script>
@endsection