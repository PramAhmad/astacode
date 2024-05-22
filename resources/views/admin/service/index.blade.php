@extends('admin.layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Service Astacode </h3>
        <nav aria-label="breadcrumb">
          {{-- tambah --}}
          <a href="{{route('service.create')}}" class="btn btn-primary">tambah</a>
        </nav>
      </div>
      <div class="row">
        {{-- session --}}
        {{-- end session --}}
        @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">data </h4>
           
                </p>
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Service</th>
                      <th>Icon</th>
                      <th>Description</th>
                      <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($service as $item)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$item->name}}</td>
                        <td>
                            <img src="{{asset($item->icon)}}" alt="" width="100px">
                        </td>
                    
                        <td>{{Str::limit($item->description, 100)}}</td>
                      <td>
                        <div class="tw-flex">
                          {{-- 3 menu  using drop down  --}}
                          <a class="nav-link "
                          id="actionDropDwon" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="mdi mdi-dots-horizontal"></i>
                            </a>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="actionDropDwon">
                              {{-- detail --}}
                              <button class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#detailModal{{$item->id}}">
                                  <i class="mdi mdi-cached me-2 text-success"></i> Detail
                              </button>
                              <a class="dropdown-item" href="{{route('service.edit', $item->id)}}">
                                <i class="mdi mdi-cached me-2 text-success"></i> Edit
                                  </a>
                              <a class="dropdown-item" href="{{route('service.destroy', $item->id)}}" data-confirm-delete="true">
                                  <i class="mdi mdi-delete me-2 text-danger"></i> Delete
                              </a>
                              </div>
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
    {{-- modal detail --}}
    @foreach ($service as $item)
    <div class="modal fade" id="detailModal{{$item->id}}" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="detailModalLabel">Detail Service</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body
            ">
              <div class="row">
                <div class="col-md-6">
                  <img src="{{asset($item->icon)}}" alt="" width="100%">
                </div>
                <div class="col-md-6">
                  <h3>{{$item->name}}</h3>
                  <p>{{$item->description}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    @endforeach
</div>

@endsection