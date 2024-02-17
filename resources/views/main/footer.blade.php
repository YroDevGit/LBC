 <!-- Footer Start -->
<div id="footerdiv">
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="footer-item">
                            <h2 class="fw-bold mb-3"><span class="text-primary mb-0">Jesus </span><span class="text-secondary">Saves</span></h2>
                            <p class="mb-4">There cursus massa at urnaaculis estieSed aliquamellus vitae ultrs condmentum leo massamollis its estiegittis miristum.</p>
                            <div class="border border-primary p-3 rounded bg-light">
                                <h5 class="mb-3">Newsletter</h5>
                                <div class="position-relative mx-auto border border-primary rounded" style="max-width: 400px;">
                                    <form action="{{route('addSubscribe')}}" method="post" onsubmit="loadingOn()">
                                        @csrf
                                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" name="email">
                                    <button class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2 text-white" type="submit">SignUp</button>
                                    </form>
                                </div>
                                <div>
                                    <div class="text-primary">
                                        @if(Session('subscribe'))
                                            {{Session('subscribe')}}
                                            <script>
                                                function scrollDownAuto() {
                                                    document.getElementById('footerdiv').scrollIntoView({ behavior: 'smooth' });
                                                }

                                                document.addEventListener('DOMContentLoaded', function() {
                                                    scrollDownAuto();
                                                });
                                            </script>
                                        @endif

                                        @error('email')
                                        {{$message}}
                                        <script>
                                                function scrollDownAuto() {
                                                    document.getElementById('footerdiv').scrollIntoView({ behavior: 'smooth' });
                                                }

                                                document.addEventListener('DOMContentLoaded', function() {
                                                    scrollDownAuto();
                                                });
                                            </script>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="footer-item" id="schedules">
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">LOCATION</h4>
                            <div class="d-flex flex-column align-items-start">
                                <a href="" class="text-body mb-4"><i class="fa fa-map-marker-alt text-primary me-2"></i> Purok 2, Libacao Himamaylan City</a>
                                <a href="" class="text-start rounded-0 text-body mb-4"><i class="fa fa-phone-alt text-primary me-2"></i> {{session('userPhone')}}</a>
                                <a href="" class="text-start rounded-0 text-body mb-4"><i class="fas fa-envelope text-primary me-2"></i> tyronemalocon@gmail.com</a>
                                <a href="" class="text-start rounded-0 text-body mb-4"><i class="fa fa-clock text-primary me-2"></i> 26/7 Hours Service</a>
                                <div id="socialmedia"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">SUPPORT US</h4>
                            <div class="row g-3">
                                <div class="col-4" align="center">
                                    <div class="  border-primary" id="gcash">
                                        
                                    </div>
                               </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>YRO'S</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <span id="developer"></span>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{mix('js/app.js')}}"></script>
        
        <!-- Copyright End -->
