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
          <h4 class="card-title">Edit Jabatan Member</h4>
          <p class="card-description"> add here!! </p>  
          <form class="forms-sample" action="{{ route('jabatan.update' ,$data->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputName1">Nama Jabatan</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{$data->name}}" >
            </div>
            <div class="form-group">
                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="is_active" {{ old('is_active', $data->is_active) }}> Is Active </label>
                  </div>
            </div>
        
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            {{-- back --}}
              <a href="{{route('jabatan.index')}}" class="btn btn-light">Back</a>
        </form>
        
        </div>
      </div>
    </div>
</div>
</div>  
@endsection