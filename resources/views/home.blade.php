  @extends('main.page')
  
  @section('content')

@php
$tell_number ="";
$user_email = "";
@endphp

 @foreach($cdatas as $ccolumn)
  @php
  $tell_number = $ccolumn->phone;
  $user_email = $ccolumn->email;
  @endphp
 @endforeach



 
  <!-- Hero Start -->
  <div class="container-fluid py-5 hero-header wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7 col-md-12">
                        <h1 class="mb-3 text-white">Jesus Cares for you</h1>
                        <h1 class="mb-5 display-1 text-white">Optimal location for time spent</h1>
                        <a href="" class="btn btn-primary px-4 py-3 px-md-5  me-4 btn-border-radius">Get Started</a>
                        <a href="" class="btn btn-primary px-4 py-3 px-md-5 btn-border-radius">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Start -->
        <div class="container-fluid py-5 about bg-light">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                        <div class="video border">
                            <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                        <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">About Us</h4>
                        <h1 class="text-dark mb-4 display-5">At Libacao Baptis Church, we believe in the power of genuine relationships. Our community is built on a foundation of love, compassion, and acceptance.</h1>
                        <p class="text-dark mb-4">
                        As followers of Christ, we are called to serve others with humility and compassion. Libacao Baptis Church is committed to making a positive impact in our local community and beyond. Through various outreach programs, missions, and acts of kindness, we seek to be the hands and feet of Jesus, demonstrating God's love in practical ways.
                        </p>
                        <div class="row mb-4">
                            <div class="col-lg-6">
                                <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Children's Ministries</h6>
                                <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Outdoor Games</h6>
                                <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-secondary"></i>Sport Activites</h6>
                            </div>
                            <div class="col-lg-6">
                                <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Music tutorials</h6>
                                <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Friendly Environment</h6>
                                <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Prayer meetings</h6>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary px-5 py-3 btn-border-radius">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Video -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">What We Do</h4>
                    <h1 class="mb-5 display-3">Thanks To Get Started With Our Church</h1>
                </div>
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="text-center border-primary border bg-white service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-inner">
                                    <div class="p-4"><i class="fas fa-gamepad fa-6x text-primary"></i></div>
                                    <a href="#" class="h4">Sports Events</a>
                                    <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui officiis animi Lorem ipsum dolor sit amet, 
                                        consectetur adipisicing elit.</p>
                                    <a href="#" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                        <div class="text-center border-primary border bg-white service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-inner">
                                    <div class="p-4"><i class="fas fa-music fa-6x text-primary"></i></div>
                                    <a href="#" class="h4">Music tutorial</a>
                                    <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui officiis animi Lorem ipsum dolor sit amet, 
                                        consectetur adipisicing elit.</p>
                                    <a href="#" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                        <div class="text-center border-primary border bg-white service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-inner">
                                    <div class="p-4"><i class="fas fa-users fa-6x text-primary"></i></div>
                                    <a href="#" class="h4">Friendly Environment</a>
                                    <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui officiis animi Lorem ipsum dolor sit amet, 
                                        consectetur adipisicing elit.</p>
                                    <a href="#" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                        <div class="text-center border-primary border bg-white service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-inner">
                                    <div class="p-4"><i class="fas fa-user-nurse fa-6x text-primary"></i></div>
                                    <a href="#" class="h4">Spiritual Health</a>
                                    <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui officiis animi Lorem ipsum dolor sit amet, 
                                        consectetur adipisicing elit.</p>
                                    <a href="#" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Programs Start 
        <div class="container-fluid program  py-5">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Programs</h4>
                    <h1 class="mb-5 display-3">We Offer An Exclusive Program For Kids</h1>
                </div>
                <div class="row g-5 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="program-item rounded">
                            <div class="program-img position-relative">
                                <div class="overflow-hidden img-border-radius">
                                    <img src="img/program-1.jpg" class="img-fluid w-100" alt="Image">
                                </div>
                                <div class="px-4 py-2 bg-primary text-white program-rate">$60.99</div>
                            </div>
                            <div class="program-text bg-white px-4 pb-3">
                                <div class="program-text-inner">
                                    <a href="#" class="h4">English For Today</a>
                                    <p class="mt-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus consectetur,</p>
                                </div>
                            </div>
                            <div class="program-teacher d-flex align-items-center border-top border-primary bg-white px-4 py-3">
                                <img src="img/program-teacher.jpg" class="img-fluid rounded-circle p-2 border border-primary bg-white" alt="Image" style="width: 70px; height: 70px;">
                                <div class="ms-3">
                                    <h6 class="mb-0 text-primary">Mary Mordern</h6>
                                    <small>Arts Designer</small>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                                <small class="text-white"><i class="fas fa-wheelchair me-1"></i> 30 Sits</small>
                                <small class="text-white"><i class="fas fa-book me-1"></i> 11 Lessons</small>
                                <small class="text-white"><i class="fas fa-clock me-1"></i> 60 Hours</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="program-item rounded">
                            <div class="program-img position-relative">
                                <div class="overflow-hidden img-border-radius">
                                    <img src="img/program-2.jpg" class="img-fluid w-100" alt="Image">
                                </div>
                                <div class="px-4 py-2 bg-primary text-white program-rate">$60.99</div>
                            </div>
                            <div class="program-text bg-white px-4 pb-3">
                                <div class="program-text-inner">
                                    <a href="#" class="h4">Graphics Arts</a>
                                    <p class="mt-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus consectetur,</p>
                                </div>
                            </div>
                            <div class="program-teacher d-flex align-items-center border-top border-primary bg-white px-4 py-3">
                                <img src="img/program-teacher.jpg" class="img-fluid rounded-circle p-2 border border-primary bg-white" alt="" style="width: 70px; height: 70px;">
                                <div class="ms-3">
                                    <h6 class="mb-0 text-primary">Mary Mordern</h6>
                                    <small>Arts Designer</small>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                                <small class="text-white"><i class="fas fa-wheelchair me-1"></i> 30 Sits</small>
                                <small class="text-white"><i class="fas fa-book me-1"></i> 11 Lessons</small>
                                <small class="text-white"><i class="fas fa-clock me-1"></i> 60 Hours</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="program-item rounded">
                            <div class="program-img position-relative">
                                <div class="overflow-hidden img-border-radius">
                                    <img src="img/program-3.jpg" class="img-fluid w-100" alt="Image">
                                </div>
                                <div class="px-4 py-2 bg-primary text-white program-rate">$60.99</div>
                            </div>
                            <div class="program-text bg-white px-4 pb-3">
                                <div class="program-text-inner">
                                    <a href="#" class="h4">General Science</a>
                                    <p class="mt-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus consectetur,</p>
                                </div>
                            </div>
                            <div class="program-teacher d-flex align-items-center border-top border-primary bg-white px-4 py-3">
                                <img src="img/program-teacher.jpg" class="img-fluid rounded-circle p-2 border border-primary bg-white" alt="" style="width: 70px; height: 70px;">
                                <div class="ms-3">
                                    <h6 class="mb-0 text-primary">Mary Mordern</h6>
                                    <small>Arts Designer</small>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                                <small class="text-white"><i class="fas fa-wheelchair me-1"></i> 30 Sits</small>
                                <small class="text-white"><i class="fas fa-book me-1"></i> 11 Lessons</small>
                                <small class="text-white"><i class="fas fa-clock me-1"></i> 60 Hours</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-inline-block text-center wow fadeIn" data-wow-delay="0.1s">
                        <a href="#" class="btn btn-primary px-5 py-3 text-white btn-border-radius">Vew All Programs</a>
                    </div>
                </div> 
            </div>
        </div>
         -->


        <!-- Events Start -->
        @if($eevents!=0)
        <div class="container-fluid events py-5 bg-light">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Events</h4>
                    <h1 class="mb-5 display-3">Our Upcoming Events</h1>
                </div>
                <div class="row row1 g-5 tscroll">
                    
                   @foreach($edata as $ecol)
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="events-item bg-primary rounded">
                            <div class="events-inner position-relative">
                                <div class="events-img overflow-hidden rounded-circle position-relative">
                                    <img src="{{url('storage/uploads/'.$ecol->img)}}" class="img-fluid1 w-100 rounded-circle" alt="Image" height="300" width="400">
                                    <div class="event-overlay">
                                        <a href="{{url('storage/uploads/'.$ecol->img)}}" data-lightbox="event-1"><i class="fas fa-search-plus text-white fa-2x"></i></a>
                                    </div>
                                </div>
                                <div class="px-4 py-2 bg-secondary text-white text-center events-rate">{{$ecol->datetime}}</div>
                                <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                                    <small class="text-white"><i class="fas fa-calendar me-1 text-primary"></i> {{$ecol->time}}</small>
                                    <small class="text-white"><i class="fas fa-map-marker-alt me-1 text-primary"></i> {{$ecol->address}}</small>
                                </div>
                            </div>
                            <div class="events-text height-modi p-4 border border-primary bg-white border-top-0 rounded-bottom">
                                <a href="#" class="h4">{{$ecol->etitle}}</a>
                                <p class="mb-0 mt-3">{{$ecol->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        @endif
        <!-- Events End-->


        <!-- Blog Start-->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Latest News & Blog</h4>
                    <h1 class="mb-5 display-3">Read Our Latest News & Blog</h1>
                </div>
                <div class="row g-5 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="blog-item rounded-bottom">
                            <div class="blog-img overflow-hidden position-relative img-border-radius">
                                <img src="img/blog-1.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments">
                                <small class="text-dark"><i class="fas fa-calendar me-1 text-dark"></i> 29 Nov 2023</small>
                                <small class="text-dark"><i class="fas fa-comment-alt me-1 text-dark"></i> Comments (15)</small>
                            </div>
                            <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                                <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                    <img src="img/program-teacher.jpg" class="img-fluid rounded-circle p-2 rounded-top" alt="Image" style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                                </div>
                                <div class="ms-3">
                                    <h6 class="text-primary">Mary Mordern</h6>
                                    <p class="text-muted">Baby Care</p>
                                </div>
                            </div>
                            <div class="px-4 pb-4 bg-light rounded-bottom">
                                <div class="blog-text-inner">
                                    <a href="#" class="h4">How to pay attention to your child?</a>
                                    <p class="mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="blog-item rounded-bottom">
                            <div class="blog-img overflow-hidden position-relative img-border-radius">
                                <img src="img/blog-2.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments">
                                <small class="text-dark"><i class="fas fa-calendar me-1 text-dark"></i> 29 Nov 2023</small>
                                <small class="text-dark"><i class="fas fa-comment-alt me-1 text-dark"></i> Comments (15)</small>
                            </div>
                            <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                                <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                    <img src="img/program-teacher.jpg" class="img-fluid rounded-circle p-2 rounded-top" alt="" style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                                </div>
                                <div class="ms-3">
                                    <h6 class="text-primary">Mary Mordern</h6>
                                    <p class="text-muted">Baby Care</p>
                                </div>
                            </div>
                            <div class="px-4 pb-4 bg-light rounded-bottom">
                                <div class="blog-text-inner">
                                    <a href="#" class="h4">Play outdoor sports with your child</a>
                                    <p class="mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="blog-item rounded-bottom">
                            <div class="blog-img overflow-hidden position-relative img-border-radius">
                                <img src="img/blog-3.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments">
                                <small class="text-dark"><i class="fas fa-calendar me-1 text-dark"></i> 29 Nov 2023</small>
                                <small class="text-dark"><i class="fas fa-comment-alt me-1 text-dark"></i> Comments (15)</small>
                            </div>
                            <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                                <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                    <img src="img/program-teacher.jpg" class="img-fluid rounded-circle p-2 rounded-top" alt="" style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                                </div>
                                <div class="ms-3">
                                    <h6 class="text-primary">Mary Mordern</h6>
                                    <p class="text-muted">Baby Care</p>
                                </div>
                            </div>
                            <div class="px-4 pb-4 bg-light rounded-bottom">
                                <div class="blog-text-inner">
                                    <a href="#" class="h4">How to make time for your kids?</a>
                                    <p class="mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End-->


        <!-- Team Start-->
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Church Activities</h4>
                    <h1 class="mb-5 display-3">COORDINATORS</h1>
                </div>
                <div class="row g-5 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="team-item border border-primary img-border-radius overflow-hidden">
                            <img src="img/bon.png" class=" w-100" alt="" height="350">
                            <div class="team-icon d-flex align-items-center justify-content-center">
                                <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href="https://www.facebook.com/messages/t/100023694562040" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-content text-center py-3">
                                <h4 class="text-primary">Francisco Tablanza</h4>
                                <p class="text-muted mb-2">Sports Coordinator</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                        <div class="team-item border border-primary img-border-radius overflow-hidden">
                            <img src="img/evander.png" class=" w-100" alt="" height="350">
                            <div class="team-icon d-flex align-items-center justify-content-center">
                                <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href="https://www.facebook.com/messages/t/100040957416308" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-content text-center py-3">
                                <h4 class="text-primary">Evander Bangoy</h4>
                                <p class="text-muted mb-2">Music instructor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                        <div class="team-item border border-primary img-border-radius overflow-hidden">
                            <img src="img/pastor.png" class=" w-100" alt="" height="350">
                            <div class="team-icon d-flex align-items-center justify-content-center">
                                <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href="https://www.facebook.com/messages/t/100078704445482" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-content text-center py-3">
                                <h4 class="text-primary">Jacon Niniel</h4>
                                <p class="text-muted mb-2">Church Pastor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                        <div class="team-item border border-primary img-border-radius overflow-hidden">
                            <img src="img/bobby.png" class=" w-100" alt="" height="350">
                            <div class="team-icon d-flex align-items-center justify-content-center">
                                <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href="https://www.facebook.com/messages/t/100015310062064" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-content text-center py-3">
                                <h4 class="text-primary">Bobby Bangoy</h4>
                                <p class="text-muted mb-2">Chairman</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End-->


        <!-- Testimonial Start -->
        <div id="garousel">
            
        </div>
<div>
        @if($counter!=0)
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="1s" style="max-width: 700px;">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Testimonials</h4>
                    <h1 class="mb-5 display-3">Our members</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="1s">
                    @foreach($datas as $col)
                    <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                        <div class="p-4 position-relative">
                            <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                            <div class="d-flex align-items-center">
                                <div class="border border-primary bg-white rounded-circle">
                                    <img src="{{asset('storage/uploads/'.$col->img)}}" class="rounded-circle p-2" style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);" alt="">
                                </div>
                                <div class="ms-4">
                                    <h4 class="text-dark">{{$col->fullname}}</h4>
                                    <p class="m-0 pb-3">{{$col->role}}</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-primary mt-4 pt-3">
                                <p class="mb-0">
                                    Hi my name is <b>{{$col->fullname}}</b> i'm a {{$col->role}}, Living in {{$col->address}}, reach me using my contact number <a href="tel:{{$col->contact}}">{{$col->contact}}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                   
</div>                    
                    
                </div>
            </div>
        </div>
        @endif
      

       

        
        <!-- Testimonial End -->
        <script>
           /* setTimeout(() => {
                    var xmx = new XMLHttpRequest();
                xmx.addEventListener("load",function(){
                    document.getElementById("garousel").innerHTML = this.responseText;
                });  
                
                xmx.open("GET","/testimonials");
                xmx.send(); 
                }, 0); */
                
            
            
        </script>
        <style>
            .height-modi{
                min-height:250px;
            
            }
            .img-fluid1{
                max-width: 100%;
            }
            .tscroll{
                overflow-x:scroll;
            }
            .row1{
                flex-wrap:nowrap;
            }



            .tscroll::-webkit-scrollbar {
  width: 12px; /* Width of the entire scrollbar */
}

.tscroll::-webkit-scrollbar-track {
  background: #fecdea;
  border-radius:5px;
  /* Color of the track (the area behind the thumb) */
}

.tscroll::-webkit-scrollbar-thumb {
  background-color:#ff4880; /* Color of the thumb (the draggable part of the scrollbar) */
  border-radius: 6px; /* Rounded corners of the thumb */
}

.tscroll::-webkit-scrollbar-thumb:hover {
  background-color: red; /* Color of the thumb on hover */
}
        </style>

        @endsection