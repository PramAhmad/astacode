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
          <h4 class="card-title">Edit Service Astacode</h4>
          <p class="card-description"> add here!! </p>  
          <form class="forms-sample" action="{{ route('service.update', $service->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputName1">Nama Service</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{ $service->name }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Icon</label>
                <input type="file" name="icon" class="form-control" id="exampleInputEmail3" placeholder="Icon" onchange="preview(this)">
                <input type="hidden" name="old_icon" value="{{ $service->icon }}">
            </div>
            @if ($service->icon)
              <div class="form-group" id="current-icon"> 
                  <img src="{{ asset($service->icon) }}" alt="" style="width: 100px; height: 100px;" class="img-thumbnail">
              </div>
            @endif
            <div class="form-group">
                <label for="exampleInputEmail3">Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $service->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <a href="{{ route('service.index') }}" class="btn btn-light">Back</a>
          </form>
        
        </div>
      </div>
    </div>
</div>
</div>  

<script>
    function preview(input) {
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.width = '100px';
                img.style.height = '100px';
                img.classList.add('img-thumbnail');
                const previewContainer = document.getElementById('current-icon');
                previewContainer.innerHTML = '';
                previewContainer.appendChild(img);
            }
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection
