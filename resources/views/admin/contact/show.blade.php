@extends('admin.layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-contact-mail"></i>
                </span> Contact Details
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.contact.index') }}">Contacts</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('admin.contact.edit', $contact->id) }}" class="btn btn-gradient-primary btn-fw">Edit Contact</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
                            <h4 class="card-title mb-0">Message from {{ $contact->name }}</h4>
                            <div class="text-muted">
                                Received: {{ $contact->created_at->format('F d, Y H:i') }}
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="card bg-light mb-3">
                                    <div class="card-header">Contact Information</div>
                                    <div class="card-body">
                                        <p><strong>Name:</strong> {{ $contact->name }}</p>
                                        <p><strong>Email:</strong> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
                                        <p><strong>Phone:</strong> <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-light mb-3">
                                    <div class="card-header">Submission Details</div>
                                    <div class="card-body">
                                        <p><strong>Submitted:</strong> {{ $contact->created_at->format('F d, Y H:i') }}</p>
                                        <p><strong>Updated:</strong> {{ $contact->updated_at->format('F d, Y H:i') }}</p>
                                        <p><strong>ID:</strong> {{ $contact->id }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="card bg-light mb-3">
                                    <div class="card-header">Message</div>
                                    <div class="card-body">
                                        <p class="card-text">{{ $contact->message }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <a href="{{ route('admin.contact.index') }}" class="btn btn-light">Back to Contacts</a>
                                <a href="{{ route('admin.contact.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this message?')">Delete</button>
                                </form>
                                
                                <a href="mailto:{{ $contact->email }}" class="btn btn-info float-end">
                                    <i class="mdi mdi-email-outline"></i> Reply via Email
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection