@extends('admin.layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Tech in Astacode </h3>
        <nav aria-label="breadcrumb">
          {{-- tambah --}}
          <a href="{{route('tech.create')}}" class="btn btn-primary">tambah</a>
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
                <h4 class="card-title">data Tech Astacode </h4>
           
                </p>
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Tech</th>
                      <th>Foto</th>
                      <th>Created At</th>
                      <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($tech as $item)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$item->name}}</td>
                        <td>
                          <img src="{{asset($item->foto)}}" alt="" >
                        </td>
                      <td>{{$item->created_at}}</td>
                      <td>
                        <div class="tw-flex">
                            <a href="{{route('tech.edit', $item->id)}}" class="tw-py-2 tw-px-3 tw-font-semibold tw-bg-sky-500 tw-text-white tw-rounded-md hover:tw-text-white" style="margin-right: 20px;">Edit</a>
                                <a href="{{route('tech.destroy',$item->id)}}" class="tw-py-2 tw-px-3 tw-font-semibold tw-bg-rose-500 tw-text-white tw-rounded-md hover:tw-text-white" data-confirm-delete="true">Delete</a>      
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
</div>

@endsection