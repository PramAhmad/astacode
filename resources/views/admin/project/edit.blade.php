@extends('admin.layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Edit Project</h3>
        </div>
        <div class="col-12 grid-margin stretch-card">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Project</h4>
                    <form class="forms-sample" action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{ $project->name }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputName1">Category</label>
                            <select class="form-control" name="category_project_id">
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}" {{ $project->category_project_id == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Client Name</label>
                            <input type="text" class="form-control" placeholder="Client Name" name="client_name" value="{{ $project->client_name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Client City</label>
                            <input type="text" class="form-control" placeholder="Client City" name="client_city" value="{{ $project->client_city }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Description Project</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="4" name="description_project">{{ $project->description_project }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Challenge</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="4" name="challenge">{{ $project->challenge }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Description Result</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="4" name="description_result">{{ $project->description_result }}</textarea>
                        </div>
                        <div class="input-group form-group control-group increment">
                            <input type="file" name="images[]" id="images" multiple accept="image/*" class="form-control">
                        </div>
                        <div class="form-group preview">
                            @foreach ($project->images as $image)
                                <div class="image-container">
                                    <img src="{{ asset($image->path) }}" alt="{{ $image->name }}" style="width: 100%;">
                                    <button type="button" class="badge badge-danger delete-button" data-id="{{ $image->id }}">X</button>
                                </div>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                        <a href="{{ route('project.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        let imagesInput = $('#images');
        let previewContainer = $('.preview');
        let filesArray = [];

        imagesInput.on('change', function() {
            let files = imagesInput[0].files;
            $.each(files, function(index, file) {
                if (!filesArray.some(existingFile => existingFile.name === file.name)) {
                    filesArray.push(file);
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        let imgElement = $('<img style="max-width:100px">').attr('src', e.target.result);

                        let removeButton = $('<button>')
                            .text('X')
                            .addClass('badge badge-danger')
                            .on('click', function() {
                                removeImage(file);
                            });

                        let div = $('<div>')
                            .addClass('image-container')
                            .append(imgElement)
                            .append(removeButton);

                        previewContainer.append(div);
                    };
                    reader.readAsDataURL(file);
                }
            });
            updateInputFiles();
        });

        function removeImage(file) {
            filesArray = filesArray.filter(f => f !== file);
            updateInputFiles();
            previewContainer.find('.image-container').each(function() {
                let img = $(this).find('img');
                if (img.attr('src') === URL.createObjectURL(file)) {
                    $(this).remove();
                }
            });
        }

        function updateInputFiles() {
            let dataTransfer = new DataTransfer();
            filesArray.forEach(file => {
                dataTransfer.items.add(file);
            });
            imagesInput[0].files = dataTransfer.files;
        }

        $(document).on('click', '.delete-button', function() {
            let imageId = $(this).data('id');
            let button = $(this);

            $.ajax({
                url: '/admin/image/' + imageId + '/delete',
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    button.closest('.image-container').remove();
                }
            });
        });
    });
</script>
@endsection
