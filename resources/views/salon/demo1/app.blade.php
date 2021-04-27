<!doctype html>
<html 
    lang="{{ str_replace('_', '-', app()->getLocale() ) }}"
    style="direction: {{app()->getLocale() == 'en' ? 'ltr' : 'rtl'}};"
>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Beauty & Spa
	</title>
	<link rel="stylesheet" href="/assets/css/style-starter.css">
	<link
		href="//fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,600&display=swap"
		rel="stylesheet">
	<link href="//fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
	<!--header-->
	<header id="site-header" class="fixed-top">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark stroke">
				{{-- <h1> 
                    <a class="navbar-brand" href="/salon/demo1/">
						<span class="sub-logo">سبا وصالون</span>
					</a>
                </h1> --}}
                <a class="navbar-brand"  href="/salon/demo1/">
                    <svg class="logo_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 496.013 496.013" style="enable-background:new 0 0 496.013 496.013;" xml:space="preserve">
						<g>
							<g>
								<path
								fill="white"
								d="M493.666,242.35l-39.2-39.2c-9.882-9.852-21.41-17.901-34.064-23.784c7.634-16.649,11.594-34.748,11.608-53.064V72.006
									c0-4.418-3.582-8-8-8h-54.296c-18.318,0.011-36.42,3.967-53.072,11.6c-5.883-12.654-13.932-24.182-23.784-34.064l-39.2-39.2
									c-3.124-3.123-8.188-3.123-11.312,0l-39.2,39.2c-9.852,9.882-17.901,21.41-23.784,34.064c-16.648-7.63-34.743-11.587-53.056-11.6
									H72.01c-4.418,0-8,3.582-8,8v54.296c0.011,18.318,3.967,36.419,11.6,53.072c-12.654,5.883-24.182,13.932-34.064,23.784l-39.2,39.2
									c-3.123,3.124-3.123,8.188,0,11.312l39.2,39.2c9.882,9.852,21.41,17.901,34.064,23.784c-7.63,16.648-11.587,34.743-11.6,53.056
									v54.296c0,4.418,3.582,8,8,8h54.296c18.318-0.011,36.42-3.967,53.072-11.6c5.883,12.654,13.932,24.182,23.784,34.064l39.2,39.2
									c3.124,3.123,8.188,3.123,11.312,0l39.2-39.2c9.852-9.882,17.901-21.41,23.784-34.064c16.648,7.631,34.743,11.587,53.056,11.6
									h54.296c4.418,0,8-3.582,8-8V369.71c-0.011-18.318-3.967-36.419-11.6-53.072c12.654-5.883,24.182-13.932,34.064-23.784l39.2-39.2
									C496.79,250.529,496.786,245.471,493.666,242.35z M322.53,90.518c14.77-6.912,30.877-10.5,47.184-10.512h46.296v46.296
									c-0.007,16.312-3.593,32.424-10.504,47.2c-11.618-3.64-23.721-5.493-35.896-5.496h-3.2c-16.817-0.005-33.446,3.539-48.8,10.4
									c6.861-15.354,10.405-31.983,10.4-48.8v-3.2C328.012,114.235,326.164,102.134,322.53,90.518z M366.41,184.006h3.2
									c9.45,0.019,18.853,1.322,27.952,3.872c-4.195,6.336-9.02,12.233-14.4,17.6l-1.696,1.696c-20.962,21.069-49.48,32.879-79.2,32.8
									l-34.944,0.032l25.536-25.536C312.323,194.899,338.808,183.929,366.41,184.006z M312.01,126.406L312.01,126.406v3.2
									c0.075,27.599-10.895,54.082-30.464,73.544l-25.536,25.544V193.71c-0.079-29.72,11.731-58.238,32.8-79.2l1.696-1.696
									c5.367-5.38,11.264-10.204,17.6-14.4C310.671,107.525,311.984,116.942,312.01,126.406z M214.474,52.854l33.536-33.536
									l33.536,33.536c8.752,8.782,15.859,19.062,20.984,30.352c-8.453,5.179-16.278,11.318-23.32,18.296l-1.696,1.696
									c-13.069,13.078-23.136,28.843-29.504,46.2c-6.367-17.354-16.431-33.115-29.496-46.192l-1.696-1.696
									c-7.044-6.981-14.872-13.123-23.328-18.304C198.615,71.917,205.722,61.637,214.474,52.854z M184.01,126.406
									c0.019-9.45,1.322-18.853,3.872-27.952c6.336,4.195,12.233,9.02,17.6,14.4l1.696,1.696c21.069,20.962,32.879,49.48,32.8,79.2
									v34.984l-25.536-25.536c-19.569-19.479-30.528-45.981-30.432-73.592V126.406z M203.154,214.47l25.544,25.536h-34.984
									c-29.72,0.079-58.238-11.731-79.2-32.8l-1.696-1.696c-5.38-5.367-10.204-11.264-14.4-17.6c9.111-2.564,18.528-3.877,27.992-3.904
									h3.2C157.21,183.931,183.692,194.901,203.154,214.47z M80.01,80.006h46.296c16.312,0.007,32.424,3.593,47.2,10.504
									c-3.64,11.618-5.493,23.721-5.496,35.896v3.2c-0.005,16.817,3.539,33.446,10.4,48.8c-15.354-6.861-31.983-10.405-48.8-10.4h-3.2
									c-12.171-0.001-24.272,1.846-35.888,5.48c-6.912-14.77-10.5-30.877-10.512-47.184V80.006z M52.858,281.542l-33.536-33.536
									l33.536-33.536c8.782-8.752,19.062-15.859,30.352-20.984c5.179,8.453,11.318,16.278,18.296,23.32l1.696,1.696
									c13.078,13.069,28.843,23.136,46.2,29.504c-17.354,6.367-33.115,16.431-46.192,29.496l-1.696,1.696
									c-6.981,7.044-13.123,14.872-18.304,23.328C71.921,297.401,61.641,290.294,52.858,281.542z M173.49,405.494
									c-14.77,6.912-30.877,10.5-47.184,10.512H80.01V369.71c0.007-16.312,3.593-32.424,10.504-47.2
									c11.618,3.64,23.721,5.493,35.896,5.496h3.2c16.817,0.005,33.446-3.539,48.8-10.4c-6.861,15.354-10.405,31.983-10.4,48.8v3.2
									C168.009,381.777,169.857,393.878,173.49,405.494z M129.61,312.006h-3.2c-9.45-0.02-18.853-1.322-27.952-3.872
									c4.195-6.336,9.02-12.233,14.4-17.6l1.696-1.696c20.962-21.069,49.48-32.879,79.2-32.8l34.944-0.032l-25.536,25.536
									C183.698,301.113,157.212,312.083,129.61,312.006z M184.01,369.606v-3.2c-0.075-27.599,10.895-54.082,30.464-73.544l25.536-25.544
									v34.984c0.079,29.72-11.731,58.238-32.8,79.2l-1.696,1.696c-5.367,5.38-11.264,10.205-17.6,14.4
									C185.35,388.488,184.037,379.071,184.01,369.606z M281.546,443.158l-33.536,33.536l-33.536-33.536
									c-8.748-8.771-15.855-19.036-20.984-30.312c8.455-5.191,16.28-11.344,23.32-18.336l1.696-1.696
									c13.068-13.078,23.136-28.843,29.504-46.2c6.367,17.354,16.431,33.115,29.496,46.192l1.696,1.696
									c7.042,6.992,14.87,13.145,23.328,18.336C297.402,424.117,290.295,434.385,281.546,443.158z M312.01,369.606
									c-0.02,9.45-1.322,18.853-3.872,27.952c-6.336-4.195-12.233-9.02-17.6-14.4l-1.696-1.696c-21.069-20.962-32.879-49.48-32.8-79.2
									v-34.944l25.536,25.536c19.559,19.469,30.518,45.954,30.432,73.552V369.606z M292.866,281.542l-25.544-25.536h34.984
									c29.72-0.079,58.238,11.731,79.2,32.8l1.696,1.696c5.38,5.367,10.204,11.264,14.4,17.6c-9.111,2.564-18.527,3.878-27.992,3.904
									h-3.2C338.811,312.081,312.329,301.111,292.866,281.542z M416.01,416.006h-46.296c-16.312-0.007-32.424-3.593-47.2-10.504
									c3.64-11.618,5.493-23.721,5.496-35.896v-3.2c0.005-16.817-3.539-33.446-10.4-48.8c15.354,6.861,31.983,10.405,48.8,10.4h3.2
									c12.171,0.001,24.272-1.846,35.888-5.48c6.912,14.77,10.5,30.877,10.512,47.184V416.006z M443.162,281.542
									c-8.771,8.748-19.036,15.855-30.312,20.984c-5.191-8.455-11.344-16.281-18.336-23.32l-1.696-1.696
									c-13.078-13.068-28.843-23.136-46.2-29.504c17.354-6.367,33.115-16.431,46.192-29.496l1.696-1.696
									c6.992-7.042,13.145-14.87,18.336-23.328c11.276,5.129,21.542,12.236,30.312,20.984l33.544,33.536L443.162,281.542z"/>
							</g>
						</g>
					</svg>
                </a>
				<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
					data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
					<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					</span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="/salon/demo1">{{ __('t.home') }} <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/salon/demo1/about-us">{{__('t.about_us')}}</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/salon/demo1/services">{{ __('t.services') }}</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="/salon/demo1/contact-us">{{ __('t.contact')}}</a>
						</li>
                        <li class="nav-item">
                            <form id="lang" action="/lang/{{app()->getLocale()}}/{{ base64_encode(url()->current()) }}" method="POST">
                                @csrf
                                <a onclick="document.getElementById('lang').submit();" class="nav-link" >{{ app()->getLocale() == 'en' ? "عربي" : "english" }}</a>
                            </form>
						</li>                        
					</ul>
					<!--/search-right-->
					<div class="search-right">
						<a href="#book" class="hnysearch-icon" title="search"><span class="fa fa-search"
								aria-hidden="true"></span></a>
						<!-- search popup -->
						<div id="book" class="pop-overlay">
							<div class="popup">
								<h3 class="hny-title two">Book Appointment</h3>
								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Name" name="search"
										required="required" autofocus="">
								<br/>
								<br/>
										<input type="search" placeholder="Phone" name="search"
										required="required" autofocus="">
									<button type="submit" class="btn">Book</button>
								</form>

							</div>
							<a class="close" href="#close">×</a>
						</div>
						<!-- /search popup -->
						<a href="#domain" class="domain" data-toggle="modal" data-target="#DomainModal">
							<div class="hamburger1">
								<div></div>
								<div></div>
								<div></div>
							</div>
						</a>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--/header-->
	<!-- sidebar -->
	<div class="modal right fade" id="DomainModal" tabindex="-1" role="dialog" aria-labelledby="DomainModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">&times;</span></button>

				<div class="modal-body">
					<div class="modal__content">
						<a class="navbar-brand"  href="/salon/demo1/">
							<svg class="logo_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 496.013 496.013" style="enable-background:new 0 0 496.013 496.013;" xml:space="preserve">
								<g>
									<g>
										<path
										fill="white"
										d="M493.666,242.35l-39.2-39.2c-9.882-9.852-21.41-17.901-34.064-23.784c7.634-16.649,11.594-34.748,11.608-53.064V72.006
											c0-4.418-3.582-8-8-8h-54.296c-18.318,0.011-36.42,3.967-53.072,11.6c-5.883-12.654-13.932-24.182-23.784-34.064l-39.2-39.2
											c-3.124-3.123-8.188-3.123-11.312,0l-39.2,39.2c-9.852,9.882-17.901,21.41-23.784,34.064c-16.648-7.63-34.743-11.587-53.056-11.6
											H72.01c-4.418,0-8,3.582-8,8v54.296c0.011,18.318,3.967,36.419,11.6,53.072c-12.654,5.883-24.182,13.932-34.064,23.784l-39.2,39.2
											c-3.123,3.124-3.123,8.188,0,11.312l39.2,39.2c9.882,9.852,21.41,17.901,34.064,23.784c-7.63,16.648-11.587,34.743-11.6,53.056
											v54.296c0,4.418,3.582,8,8,8h54.296c18.318-0.011,36.42-3.967,53.072-11.6c5.883,12.654,13.932,24.182,23.784,34.064l39.2,39.2
											c3.124,3.123,8.188,3.123,11.312,0l39.2-39.2c9.852-9.882,17.901-21.41,23.784-34.064c16.648,7.631,34.743,11.587,53.056,11.6
											h54.296c4.418,0,8-3.582,8-8V369.71c-0.011-18.318-3.967-36.419-11.6-53.072c12.654-5.883,24.182-13.932,34.064-23.784l39.2-39.2
											C496.79,250.529,496.786,245.471,493.666,242.35z M322.53,90.518c14.77-6.912,30.877-10.5,47.184-10.512h46.296v46.296
											c-0.007,16.312-3.593,32.424-10.504,47.2c-11.618-3.64-23.721-5.493-35.896-5.496h-3.2c-16.817-0.005-33.446,3.539-48.8,10.4
											c6.861-15.354,10.405-31.983,10.4-48.8v-3.2C328.012,114.235,326.164,102.134,322.53,90.518z M366.41,184.006h3.2
											c9.45,0.019,18.853,1.322,27.952,3.872c-4.195,6.336-9.02,12.233-14.4,17.6l-1.696,1.696c-20.962,21.069-49.48,32.879-79.2,32.8
											l-34.944,0.032l25.536-25.536C312.323,194.899,338.808,183.929,366.41,184.006z M312.01,126.406L312.01,126.406v3.2
											c0.075,27.599-10.895,54.082-30.464,73.544l-25.536,25.544V193.71c-0.079-29.72,11.731-58.238,32.8-79.2l1.696-1.696
											c5.367-5.38,11.264-10.204,17.6-14.4C310.671,107.525,311.984,116.942,312.01,126.406z M214.474,52.854l33.536-33.536
											l33.536,33.536c8.752,8.782,15.859,19.062,20.984,30.352c-8.453,5.179-16.278,11.318-23.32,18.296l-1.696,1.696
											c-13.069,13.078-23.136,28.843-29.504,46.2c-6.367-17.354-16.431-33.115-29.496-46.192l-1.696-1.696
											c-7.044-6.981-14.872-13.123-23.328-18.304C198.615,71.917,205.722,61.637,214.474,52.854z M184.01,126.406
											c0.019-9.45,1.322-18.853,3.872-27.952c6.336,4.195,12.233,9.02,17.6,14.4l1.696,1.696c21.069,20.962,32.879,49.48,32.8,79.2
											v34.984l-25.536-25.536c-19.569-19.479-30.528-45.981-30.432-73.592V126.406z M203.154,214.47l25.544,25.536h-34.984
											c-29.72,0.079-58.238-11.731-79.2-32.8l-1.696-1.696c-5.38-5.367-10.204-11.264-14.4-17.6c9.111-2.564,18.528-3.877,27.992-3.904
											h3.2C157.21,183.931,183.692,194.901,203.154,214.47z M80.01,80.006h46.296c16.312,0.007,32.424,3.593,47.2,10.504
											c-3.64,11.618-5.493,23.721-5.496,35.896v3.2c-0.005,16.817,3.539,33.446,10.4,48.8c-15.354-6.861-31.983-10.405-48.8-10.4h-3.2
											c-12.171-0.001-24.272,1.846-35.888,5.48c-6.912-14.77-10.5-30.877-10.512-47.184V80.006z M52.858,281.542l-33.536-33.536
											l33.536-33.536c8.782-8.752,19.062-15.859,30.352-20.984c5.179,8.453,11.318,16.278,18.296,23.32l1.696,1.696
											c13.078,13.069,28.843,23.136,46.2,29.504c-17.354,6.367-33.115,16.431-46.192,29.496l-1.696,1.696
											c-6.981,7.044-13.123,14.872-18.304,23.328C71.921,297.401,61.641,290.294,52.858,281.542z M173.49,405.494
											c-14.77,6.912-30.877,10.5-47.184,10.512H80.01V369.71c0.007-16.312,3.593-32.424,10.504-47.2
											c11.618,3.64,23.721,5.493,35.896,5.496h3.2c16.817,0.005,33.446-3.539,48.8-10.4c-6.861,15.354-10.405,31.983-10.4,48.8v3.2
											C168.009,381.777,169.857,393.878,173.49,405.494z M129.61,312.006h-3.2c-9.45-0.02-18.853-1.322-27.952-3.872
											c4.195-6.336,9.02-12.233,14.4-17.6l1.696-1.696c20.962-21.069,49.48-32.879,79.2-32.8l34.944-0.032l-25.536,25.536
											C183.698,301.113,157.212,312.083,129.61,312.006z M184.01,369.606v-3.2c-0.075-27.599,10.895-54.082,30.464-73.544l25.536-25.544
											v34.984c0.079,29.72-11.731,58.238-32.8,79.2l-1.696,1.696c-5.367,5.38-11.264,10.205-17.6,14.4
											C185.35,388.488,184.037,379.071,184.01,369.606z M281.546,443.158l-33.536,33.536l-33.536-33.536
											c-8.748-8.771-15.855-19.036-20.984-30.312c8.455-5.191,16.28-11.344,23.32-18.336l1.696-1.696
											c13.068-13.078,23.136-28.843,29.504-46.2c6.367,17.354,16.431,33.115,29.496,46.192l1.696,1.696
											c7.042,6.992,14.87,13.145,23.328,18.336C297.402,424.117,290.295,434.385,281.546,443.158z M312.01,369.606
											c-0.02,9.45-1.322,18.853-3.872,27.952c-6.336-4.195-12.233-9.02-17.6-14.4l-1.696-1.696c-21.069-20.962-32.879-49.48-32.8-79.2
											v-34.944l25.536,25.536c19.559,19.469,30.518,45.954,30.432,73.552V369.606z M292.866,281.542l-25.544-25.536h34.984
											c29.72-0.079,58.238,11.731,79.2,32.8l1.696,1.696c5.38,5.367,10.204,11.264,14.4,17.6c-9.111,2.564-18.527,3.878-27.992,3.904
											h-3.2C338.811,312.081,312.329,301.111,292.866,281.542z M416.01,416.006h-46.296c-16.312-0.007-32.424-3.593-47.2-10.504
											c3.64-11.618,5.493-23.721,5.496-35.896v-3.2c0.005-16.817-3.539-33.446-10.4-48.8c15.354,6.861,31.983,10.405,48.8,10.4h3.2
											c12.171,0.001,24.272-1.846,35.888-5.48c6.912,14.77,10.5,30.877,10.512,47.184V416.006z M443.162,281.542
											c-8.771,8.748-19.036,15.855-30.312,20.984c-5.191-8.455-11.344-16.281-18.336-23.32l-1.696-1.696
											c-13.078-13.068-28.843-23.136-46.2-29.504c17.354-6.367,33.115-16.431,46.192-29.496l1.696-1.696
											c6.992-7.042,13.145-14.87,18.336-23.328c11.276,5.129,21.542,12.236,30.312,20.984l33.544,33.536L443.162,281.542z"/>
									</g>
								</g>
							</svg>
						</a>
						<p class="mt-md-3 mt-2">{{__('t.lorem')}}</p>
						<div class="widget-menu-items mt-sm-5 mt-4">
							<h5 class="widget-title">{{__('t.quick_links')}}</h5>
							<ul class="icon-rounded address">
								<li>
									<a href="/salon/demo1/">{{__('t.home')}}</a>
								</li>
								<li class="mt-3">
									<a href="/salon/demo1/about-us">{{__('t.about_us')}}</a>
								</li>
								<li class="mt-2">
									<a href="/salon/demo1/contact-us">{{__('t.contact')}}</a>
								</li>
								<li class="top_li1 mt-2">
									<a href="/salon/demo1/services">{{__('t.services')}}</a>
								</li>
							</ul>
						</div>
						<div class="widget-social-icons mt-sm-5 mt-4">
							<h5 class="widget-title">{{__('t.contact')}}</h5>
							<ul class="icon-rounded address">
								<li>
									<p> Sabha Al Salim, Kuwait</p>
								</li>
								<li class="mt-3">
									<p><a href="tel:+965 67661149">67661149</a></p>
								</li>
								<li class="mt-2">
									<p><a href="mailto:mohan.velegacherla@mail.com">beautyspa@email.com</a></p>
								</li>
								<li class="top_li1 mt-2">
									<p><a href="mailto:mohan.velegacherla@mail.com">Mon - Sun 09:00 - 21:00</a></p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- //modal-content -->
		</div>
		<!-- //modal-dialog -->
	</div>
    @yield('content')
	<!-- footer-66 -->
	<footer class="sahas-footer-66">
		<section class="footer-inner-main">
			<div class="footer-hny-grids py-5">
				<div class="container py-lg-4">
					<div class="text-txt">
						<div class="right-side">
							<div class="row sub-columns">
								<div class="col-lg-4 col-md-6 sub-one-left pr-lg-4">
									<h3 class="hny-title two mb-3">{{__('t.about_us')}}</h3>
									<!-- if logo is image enable this   
										<a class="navbar-brand" href="#index.html">
											<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
										</a> -->
									<p class="pr-lg-5">{{__('t.lorem')}} </p>
									<div class="columns-2">
										<ul class="social">
											<li><a href="#facebook"><span class="fa fa-facebook"
														aria-hidden="true"></span></a>
											</li>
											<li><a href="#linkedin"><span class="fa fa-linkedin"
														aria-hidden="true"></span></a>
											</li>
											<li><a href="#twitter"><span class="fa fa-twitter"
														aria-hidden="true"></span></a>
											</li>
											<li><a href="#google"><span class="fa fa-google-plus"
														aria-hidden="true"></span></a>
											</li>

										</ul>
									</div>
								</div>
								<div class="col-lg-5 col-md-6 sub-one-left mid-footer-gd">
									<div class="sub-two-right">
										<h6>{{__('t.quick_links')}}</h6>
										<ul>
											<li><a href="/salon/demo1/">{{__('t.home')}}</a>
											</li>
											<li><a href="/salon/demo1/about-us">{{__('t.about_us')}}</a>
											</li>
											<li><a href="/salon/demo1/services">{{__('t.services')}}</a></li>
											<li><a href="/salon/demo1/contact-s">{{__('t.contact')}}</a></li>
										</ul>
									</div>
									<div class="sub-two-right">
										<h6>{{__('t.therapies')}}</h6>
										<ul>
											<li><a href="#">{{__('t.massage_therapy')}}</a>
											</li>
											<li><a href="#">{{__('t.hydro_therapy')}}</a>
											</li>
											
											<li><a href="#">{{__('t.aroma_therapy')}}</a>
											</li>
										</ul>
									</div>
									<div class="sub-two-right">
										<h6>{{__('t.categories')}}</h6>
										<ul>
											<li><a href="#">{{__('t.body_treatments')}}</a></li>
											<li><a href="#">{{__('t.pedicure')}}</a></li>
											<li><a href="#support">{{__('t.hair_style')}}</a></li>
											<li><a href="#terms">{{__('t.facials')}}</a></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 sub-one-left">
									<h6>{{__('t.gallery')}}</h6>
									<div class="footer-img-grids">
										<div class="gd-img-ft">
											<a class="" href="#">
												<img class="rounded img-fluid img-responsive" src="/assets/images/ab.jpg"
													alt="image">
											</a>
										</div>
										<div class="gd-img-ft">
											<a class="" href="#">
												<img class="rounded img-fluid img-responsive"
													src="/assets/images/ab1.jpg" alt="image">
											</a>
										</div>
										<div class="gd-img-ft">
											<a class="" href="#">
												<img class="rounded img-fluid img-responsive"
													src="/assets/images/ab2.jpg" alt="image">
											</a>
										</div>
										<div class="gd-img-ft">
											<a class="" href="#">
												<img class="rounded img-fluid img-responsive"
													src="/assets/images/ab3.jpg" alt="image">
											</a>
										</div>
										<div class="gd-img-ft">
											<a class="" href="#">
												<img class="rounded img-fluid img-responsive"
													src="/assets/images/ab4.jpg" alt="image">
											</a>
										</div>
										<div class="gd-img-ft">
											<a class="" href="#">
												<img class="rounded img-fluid img-responsive"
													src="/assets/images/ab5.jpg" alt="image">
											</a>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="below-section">
				<div class="container">
					<div class="copyright-footer">
						<div class="columns text-lg-left">
							<p>All rights reserved | Designed by <a href="tel:+965 67661149">Sahas Systems</a></p>
						</div>
						<ul class="columns text-lg-right">
							<li><a href="#">{{__('t.privacy_policy')}}</a>
							</li>
							<li><a href="/salon/demo1/about-us">{{__('t.about_us')}}</a>
							</li>
							<li><a href="/salon/demo1/contact-us">{{__('t.contact')}}</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- copyright -->
			<!-- move top -->
			<button onclick="topFunction()" id="movetop" title="Go to top">
				<span class="fa fa-arrow-up" aria-hidden="true"></span>
			</button>
			<script>
				// When the user scrolls down 20px from the top of the document, show the button
				window.onscroll = function () {
					scrollFunction()
				};

				function scrollFunction() {
					if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
						document.getElementById("movetop").style.display = "block";
					} else {
						document.getElementById("movetop").style.display = "none";
					}
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
				}
			</script>
			<!-- /move top -->

		</section>
	</footer>
	<!--//footer-66 -->
