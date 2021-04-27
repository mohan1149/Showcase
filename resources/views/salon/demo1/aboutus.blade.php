@extends('salon.demo1.app')
@section('content')
    <div class="inner-banner">
        <div class="inner-page-infhny">
        </div>
    </div>
    <div class="sahas-bottom-grids py-5">
        <div class="container py-lg-5">
            <div class="row bottomhny-grids-sec align-items-center">
                <div class="col-lg-6 bottomhny-1">
                    <img class="img-fluid" src="/assets/images/banner1.jpg">
                </div>
                <div class="col-lg-6 bottomhny-gd-ingf pl-lg-5 mt-lg-0 mt-5">
                    <h6 class="sub-title">{{ __('t.why_choose_us') }}</h6>
                    <h3 class="hny-title">{{ __('t.the_best_for_you') }}</h3>
                    <p class="mt-3">{{__('t.lorem')}}</p>
                    <div class="ready-more mt-lg-5 mt-4">
                        <a class="btn btn-style btn-primary" href="/salon/demo1/about-us">{{ __('t.read_more') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team -->
	<section class="sahas-team" id="team">
		<div class="team-block py-5">
			<div class="container py-lg-5">
				<div class="wthree-title text-center mb-lg-0 mb-4">
					<h6 class="sub-title">{{__('t.our_team')}}</h6>
					<h3 class="hny-title">{{__('t.meet_our_therapists')}}</h3>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-6 mt-lg-5 mt-3">
						<div class="box16">
							<a href="#url"><img src="/assets/images/team1.jpg" alt="" class="img-fluid" /></a>
							<div class="box-content">
								<h3 class="title"><a href="#url">Victoria</a></h3>
								<span class="post">Director</span>
								<ul class="social">
									<li>
										<a href="#" class="facebook">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<span class="fa fa-twitter"></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mt-lg-5 mt-3">
						<div class="box16">
							<a href="#url"><img src="/assets/images/team2.jpg" alt="" class="img-fluid" /></a>
							<div class="box-content">
								<h3 class="title"><a href="#url">Michael</a></h3>
								<span class="post">Managing Director</span>
								<ul class="social">
									<li>
										<a href="#" class="facebook">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<span class="fa fa-twitter"></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mt-lg-5 mt-3">
						<div class="box16">
							<a href="#url"><img src="/assets/images/team3.jpg" alt="" class="img-fluid" /></a>
							<div class="box-content">
								<h3 class="title"><a href="#url">George</a></h3>
								<span class="post">Designer</a></span>
								<ul class="social">
									<li>
										<a href="#" class="facebook">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<span class="fa fa-twitter"></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
@endsection