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
          <h4 class="card-title">Add Service</h4>
          <p class="card-description"> add here!! </p>  
          <form class="forms-sample" action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Nama Service</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
            </div>
            <div class="form-group">
                <label for="file">Icon</label>
                <input type="file" name="icon" class="form-control" id="file" onchange="preview(this)">

            </div>
            {{--preview --}}
            <div class="form-group">
                <div id="preview">
          
                </div>
           </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>                
            </div>
        
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <button type="button" class="btn btn-light">Cancel</button>
        </form>
        
        </div>
      </div>
    </div>
</div>
</div>  
<script>
    function preview(input){
        const file = input.files[0];
        if(file){
            const reader = new FileReader();
            reader.onload = function(e){
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.width = '100px';
                img.style.height = '100px';
                img.classList.add('img-thumbnail');
                document.getElementById('preview').appendChild(img);
            }
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection
