@extends('fe.layout')
@section('content')
<section class="team-details-section fix section-padding">
    <div class="container">
        <div class="team-details-wrapper">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5">
                    <div class="team-details-image">
                        <img src="{{asset($member->photo)}}" alt="team-img">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="team-details-content">
                        <div class="details-info">
                            <h3 class="tw-text-2xl">{{$member->name}}</h3>
                            <span>{{$member->jabatan->name}}</span>
                        </div>
                        <p class="mt-3">
                            {{$member->about}}
                        </p>
                        @if ($member->skillmember)
                            
                           @foreach ($member->skillmember as $item)
                               
                           <div class="progress-area mt-4">
                               <div class="progress-wrap">
                                   <div class="pro-items">
                                       <div class="pro-head">
                                           <h6 class="title">
                                               {{$item->name}}
                                           </h6>
                                           <span class="point">
                                          100%
                                           </span>
                                       </div>
                                       <div class="progress">
                                           <div class="progress-value style-two"></div>
                                       </div>
                                   </div>
                                
                               </div>
                           </div>
                           @endforeach 
                        @endif
                        <div class="social-icon">
                            <span>Social Media:</span>
                            <a href="{{$member->facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="{{$member->twitter}}" class="active"><i class="fa-brands fa-twitter"></i></a>
                            <a href="{{$member->linkedin}}"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="{{$member->instagram}}"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @if ($member->education)
                @foreach ($member->education as $item)
                    
                <div class="team-single-history pt-5">
                    <div class="title">
                        <h3>Education Background</h3>
                    </div>
                    <h5 class="pt-5">{{$item->degree}} in {{$item->name}} <span>{{$item->from}} - {{$item->to}}</span></h5>
                    <p class="mt-3">
                        {{$item->description}}
                    </p>
                  
                </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
@endsection