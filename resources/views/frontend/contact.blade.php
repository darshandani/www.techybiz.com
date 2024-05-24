@extends('frontend.includes.header')

@section('title', 'BestMyProject : : contact Page')

@section('content')



<main>
    <!--page-title-area start-->
    <div class="page-title-area pt-210 pb-150 pt-lg-120 pb-lg-125 pb-md-100">
        <img class="page-title-shape shape-one " src="{{ asset('frontend/img/shape/star-10d.svg') }}" alt="shape">
        <img class="page-title-shape shape-three" src="{{ asset('frontend/img/shape/star-2.svg') }}" alt="shape">
        <img class="page-title-shape shape-four d-none d-md-inline-block " src="{{ asset('frontend/img/shape/star-4b.svg') }}" alt="shape">
        <img class="page-title-shape shape-five d-none d-lg-inline-block " src="{{ asset('frontend/img/shape/line-round-9d.svg') }}" alt="shape">
        <img class="page-title-shape shape-six" src="{{ asset('frontend/img/shape/star-5b.svg') }}" alt="shape">
        <img class="page-title-shape shape-seven" src="{{ asset('frontend/img/shape/star-5b.svg') }}" alt="shape">
        <img class="page-title-shape shape-eight d-none d-xl-inline-block" src="{{ asset('frontend/img/page-title/img-01.png') }}" alt="img">
        <img class="page-title-shape shape-nine d-none d-xl-inline-block" src="{{ asset('frontend/img/page-title/img-02.png') }}" alt="img">

        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="page-title-wrapper text-md-start text-center">
                        <h2 class="page-title mb-20">Contact Us</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                <li><a href="/">Home</a></li>
                                <li class="active" aria-current="page">Contact Us</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title-area end-->
    <!--contact-section start-->
    <div class="contact-section pt-145 pb-100 pt-lg-60 pb-lg-15">
        <div class="container">
            <div class="row gx-4 gx-xxl-5">
                <div class="col-lg-5">
                    <div class="contact-info-wrapper me-xxl-5 pe-xxl-5 mb-45">
                        <h2 class="sect-title mb-5">Let’s Get Connect With Us</h2>
                        <div class="single-info-box mb-50">
                            <div class="icon">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <span class="mb-10"></span>
                            <span>(+91) 95100 09505 </span>
                        </div>
                        <div class="single-info-box mb-50">
                            <div class="icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <span class="mb-10"> Rajkot, Gujrat 360001
                            </span>
                            <span>INDIA</span>
                        </div>
                        <div class="single-info-box mb-50">
                            <div class="icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <span class="mb-10">techybiiz@gmail.com</span>
                            <!-- <span> dscreative@gmail.com</span> -->
                        </div>
                        <div class="single-info-box mb-40">
                            <div class="icon">
                                <i class="bi bi-briefcase"></i>
                            </div>
                            <span class="mb-10">BestMyProject Solution</span>
                            <span>Rajkot</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-content-wrapper mb-45">
                        <div class="row gx-4 gx-xxl-5 px-0 align-items-center mb-25">
                            <div class="col-xxl-8 col-md-7">
                                <div class="text-center text-md-start">
                                    <p class="text-white mb-40">We're here to assist you in every step of your IT project journey. Whether you have questions, need guidance, or want to explore our services further, feel free to reach out. Your success is our priority, and we're excited to be a part of your project's success story.</p>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-5">
                                <div class="text-center text-md-end team-social-three social-style-five d-block mb-40">
                                <a href="https://instagram.com/techy.biz?igshid=MjEwN2IyYWYwYw==">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://youtube.com/@techybiz?si=wLY9UtJE1KF-YGAX">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <!-- <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a> -->
                                <a href="#">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-map pb-40 mb-xxl-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d236295.21073024333!2d70.65647780704847!3d22.27372155226819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959c98ac71cdf0f%3A0x76dd15cfbe93ad3b!2sRajkot%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1692360218468!5m2!1sen!2sin"width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        <div class="contact-form-two">
                            <h3 class="post-title mb-50">Send Us Message</h3>
                            @include('frontend.includes.notification')
                            <form class="widget-form" action="#" method="post">
                                @csrf
                                <div class="row gx-4 gx-xxl-5 px-0">
                                    <div class="col-md-6 mb-10">
                                        <label class="fs-16 text-white">Name</label>
                                        <input type="text" name="name" placeholder="Enter Name" required>
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <label class="fs-16 text-white">Email Id</label>
                                        <input type="email" name="email" placeholder="Enter Email" required>
                                    </div>
                                    <div class="col-md-12 mb-20">
                                        <label class="fs-16 text-white">Comments</label>
                                        <textarea name="message" placeholder="Write Message" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="theme_btn" name="submit" type="submit">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact-section end-->
    <!--call-to-action start-->
    <section class="call-to-action pt-100 pb-100">
        <img class="call-shape shape-one" src="{{ asset('frontend/img/shape/line-round-8c.svg') }}" alt="shape">
        <img class="call-shape shape-two d-none d-lg-inline-block" src="{{ asset('frontend/img/icon/icon-39c.svg') }}" alt="icon">
        <img class="call-shape shape-three d-none d-lg-inline-block" src="{{ asset('frontend/img/icon/icon-40c.svg') }}" alt="icon">
        <img class="call-shape shape-four d-none d-lg-inline-block" src="{{ asset('frontend/img/icon/icon-41c.svg') }}" alt="icon">
        <img class="call-shape shape-five d-none d-lg-inline-block" src="{{ asset('frontend/img/icon/icon-42c.svg') }}" alt="icon">
        <img class="call-shape shape-six d-none d-lg-inline-block" src="{{ asset('frontend/img/icon/icon-43c.svg') }}" alt="">
        <img class="call-shape shape-seven d-none d-lg-inline-block" src="{{ asset('frontend/img/icon/icon-44c.svg') }}" alt="">
        <div class="container">
            <div class="row gx-4 gx-xxl-5 justify-content-center">
                <div class="col-xl-8 col-md-8">
                    <div class="call-to-wrapper">
                        <h3 class="title-big mb-60" data-aos="fade-up">
                            Have a project in mind? Let’s get to work.
                        </h3>
                        <a class="theme_btn" data-aos="fade-up" href="contact">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call-to-action end-->

</main>



@endsection