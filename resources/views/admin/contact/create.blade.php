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
          <h4 class="card-title">Add New Contact</h4>
          <p class="card-description">Create a new contact message</p>  
          <form class="forms-sample" action="{{ route('admin.contact.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="inputName">Full Name</label>
                <input type="text" class="form-control" id="inputName" placeholder="Full Name" name="name" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email Address</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email Address" name="email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="inputPhone">Phone Number</label>
                <input type="text" class="form-control" id="inputPhone" placeholder="Phone Number" name="phone" value="{{ old('phone') }}">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="6" name="message" placeholder="Enter message here">{{ old('message') }}</textarea>
            </div>
            
            <div>
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <a href="{{ route('admin.contact.index') }}" class="btn btn-light">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
</div>  
@endsection