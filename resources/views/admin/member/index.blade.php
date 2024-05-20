@extends('admin.layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> member List </h3>
        <nav aria-label="breadcrumb">
          {{-- tambah --}}
          <a href="{{route('member.create')}}" class="btn btn-primary">tambah</a>
        </nav>
      </div>
 
      @if (session('success'))
      <div class="alert alert-success">
        {{session('success')}}
      </div>
      @endif
       <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
  {{-- if session --}}
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Astacode Member</h4>
      
        </p>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Nama Member</th>
              <th>Photo</th>
              <th>Jabatan</th>
              <th>About</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <td>{{$item->name}}</td>
              <td>
                @if ($item->photo)  
                <img src="{{asset($item->photo)}}" alt="" width="100%">
                @endif
            </td>
              <td>{{$item->jabatan->name}}</td>

              <td>{{Str::limit($item->about, 50, '...')}}</td>
              <td>
                {{-- 3 navigation use drop down --}}
                <a class="nav-link " id="actionDropDwon" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="actionDropDwon">
                  
                    <button class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#detailModal{{$item->id}}">
                        <i class="mdi mdi-cached me-2 text-success"></i> Detail
                    </button>
                    <a class="dropdown-item" href="{{route('member.edit', $item->id)}}">
                      <i class="mdi mdi-cached me-2 text-success"></i> Edit
                        </a>
                    <a class="dropdown-item" href="{{route('member.destroy', $item->id)}}" data-confirm-delete="true">
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
  {{-- modal element --}}
    @foreach ($data as $item)
    <div class="modal fade" id="detailModal{{$item->id}}" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="detailModalLabel">Detail member</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body
            ">
              <div class="row">
                <div class="col-md-12">
                  <img src="{{asset($item->photo)}}" alt="" width="100%">
                </div>
                <div class="col-md-12 mt-4">
                  <h3>{{$item->name}}</h3>
                  <p>{{$item->jabatan->name}}</p>
                  <p>{{$item->about}}</p>
                  <h4>Education</h4>
                  @foreach ($item->education as $edu)
                  <p>{{$edu->name}} {{$edu->from}} - {{$edu->to}} {{$edu->degree}}</p>
                  <p>{{$edu->description}}</p>
                  @endforeach
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="{{$item->facebook}}">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="{{$item->instagram}}">
                        <i class="mdi mdi-instagram"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="{{$item->linkedin}}">
                        <i class="mdi mdi-linkedin"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="{{$item->twitter}}">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                  </ul>

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