@extends('fe.layout')
@section('content')
<!--<< Team Section Start >>-->
<section class="team-section-2 section-padding bg-cover" style="background-image: url('{{asset('fe/assets/img/team/bg.jpg')}}');" id="team">
    <div class="container">
        <div class="section-title-area">
            <div class="section-title">
                <span class="wow fadeInUp">Team Members</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Our Dedicated Team <br> Members
                </h2>
            </div>
        </div>
        <div class="row">
            @foreach ($member as $item)
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="team-card-items">
                    <div class="team-image">
                        @if ($item->photo)  
                            <img src="{{asset($item->photo)}}" alt="" class="team-photo">
                        @endif
                        <div class="social-profile">
                            <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                            <ul>
                                <li><a href="{{$item->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{$item->twitter}}"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="{{$item->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h3>
                            <a href="{{route('frontend.detail.member',$item->id)}}">{{$item->name}}</a>
                        </h3>
                        <p>{{$item->jabatan->name}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        <div class="col-12">
               {{-- link using tailwind --}}
                {{ $member->links() }}
            </div>
        </div>
     
            
    </div>
</section>
@endsection
