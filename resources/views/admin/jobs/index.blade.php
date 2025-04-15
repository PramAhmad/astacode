@extends('admin.layout')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Jobs</h1>
        <a href="{{ route('admin.jobs.create') }}" class="btn btn-primary">Add New Job</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Deadline</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jobs as $job)
                        <tr>
                            <td>{{ $job->id }}</td>
                            <td>{{ $job->name }}</td>
                            <td>
                                <span class="badge 
                                    {{ $job->type === 'fulltime' ? 'badge-primary' : 
                                      ($job->type === 'parttime' ? 'badge-info' : 'badge-warning') }}">
                                    {{ ucfirst($job->type) }}
                                </span>
                            </td>
                            <td>{{ $job->deadline ? $job->deadline->format('M d, Y') : 'No Deadline' }}</td>
                            <td>
                                <a href="{{ route('admin.jobs.show', $job->id) }}" class="btn btn-sm btn-info">
                                    View
                                </a>
                                <a href="{{ route('admin.jobs.edit', $job->id) }}" class="btn btn-sm btn-primary">
                                    Edit
                                </a>
                                <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this job?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $jobs->links() }}
            </div>
        </div>
    </div>
</div>
@endsection