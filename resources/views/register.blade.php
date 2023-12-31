
@extends("main.page")

@section('content')
        <!-- Contact Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="p-5 bg-light rounded">
                    <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                        <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Contact Us</h4>
                        <h1 class="display-3">Register here</h1>
                        <p class="mb-5">Be a member of Libacao Baptis church. <a href="{{url('')}}">Let me explore</a>.</p>
                    
                            <div class="message-div">
                                <span class="text-primary fontsize-midium">
                                    @if(Session('joined'))
                                    {{Session('joined')}}
                                    @endif
                                </span>
                            </div>
                        
                    </div>
                    
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                            <form action="{{route('memberjoin')}}" method="post" enctype="multipart/form-data" onsubmit="loadingOn()">
                                @csrf
                                <input type="file" class="w-100 form-control py-3 mb-5 border-primary" placeholder="Image" name="img" required>
                                <input type="text" class="w-100 form-control py-3 mb-5 border-primary" placeholder="Fullname" name="fullname" required>
                                <input type="text" class="w-100 form-control py-3 mb-5 border-primary" placeholder="Contact" name="contact" required>
                                <input type="text" class="w-100 form-control py-3 mb-5 border-primary" placeholder="Address" name="address" required>
                                <input type="date" class="w-100 form-control py-3 mb-5 border-primary" placeholder="Birthday" name="bdate" required>
                                <input type="text" class="w-100 form-control py-3 mb-5 border-primary" placeholder="Email" name="email" required>
                                <input type="text" class="w-100 form-control py-3 mb-5 border-primary" placeholder="Role/Profession" name="role" required>
                                <textarea class="w-100 form-control mb-5 border-primary" rows="8" cols="10" placeholder="Your Message" name="message" required></textarea>
                                <button class="w-100 btn btn-primary form-control py-3 border-primary text-white bg-primary" type="submit">Submit</button>
                            </form>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="border border-primary h-100 rounded">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1234.8803964864546!2d122.91363548145877!3d10.178661869738349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aea961f24669ed%3A0xf051d475fd6074b!2sLibacao%20Baptist%20Church!5e1!3m2!1sen!2sph!4v1702704328304!5m2!1sen!2sph" 
                                class="w-100 h-100 rounded" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .form-control:disabled, .form-control:read-only {background-color:white;}
            .fontsize-midium{font-size:18px;}
            .message-div{width: 90%; padding:15px 10px 15px 10px;}
        </style>
        <!-- Contact End -->
        @endsection
