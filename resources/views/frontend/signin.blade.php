@extends('frontend.includes.header')
@section('title','BestMyProject : : Login Page')
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
                        <h2 class="page-title mb-20">Log In</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active" aria-current="page">Log In</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title-area end-->
    <!--signup-section start-->
    <div class="signup-section pt-150 pb-150 pt-lg-60 pb-lg-60">
        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="signup-form">
                        <h3 class="post-title mb-65 text-center">Log in Your Account</h3>

                        @include('backend.includes.notifications')
                        <form class="widget-form p-0" action="{!! route('signin.auth') !!}" method="post">
                            @csrf
                            <div class="input-box mail mb-30">
                                <input type="email" name="email" placeholder="Email Name">
                            </div>
                            <div class="input-box pass mb-30">
                                <input type="text" name="password" placeholder="Password">
                            </div>
                            <div class="col-12 text-center">
                                <button name="submit" type="submit" value="submit" class="theme_btn">Login Now</button>
                                <span class="divider">OR</span>
                                <button class="theme_btn signup-btn"><img class="mr-20" src="{{ asset('frontend/img/icon/google.svg') }}" alt="icon"> Log In With Google</button>
                                <p class="text-white fw-regular mt-40 mb-10">Don’t have an account? <a href="#" class="fw-semi">Sign up
                                        Today</a></p>
                                <a href="#" class="fw-semi text-white fw-semi">Forgot password</a>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--signup-section end-->
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