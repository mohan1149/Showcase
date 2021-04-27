@extends('salon.demo1.app')
@section('content')
    <div class="inner-banner">
        <div class="inner-page-infhny">
        </div>
    </div>
    <section class="sahas-content-4">
        <!-- /content-6-section -->
        <div class="content-4-main py-5">
            <div class="container py-lg-4">
                <div class="content-info-in row">

                    <div class="content-right col-lg-6">
                        <img src="/assets/images/ab6.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="content-left col-lg-6  pl-lg-4">
                        <h6 class="sub-title">
                            What We Provide</h6>
                        <h3 class="hny-title">
                            We Work for You</h3>
                        <p class="mt-3">{{__('t.lorem')}}</p>

                        <div class="content-4-bottom">
                            <div class="content4-right-grids mb-md-0 mb-4">

                                <div class="content4-right-info">
                                    <h6><a href="#">Professionals</a></h6>
                                    <p>{{__('t.lorem')}}</p>
                                </div>

                            </div>
                            <div class="content4-right-grids mb-md-0 mb-4">

                                <div class="content4-right-info">
                                    <h6><a href="#">Natural Products</a></h6>
                                    <p>{{__('t.lorem')}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sahas-progress-6">
		<!-- /content-6-section -->
		<div class="progress-6-mian py-5">
			<div class="container py-lg-3">
				<div class="progress-in row">
					<div class="content-gd col-lg-6">
						<div class="title-content text-left">
							<h6 class="sub-title">Simple Text</h6>
							<h3 class="hny-title two">We have 16+ years of Professional Experience</h3>
							<p class="mt-3">{{__('t.lorem')}}</p>
						</div>
					</div>
					<div class="content-gd col-lg-6 mt-lg-0 mt-4">
						<div class="progress-info">
							<h6 class="progress-tittle">Hands & Feet</h6>
							<div class="progress">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"
									aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
								</div>
							</div>
						</div>
						<div class="progress-info">
							<h6 class="progress-tittle">Body Treatments</h6>
							<div class="progress">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%"
									aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
								</div>
							</div>
						</div>
						<div class="progress-info">
							<h6 class="progress-tittle">Finishing Touches
							</h6>
							<div class="progress">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%"
									aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
								</div>
							</div>
						</div>
						<div class="progress-info">
							<h6 class="progress-tittle">Customer Satisfaction</h6>
							<div class="progress">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%"
									aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <section class="sahas-pricing-16-main">
		<div class="pricing-content py-5">
			<div class="container py-lg-4">
				<div class="title-content text-center mb-lg-5 mt-4">
					<h6 class="sub-title">Available packages</h6>
					<h3 class="hny-title">Pricing Plans</h3>
				</div>

				<div class="row sahas-pricing-7-gd-top pt-4">
					<div class="col-lg-4 col-md-6 price-main-hny-16 mt-lg-0 mt-5">
						<div class="sahas-pricing-7-gd-left">
							<div class="sahas-pricing-7  pric-7-1">
								<div class="sahas-pricing-7-top">
									<h6>Bronze</h6>
									<h3 class="title-sub"><label>$</label>59 <span>/Monthly</span></h3>
								</div>
								<div class="sahas-pricing-7-bottom">
									<div class="sahas-pricing-7-bottom-bottom">
										<ul class="links">
											<li class="tick-info">
												<span class="pricing-val">{{__('t.aroma_therapy')}}</span>
											
											</li>
											<li class="tick-info">
												<span class="pricing-val">{{__('t.facials')}}</span>
												
											</li>
											<li class="tick-info">
												<span class="pricing-val">{{__('t.waxing')}}</span>
												
											</li>
											<li class="tick-info">
												<span class="pricing-val">{{__('t.tea_therapy')}}</span>
												
											</li>
											<li class="tick-info">
												<span class="pricing-val">
													{{__('t.hydro_therapy')}}
												</span>
											
											</li>
										</ul>
									</div>
									<div class="buy-button text-center">
										<div class="read">
											<a href="/salon/demo1/contact-us" class="btn btn-style btn-primary mt-4">Buy Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 price-main-hny-16 mt-lg-0 mt-5">
						<div class="sahas-pricing-7-gd-left active">
							<div class="sahas-pricing-7  pric-7-1">
								<div class="sahas-pricing-7-top">
									<h6>Gold</h6>
									<h3 class="title-sub"><label>$</label>99 <span>/Monthly</span></h3>
								</div>
								<div class="sahas-pricing-7-bottom">
									<div class="sahas-pricing-7-bottom-bottom">
										<ul class="links">
											<li class="tick-info">
												<span class="pricing-val">{{__('t.aroma_therapy')}}</span>
											
											</li>
											<li class="tick-info">
												<span class="pricing-val">{{__('t.facials')}}</span>
												
											</li>
											<li class="tick-info">
												<span class="pricing-val">{{__('t.waxing')}}</span>
												
											</li>
											<li class="tick-info">
												<span class="pricing-val">{{__('t.tea_therapy')}}</span>
												
											</li>
											<li class="tick-info">
												<span class="pricing-val">
													{{__('t.hydro_therapy')}}
												</span>
											
											</li>
										</ul>
									</div>
									<div class="buy-button text-center">
										<div class="read">
											<a href="/salon/demo1/contact-us" class="btn btn-style btn-primary  mt-4">Buy Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 price-main-hny-16 mt-lg-0 mt-5">
						<div class="sahas-pricing-7-gd-left">
							<div class="sahas-pricing-7 pric-7-1">
								<div class="sahas-pricing-7-top">
									<h6>Silver</h6>
									<h3 class="title-sub"><label>$</label>79 <span>/Monthly</span></h3>
								</div>
								<div class="sahas-pricing-7-bottom">
									<div class="sahas-pricing-7-bottom-bottom">
										<ul class="links">
											<li class="tick-info">
												<span class="pricing-val">{{__('t.aroma_therapy')}}</span>
											
											</li>
											<li class="tick-info">
												<span class="pricing-val">{{__('t.facials')}}</span>
												
											</li>
											<li class="tick-info">
												<span class="pricing-val">{{__('t.waxing')}}</span>
												
											</li>
											<li class="tick-info">
												<span class="pricing-val">{{__('t.tea_therapy')}}</span>
												
											</li>
											<li class="tick-info">
												<span class="pricing-val">
													{{__('t.hydro_therapy')}}
												</span>
											
											</li>
										</ul>
									</div>
									<div class="buy-button text-center">
										<div class="read">
											<a href="/salon/demo1/contact-us" class="btn btn-style btn-primary mt-4">Buy Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
@endsection