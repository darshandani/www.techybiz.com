@extends('frontend.includes.header')
@section('title','BestMyProject : : Service Details Page')
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
						<h2 class="page-title mb-20">Service Details</h2>
						<nav aria-label="breadcrumb">
							<ul class="breadcrumb list-none justify-content-center justify-content-md-start">
								<li><a href="/">Home</a></li>
								<li class="active" aria-current="page">Service Details</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--page-title-area end-->
	<!--our-services start-->
	<section class="service-details-wrapper pt-145 pb-100 pt-lg-60 pb-lg-20">
		<div class="container">
			<div class="row gx-4 gx-xxl-5 align-items-center justify-content-center">
				<div class="col-lg-12">
					<div class="service-details-content-top mb-60">
						<h2 class="sect-title">Web Development</h2>
						<p class="text-white mb-35">In today's interconnected world, web development skills are not just valuable – they're essential. Whether you're a college student looking to enhance your resume, an aspiring entrepreneur with a vision, or simply someone intrigued by the magic behind the internet, BestMyProject is your gateway to mastering the art of web development.

						</p>
						<img class="w-100" src="{{ asset('frontend/img/service/img-01.jpg') }}" alt="img">
					</div>
				</div>
			</div>
			<div class="row gx-4 gx-xxl-5">
				<div class="col-lg-8">
					<div class="widget-left-section">
						<p class="text-white"> <b>Structured Learning:</b>
							Our curated curriculum takes you on a journey from the basics to advanced concepts. You'll learn HTML, the backbone of web content; CSS, the language of styling; and JavaScript, the powerhouse of interactivity.</p>
						<p class="text-white mt-15 mb-45"><b> Hands-On Experience: </b>
							Learning by doing is our mantra. With Techy, you'll dive into coding challenges, interactive projects, and real-world simulations that ensure you grasp the concepts thoroughly.</p>
						<p class="text-white mt-15 mb-45"><b>Community Support: </b>
							Learning is more enjoyable when done together. Join our community of learners, ask questions, share insights, and collaborate on projects. You're not alone in </p>
						<p class="text-white mt-15 mb-45"><b>Industry Insights: </b>
							Access webinars and talks by professionals who've navigated the web development landscape. Learn about current trends, best practices, and the skills that set you apart.</p>
						<p class="text-white mt-15 mb-45"><b>Portfolio Building: </b>
							Every line of code you write contributes to your portfolio. Showcase your projects on Techy, giving you a tangible demonstration of your skills to share with employers and clients.</p>
						<h3 class="sect-title-two fw-bold mb-20">Our Specialized</h3>
						<p class="text-white">At Techy, we're dedicated to ensuring that your web development journey is not only comprehensive but also tailored to your unique interests and ambitions. That's why we offer specialized tracks that allow you to dive deeper into specific areas of web development, equipping you with the skills needed to excel in your chosen field.</p>
						<div class="row progressbar-wrapper mt-35 mb-15">
							<div class="col-lg-3 col-sm-6">
								<div class="progressbar-content text-center mb-45">
									<div class="chart" data-percent="88"><span>88%</span></div>
									<h4 class="semi-title">Web Development</h4>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="progressbar-content text-center mb-45">
									<div class="chart" data-percent="80"><span>80%</span></div>
									<h4 class="semi-title">Software Development</h4>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="progressbar-content text-center mb-45">
									<div class="chart" data-percent="92"><span>92%</span></div>
									<h4 class="semi-title">Web Design</h4>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="progressbar-content text-center mb-45">
									<div class="chart" data-percent="80"><span>80%</span></div>
									<h4 class="semi-title">UI/UX Design</h4>
								</div>
							</div>


						</div>
						<h3 class="sect-title-two fw-bold mb-20">Our Skills</h3>
						<p class="text-white">At Techy, our mission is to empower you with the skills you need to thrive in the digital age. Through our comprehensive web development curriculum, you'll gain a toolkit of essential skills that will set you apart and open doors to exciting opportunities in the tech industry.</p>
						<div class="tools-list mt-20 mb-40">
							<span><img src="{{ asset('frontend/img/icon/html-5.png') }}" alt="html"></span>
							<span><img src="{{ asset('frontend/img/icon/css-3.png') }}" alt="css"></span>
							<span><img src="{{ asset('frontend/img/icon/js.png') }}" alt="js"></span>
							<span><img src="{{ asset('frontend/img/icon/php.png') }}" alt="php"></span>
							<span><img src="{{ asset('frontend/img/icon/c.png') }}" alt="c++"></span>
							<span><img src="{{ asset('frontend/img/icon/dart.png') }}" alt="dart"></span>
							<span><img src="{{ asset('frontend/img/icon/python.png') }}" alt="pythone"></span>
							<span><img src="{{ asset('frontend/img/icon/typescript.png') }}" alt="typescript"></span>
						</div>
						<h3 class="sect-title-two fw-bold mb-20">We Provide Services that You can Rely on</h3>
						<p class="text-white">Certainly, if you have a specific topic or aspect you'd like to focus on, please provide me with more details so I can create content that aligns with your request. Whether it's about your project's features, benefits, community, or any other aspect, let me know how I can assist you further.</p>
						<div class="service-video d-md-flex mt-40">
							<div class="service-single mb-40">
								<img class="w-100" src="{{ asset('frontend/img/service/img-02.jpg') }}" alt="img">
							</div>
							<div class="service-single-video mb-40">
								<img class="w-100" src="{{ asset('frontend/img/service/img-03.jpg') }}" alt="img">
								<a class="popup-video mb-30" href="https://youtu.be/Hv02C9FzWzs?si=IylLW0wgPelmCfHS"><i class="bi bi-play-fill"></i></a>
							</div>
							<div class="service-single mb-40">
								<img class="w-100" src="{{ asset('frontend/img/service/img-04.jpg') }}" alt="img">
							</div>
						</div>
						<!-- <ul class="text-list list-none">
							<li><b> Specialized Learning Tracks &nbsp;:</b> &nbsp; Explore focused web development areas like design, back-end, e-commerce, or interactive apps.
							</li>
							<li><b> Hands-On Experience &nbsp;:</b> &nbsp; Gain practical skills through interactive projects and real-world challenges.
							</li>
							<li><b> Career-Ready Skills &nbsp;:</b> &nbsp; Acquire in-demand skills directly applicable in the job market.
							</li>
							<li><b> Community Collaboration &nbsp;:</b> &nbsp; Join a supportive community of learners to share insights and collaborate.
							</li>
							<li><b> Real-World Relevance &nbsp;:</b> &nbsp; Bridge the gap between theory and application in today's digital landscape.
							</li>
						</ul> -->
						<!-- <div class="row mt-20">
							<div class="col-md-3" data-aos="fade-up">
								<div class="counter-style-two boder-style mb-45">
									<h3><span class="counter">125</span>+</h3>
									<p class="text-white mt-20">We Develop Over 125+ Software</p>
								</div>
							</div>
							<div class="col-md-3" data-aos="fade-up">
								<div class="counter-style-two boder-style mb-45">
									<h3><span class="counter">64</span>+</h3>
									<p class="text-white mt-20">Global Clients & Trusted Us</p>
								</div>
							</div>
							<div class="col-md-3" data-aos="fade-up">
								<div class="counter-style-two boder-style mb-45">
									<h3><span class="counter">32</span>+</h3>
									<p class="text-white mt-20">Local & Global
										Award Wins</p>
								</div>
							</div>
							<div class="col-md-3" data-aos="fade-up">
								<div class="counter-style-two boder-style mb-45">
									<h3><span class="counter">122</span>+</h3>
									<p class="text-white mt-20">Clients Reviews Our Software</p>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				<div class="col-lg-4 order-md-first">
					<div class="widget-right-section mb-40">
						<ul class="list-none service-widget">
						<li><a href="javascript:;">Web Development <span class="f-right"></span></a></li>
							<li><a href="javascript:;">Software Development <span class="f-right"></span></a></li>
							<li><a href="javascript:;">web designing  <span class="f-right"></span></a></li>
							<li><a href="javascript:;">Programming <span class="f-right"></span></a></li>
						</ul>
						<div class="widget-form mt-60">
							<h3 class="widget-title mb-20">Contact Us</h3>
							<p class="mb-40">Have questions or need assistance? Feel free to reach out to us. We're here to help you on your web development journey.</p>

							@include('frontend.includes.notification')
							<form action="#" method="post">
								@csrf
								<input type="text" name="name" placeholder="Enter Name" required>
								<input type="email" name="email" placeholder="Enter Email" required>
								<textarea name="message" placeholder="Write Message" required></textarea>
								<button class="widget-btn mt-20" name="submit" type="submit">Contact Now</button>
							</form>
						</div>



					</div>
				</div>
			</div>
		</div>
	</section>
	<!--our-services end-->
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