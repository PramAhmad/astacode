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
          <h4 class="card-title">Add New Job Criteria</h4>
          <p class="card-description">Create a new reusable job criteria template</p>  
          <form class="forms-sample" action="{{ route('admin.criteria.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="inputName">Criteria Name</label>
                <input type="text" class="form-control" id="inputName" placeholder="e.g. 'Minimum 2 years experience' or 'Strong communication skills'" name="name" value="{{ old('name') }}">
                <small class="form-text text-muted">Enter a job requirement or qualification that can be reused across job postings.</small>
            </div>
            
            <div>
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <a href="{{ route('admin.criteria.index') }}" class="btn btn-light">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
</div>
@endsection