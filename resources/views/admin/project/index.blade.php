@extends('admin.layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Project List </h3>
        <nav aria-label="breadcrumb">
          {{-- tambah --}}
          <a href="{{route('project.create')}}" class="btn btn-primary">tambah</a>
        </nav>
      </div>
 
       <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Astacode Project</h4>
      
        </p>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Nama Project</th>
              <th>Foto</th>
              <th>Kategori Projet</th>
              <th>Nama Client</th>
              
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <td>{{$item->name}}</td>

              <td>
                @if ($item->firstimage)  
                {{-- img acces public --}}
                <img src="{{asset($item->firstimage->path)}}" alt="" style="width: 50px">
                @endif
            </td>
              <td>{{$item->category_project->name}}</td>
              <td>{{$item->client_name}}</td>
              <td>
                {{-- 3 navigation use drop down --}}
                <a class="nav-link " id="actionDropDwon" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="actionDropDwon">
                  
                    <button class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#detailModal{{$item->id}}">
                        <i class="mdi mdi-cached me-2 text-success"></i> Detail
                    </button>
                    <a class="dropdown-item" href="{{route('project.edit', $item->id)}}">
                      <i class="mdi mdi-cached me-2 text-success"></i> Edit
                        </a>
                    <a class="dropdown-item" href="{{route('project.destroy', $item->id)}}" data-confirm-delete="true">
                        <i class="mdi mdi-delete me-2 text-danger"></i> Delete
                    </a>
                    </div>

                
              </td>
              
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>

    @foreach ($data as $item)
    <div class="modal fade" id="detailModal{{$item->id}}" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="detailModalLabel">Detail Project</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body
            ">
              <div class="row">
                <div class="col-md-12">
                @if ($item->images)
                <div id="carouselExampleControls{{$item->id}}" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($item->images as $key => $image)
                        <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                            <img src="{{asset($image->path)}}" class="d-block w-100" alt="...">
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls{{$item->id}}" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls{{$item->id}}" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>    
              @endif
                </div>
                <div class="col-md-12 mt-4">
                  <h3>{{$item->name}}</h3>
                  <p>{{$item->client_name}}</p>
                  <p>{{$item->client_city}}</p>
                  <p>{{$item->category_project->name}}</p>
                  <h3>description</h3>
                  <p>{{$item->description_project}}</p>
                  <h3>Our Challenge</h3>
                  <p>{{$item->challenge}}</p>
                    <h3>Our Result</h3>
                    <p>{{$item->description_result}}</p>
                    <p>{{$item->created_at}}</p>

                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
            </div>
    </div>
      </div>
    </div>
    @endforeach
@endsection