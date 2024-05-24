
@extends('frontend.includes.header')
@section('title','BestMyProject : : Team Page')
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
				<img class="page-title-shape shape-nine d-none d-xl-inline-block" src="{{ asset('frontend/img/page-title/img-02.png     ') }}"
					alt="img">

				<div class="container">
					<div class="row gx-4 gx-xxl-5 align-items-center">
						<div class="col-xl-6 col-md-6">
							<div class="page-title-wrapper text-md-start text-center">
								<h2 class="page-title mb-20">Team</h2>
								<nav aria-label="breadcrumb">
									<ul class="breadcrumb list-none justify-content-center justify-content-md-start">
										<li><a href="index">Home</a></li>
										<li><a href="#">Pages</a></li>
										<li class="active" aria-current="page">Team</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--page-title-area end-->
			<!--techy-team start-->
			<section class="techy-team team-sec-two mt-0 pt-145 pb-145 pt-lg-55 pb-lg-60">
				<div class="container">
					<div class="row gx-4 gx-xxl-5">
						<div class="col-lg-12">
							<div class="section-title text-center mb-55">
								<h6 class="sub-title mb-20">Our Team</h6>
								<h2 class="sect-title">Expert Team Member</h2>
							</div>
						</div>
					</div>
					<div class="row gx-4 gx-xxl-5 justify-content-center">
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="team-style-two text-center mb-45">
								<div class="team-thumb">
									<a href="team-details"><img src="{{ asset('frontend/img/team/team-7e.jpg') }}" alt="img"></a>
									<div class="team-social-two">
										<a href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
										<a href="#">
											<i class="fab fa-linkedin-in"></i>
										</a>
										<a href="#">
											<i class="fab fa-youtube"></i>
										</a>
									</div>
								</div>
								<div class="team-content">
									<p>Chief Excutive</p>
									<h3 class="sect-title-two"><a href="team-details">Darshan Danidhariya</a></h3>
								</div>
							</div>
						</div>
						<!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="team-style-two text-center mb-45">
								<div class="team-thumb">
									<a href="team-details"><img src="{{ asset('frontend/img/team/team-8e.jpg') }}" alt="img"></a>
									<div class="team-social-two">
										<a href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
										<a href="#">
											<i class="fab fa-linkedin-in"></i>
										</a>
										<a href="#">
											<i class="fab fa-youtube"></i>
										</a>
									</div>
								</div>
								<div class="team-content">
									<p>Chief Excutive</p>
									<h3 class="sect-title-two"><a href="team-details">Jane Cooper</a></h3>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="team-style-two text-center mb-45">
								<div class="team-thumb">
									<a href="team-details"><img src="{{ asset('frontend/img/team/team-9e.jpg') }}" alt="img"></a>
									<div class="team-social-two">
										<a href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
										<a href="#">
											<i class="fab fa-linkedin-in"></i>
										</a>
										<a href="#">
											<i class="fab fa-youtube"></i>
										</a>
									</div>
								</div>
								<div class="team-content">
									<p>Chief Excutive</p>
									<h3 class="sect-title-two"><a href="team-details">Esther Howard</a></h3>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="team-style-two text-center mb-45">
								<div class="team-thumb">
                                    <a href="team-details"><img src="{{ asset('frontend/img/team/team-10e.jpg') }}" alt="img"></a>

									<div class="team-social-two">
										<a href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
										<a href="#">
											<i class="fab fa-linkedin-in"></i>
										</a>
										<a href="#">
											<i class="fab fa-youtube"></i>
										</a>
									</div>
								</div>
								<div class="team-content">
									<p>Chief Excutive</p>
									<h3 class="sect-title-two"><a href="team-details">Savannah Nguyen</a></h3>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="team-style-two text-center mb-45">
								<div class="team-thumb">
									<a href="team-details"><img src="{{ asset('frontend/img/team/team-11e.jpg') }}" alt="img"></a>
									<div class="team-social-two">
										<a href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
										<a href="#">
											<i class="fab fa-linkedin-in"></i>
										</a>
										<a href="#">
											<i class="fab fa-youtube"></i>
										</a>
									</div>
								</div>
								<div class="team-content">
									<p>Chief Excutive</p>
									<h3 class="sect-title-two"><a href="team-details">Jane Cooper</a></h3>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="team-style-two text-center mb-45">
								<div class="team-thumb">
									<a href="team-details"><img src="{{ asset('frontend/img/team/team-12e.jpg') }}" alt="img"></a>
									<div class="team-social-two">
										<a href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
										<a href="#">
											<i class="fab fa-linkedin-in"></i>
										</a>
										<a href="#">
											<i class="fab fa-youtube"></i>
										</a>
									</div>
								</div>
								<div class="team-content">
									<p>Chief Excutive</p>
									<h3 class="sect-title-two"><a href="team-details">Esther Howard</a></h3>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="team-style-two text-center mb-45">
								<div class="team-thumb">
									<a href="team-details"><img src="{{ asset('frontend/img/team/team-13e.jpg') }}" alt="img"></a>
									<div class="team-social-two">
										<a href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
										<a href="#">
											<i class="fab fa-linkedin-in"></i>
										</a>
										<a href="#">
											<i class="fab fa-youtube"></i>
										</a>
									</div>
								</div>
								<div class="team-content">
									<p>Chief Excutive</p>
									<h3 class="sect-title-two"><a href="team-details">Savannah Nguyen</a></h3>
								</div>
							</div>
						</div> -->
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="team-style-two text-center mb-45">
								<div class="team-thumb">
									<a href="team-details"><img src="{{ asset('frontend/img/team/team-14e.jpg') }}" alt="img"></a>
									<div class="team-social-two">
										<a href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
										<a href="#">
											<i class="fab fa-linkedin-in"></i>
										</a>
										<a href="#">
											<i class="fab fa-youtube"></i>
										</a>
									</div>
								</div>
								<div class="team-content">
									<p>Chief Excutive</p>
									<h3 class="sect-title-two"><a href="team-details">Sunny Sapriya</a></h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="team-style-two text-center mb-45">
								<div class="team-thumb">
									<a href="team-details"><img src="{{ asset('frontend/img/team/team-15e.jpg') }}" alt="img"></a>
									<div class="team-social-two">
										<a href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
										<a href="#">
											<i class="fab fa-linkedin-in"></i>
										</a>
										<a href="#">
											<i class="fab fa-youtube"></i>
										</a>
									</div>
								</div>
								<div class="team-content">
									<p>Chief Excutive</p>
									<h3 class="sect-title-two"><a href="team-details">Sahil Patel</a></h3>
								</div>
							</div>
						</div>
					</div>
					<div class="row gx-4 gx-xxl-5">
						<div class="col-lg-12 text-center pt-15" data-aos="fade-up" data-aos-delay="200">
							<a class="theme_btn" href="team">See All Member</a>
						</div>
					</div>
				</div>
			</section>
			<!--techy-team end-->
			<!--call-to-action start-->
			<section class="call-to-action pt-100 pb-100">
				<img class="call-shape shape-one" src="{{ asset('frontend/img/shape/line-round-8c.svg') }}" alt="shape">
				<img class="call-shape shape-two d-none d-lg-inline-block" src="{{ asset('frontend/img/icon/icon-39c.svg') }}" alt="icon">
				<img class="call-shape shape-three d-none d-lg-inline-block" src="{{ asset('frontend/img/icon/icon-40c.svg') }}" alt="icon">
				<img class="call-shape shape-four d-none d-lg-inline-block" src="{{ asset('frontend/img/icon/icon-41c.svg') }}" alt="icon">
				<img class="call-shape shape-five d-none d-lg-inline-block" src="{{ asset('frontend/img/icon/icon-42c.svg') }}" alt="icon">
				<img class="call-shape shape-six d-none d-lg-inline-block" src="{{ asset('frontend/img/icon/icon-43c.svg') }}" alt="icon">
				<img class="call-shape shape-seven d-none d-lg-inline-block" src="{{ asset('frontend/img/icon/icon-44c.svg') }}" alt="icon">
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
		