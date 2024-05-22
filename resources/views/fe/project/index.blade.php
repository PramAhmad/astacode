@extends('fe.layout')
@section('content')

<section class="project-section section-padding fix">
    <div class="container">
        <div class="row g-4">
            @if ($project->isEmpty())
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">No project</h4>
                        <p>There are no projects in the system</p>
                    </div>
                </div>
                
            @endif
            @foreach ($project as $item)
                
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="tw-bg-gray-100 tw-p-4 tw-border tw-border-gray-200 tw-rounded-md">

                    <div class="project-items">
                        <div class="project-image">
                            <img src="{{$item->firstimage->path}}" alt="project-img">
                            <div class="project-content">
                                <a href="{{route('frontend.detail.project',$item->id)}}">{{$item->category_project->name}}</a>
                                <h4>
                                    <a href="project-details.html">{{$item->name}}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</section>
    
@endsection