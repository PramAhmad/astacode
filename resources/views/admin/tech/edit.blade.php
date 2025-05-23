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
@if (session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit tech Astacode</h4>
          <p class="card-description"> add here!! </p>  
          <form class="forms-sample" action="{{ route('tech.update', $tech->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputName1">Nama tech</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{ $tech->name }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">foto</label>
                <input type="file" name="foto" class="form-control" id="exampleInputEmail3" placeholder="foto" onchange="preview(this)">
                <input type="hidden" name="old_foto" value="{{ $tech->foto }}">
            </div>
            @if ($tech->foto)
              <div class="form-group" id="current-foto"> 
                  <img src="{{ asset($tech->foto) }}" alt="" style="width: 100px; height: 100px;" class="img-thumbnail">
              </div>
            @endif
        
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <a href="{{ route('tech.index') }}" class="btn btn-light">Back</a>
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
                const previewContainer = document.getElementById('current-foto');
                previewContainer.innerHTML = '';
                previewContainer.appendChild(img);
            }
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection
