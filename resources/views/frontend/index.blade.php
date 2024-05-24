@extends('frontend.includes.header')

@section('title', 'BestMyProject: Your Student Project Launchpad')

@section('content')
<main>
	<!--theme-banner-one start-->
	<div class="theme-banner-one pt-205 pb-35 pt-lg-120 pt-md-80 pt-xs-60">
		<div class="shadow-text">Techy</div>
		<img class="banner-shape shape-one" src=" {{ asset('frontend/img/shape/line-1.svg') }}" alt="shape">
		<img class="banner-shape shape-two d-none d-lg-inline-block" src=" {{ asset('frontend/img/shape/star-1.svg') }}" alt="shape">
		<img class="banner-shape shape-three d-none d-lg-inline-block" src="{{ asset('frontend/img/shape/star-2.svg') }} " alt="shape">
		<img class="banner-shape shape-four" src=" {{ asset('frontend/img/shape/line-round-1.svg') }}" alt="shape">
		<div class="container">
			<div class="row gx-4 gx-xxl-5 align-items-center justify-content-center">
				<div class="col-11">
					<div class="theme__content text-center">
						<h1 class="main-title-one">
							<span>"Your Pathway</span>
							<span>to College IT</span>
							<span>Project Success"</span>
							<!-- //"Your Pathway to College IT Project Success" -->
						</h1>
						<a class="theme_btn" href="contact">Get Started Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--theme-banner-one end-->
	<!--marque start-->
	<div class="marquee-line pt-75 pb-130 pb-lg-60">
		<div class="marquee">
			<div id="supermarquee" class="marquee-wrapper"></div>
		</div>
	</div>
	<!--marque end-->
	<!--brand-area start-->
	<section class="brand-area pt-100 pb-125 pt-lg-60 pb-lg-90">
		<div class="container">
			<div class="row gx-4 gx-xxl-5">
				<div class="brand-slider-one">
					<div class="brand-logo">
						<a href="#"><img src=" {{ asset('frontend/img/brand/brand-1.svg') }}" alt="brand"></a>
					</div>
					<div class="brand-logo">
						<a href="#"><img src=" {{ asset('frontend/img/brand/brand-2.svg') }}" alt="brand"></a>
					</div>
					<div class="brand-logo">
						<a href="#"><img src=" {{ asset('frontend/img/brand/brand-3.svg') }}" alt="brand"></a>
					</div>
					<div class="brand-logo">
						<a href="#"><img src=" {{ asset('frontend/img/brand/brand-4.svg') }}" alt="brand"></a>
					</div>
					<div class="brand-logo">
						<a href="#"><img src=" {{ asset('frontend/img/brand/brand-5.svg') }}" alt="brand"></a>
					</div>
					<div class="brand-logo">
						<a href="#"><img src=" {{ asset('frontend/img/brand/brand-6.svg') }}" alt="brand"></a>
					</div>
					<div class="brand-logo">
						<a href="#"><img src=" {{ asset('frontend/img/brand/brand-2.svg') }}" alt="brand"></a>
					</div>
					<div class="brand-logo">
						<a href="#"><img src=" {{ asset('frontend/img/brand/brand-4.svg') }}" alt="brand"></a>
					</div>
					<div class="brand-logo">
						<a href="#"><img src=" {{ asset('frontend/img/brand/brand-1.svg') }}" alt="brand"></a>
					</div>
					<div class="brand-logo">
						<a href="#"><img src=" {{ asset('frontend/img/brand/brand-3.svg') }}" alt="brand"></a>
					</div>
					<div class="brand-logo">
						<a href="#"><img src=" {{ asset('frontend/img/brand/brand-5.svg') }}" alt="brand"></a>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--brand-area end-->
	<!--about-techy start-->
	<section class="about-techy position-realtive pt-115 pb-15">
		<div class="container">
			<div class="row gx-4 gx-xxl-5 align-items-center">
				<div class="col-lg-7" data-aos="fade-right" data-aos-delay="100">
					<div class="logo-animated-block">
						<img class="rotate-img" src=" {{ asset('frontend/img/shape/mask-text.svg') }}" alt="Text Img">
						<div class="mark-icon">
							<img src=" {{ asset('frontend/img/shape/star-11a.svg') }}" alt="Star Icon">
						</div>
					</div>
					<div class="about-img-wrapper position-relative mb-45">
						<img class="main-img" src=" {{ asset('frontend/img/about/about-1.png') }}" alt="img">
						<img class="shape-one" src=" {{ asset('frontend/img/shape/line-round-2a.svg') }}" alt="shape">
					</div>
				</div>
				<div class="col-lg-5" data-aos="fade-left" data-aos-delay="100">
					<div class="block-style-one pt-10 mb-45">
						<h2 class="mb-15">About Our BestMyProject Innovative IT Agency & Solutions</h2>
						<p>We specialize in website and software development and design. Our mission is to help students excel in these fields. Explore our services and bring your IT visions to life with us.</p>
						<ul class="block-box list-none">
							<li>
								<a href="contact">
									<span class="img-bg"><img src=" {{asset('frontend/img/icon/icon-1a.svg') }}" alt="icon"></span>
									<span>24/7 Online Support</span>

								</a>
							</li>
							<li>
								<a href="contact">
									<span class="img-bg"><img src=" {{asset('frontend/img/icon/icon-2a.svg') }}" alt="icon"></span>
									<span>techybiiz@gmail.com</span>
								</a>
							</li>
						</ul>
						<a class="theme_btn mt-60" href="about">More Details</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--about-techy end-->
	<!--our-services start-->
	<section class="our-services pt-80 pb-105 pt-lg-45 pb-lg-15">
		<div class="container">
			<div class="row gx-4 gx-xxl-5 justify-content-lg-start justify-content-center">
				<div class="">
					<div class="section-title text-center text-lg-start mb-55">
						<h3 class="sect-title mb-20" data-aos="fade-upt">Our Services</h3>
						<p data-aos="fade-right" data-aos-delay="100">Explore our blog for the latest insights, tips, and trends in website development, software design, and web design. Stay updated with expert guidance and industry knowledge to enhance your IT projects and skills.</p>
					</div>
				</div>
			</div>
			<div class="row gx-4 gx-xxl-5">
				<div class="col-lg-4 col-md-6" data-aos="fade-up">
					<div class="feature-style-one mb-45">
						<!-- <a class="top-arrow" href="#">
							<i class="bi bi-arrow-up-right"></i>
						</a> -->
						<img class="front-icon" src=" {{ asset('frontend/img/icon/icon-3a.png') }}" alt="icon">
						<img class="back-icon" src=" {{ asset('frontend/img/icon/icon-3w.png') }}" alt="icon">
						<h2>
							<a href="services-details">Expert Guidance</a>
						</h2>
						<p>Receive personalized guidance from experienced professionals who understand the intricacies of IT projects.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
					<div class="feature-style-one mb-45">
						<!-- <a class="top-arrow" href="#">
							<i class="bi bi-arrow-up-right"></i>
						</a> -->
						<img class="front-icon" src=" {{ asset('frontend/img/icon/icon-4a.png') }}" alt="icon">
						<img class="back-icon" src=" {{ asset('frontend/img/icon/icon-4w.png') }}" alt="icon">
						<h2>
							<a href="services-details">Customized Solutions</a>
						</h2>
						<p>Get tailored support that aligns with your project's specific requirements and goals.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
					<div class="feature-style-one mb-45">
						<!-- <a class="top-arrow" href="#">
							<i class="bi bi-arrow-up-right"></i>
						</a> -->
						<img class="front-icon" src=" {{ asset('frontend/img/icon/icon-5a.png') }}" alt="icon">
						<img class="back-icon" src=" {{ asset('frontend/img/icon/icon-5w.png') }}" alt="icon">
						<h2>
							<a href="services-details">Resource Hub</a>
						</h2>
						<p>Access a variety of resources, including tutorials, templates, and reference materials, to enhance your project's quality.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
					<div class="feature-style-one mb-45">
						<!-- <a class="top-arrow" href="#">
							<i class="bi bi-arrow-up-right"></i>
						</a> -->
						<img class="front-icon" src=" {{ asset('frontend/img/icon/icon-7a.png') }}" alt="icon">
						<img class="back-icon" src=" {{ asset('frontend/img/icon/icon-7w.png') }}" alt="icon">
						<h2>
							<a href="services-details">Interactive Learning</a>
						</h2>
						<p>Engage in webinars, workshops, and interactive sessions to gain practical insights and skills.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
					<div class="feature-style-one mb-45">
						<!-- <a class="top-arrow" href="#">
							<i class="bi bi-arrow-up-right"></i>
						</a> -->
						<img class="front-icon" src=" {{ asset('frontend/img/icon/icon-6a.png') }}" alt="icon">
						<img class="back-icon" src=" {{ asset('frontend/img/icon/icon-6w.png') }}" alt="icon">
						<h2>
							<a href="services-details"> Coding Assistance</a>
						</h2>
						<p>Receive help with coding challenges, ensuring your project's technical aspects are well-executed.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
					<div class="feature-style-one mb-45">
						<!-- <a class="top-arrow" href="#">
							<i class="bi bi-arrow-up-right"></i>
						</a> -->
						<img class="front-icon" src=" {{ asset('frontend/img/icon/icon-7a.png') }}" alt="icon">
						<img class="back-icon" src=" {{ asset('frontend/img/icon/icon-7w.png') }}" alt="icon">
						<h2>
							<a href="services-details">Design Support</a>
						</h2>
						<p>Get assistance in designing user interfaces and graphics to enhance the visual appeal of your project.</p>
					</div>
				</div>
				<!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
					<div class="feature-style-one mb-45">
						<a class="top-arrow" href="#">
							<i class="bi bi-arrow-up-right"></i>
						</a>
						<img class="front-icon" src=" {{ asset('frontend/img/icon/icon-8a.png') }}" alt="icon">
						<img class="back-icon" src=" {{ asset('frontend/img/icon/icon-8w.png') }}" alt="icon">
						<h2>
							<a href="services-details">Technical Troubleshooting</a>
						</h2>
						<p>Overcome technical hurdles with expert troubleshooting guidance and solutions.</p>
						<a href="project-grid">324 Projects</a>
					</div>
				</div> -->
				<!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
					<div class="feature-style-one mb-45">
						<a class="top-arrow" href="#">
							<i class="bi bi-arrow-up-right"></i>
						</a>
						<img class="front-icon" src=" {{ asset('frontend/img/icon/icon-8a.png') }}" alt="icon">
						<img class="back-icon" src=" {{ asset('frontend/img/icon/icon-8w.png') }}" alt="icon">
						<h2>
							<a href="services-details">Feedback and Review</a>
						</h2>
						<p> Benefit from expert feedback and project reviews to improve your project's overall quality.</p>
						<a href="project-grid">324 Projects</a>
					</div>
				</div> -->
				<!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
					<div class="feature-style-one mb-45">
						<a class="top-arrow" href="#">
							<i class="bi bi-arrow-up-right"></i>
						</a>
						<img class="front-icon" src=" {{ asset('frontend/img/icon/icon-8a.png') }}" alt="icon">
						<img class="back-icon" src=" {{ asset('frontend/img/icon/icon-8w.png') }}" alt="icon">
						<h2>
							<a href="services-details">Community Collaboration</a>
						</h2>
						<p>Join a collaborative student community where you can connect, share ideas, and learn from peers.</p>
						<a href="project-grid">324 Projects</a>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!--our-services end-->
	<!--feature-work start-->
	<!-- <section class="feature-work pt-90 pb-95 pt-lg-50 pb-lg-60">
		<div class="container">
			<div class="row gx-4 gx-xxl-5 align-items-center">
				<div class="col-xl-5 col-lg-6 col-md-8">
					<div class="section-title text-center text-md-start mb-55">
						<h3 class="sect-title mb-25" data-aos="fade-up">Featured Works</h3>
						<p data-aos="fade-up" data-aos-delay="100">Dramatically supply transparent
							backward deliverables before caward comp internal or "organic" sources.</p>
					</div>
				</div>
				<div class="col-xl-7 col-lg-6 col-md-4 d-flex justify-content-md-end justify-content-center pb-40">
					<div class="slick-nav">
						<div class="prev_f1 mr-20">
							<i class="bi bi-chevron-left"></i>
						</div>
						<div class="next_f1">
							<i class="bi bi-chevron-right"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="feature-slider-one slick-nav">
			<div class="container custom-container">
				<div class="row feature-slider-active" data-aos="fade-up" data-aos-delay="200">
					<div class="col-lg-4">
						<div class="feature-item">
							<a class="back-bg" href="project-details"><img class="w-100" src="{{ asset('frontend/img/feature/img-01.jpg') }}" alt="img"></a>
							<h5>
								<a href="project-details">Web Design</a>
							</h5>
							<h3><a href="project-details">Web Analytics</a></h3>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="feature-item">
							<a class="back-bg" href="project-details"><img class="w-100" src="{{ asset('frontend/img/feature/img-02.jpg') }}" alt="img"></a>
							<h5>
								<a href="project-details">Cyber Secure</a>
							</h5>
							<h3><a href="project-details">Cyber Security Core</a></h3>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="feature-item">
							<a class="back-bg" href="project-details"><img class="w-100" src="{{ asset('frontend/img/feature/img-03.jpg') }}" alt="img"></a>
							<h5>
								<a href="project-details">Mobile info</a>
							</h5>
							<h3><a href="project-details">Upcoming Phone</a></h3>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="feature-item">
							<a class="back-bg" href="project-details"><img class="w-100" src="{{ asset('frontend/img/feature/img-01.jpg') }}" alt="img"></a>
							<h5>
								<a href="project-details">Web Design</a>
							</h5>
							<h3><a href="project-details">Web Analytics</a></h3>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="feature-item">
							<a class="back-bg" href="project-details"><img class="w-100" src="{{ asset('frontend/img/feature/img-03.jpg') }}" alt="img"></a>
							<h5>
								<a href="project-details">Mobile info</a>
							</h5>
							<h3><a href="project-details">Upcoming Phone</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--feature-work end-->
	<!--feature-work start-->
	<section class="feature-two pt-135 pb-30 pt-lg-60 pb-lg-15">
		<div class="container">
			<div class="row gx-4 gx-xxl-5 justify-content-lg-start justify-content-center">
				<div class="col-xl-5 col-lg-6 col-md-8">
					<div class="section-title text-lg-start text-center mb-60">
						<h3 class="sect-title mb-25" data-aos="fade-up">How It Works</h3>
						<p data-aos="fade-up" data-aos-delay="100">Unlock the secrets behind successful IT projects with our informative blog series. Learn step-by-step processes, gain insights, and level up your skills in website and software development, as well as web design.</p>
					</div>
				</div>
			</div>
			<div class="row gx-4 gx-xxl-5">
				<div class="col-lg-4 col-md-6" data-aos="fade-up">
					<div class="feature-style-two text-center mb-45">
						<div class="icon"><img src=" {{ asset('frontend/img/icon/icon-9a.png') }}" alt="icon"></div>
						<h3>
							<a href="signup">Project Submission</a>
						</h3>
						<p>Students submit their IT project ideas through our platform.
							Clear project descriptions and goals are provided.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
					<div class="feature-style-two text-center mb-45">
						<div class="icon"><img src=" {{ asset('frontend/img/icon/icon-10a.png') }}" alt="icon"></div>
						<h3>
							<a href="faq">Project Execution</a>
						</h3>
						<p>Our team of experts gets to work on the submitted project.
							We dedicate our skills to execute the project according to the student's vision.</p>

					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
					<div class="feature-style-two text-center mb-45">
						<div class="icon"><img src=" {{ asset('frontend/img/icon/icon-11a.png') }}" alt="icon"></div>
						<h3>
							<a href="faq">Communication and Collaboration</a>
						</h3>
						<p>Regular communication channels are established with the student.
							Collaborative discussions ensure alignment throughout the project.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
					<div class="feature-style-two text-center mb-45">
						<div class="icon"><img src=" {{ asset('frontend/img/icon/icon-12a.png') }}" alt="icon"></div>
						<h3>
							<a href="faq">Project Explanation</a>
						</h3>
						<p>We explain the project's technical aspects and progress to the student.
							Clarifications are provided to ensure a clear understanding.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
					<div class="feature-style-two text-center mb-45">
						<div class="icon"><img src=" {{ asset('frontend/img/icon/icon-10a.png') }}" alt="icon"></div>
						<h3>
							<a href="faq">Project Documentation</a>
						</h3>
						<p>Comprehensive documentation of the project is provided.
							This includes code documentation, design details, and implementation notes.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
					<div class="feature-style-two text-center  mb-45">
						<div class="icon"><img src=" {{ asset('frontend/img/icon/icon-10a.png') }}" alt="icon"></div>
						<h3>
							<a href="faq">Providing Resources</a>
						</h3>
						<p>We provide a handbook with useful resources related to the project.
							Additional references and guides are shared to enhance understanding.</p>
					</div>
				</div>
			</div>
		</div>
		<img class="shape-one" src=" {{ asset('frontend/img/shape/line-round-1.svg') }}" alt="">
	</section>
	<!--feature-work end-->
	<!--counter-area end-->

	<!--counter-area start-->
	<!--techy-newsletter start-->
	<section class="techy-newsletter pt-120 pt-lg-60">
		<div class="container">
			<div class="row gx-4 gx-xxl-5 align-items-center justify-content-center borders">
				<div class="col-lg-8">
					<div class="block-style-two text-center pb-90">
						<img class="news-shape-one d-none d-xl-block" src=" {{ asset('frontend/img/shape/line-round-3a.svg') }}" alt="shape">
						<h3>Have a project in mind? Let’s get to work.</h3>
						<a href="contact" class="theme_btn">Contact us</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--techy-newsletter end-->

</main>


@endsection