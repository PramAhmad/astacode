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
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="team-card-items">
                    <div class="team-image">
                        <img src="{{asset('fe/assets/img/team/team1.png')}}" alt="team-img">
                        <div class="social-profile">
                            <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h3>
                            <a href="team-details.html">Galih Pangestu</a>
                        </h3>
                        <p>Chief Executive Officer (CEO)</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="team-card-items">
                    <div class="team-image">
                        <img src="{{asset('fe/assets/img/team/team2.png')}}" alt="team-img">
                        <div class="social-profile">
                            <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h3>
                            <a href="team-details.html">Muhammad Hisyam</a>
                        </h3>
                        <p>Chief Financial Officer - CFO</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="team-card-items">
                    <div class="team-image">
                        <img src="{{asset('fe/assets/img/team/team3.png')}}" alt="team-img">
                        <div class="social-profile">
                            <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h3>
                            <a href="team-details.html">Dianne Russell</a>
                        </h3>
                        <p>Marketing manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection