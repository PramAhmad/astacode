@extends('fe.layout')
@section('content')
<section class="Project-details-section fix section-padding">
    <div class="container">
        <div class="project-details-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-details-items">
                        <div class="details-image">
                            <img src="{{asset($project->images[0]->path)}}" alt="img">
                        </div>
                        <div class="row g-4 justify-content-between">
                            <div class="col-lg-7">
                                <div class="details-content pt-5">
                                <h3>{{$project->name}}</h3>
                                    <p>
                                        {{$project->description_project}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="project-catagory">
                                    <h3>Project Info: </h3>
                                    <ul>
                                        <li>
                                            Client:
                                            <span>{{$project->client_name}}</span>
                                        </li>
                                        <li>
                                            Category: 
                                            <span>{{$project->category_project->name}}</span>
                                        </li>
                                        <li>
                                            Location:
                                            <span>{{$project->client_city}}</span>
                                        </li>
                                        <li>
                                            Create at
                                            <span>
                                                {{$project->created_at}}
                                             </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="details-content pt-3">
                            <h3>Our Challenge</h3>
                            <p>
                                {{$project->challenge}}
                            </p>
                        </div>
                        <div class="row g-4 pt-5">
                            <div class="col-lg-3 col-md-6">
                                <ul class="list">
                                    <li>
                                        <i class="fa-regular fa-circle-check"></i>
                                        Best Price
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-circle-check"></i>
                                        Dedicated Team
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <ul class="list">
                                    <li>
                                        <i class="fa-regular fa-circle-check"></i>
                                        24/7 Available For Contact 
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-circle-check"></i>
                                        100% Satisfaction

                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <ul class="list">
                                    <li>
                                        <i class="fa-regular fa-circle-check"></i>
                                        Best Quality
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-circle-check"></i>
                                        Fast work   
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="details-content pt-5">
                            <h3>The Result of Project</h3>
                            <p>
                                {{$project->description_result}}
                            </p>
                        </div>
                        @if (count($project->images) > 1)
                           @foreach ($project->images as $item)
                               
                           <div class="row g-4 pt-5">
                               <div class="col-lg-6 col-md-6">
                                   <div class="thumb">
                                       <img src="{{asset($item->path)}}" alt="img">
                                   </div>
                               </div>
                              
                           </div>
                           @endforeach 
                        @endif
                    </div>
                    <div class="preview-area">
                        @if ($prev_project)                     
                        <div class="preview-item">
                            <img src="{{$prev_project->firstimage->path}}"  width="67px" alt="img">
                            <div class="content">
                                <h3>
                                    <a href="{{ route('frontend.detail.project', $prev_project->id) }}">
                                        {{ $prev_project->name }}
                                    </a>
                                </h3>
                                <p>{{$prev_project->category_project->name}}</p>
                            </div>
                        </div>
                        @endif
                        @if ($next_project)
                        <div class="preview-item">
                            <div class="content text-right">
                                <h3>
                                    <a href="{{ route('frontend.detail.project', $next_project->id) }}">
                                        {{ $next_project->name }}
                                    </a>
                                </h3>
                                <p>{{$next_project->category_project->name}}</p>
                            </div>
                            <img src="{{$next_project->firstimage->path}} " width="67px" alt="img">
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection