@extends('frontend.includes.header')
@section('title','BestMyProject : : Faq Page')
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
						<h2 class="page-title mb-20">Frequently Ask Question</h2>
						<nav aria-label="breadcrumb">
							<ul class="breadcrumb list-none justify-content-center justify-content-md-start">
								<li><a href="/">Home</a></li>
								<li><a href="#">Pages</a></li>
								<li class="active" aria-current="page">FAQ</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--page-title-area end-->
	<!--faq start-->
	<div class="faq-que-list pt-150 pb-115 pt-lg-60 pb-lg-60">
		<div class="container">
			<div class="row gx-4 gx-xxl-5">
				<div class="col-md-12">
					<div class="accordion accordion-one" id="accordionExample">






						<div class="accordion" id="accordionExample">
							@foreach ( $faqlists as $index => $item)
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading{{ $index }}">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="true" aria-controls="collapse{{ $index }}">
										{{ $item['title'] }}
									</button>
								</h2>
								<div id="collapse{{ $index }}" class="accordion-collapse collapse show" aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>{{ $item['description'] }}</p>
									</div>
								</div>
							</div>
							@endforeach
						</div>






					</div>
				</div>

			</div>

		</div>
	</div>
	<!--faq end-->
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