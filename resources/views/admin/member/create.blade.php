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
          <h4 class="card-title">Add Astacode Member</h4>
          <p class="card-description"> add here!! </p>  
          <form class="forms-sample" action="{{ route('member.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Nama Member Team</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect3">Jabatan</label>
                <select class="form-control form-control-lg" id="exampleFormControlSelect3" name="jabatan_id">
                    <option value="">Pilih Jabatan</option>
                    @foreach ($jabatan as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleTextarea1">About</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4" name="about"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Nama Slug</label>
                <input type="text" class="form-control"  placeholder="Nama Slug" name="slug">
            </div>
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="photo" class="form-control">
             
            </div>
            {{-- social media link --}}
            <div class="form-group">
                <label for="exampleInputName1">Facebook</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Facebook" name="facebook">
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Instagram</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Instagram" name="instagram">
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Linkedin</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Linkedin" name="linkedin">
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Twitter</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Twitter" name="twitter">
            </div>

            {{-- dynamic skill input --}}
            <div id="skills-container">
                <div class="row">
                    <div class="col-md-8">
                        
                        <div class="form-group skill-row">
                            <label for="skillName0">Skill</label>
                            <input type="text" class="form-control" id="skillName0" placeholder="Skill" name="skills[0][name]">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group skill-row">
                            <label for="skillPercentage0">Persentase</label>
                            <input type="number"
                            class="form-control" id="skillPercentage0" placeholder="Persentase" name="skills[0][percentage]">
                        </div>
                    </div>
                </div>
            </div>
                <button type="button" id="add-skill" class="btn btn-info mb-5">+</button>
                 <div id="education-container">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group education-row">
                                <label for="educationName0">Name Education</label>
                                <input type="text" class="form-control" id="educationName0" placeholder="Name" name="educations[0][name]">

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group education-row">
                                <label for="educationFrom0">From Year</label>
                                <input type="number" class="form-control" id="educationFrom0" placeholder="From" name="educations[0][from]">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group education-row">
                                <label for="educationTo0">To Year</label>
                                <input type="number" class="form-control" id="educationTo0" placeholder="To" name="educations[0][to]">
                            </div>
                        </div>
                  
                        <div class="col-md-12">
                            <div class="form-group
                            education-row">
                                <label for="educationDesc0">Description</label>
                                <textarea class="form-control" id="educationDesc0" rows="4" name="educations[0][desc]"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group education-row">
                                <label for="educationDegree0">Degree</label>
                                <input type="text" class="form-control" id="educationDegree0" placeholder="Degree" name="educations[0][degree]">
                            </div>
                        </div>
                    </div>
                 
                </div>  
                <button type="button" id="add-education" class="btn btn-info mb-5">+</button>              
                
                <div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <a href="{{route('member.index')}}" class="btn btn-light">Cancel</a>
                </div>
           </div>
        </form>
        
        </div>
      </div>
    </div>
</div>
</div>  

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let skillIndex = 1;

    $('#add-skill').on('click', function() {
        let skillHTML = `
        <div class="row">
                    <div class="col-md-8">
        <div class="form-group skill-row">
            <label for="skillName${skillIndex}">Skill</label>
            <input type="text" class="form-control" id="skillName${skillIndex}" placeholder="Skill" name="skills[${skillIndex}][name]">
        </div>
        </div>
        <div class="col-md-2">
        <div class="form-group skill-row">
            <label for="skillPercentage${skillIndex}">Persentase</label>
            <input type="number" class="form-control" id="skillPercentage${skillIndex}" placeholder="Persentase" name="skills[${skillIndex}][percentage]">
        </div>
        
        </div>
        <div class="col-md-1">
            <div  class="form-group skill-row">
            <label for="delete">delete</label>
            
            <button type="button" class="btn btn-danger delete-skill"><i class="mdi mdi-delete "></i></button>
            </div>
        </div>
        </div>
        `;

        $('#skills-container').append(skillHTML);
        skillIndex++;
        // handle delte
        $('#skills-container').on('click', '.delete-skill', function() {
            $(this).closest('.row').remove();
        });
    });



    let educationIndex = 1;
  
        $('#add-education').on('click', function() {
            let educationHTML = `
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group education-row">
                        <label for="educationName${educationIndex}">Name Education</label>
                        <input type="text" class="form-control" id="educationName${educationIndex}" placeholder="Name" name="educations[${educationIndex}][name]">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group
                    education-row">
                        <label for="educationFrom${educationIndex}">From Year</label>
                        <input type="number" class="form-control" id="educationFrom${educationIndex}" placeholder="From" name="educations[${educationIndex}][from]">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group
                    education-row">
                        <label for="educationTo${educationIndex}">To Year</label>
                        <input type="number" class="form-control" id="educationTo${educationIndex}" placeholder="To" name="educations[${educationIndex}][to]">
                    </div>
                </div>
           

                <div class="col-md-12">
                    <div class="form-group
                    education-row">
                        <label for="educationDesc${educationIndex}">Description</label>
                        <textarea class="form-control" id="educationDesc${educationIndex}" rows="4" name="educations[${educationIndex}][desc]"></textarea>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group
                    education-row">
                        <label for="educationDegree${educationIndex}">Degree</label>
                        <input type="text" class="form-control" id="educationDegree${educationIndex}" placeholder="Degree" name="educations[${educationIndex}][degree]">
                    </div>
                </div>
                <div class="col-md-1">
                    <div  class="form-group
                    education-row">
                    <label >Delete</label>
                    <button type="button" class="btn btn-danger delete-education"><i class="mdi mdi-delete "></i></button>
                    </div>
                </div>
            </div>
            `;
            $('#education-container').append(educationHTML);
            educationIndex++;
            // handle delte
            $('#education-container').on('click', '.delete-education', function() {
                $(this).closest('.row').remove();
            });
        });
    });
</script>
@endsection