</body>

</html>
<script src="/assets/js/jquery-3.3.1.min.js"></script>
<!-- stats -->
<script src="/assets/js/jquery.waypoints.min.js"></script>
<script src="/assets/js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<script src="/assets/js/owl.carousel.js"></script>
<!-- script for owlCarousel banner slider-->
<script>
	$(document).ready(function () {
		let lang = $('html').attr('lang');
		$('.owl-one').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
            rtl: lang === 'ar' ? true : false,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
<!-- script for owlcarousel testinomials -->
<script>
	$(document).ready(function () {
		let lang = $('html').attr('lang');
		$('.owl-testimonial').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			rtl: lang === 'ar' ? true : false,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: true
				},
				667: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- script for owlcarousel news -->
<script>
	$(document).ready(function () {
		let lang = $('html').attr('lang');
		$('.owl-news').owlCarousel({
			stagePadding: 50,
			loop: true,
			margin: 40,
			nav: true,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			rtl: lang === 'ar' ? true : false,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: true
				},
				667: {
					items: 2,
					nav: true
				},
				1000: {
					items: 3,
					nav: true
				}
			}
		})
	})
</script>
<!-- disable body scroll which navbar is in active -->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
	$(window).on("scroll", function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 80) {
			$("#site-header").addClass("nav-fixed");
		} else {
			$("#site-header").removeClass("nav-fixed");
		}
	});

	//Main navigation Active Class Add Remove
	$(".navbar-toggler").on("click", function () {
		$("header").toggleClass("active");
	});
	$(document).on("ready", function () {
		if ($(window).width() > 991) {
			$("header").removeClass("active");
		}
		$(window).on("resize", function () {
			if ($(window).width() > 991) {
				$("header").removeClass("active");
			}
		});
	});
</script>
<!--//MENU-JS-->
<script src="/assets/js/bootstrap.min.js"></script>