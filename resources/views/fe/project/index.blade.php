@extends('fe.layout')
@section('content')

<section class="project-section section-padding fix">
    <div class="container">
        <div class="row g-4">
            @foreach ($project as $item)
                
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="project-items">
                    <div class="project-image">
                        <img src="{{$item->firstimage->path}}" alt="project-img">
                        <div class="project-content">
                            <a href="#">{{$item->category_project->name}}</a>
                            <h4>
                                <a href="project-details.html">{{$item->name}}</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</section>
    
@endsection