@extends('salon.demo1.app')
@section('content')
    {{-- slider --}}
    <section class="sahas-main-slider position-relative" id="home">
		<div class="companies20-content">
			<div class="owl-one owl-carousel owl-theme">
				<div class="item">
					<li>
						<div class="slider-info banner-view bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg text-center">
										<h4 class="sub-font">{{__('t.show_healty_face')}}</h4>
										<h5>{{__('t.healing_body')}}</h5>
										<div class="banner-buttons mt-md-5 mt-4">
											<a class="btn btn-style btn-primary" href="/salon/demo1/services">{{__('t.our_services')}}</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info  banner-view banner-top1 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg text-center">
										<h4 class="sub-font">{{__('t.feel_natural')}}</h4>
										<h5>{{__('t.creating_beauty')}}</h5>
										<div class="banner-buttons mt-md-5 mt-4">
											<a class="btn btn-style btn-primary" href="/salon/demo1/services">{{__('t.our_services')}}</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top2 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg text-center">
										<h4 class="sub-font">{{__('t.show_world')}}</h4>
										<h5>{{__('t.see_yourself')}}</h5>
										<div class="banner-buttons mt-md-5 mt-4">
											<a class="btn btn-style btn-primary" href="/salon/demo1/services">{{__('t.our_services')}}</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top3 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg text-center">
										<h4 class="sub-font">{{__('t.feel_natural')}}</h4>
										<h5>{{__('t.creating_beauty')}}</h5>
										<div class="banner-buttons mt-md-5 mt-4">
											<a class="btn btn-style btn-primary" href="/salon/demo1/services">{{__('t.our_services')}}</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
			<div class="banhny-timing">MON - Sun : 7:00AM - 8:00PM </div>
			<div class="banhny-left-botm">{{__('t.natural_glowing')}}</div>
			<div class="scrollhny-btn">
				<a class="btn-btmhny scroll" href="#about">
					<div class="scroll-arrow"></div>
					<div class="scroll-arrow"></div>
					<div class="scroll-arrow"></div>
				</a>

			</div>
		</div>
	</section>
    {{-- about us --}}
    <section class="sahas-bottom-grids py-5" id="about">
		<div class="container py-lg-5">
			<div class="row bottomhny-grids-sec text-center">
				<div class="col-md-10 bottomhny-1 mx-auto">
					<div class="bottomhny-gd-ingf">
						<h6 class="sub-title">{{__('t.about_us')}}</h6>
						<h3 class="hny-title">{{__('t.welcome_to')}}</h3>
						<p class="mt-3">{{__('t.lorem')}}</p>
						<div class="ready-more mt-lg-5 mt-4">
							<a class="btn btn-style btn-primary" href="/salon/demo1/about-us">{{ __('t.read_more') }}</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    {{-- features --}}
    <section class="features-grids-6">
		<div class="container">
			<div class="grids-area-hny main-cont-wthree-fea row">
				<div class="col-lg-4 col-md-6 grids-feature mb-md-0 mb-4">
					<div class="area-box">
						<span class="fa fa-bath"></span>
						<a href="#feature">
							<h4 class="title-head">{{__('t.hydro_therapy')}}</h4>
						</a>
						<p>{{__('t.lorem')}}</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grids-feature mb-md-0 mb-4">
					<div class="area-box active">
						<span class="fa fa-american-sign-language-interpreting active"></span>
						<a href="#feature">
							<h4 class="title-head">{{__('t.relaxing_massages')}}</h4>
						</a>
						<p>{{__('t.lorem')}}</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grids-feature mb-md-0 mb-4">
					<div class="area-box thrid">
						<span class="fa fa-flask"></span>
						<a href="#feature">
							<h4 class="title-head">{{__('t.aroma_therapy')}}</h4>
						</a>
						<p>{{__('t.lorem')}}</p>
					</div>
				</div>

			</div>
		</div>
	</section>
    {{-- specifications --}}
    <section class="sahas-specification-6">
		<div class="specification-6-mian py-5">
			<div class="container py-lg-5">
				<div class="row story-6-grids py-lg-5">
					<div class="col-lg-10 story-gd pl-lg-4  text-center mx-auto">
						<div class="skill_info mt-lg-5 mt-4 pt-lg-4">
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">65</p>
										<h4>{{__('t.massage_therapy')}}</h4>

									</div>
								</div>
							</div>
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">165</p>
										<h4>{{__('t.sauna')}}</h4>

									</div>
								</div>
							</div>
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">463</p>
										<h4>{{__('t.soften_heel')}}</h4>
									</div>
								</div>
							</div>
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">5063</p>
										<h4>{{__('t.happy_clients')}}</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    {{-- vision and mission --}}
    <section class="sahas-content-with-photo-4">
		<!-- /content-grids-->
		<div class="content-photo-info py-5">
			<div class="container py-lg-5">
				<!-- /row-->
				<div class="content-photo-grids">
					<div class="photo-6-inf-right">
						<h6 class="sub-title">{{__('t.health_relaxation')}}</h6>
						<h3 class="hny-title">
							{{__('t.our_philosophy')}}
						</h3>
						<p class="mt-3">{{__('t.lorem')}}</p>
						<div class="servehny-1">
							<div class="ser-sub">

								<a href="#link" class="ser1"><span class="fa fa-check"></span> {{__('t.facials')}}
								</a>
								<a href="#link" class="ser1"><span class="fa fa-check"></span> {{__('t.body_treatments')}}
								</a>
								<a href="#link" class="ser1"><span class="fa fa-check"></span> {{__('t.waxing')}}</a>
								<a href="#link" class="ser1"><span class="fa fa-check"></span> {{__('t.massage')}}</a>
							</div>
							<div class="ser-sub">
								<a href="#link" class="ser1"><span class="fa fa-check"></span> {{__('t.home_cleaning')}}
								</a>
								<a href="#link" class="ser1"><span class="fa fa-check"></span> {{__('t.hands_feet')}}</a>

								<a href="#link" class="ser1"><span class="fa fa-check"></span>
									{{__('t.tea_therapy')}}</a>
								<a href="#link" class="ser1"><span class="fa fa-check"></span>
									{{__('t.aroma_therapy')}}</a>
							</div>
						</div>
						<div class="read-buttons">
							<a class="btn btn-style two btn-primary" href="/salon/demo1/services">{{__('t.services')}}</a>
							<a class="btn btn-style btn-primary" href="/salon/demo1/contact-us">{{__('t.contact')}}</a>
						</div>
					</div>

				</div>
				<!-- //row-->
			</div>
		</div>
	</section>
    {{-- services --}}
    <section class="sahas-index2">
		<div class="row abouthy-img-grids no-gutters">
			<div class="col-md-6 img-one">
				<img src="/assets/images/ab.jpg" alt=" " class="img-fluid">
			</div>
			<div class="col-md-6 img-one content-mid py-md-0 py-5">
				<div class="info">
					<h3 class="hny-title two">
						{{__('t.makeup_services')}}
					</h3>
					<p class="mt-3 mb-5 pr-lg-4">{{__('t.lorem')}}</p>
					<div class="ready-more">
						<a class="btn btn-style btn-primary" href="/salon/demo1/services">{{__('t.services')}}</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 img-info content-mid py-md-0 py-5">
				<div class="info">
					<h3 class="hny-title two">
						{{__('t.hair_styling_services')}}
					</h3>
					<p class="mt-3 mb-5 pr-lg-4">{{__('t.lorem')}}</p>
					<div class="ready-more">
						<a class="btn btn-style btn-primary" href="/salon/demo1/services">{{__('t.services')}}</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 img-one">
				<img src="/assets/images/ab1.jpg" alt=" " class="img-fluid">
			</div>
		</div>
	</section>
    {{-- new services --}}
    <section class="sahas-news-sec">
		<div class="news-mainhny py-5">
			<div class="container text-center py-lg-3">
				<div class="title-content text-center mb-lg-5 mb-4">
					<h6 class="sub-title">{{__('t.view')}}</h6>
					<h3 class="hny-title">{{__('t.services')}}</h3>

				</div>
			</div>
			<div class="owl-news owl-carousel owl-theme">
				<div class="item">
					<div class="news-img position-relative">
						<a href="#"><img src="/assets/images/ab.jpg" class="img-fluid" alt="news image"></a>
						<div class="title-wrap">
							<a href="#">
								<h4 class="title">{{__('t.hydro_therapy')}}</h4>
							</a>
							<a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="news-img">
						<a href="#"><img src="/assets/images/ab1.jpg" class="img-fluid" alt="news image"></a>
						<div class="title-wrap">
							<a href="#">
								<h4 class="title">{{__('t.hair_style')}}</h4>
							</a>
							<a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="news-img">
						<a href="#"><img src="/assets/images/ab2.jpg" class="img-fluid" alt="news image"></a>
						<div class="title-wrap">
							<a href="#">
								<h4 class="title">{{__('t.pedicure')}}</h4>
							</a>
							<a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="news-img">
						<a href="#"><img src="/assets/images/ab3.jpg" class="img-fluid" alt="news image"></a>
						<div class="title-wrap">
							<a href="#">
								<h4 class="title">{{__('t.facials')}}</h4>
							</a>
							<a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="news-img">
						<a href="#"><img src="/assets/images/ab5.jpg" class="img-fluid" alt="news image"></a>
						<div class="title-wrap">
							<a href="#">
								<h4 class="title">{{__('t.body_spa')}} </h4>
							</a>
							<a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="news-img">
						<a href="#"><img src="/assets/images/ab4.jpg" class="img-fluid" alt="news image"></a>
						<div class="title-wrap">
							<a href="#">
								<h4 class="title">{{__('t.hair_spa')}}</h4>
							</a>
							<a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    {{-- posts --}}
    <section class="sahas-blogluxe-hny" id="news">
		<section id="grids5-block" class="py-5">
			<div class="container py-lg-4">
				<div class="header-section text-center mx-auto">
					<h6 class="sub-title">{{__('t.we_are_here_for_you')}}</h6>
					<h3 class="hny-title">{{__('t.latest_posts')}}</h3>

				</div>
				<div class="grid-view">
					<div class="row">
						<div class="col-lg-4 col-md-6 mt-5">
							<div class="grids5-info">
								<a href="blog-single.html" class="d-block zoom">
									<img src="/assets/images/ab4.jpg" alt="" class="img-fluid news-image" />


								</a>
								<div class="blog-info">
									<p class="date">26 Apr, 2020</p>
									<a href="blog-single.html">
										<h4>Emergency Cleaning Tips For Your Big Day</h4>
									</a>
									<p class="blog-text">{{__('t.lorem')}}</p>

								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mt-5">
							<div class="grids5-info">
								<a href="blog-single.html" class="d-block zoom">
									<img src="/assets/images/ab5.jpg" alt="" class="img-fluid news-image" />


								</a>
								<div class="blog-info">
									<p class="date">26 Apr, 2020</p>
									<a href="blog-single.html">
										<h4>Speed Cleaning Tips From Cleaners</h4>
									</a>
									<p class="blog-text">{{__('t.lorem')}}</p>

								</div>
							</div>
						</div>
						<div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 mt-5">
							<div class="grids5-info">
								<a href="blog-single.html" class="d-block zoom">
									<img src="/assets/images/ab6.jpg" alt="" class="img-fluid news-image" />


								</a>
								<div class="blog-info">
									<p class="date">26 Apr, 2020</p>
									<a href="blog-single.html">
										<h4>The Benefits of Natural Cosmetics</h4>
									</a>
									<p class="blog-text">{{__('t.lorem')}}</p>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
    {{-- feedbacks --}}
    <section class="sahas-testimonials">
		<div class="testimonials py-5">
			<div class="container text-center py-lg-3">
				<div class="title-content text-center mb-lg-5 mb-4">
					<h6 class="sub-title">{{__('t.testinomials')}}</h6>
					<h3 class="hny-title">{{__('t.what_people_says')}}</h3>
				</div>
				<div class="row">
					<div class="col-lg-10 mx-auto">
						<div class="owl-testimonial owl-carousel owl-theme">
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="img-circle">
										<img src="/assets/images/c2.jpg" class="img-fluid rounded" alt="client image">
									</div>
									<div class="message"><span class="fa fa-quote-left" aria-hidden="true"></span> {{__('t.lorem')}}</div>
									<div class="name">Jenkins</div>

								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="img-circle">
										<img src="/assets/images/c1.jpg" class="img-fluid rounded" alt="client image">
									</div>
									<div class="message"><span class="fa fa-quote-left" aria-hidden="true"></span> {{__('t.lorem')}}</div>
									<div class="name">John Balmer</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="img-circle">
										<img src="/assets/images/c3.jpg" class="img-fluid rounded" alt="client image">
									</div>
									<div class="message"><span class="fa fa-quote-left" aria-hidden="true"></span> {{__('t.lorem')}}</div>
									<div class="name">Kiss Kington</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="img-circle">
										<img src="/assets/images/c1.jpg" class="img-fluid rounded" alt="client image">
									</div>
									<div class="message"><span class="fa fa-quote-left" aria-hidden="true"></span> {{__('t.lorem')}}</div>
									<div class="name">Elizabeth</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    {{-- newsletter --}}
    <section class="sahas-newsletter">
		<!-- /form-25-section -->
		<div class="form-25-main py-5">
			<div class="container py-lg-5">
				<div class="forms-25-info">
					<div class="title-content text-center">
						<h6 class="sub-title">{{__('t.newsletter')}}</h6>
						<h3 class="hny-title two">{{__('t.subscribe_to')}}</h3>
					</div>
					<form action="#" method="post" class="signin-form mt-4 mb-2">
						<div class="forms-gds">
							<input type="text" name="" placeholder="{{__('t.name')}}" required />
							<input type="email" name="" placeholder="{{__('t.email')}}" required />
							<button class="btn btn-style btn-primary">{{__('t.subscribe')}}</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection