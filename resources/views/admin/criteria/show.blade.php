@extends('admin.layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-format-list-bulleted"></i>
                </span> Criteria Details
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.criteria.index') }}">Criteria</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('admin.criteria.edit', $criteria->id) }}" class="btn btn-gradient-primary btn-fw">Edit Criteria</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
                            <h4 class="card-title mb-0">{{ $criteria->name }}</h4>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="card bg-light mb-3">
                                    <div class="card-header">Details</div>
                                    <div class="card-body">
                                        <p><strong>ID:</strong> {{ $criteria->id }}</p>
                                        <p><strong>Created:</strong> {{ $criteria->created_at->format('F d, Y H:i') }}</p>
                                        <p><strong>Last Updated:</strong> {{ $criteria->updated_at->format('F d, Y H:i') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <a href="{{ route('admin.criteria.index') }}" class="btn btn-light">Back to Criteria</a>
                                <a href="{{ route('admin.criteria.edit', $criteria->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('admin.criteria.destroy', $criteria->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this criteria?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection