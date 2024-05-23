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
          <h4 class="card-title">Add Category Project</h4>
          <p class="card-description"> add here!! </p>  
          <form class="forms-sample" action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Nama Category Project</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Slug</label>
                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Nama Slug" name="slug">
            </div>
        
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            
            <a href="{{route('category.index')}}" class="btn btn-light">Back</a>
        </form>
        
        </div>
      </div>
    </div>
</div>
</div>  
@endsection