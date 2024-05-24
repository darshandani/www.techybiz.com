
@extends('frontend.includes.header')
@section('title','BestMyProject : : Price Page')
@section('content')
		<main>
			<!--page-title-area start-->
			<div class="page-title-area pt-210 pb-150">
				<img class="page-title-shape shape-one " src="{{ asset('frontend/img/shape/star-10d.svg') }}" alt="shape">
				<img class="page-title-shape shape-three" src="{{ asset('frontend/img/shape/star-2.svg') }}" alt="shape">
				<img class="page-title-shape shape-four d-none d-md-inline-block " src="{{ asset('frontend/img/shape/star-4b.svg') }}"
					alt="shape">
				<img class="page-title-shape shape-five d-none d-lg-inline-block " src="{{ asset('frontend/img/shape/line-round-9d.svg') }}"
					alt="shape">
				<img class="page-title-shape shape-six" src="{{ asset('frontend/img/shape/star-5b.svg') }}" alt="shape">
				<img class="page-title-shape shape-seven" src="{{ asset('frontend/img/shape/star-5b.svg') }}" alt="shape">
				<img class="page-title-shape shape-eight" src="{{ asset('frontend/img/page-title/img-01.png') }}" alt="img">
				<img class="page-title-shape shape-nine" src="{{ asset('frontend/img/page-title/img-02.png') }}" alt="img">

				<div class="container">
					<div class="row gx-4 gx-xxl-5 align-items-center">
						<div class="col-xl-6 col-md-6">
							<div class="page-title-wrapper text-md-start text-center">
								<h2 class="page-title mb-20">Pricing</h2>
								<nav aria-label="breadcrumb">
									<ul class="breadcrumb list-none">
										<li><a href="index">Home</a></li>
										<li><a href="#">Pages</a></li>
										<li class="active" aria-current="page">Pricing</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--page-title-area end-->
			<!--teachy-price start-->
			<section class="techy-price pt-145 pb-105">
				<div class="container">
					<div class="row gx-4 gx-xxl-5 align-items-center justify-content-center">
						<div class="col-xl-5 col-lg-6 col-md-8">
							<div class="section-title text-center mb-35">
								<h3 class="sect-title mb-25">Our Simple & Easy Pricing</h3>
								<p>Dramatically supply transparent backward
									deliverables before caward comp internal or "organic" sources.</p>
							</div>
						</div>
					</div>
					<div class="row gx-4 gx-xxl-5">
						<div class="col-lg-12 text-center mb-60">
							<ul class="nav nav-tabs price-tab" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="home-tab" data-bs-toggle="tab"
										data-bs-target="#home" type="button" role="tab" aria-controls="home"
										aria-selected="true">Monthly</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="profile-tab" data-bs-toggle="tab"
										data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
										aria-selected="false">Yearly</button>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="row gx-4 gx-xxl-5">
								<div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="100">
									<div class="plan mb-45">
										<div class="plan__header">
											<h3>Starter</h3>
											<p>For most businesses that want to the otpimize web queries</p>
										</div>
										<div class="plan__price">
											$500
											<sub>/month</sub>
										</div>
										<ul class="plan__body list-none">
											<li>All limited links</li>
											<li>Own analytics platform</li>
											<li>Chat support</li>
											<li>Optimize hashtags</li>
											<li>Unlimited users</li>
										</ul>
										<div class="plan__footer">
											<a class="price-btn" href="#">Choose Plan</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="200">
									<div class="plan mb-45">
										<div class="plan__header">
											<h3>Medium</h3>
											<p>For most businesses that want to the otpimize web queries</p>
										</div>
										<div class="plan__price">
											$100
											<sub>/month</sub>
										</div>
										<ul class="plan__body list-none">
											<li>All limited links</li>
											<li>Own analytics platform</li>
											<li>Chat support</li>
											<li>Optimize hashtags</li>
											<li>Unlimited users</li>
										</ul>
										<div class="plan__footer">
											<a class="price-btn" href="#">Choose Plan</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="300">
									<div class="plan mb-45">
										<div class="plan__header">
											<h3>Advance</h3>
											<p>For most businesses that want to the otpimize web queries</p>
										</div>
										<div class="plan__price">
											$800
											<sub>/month</sub>
										</div>
										<ul class="plan__body list-none">
											<li>All limited links</li>
											<li>Own analytics platform</li>
											<li>Chat support</li>
											<li>Optimize hashtags</li>
											<li>Unlimited users</li>
										</ul>
										<div class="plan__footer">
											<a class="price-btn" href="#">Choose Plan</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="row gx-4 gx-xxl-5">
								<div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="100">
									<div class="plan mb-45">
										<div class="plan__header">
											<h3>Starter</h3>
											<p>For most businesses that want to the otpimize web queries</p>
										</div>
										<div class="plan__price">
											$500
											<sub>/month</sub>
										</div>
										<ul class="plan__body list-none">
											<li>All limited links</li>
											<li>Own analytics platform</li>
											<li>Chat support</li>
											<li>Optimize hashtags</li>
											<li>Unlimited users</li>
										</ul>
										<div class="plan__footer">
											<a class="price-btn" href="#">Choose Plan</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="200">
									<div class="plan mb-45">
										<div class="plan__header">
											<h3>Medium</h3>
											<p>For most businesses that want to the otpimize web queries</p>
										</div>
										<div class="plan__price">
											$100
											<sub>/month</sub>
										</div>
										<ul class="plan__body list-none">
											<li>All limited links</li>
											<li>Own analytics platform</li>
											<li>Chat support</li>
											<li>Optimize hashtags</li>
											<li>Unlimited users</li>
										</ul>
										<div class="plan__footer">
											<a class="price-btn" href="#">Choose Plan</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="300">
									<div class="plan mb-45">
										<div class="plan__header">
											<h3>Advance</h3>
											<p>For most businesses that want to the otpimize web queries</p>
										</div>
										<div class="plan__price">
											$800
											<sub>/month</sub>
										</div>
										<ul class="plan__body list-none">
											<li>All limited links</li>
											<li>Own analytics platform</li>
											<li>Chat support</li>
											<li>Optimize hashtags</li>
											<li>Unlimited users</li>
										</ul>
										<div class="plan__footer">
											<a class="price-btn" href="#">Choose Plan</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--teachy-price end-->
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
					<div class="row justify-content-center">
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