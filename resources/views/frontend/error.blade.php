
@extends('frontend.includes.header')
@section('title','BestMyProject : : error Page')
@section('content')
		<main>
			<!--page-title-area start-->
			<div class="page-title-area pt-210 pb-150 pt-lg-120 pb-lg-125 pb-md-100">
				<img class="page-title-shape shape-one " src="{{ asset('frontend/img/shape/star-10d.svg') }}" alt="shape">
				<img class="page-title-shape shape-three" src="{{ asset('frontend/img/shape/star-2.svg') }}" alt="shape">
				<img class="page-title-shape shape-four d-none d-md-inline-block " src="{{ asset('frontend/img/shape/star-4b.svg') }}"
					alt="shape">
				<img class="page-title-shape shape-five d-none d-lg-inline-block " src="{{ asset('frontend/img/shape/line-round-9d.svg') }}"
					alt="shape">
				<img class="page-title-shape shape-six" src="{{ asset('frontend/img/shape/star-5b.svg') }}" alt="shape">
				<img class="page-title-shape shape-seven" src="{{ asset('frontend/img/shape/star-5b.svg') }}" alt="shape">
				<img class="page-title-shape shape-eight d-none d-xl-inline-block" src="{{ asset('frontend/img/page-title/img-01.png') }}"
					alt="img">
				<img class="page-title-shape shape-nine d-none d-xl-inline-block" src="{{ asset('frontend/img/page-title/img-02.png') }}"
					alt="img">

				<div class="container">
					<div class="row gx-4 gx-xxl-5 align-items-center">
						<div class="col-xl-6 col-md-6">
							<div class="page-title-wrapper text-md-start text-center">
								<h2 class="page-title mb-20">Error 404</h2>
								<nav aria-label="breadcrumb">
									<ul class="breadcrumb list-none justify-content-center justify-content-md-start">
										<li><a href="/">Home</a></li>
										<li><a href="#">Pages</a></li>
										<li class="active" aria-current="page">Error 404</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--page-title-area end-->
			<!--error-page start-->
			<div class="error-page pt-150 pb-115 pt-lg-60 pb-lg-50">
				<div class="error-page-bg">
					<img class="error-shape d-none d-lg-inline-block" src="{{ asset('frontend/img/shape/line-round-11f.svg') }}" alt="Shape">
					<div class="container">
						<div class="row gx-4 gx-xxl-5">
							<div class="col-lg-12">
								<div class="error-page-wrapper mb-60">
									<div class="section-title text-center mb-60">
										<h2 class="sect-title text-white">Oops!<br />Page not found</h2>
									</div>
									<img class="w-100" src="{{ asset('frontend/img/error/404.svg') }}" alt="error-image">
								</div>
							</div>
						</div>
						<div class="row gx-4 gx-xxl-5">
							<div class="col-lg-12 text-center">
								<a class="theme_btn" href="index">Back To Home</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--error-page end-->
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
		