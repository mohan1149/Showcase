@extends('salon.demo1.app')
@section('content')
    <div class="inner-banner">
        <div class="inner-page-infhny">
        </div>
    </div>
    <section class="sahas-contact-main">
		<div class="contact-infhny py-5">
			<div class="container py-lg-3">
				<div class="top-map">
					<div class="map-content-9">
						<form action="#" method="post">
							<div class="form-top1">
								<h6 class="sub-title text-center">{{__('t.contact')}}</h6>
								<h3 class="hny-title text-center mb-lg-5 mb-4">{{__('t.get_in_touch')}}</h3>
								<div class="form-top">

									<div class="form-top-left">

										<input type="text" name="sahasName" id="sahasName" placeholder={{__('t.name')}} required="">

										<input type="email" name="sahasSender" id="sahasSender" placeholder={{__('t.email')}}
											required="">

										<input type="text" name="sahasSubject" id="sahasName" placeholder={{__('t.subject')}}
											required="">

									</div>
									<div class="form-top-righ">
										<textarea name="sahasMessage" id="sahasMessage" placeholder={{__('t.message')}}
											required=""></textarea>
									</div>
								</div>
								<div class="text-center">
									<button type="submit" class="btn">{{__('t.submit')}}</button>
								</div>
							</div>
						</form>
					</div>
					<div class="cont-details">
						<div class="cont-top london text-center">
							<h6><span class="fa fa-map-marker"></span> Sabha Al Salim</h6>
							<p>90 Sabha Al Salim 260, Kuwait</p>
							<p><a href="tel:+965 67661149">67661149</a></p>
							<p><a href="mailto:mohan.velegacherla@gamil.com">mail@example.com</a></p>
						</div>
						<div class="cont-top paris text-center">
							<h6><span class="fa fa-map-marker"></span> Salmiya</h6>
							<p>20 Salmiya Kuwait</p>
							<p><a href="tel:+965 67661149">67661149</a></p>
							<p><a href="mailto:mohan.velegacherla@gamil.com">mail@example.com</a></p>
						</div>
						<div class="cont-top newyork text-center">
							<h6><span class="fa fa-map-marker"></span> Jahra</h6>
							<p>80 Al Jahra, Kuwait</p>
							<p><a href="tel:+965 67661149">67661149</a></p>
							<p><a href="mailto:mohan.velegacherla@gamil.com">mail@example.com</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="map">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.3059445135!2d-74.25986613799748!3d40.69714941774136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e3!4m0!4m0!5e0!3m2!1sen!2sin!4v1570181661801!5m2!1sen!2sin"
				allowfullscreen=""></iframe>
		</div>

	</section>
    
    
@endsection