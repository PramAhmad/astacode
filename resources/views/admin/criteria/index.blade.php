@extends('admin.layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-format-list-bulleted"></i>
                </span> Job Criteria Management
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('admin.criteria.create') }}" class="btn btn-gradient-primary btn-fw">Add New Criteria</a>
                    </li>
                </ul>
            </nav>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Job Criteria List</h4>
                        <p class="card-description">Manage job criteria templates for job postings</p>
                        
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($criterias as $criteria)
                                    <tr>
                                        <td>{{ $criteria->id }}</td>
                                        <td>{{ $criteria->name }}</td>
                                        <td>{{ $criteria->created_at->format('M d, Y H:i') }}</td>
                                        <td>
                                            <a href="{{ route('admin.criteria.show', $criteria->id) }}" class="btn btn-info btn-sm">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.criteria.edit', $criteria->id) }}" class="btn btn-primary btn-sm">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                            <form action="{{ route('admin.criteria.destroy', $criteria->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this criteria?')">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No job criteria found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="mt-4">
                            {{ $criterias->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection