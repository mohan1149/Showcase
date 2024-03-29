<!DOCTYPE html>
<html>
<title>Sahas Information & Hosting Systems</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href='/assets/css/style.css'>
<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/2d6b835a4d.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
<script src='/assets/js/master.js'></script>
<style>
</style>
<body>
	<header class="header">

	</header>
    <!-- div with full-height image -->
    <div class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo">{{__('t.website_heading')}}</span><br>
            <span class="w3-large">Build something that matters...</span>
            <p>
				<a href="#about-us" class="w3-button w3-white w3-padding-large w3-margin-top">Know us more</a>
			</p>
        </div>
        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
            {{-- <i class="fa fa-facebook-official w3-hover-opacity w3-text-white"></i>
            <i class="fa fa-instagram w3-hover-opacity w3-text-white"></i>
            <i class="fa fa-snapchat w3-hover-opacity w3-text-white"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity w3-text-white"></i>
            <i class="fa fa-twitter w3-hover-opacity w3-text-white"></i> --}}
            <a href="https://www.linkedin.com/in/mohan-velegacherla-820aab1a2/"><i class="fa fa-linkedin w3-hover-opacity w3-text-white"></i></a>
            <a href="https://github.com/mohan1149"><i class="fa fa-github w3-hover-opacity w3-text-white"></i></a>
        </div>
    </div>

    {{-- About-us Section --}}
    <section id="about-us">
        <div class="w3-container" style="padding:100px 16px">
            <div class="w3-row-padding">
                <div class="w3-col m6">
                    <h2 class="">Who we are..?</h2>
                    <h5 class="w3-margin heading headings">Welcome to Sahas Systems. We are a team of young and adventurous developers, focused on building mobile and web applications with cutting edge technologies..
                        We are specialized in developing Custom Software Solutions, Cloud Services, Content Management Systems, Booking Systems, Real Estate Management Systems, POS and E-Commerce applications.
                    </h5>
                    <h5 class="w3-margin heading headings">We provide Web, Email and Domain Hosting services at offardable prices.
                        We build mobile applications for iOS and Android and we are expertised in developing multi language applications to reach all your coustomers.
                        <strong>You name it, we make it.</strong>
                    </h5>
                    <h5 class="w3-margin">We have successfully delivered dozens of web, mobile and e-commerce applications to our elite customers. We have offices in India (Hyderabad) and Kuwait (Al Farwaniyah) from where we serve customers who are in a mission to impact the world.
                    </h5>
                </div>
                <div class="w3-col m6">
                    <img src="/assets/images/about.svg" width="100%" alt="about">
                </div>
            </div>
        </div>
    </section>
    {{-- end --}}
    
	{{-- Why us Section --}}
    <section id="why-us">
        <div class="w3-container w3-light-grey" style="padding:100px 16px">
            <div class="w3-row-padding">
                <div class="w3-col l5">
                    <img src="/assets/images/why_us.svg" width="100%" alt="why-us">
                </div>
                <div class="w3-col l7">
                    <h2 class="">Why Us..?</h2>
                    <div class="w3-row row">
                        <div class="w3-half">
                            <div class="why_us_widget w3-round">
                                <span>
                                    <i class="fab fa-sketch w3-xxxlarge"></i>
                                </span>
                                <p>
                                    "<strong>Design</strong>"
                                    <h6>We design awesome, eye catching and stunning applications.</h6>
                                </p>
                            </div>
                        </div>
                        <div class="w3-half">
                            <div class="why_us_widget w3-round">
                                <span>
                                    <i class="fa fa-heart w3-xxxlarge"></i>
                                </span>
                                <p>
                                    "<strong>Passion</strong>"
                                    <h6>We develop your applications with great passion and care.</h6>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w3-row row">
                        <div class="w3-half">
                            <div class="why_us_widget w3-round">
                                <span>
                                    <i class="fab fa-react w3-xxxlarge"></i>
                                </span>
                                <p>
                                    "<strong>Innovation</strong>"
                                    <h6>We continuously follow up with new technologies and market trends. </h6>
                                </p>
                            </div>
                        </div>
                        <div class="w3-half">
                            <div class="why_us_widget w3-round">
                                <span>
                                    <i class="fas fa-headset w3-xxxlarge"></i>
                                </span>
                                <p>
                                    "<strong>Support</strong>"
                                    <h6>We provide 24x7 dedicated support and help for all your needs.</h6>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end --}}
	
    {{-- Services Section --}}
    <section id="services">
        <div class="w3-container" style="padding:50px 15px;background-color: #f5f8fd">
            <h2 class="w3-center">Our Services</h2>
            <div class="w3-row">
                <div class="w3-quarter">
                    <div class="service_widget">
                        <div class="service_widget_image_container">
                            <img src="{{ asset('/assets/images/services/website.png') }}" alt="websites">
                        </div>
                        <div class="service_widget_text_container">
                            <h5>Web Applications</h5>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="service_widget">
                        <div class="service_widget_image_container">
                            <img src="{{ asset('/assets/images/services/application.png') }}" alt="websites">
                        </div>
                        <div class="service_widget_text_container">
                            <h5>Mobile Aplications</h5>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="service_widget">
                        <div class="service_widget_image_container">
                            <img src="{{ asset('/assets/images/services/shopping-bag.png') }}" alt="websites">
                        </div>
                        <div class="service_widget_text_container">
                            <h5>E-Commerce Applications</h5>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="service_widget">
                        <div class="service_widget_image_container">
                            <img src="{{ asset('/assets/images/services/content-management-system.png') }}" alt="websites">
                        </div>
                        <div class="service_widget_text_container">
                            <h5>Content Management Systems</h5>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="service_widget">
                        <div class="service_widget_image_container">
                            <img src="{{ asset('/assets/images/services/assets.png') }}" alt="websites">
                        </div>
                        <div class="service_widget_text_container">
                            <h5>Property Management Systems</h5>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="service_widget">
                        <div class="service_widget_image_container">
                            <img src="{{ asset('/assets/images/services/cyber-security.png') }}" alt="websites">
                        </div>
                        <div class="service_widget_text_container">
                            <h5>SSL Certificates</h5>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="service_widget">
                        <div class="service_widget_image_container">
                            <img src="{{ asset('/assets/images/services/payment-method.png') }}" alt="websites">
                        </div>
                        <div class="service_widget_text_container">
                            <h5>Payment Gateways Integrations</h5>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="service_widget">
                        <div class="service_widget_image_container">
                            <img src="{{ asset('/assets/images/services/cloud-servers.png') }}" alt="websites">
                        </div>
                        <div class="service_widget_text_container">
                            <h4>Server Maintenance</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- end --}}

    {{-- Our work Section --}}
    {{-- <section id="our-work">
        <div class="w3-container w3-white" style="padding: 70px 15px">
            <div class="w3-row">
                <div class="w3-col l4 w3-hide-small w3-card-4 w3-round ">
                    <svg class="deer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 700 600">
                        <path class="deer_path" id="path5419"
                            d="m 627.55727,563.46269 -34.09265,-47.72968 39.14342,27.7792 z" />
                        <path class="deer_path" id="path4232"
                            d="m 602.30346,512.19745 -8.83884,3.53556 39.14342,27.7792 z" />
                        <path class="deer_path" id="path4236"
                            d="m 602.30346,512.19745 -8.83884,3.53556 -1.26268,-35.35533 z" />
                        <path class="deer_path" id="path4240"
                            d="m 564.92782,487.19618 28.5368,28.53683 -1.26268,-35.35533 z" />
                        <path class="deer_path" id="path4244"
                            d="m 564.92782,487.19618 11.11167,-17.42511 16.16245,10.60661 z" />
                        <path class="deer_path" id="path4248"
                            d="m 564.92782,487.19618 11.11167,-17.42511 -22.72842,-7.3236 z" />
                        <path class="deer_path" id="path4252"
                            d="m 561.13975,454.11368 14.89974,15.65739 -22.72842,-7.3236 z" />
                        <path class="deer_path" id="path4628"
                            d="m 561.13975,454.11368 -6.17169,-8.62832 -1.65699,16.96211 z" />
                        <path class="deer_path" id="path4632"
                            d="m 538.28261,426.25654 16.68545,19.22882 -1.65699,16.96211 z" />
                        <path class="deer_path" id="path4634"
                            d="m 564.92782,487.19618 -70.67404,-28.1394 59.05729,3.39069 z" />
                        <path class="deer_path" id="path4636"
                            d="m 538.49925,425.41047 -44.24547,33.64631 59.05729,3.39069 z" />
                        <path class="deer_path" id="path4644"
                            d="m 538.49925,425.41047 -44.24547,33.64631 15.843,-45.89502 z" />
                        <path class="deer_path" id="path4646"
                            d="m 435.99925,426.83904 58.25453,32.21774 15.843,-45.89502 z" />
                        <path class="deer_path" id="path4648"
                            d="m 435.99925,426.83904 60.75453,-44.56797 13.343,30.89069 z" />
                        <path class="deer_path" id="path4656"
                            d="m 435.99925,426.83904 60.75453,-44.56797 -74.51414,21.60498 z" />
                        <path class="deer_path" id="path4658"
                            d="m 452.42782,338.9819 44.32596,43.28917 -74.51414,21.60498 z" />
                        <path class="deer_path" id="path4660"
                            d="m 452.42782,338.9819 44.32596,43.28917 -10.94271,-34.82359 z" />
                        <path class="deer_path" id="path4662"
                            d="m 511.71353,386.12476 -14.95975,-3.85369 -10.94271,-34.82359 z" />
                        <path class="deer_path" id="path4672"
                            d="m 452.42782,338.9819 -61.38833,0.43203 31.20015,64.46212 z" />
                        <path class="deer_path" id="path4674"
                            d="m 376.71353,406.83904 14.32596,-67.42511 31.20015,64.46212 z" />
                        <path class="deer_path" id="path4676"
                            d="m 376.71353,406.83904 -7.10261,29.00346 52.62872,-31.96645 z" />
                        <path class="deer_path" id="path4678"
                            d="m 435.28496,425.41047 -65.67404,10.43203 52.62872,-31.96645 z" />
                        <path class="deer_path" id="path4688"
                            d="m 376.71353,406.83904 14.32596,-67.42511 -25.22842,-11.25217 z" />
                        <path class="deer_path" id="path4690"
                            d="m 376.71353,406.83904 -52.10261,-4.56797 41.20015,-74.10931 z" />
                        <path class="deer_path" id="path4692"
                            d="m 376.71353,406.83904 -52.10261,-4.56797 44.05729,34.46212 z" />
                        <path class="deer_path" id="path4694"
                            d="m 313.85639,422.55333 10.75453,-20.28226 44.05729,34.46212 z" />
                        <path class="deer_path" id="path4704"
                            d="m 318.1421,328.9819 6.46882,73.28917 41.20015,-74.10931 z" />
                        <path class="deer_path" id="path4706"
                            d="m 318.1421,328.9819 6.46882,73.28917 -48.08556,-20.53788 z" />
                        <path class="deer_path" id="path4708"
                            d="m 313.1421,422.55333 11.46882,-20.28226 -48.08556,-20.53788 z" />
                        <path class="deer_path" id="path4729"
                            d="m 313.1421,422.55333 -48.53118,-12.42512 11.91444,-28.39502 z" />
                        <path class="deer_path" id="path4731"
                            d="m 318.1421,328.9819 -68.53118,-38.85369 26.91444,91.60498 z" />
                        <path class="deer_path" id="path4733"
                            d="m 215.99924,358.26761 33.61168,-68.1394 26.91444,91.60498 z" />
                        <path class="deer_path" id="path4735"
                            d="m 215.99924,358.26761 -2.81689,21.8606 63.34301,1.60498 z" />
                        <path class="deer_path" id="path4743"
                            d="m 264.57067,410.41047 -51.38832,-30.28226 63.34301,1.60498 z" />
                        <path class="deer_path" id="path4747"
                            d="m 264.57067,410.41047 -51.38832,-30.28226 1.20015,17.31927 z" />
                        <path class="deer_path" id="path4749"
                            d="m 264.57067,410.41047 -33.53118,16.8606 -16.65699,-29.82359 z" />
                        <path class="deer_path" id="path4755"
                            d="m 209.57067,408.9819 21.46882,18.28917 -16.65699,-29.82359 z" />
                        <path class="deer_path" id="path4757"
                            d="m 191.71353,396.12476 21.46882,-15.99655 1.20015,17.31927 z" />
                        <path class="deer_path" id="path4776"
                            d="m 191.71353,396.12476 21.46882,-15.99655 -42.37128,5.8907 z" />
                        <path class="deer_path" id="path4778"
                            d="m 191.71353,396.12476 -12.10261,16.14631 -8.79985,-26.25216 z" />
                        <path class="deer_path" id="path4780"
                            d="m 209.57067,408.9819 21.46882,18.28917 -32.37128,3.03355 z" />
                        <path class="deer_path" id="path4799"
                            d="m 191.71353,396.12476 -12.10261,16.14631 12.62872,-1.25216 z" />
                        <path class="deer_path" id="path4801"
                            d="m 215.99924,358.26761 33.61168,-68.1394 -54.51413,26.60498 z" />
                        <path class="deer_path" id="path4818"
                            d="m 197.42781,276.83904 52.18311,13.28917 -54.51413,26.60498 z" />
                        <path class="deer_path" id="path4820"
                            d="m 183.85639,428.9819 -4.24547,-16.71083 12.62872,-1.25216 z" />
                        <path class="deer_path" id="path4822"
                            d="m 183.85639,428.9819 12.89739,1.14631 -4.51414,-19.1093 z" />
                        <path class="deer_path" id="path4824"
                            d="m 209.57068,408.9819 -12.8169,21.14631 -4.51414,-19.1093 z" />
                        <path class="deer_path" id="path4858"
                            d="m 183.85639,428.9819 12.89739,1.14631 4.77157,23.03356 z" />
                        <path class="deer_path" id="path4860"
                            d="m 183.85639,428.9819 -4.24547,-16.71083 -30.22842,17.31927 z" />
                        <path class="deer_path" id="path4862"
                            d="m 183.85639,428.9819 12.1831,38.28917 5.48586,-14.1093 z" />
                        <path class="deer_path" id="path4864"
                            d="m 238.1421,468.26761 -42.10261,-0.99654 5.48586,-14.1093 z" />
                        <path class="deer_path" id="path4866"
                            d="m 238.1421,468.26761 -42.10261,-0.99654 45.48586,16.60499 z" />
                        <path class="deer_path" id="path4878"
                            d="m 183.85639,428.9819 -29.24547,18.64631 -5.22842,-18.03787 z" />
                        <path class="deer_path" id="path4880"
                            d="m 121.35639,448.26761 33.25453,-0.6394 -5.22842,-18.03787 z" />
                        <path class="deer_path" id="path4961"
                            d="m 121.35639,448.26761 33.25453,-0.6394 -27.72842,13.74784 z" />
                        <path class="deer_path" id="path5128"
                            d="m 121.35639,448.26761 5.04024,13.64631 -30.942701,20.53356 z" />
                        <path class="deer_path" id="path5130"
                            d="m 121.35639,448.26761 -41.031188,23.28917 15.128727,10.8907 z" />
                        <path class="deer_path" id="path5136"
                            d="m 197.42781,276.83904 -24.95974,-1.53226 22.62872,41.42641 z" />
                        <path class="deer_path" id="path5138"
                            d="m 197.42781,276.83904 -24.24546,-0.63941 -7.72842,-13.39501 z" />
                        <path class="deer_path" id="path5140"
                            d="m 197.42781,276.83904 52.18311,13.28917 -28.08556,-49.10931 z" />
                        <path class="deer_path" id="path5142"
                            d="m 197.42781,276.83904 -35.49547,-40.81797 59.59302,4.99783 z" />
                        <path class="deer_path" id="path5144"
                            d="m 197.42781,276.83904 -35.31689,-40.81797 3.16444,27.14069 z" />
                        <path class="deer_path" id="path5166"
                            d="m 197.42781,276.83904 -35.31689,-40.81797 3.16444,27.14069 z" />
                        <path class="deer_path" id="path5168"
                            d="m 142.42781,278.9819 30.75454,-2.78227 -7.72842,-13.39501 z" />
                        <path class="deer_path" id="path5170"
                            d="m 142.42781,278.9819 -12.81689,-7.78227 35.84301,-8.39501 z" />
                        <path class="deer_path" id="path5172"
                            d="m 162.42781,235.41047 -32.81689,35.78916 35.84301,-8.39501 z" />
                        <path class="deer_path" id="path5174"
                            d="m 183.1421,213.26761 -21.20976,22.75346 59.59302,4.99783 z" />
                        <path class="deer_path" id="path5176"
                            d="m 183.1421,213.26761 34.50453,2.03917 3.87873,25.71212 z" />
                        <path class="deer_path" id="path5186"
                            d="m 183.1421,213.26761 34.50453,2.03917 -9.6927,-23.57359 z" />
                        <path class="deer_path" id="path5188"
                            d="m 183.1421,213.26761 9.50453,-30.81797 15.3073,9.28355 z" />
                        <path class="deer_path" id="path5190"
                            d="m 183.1421,213.26761 9.50453,-30.81797 -22.54984,15.71212 z" />
                        <path class="deer_path" id="path5200"
                            d="m 174.57067,179.69618 18.07596,2.75346 -22.54984,15.71212 z" />
                        <path class="deer_path" id="path5202"
                            d="m 174.57067,179.69618 -14.0669,2.75346 9.59302,15.71212 z" />
                        <path class="deer_path" id="path5204"
                            d="m 174.57067,179.69618 -14.0669,2.75346 -13.97841,-36.43074 z" />
                        <path class="deer_path" id="path5206"
                            d="m 121.71353,176.83904 38.79024,5.6106 9.59302,15.71212 z" />
                        <path class="deer_path" id="path5208"
                            d="m 121.71353,176.83904 38.79024,5.6106 -32.54984,-14.28788 z" />
                        <path class="deer_path" id="path5258"
                            d="m 121.71353,176.83904 -26.924045,-34.3894 33.164445,25.71212 z" />
                        <path class="deer_path" id="path5260"
                            d="m 238.85639,184.33904 -21.20976,30.96774 -9.6927,-23.57359 z" />
                        <path class="deer_path" id="path5262"
                            d="m 234.57067,166.4819 -41.92404,15.96774 15.3073,9.28355 z" />
                        <path class="deer_path" id="path5270"
                            d="m 234.92782,166.83904 -42.28119,15.6106 11.02159,-40.35931 z" />
                        <path class="deer_path" id="path5272"
                            d="m 234.92782,166.83904 -7.63833,-23.3894 -23.62127,-1.35931 z" />
                        <path class="deer_path" id="path5286"
                            d="m 234.92782,166.83904 -7.63833,-23.3894 12.8073,3.99783 z" />
                        <path class="deer_path" id="path5288"
                            d="m 234.92782,166.83904 -7.63833,-23.3894 -23.62127,-1.35931 z" />
                        <path class="deer_path" id="path5296"
                            d="m 234.92782,166.83904 18.07596,-16.24654 -12.90699,-3.14503 z" />
                        <path class="deer_path" id="path5298"
                            d="m 278.49925,120.41047 -25.49547,30.18203 -12.90699,-3.14503 z" />
                        <path class="deer_path" id="path5306"
                            d="m 234.92782,166.83904 -7.63833,-23.3894 -23.62127,-1.35931 z" />
                        <path class="deer_path" id="path5310"
                            d="m 278.49925,120.41047 -9.42404,-6.60368 -28.97842,33.64068 z" />
                        <path class="deer_path" id="path5316"
                            d="m 278.49925,120.41047 -9.42404,-6.60368 12.80729,-45.645034 z" />
                        <path class="deer_path" id="path5324"
                            d="m 203.14211,141.4819 24.14738,1.96774 -13.26413,-12.0736 z" />
                        <path class="deer_path" id="path5341"
                            d="m 233.14211,133.26761 -5.85262,10.18203 -13.26413,-12.0736 z" />
                        <path class="deer_path" id="path5343"
                            d="m 203.14211,141.4819 -14.42405,-16.60369 25.3073,6.49783 z" />
                        <path class="deer_path" id="path5345"
                            d="m 156.71354,88.267615 32.00452,36.610595 25.3073,6.49783 z" />
                        <path class="deer_path" id="path5357"
                            d="m 233.14211,133.26761 -4.78119,-18.03226 -14.33556,16.14069 z" />
                        <path class="deer_path" id="path5359"
                            d="m 233.14211,133.26761 -4.78119,-18.03226 12.45015,-6.00217 z" />
                        <path class="deer_path" id="path5361"
                            d="m 220.64211,56.481896 7.71881,58.753454 12.45015,-6.00217 z" />
                    </svg>
                </div>
                <div class="w3-col l8">
                    <h2 class="w3-center">Our Work</h2>
                    <div class="w3-margin w3-padding w3-white work-sliders">
                        <div class="w3-row">
                            <div class="owl-carousel w3-card">
                                <div class="w3-card-4 w3-padding w3-blue"> Your Content </div>
                                <div> Your Content </div>
                                <div> Your Content </div>
                                <div> Your Content </div>
                                <div> Your Content </div>
                                <div> Your Content </div>
                                <div> Your Content </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- end --}}

    {{-- Tech Stack Section --}}
    <section id="tech-stack">
        <div class="w3-container w3-light-grey" style="padding: 70px 15px">
            <div class="w3-row">
                <h2>Our Technologies</h2>
                <div class="w3-col l7">
                    <div class="w3-row w3-padding w3-margin tech-stack-container">
                        <div class="w3-col l3 s6">
                            <span><i class="fab fa-react w3-text-blue"></i></span>
                            <span><h4>React</h4></span>
                        </div>
                        <div class="w3-col l3 s6">
                            <span><i class="fab fa-html5 w3-text-orange"></i></span>
                            <span><h4>HTML 5</h4></span>
                        </div>
                        <div class="w3-col l3 s6">
                            <span><i class="fab fa-css3-alt w3-text-blue"></i></span>
                            <span><h4>CSS 3</h4></span>
                        </div>
                        <div class="w3-col l3 s6">
                            <span><i class="fab fa-angular w3-text-red"></i></span>
                            <span><h4>Angular</h4></span>
                        </div>
                        <div class="w3-col l3 s6">
                            <span><i class="fab fa-js w3-text-yellow"></i></span>
                            <span><h4>JavaScript</h4></span>
                        </div>
                        <div class="w3-col l3 s6">
                            <span><i class="fab fa-laravel w3-text-red"></i></span>
                            <span><h4>Laravel</h4></span>
                        </div>
                        <div class="w3-col l3 s6">
                            <span><i class="fab fa-php w3-text-green"></i></span>
                            <span><h4>PHP</h4></span>
                        </div>
                        <div class="w3-col l3 s6">
                            <span><i class="fab fa-drupal w3-text-blue"></i></span>
                            <span><h4>Drupal</h4></span>
                        </div>
                        <div class="w3-col l3 s6">
                            <span><i class="fab fa-magento w3-text-red"></i></span>
                            <span><h4>Magento</h4></span>
                        </div>
                        <div class="w3-col l3 s6">
                            <span><i class="fab fa-node-js w3-text-green"></i></span>
                            <span><h4>Node.JS</h4></span>
                        </div>
                        <div class="w3-col l3 s6">
                            <span><i class="fab fa-java w3-text-light-blue"></i></span>
                            <span><h4>JAVA</h4></span>
                        </div>
                        <div class="w3-col l3 s6">
                            <span><i class="fab fa-aws w3-text-deep-orange"></i></span>
                            <span><h4>AWS</h4></span>
                        </div>
                        <div class="w3-col l3 s6">
                            <span><i class="fas fa-database w3-text-blue"></i></span>
                            <span><h4>MySQL</h4></span>
                        </div>
                        <div class="w3-col l3 s6">
                            <span><i class="fab fa-google w3-text-red"></i></i></span>
                            <span><h4>SEO</h4></span>
                        </div>
                        <div class="w3-col l3 s6">
                            <span><i class="fab fa-android w3-text-green"></i></span>
                            <span><h4>Android</h4></span>
                        </div>
                        <div class="w3-col l3 s6">
                            <span><i class="fab fa-app-store-ios w3-text-grey"></i></span>
                            <span><h4>iOS</h4></span>
                        </div>
                    </div>
                </div>
                <div class="w3-col l5 w3-hide-small">
                    <div class="anim">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1100 800">
                            <g fill="none" fill-rule="evenodd">
                                <path class="lines" stroke="#31B495"
                                    d="M781.02 488.77v69.78c0 1.08-.88 1.96-1.97 1.96l-135.12-.04c-1.09 0-2.6.62-3.38 1.39l-39.23 38.96a5.52 5.52 0 0 1-3.37 1.4h-75.38a1.97 1.97 0 0 1-1.97-1.97v-33.5" />
                                <path class="lines" stroke="#F4D21F"
                                    d="M674.88 355.57l45.54-45.24a5.42 5.42 0 0 0 1.39-3.35l-.06-10.38c0-1.08-.63-2.58-1.4-3.35l-43.38-43.07a1.94 1.94 0 0 1 0-2.77l82.83-82.25a5.52 5.52 0 0 1 3.37-1.4l44.94.1c1.08 0 2.6-.62 3.37-1.37L952.5 22.65" />
                                <path class="lines" stroke="#1AACA8"
                                    d="M507-76.68v265.47a4 4 0 0 0 4 3.99H566c1.08 0 1.97.88 1.97 1.96v147.5c0 1.08-.63 2.59-1.4 3.35l-47.9 47.4a5.45 5.45 0 0 0-1.4 3.34c0 2.25.64 3.76 1.4 4.53l53.82 53.26c.77.76 1.76 1.39 2.19 1.39.43 0 .79.88.79 1.96v70.17c0 1.07-.89 1.96-1.97 1.96l-85.81-.04c-1.09 0-2.6.62-3.38 1.39l-1.55 1.54a5.52 5.52 0 0 1-3.38 1.4h-9.29" />
                                <path class="lines" stroke="#1F8C43"
                                    d="M8 127.82v391.06a4.04 4.04 0 0 0 4 4.04L140.8 524" />
                                <path class="lines" stroke="#1AA5D0"
                                    d="M894.01 374l49.8-49.44a5.52 5.52 0 0 1 3.37-1.4h92.41c1.09 0 2.6.63 3.38 1.4l27.18 26.99" />
                                <path class="lines" stroke="#1AA5D0"
                                    d="M894.01 374l49.8-49.44a5.52 5.52 0 0 1 3.37-1.4h92.41c1.09 0 2.6.63 3.38 1.4l27.18 26.99" />
                                <path class="lines" stroke="#1F8C43"
                                    d="M755.16 213.9l70.82.04c1.08 0 2.6-.63 3.37-1.4l91.61-90.97a5.52 5.52 0 0 1 3.37-1.39h77.07l-71.29-72.13a5.45 5.45 0 0 1-1.4-3.35V16.87" />
                                <path class="lines" stroke="#9DCA40"
                                    d="M261.78-52.44l11.16 11.08c.77.77 1.4 2.28 1.4 3.35V-5L156.7 111.03l-85.4 84.8a5.45 5.45 0 0 0-1.4 3.35v100.67c0 1.08.89 1.96 1.97 1.96h50.4c1.09 0 1.98.88 1.98 1.96l.07 26.92c0 1.07.9 1.96 1.98 1.96l335.73.13c1.09 0 1.98.88 1.98 1.96v36.79l-42.99 43.78a5.52 5.52 0 0 1-3.37 1.4H385.2" />
                                <path class="lines" stroke="#DA5A98"
                                    d="M564.8 549.64v17.76c0 1.08-.64 2.59-1.4 3.35L382.28 750.6a5.52 5.52 0 0 1-3.38 1.39h-109.1c-1.09 0-1.97.88-1.97 1.96v23.37c0 1.07-.9 1.96-1.98 1.96h-83.54c-1.08 0-1.97.88-1.97 1.96v45.8c0 1.07.89 1.95 1.97 1.95h29.89c1.08 0 1.97.88 1.97 1.96v51.07c0 1.08.63 2.59 1.4 3.35l10.32 10.25c.77.76 2.29 1.39 3.37 1.39h111.77c1.09 0 1.34.62.57 1.39M482.82 656H630.9" />
                                <path class="lines" stroke="#E5683E"
                                    d="M440.53 245.87l-31.7 31.48a5.52 5.52 0 0 1-3.37 1.39h-62.37c-1.09 0-2.6.62-3.38 1.39l-2.68 3.66-264.59.02c-1.08 0-2.6-.63-3.37-1.4l-47.3-46.97a5.52 5.52 0 0 0-3.37-1.39h-57.47l-1.12-34.61c0-1.08-.63-2.59-1.4-3.35l-66.54-65.94" />
                                <path class="lines" stroke="#9F83B6"
                                    d="M705.31 221.73h7.83c1.09 0 2.6.63 3.37 1.4l45.8 45.6c.78.76 1.4 2.27 1.4 3.35v13.94c0 1.08.46 1.96 1.03 1.98.56 0 1.03.9 1.03 1.98v10.77l-.15 110.84c0 1.08-.89 1.96-1.98 1.96H628.32c-1.08 0-2.6-.63-3.37-1.4l-12.2-12.12a5.52 5.52 0 0 0-3.38-1.39h-46.18a2 2 0 0 0-2 1.96l-.17 26.74c0 1.08-.63 2.59-1.4 3.35l-8.82 8.76a5.52 5.52 0 0 1-3.37 1.39l-26.65-.06c-1.09 0-2.6.62-3.38 1.39l-48.1 47.78a5.52 5.52 0 0 1-3.38 1.39h-16.37l-79.45-.02c-1.09 0-2.6.63-3.36 1.39L220.71 639.06a5.47 5.47 0 0 1-3.35 1.4H31.06" />
                                <path class="lines" stroke="#BC6D21"
                                    d="M145.43 99.41L289.6 243.5c.77.76 2.29 1.39 3.37 1.39h146.76c1.09 0 2.6.62 3.38 1.39l31.93 31.71c.77.77 1.4 2.27 1.4 3.35V474.1c0 1.08-.63 2.59-1.4 3.35l-7.6 7.54a5.52 5.52 0 0 1-3.36 1.4h-20.62l-20.67 20.97-2.78 2.78L289.37 640a5.45 5.45 0 0 0-1.4 3.35l.16 177.85" />
                                <path class="lines" stroke="#DA1817"
                                    d="M318.82 380.62h94.88c1.09 0 2.6.63 3.38 1.39l14.97 14.87c.77.76 2.29 1.39 3.37 1.39h72.99c1.08 0 2.6.63 3.35 1.39l58.57 58.53c.77.77 2.27 1.4 3.35 1.4h103.37c1.08 0 1.97-.89 1.97-1.97v-14.7c0-1.09-.89-1.97-1.97-1.97l-6.7.02H630.1a1.97 1.97 0 0 1-1.97-1.96v-57c0-1.08-.63-2.59-1.4-3.35l-14.58-14.48a5.45 5.45 0 0 1-1.4-3.35v-17.3c0-1.07-.63-2.58-1.4-3.34L597 327.92a5.52 5.52 0 0 0-3.37-1.39h-17.4c-1.09 0-2.6-.62-3.38-1.39l-41.8-41.5a5.52 5.52 0 0 0-3.37-1.4h-41.34" />
                                <path class="lines" stroke="#9F9FA0" />
                                <path class="lines" stroke="#74BB63"
                                    d="M855.2 194.4h59.84c1.09 0 1.97.89 1.97 1.96v28.74c0 1.08.64 2.59 1.4 3.35l50.96 50.6c.77.76 1.4 2.27 1.4 3.35v101.47l105.2 104.27" />
                                <path class="lines" stroke="#DA5A98"
                                    d="M638.46 305.73L651 293.29c.77-.74.77-2 0-2.76l-31.35-31.13c-.76-.74-.76-2 0-2.76l18.53-18.4a5.52 5.52 0 0 1 3.37-1.39l160.41-.2 423.37 1.2c1.08 0 1.97.89 1.97 1.96v71.5" />
                                <path class="lines" stroke="#BC6D21"
                                    d="M438.61 486.03h-18.54c-1.08 0-2.6-.63-3.37-1.4l-74.94-74.41a5.52 5.52 0 0 0-3.37-1.4h-38.57c-1.08 0-2.6-.62-3.37-1.38l-47-46.68-36.58-.04-57 71.59a5.45 5.45 0 0 0-1.4 3.35v23.9" />
                                <path class="lines" stroke="#74BB63"
                                    d="M882.06 358.97l-46.92 46.6a5.52 5.52 0 0 1-3.38 1.39h-94.64c-1.09 0-2.6-.63-3.38-1.4l-30.6-30.33a5.52 5.52 0 0 0-3.36-1.4l-34.94.04c-1.08 0-2.6.63-3.37 1.4l-29.57 29.36a5.52 5.52 0 0 1-3.37 1.39l-14.55-14.35a5.63 5.63 0 0 0-3.42-1.4l-156.97-.25c-1.11 0-2.65.63-3.43 1.4l-27.85 27.61a5.52 5.52 0 0 1-3.38 1.4H-23.82l-88.65.2-12.44 12.35" />
                                <path class="lines" stroke="#2283BC"
                                    d="M292.9 643.74l59.56-59.12a5.52 5.52 0 0 1 3.37-1.39h23.93c1.08 0 2.6-.63 3.37-1.39l46.53-46.21a5.52 5.52 0 0 1 3.38-1.4h33.53l153.67-.01c1.08 0 1.97-.88 1.97-1.96V420.01c0-1.07-.63-2.58-1.4-3.35l-38.64-38.37a5.45 5.45 0 0 1-1.4-3.35v-51.52c0-1.08-.64-2.59-1.4-3.35L468.91 210.39a5.52 5.52 0 0 0-3.38-1.4l-180.49.2" />
                                <path class="lines" stroke="#DA5A98"
                                    d="M484.13 548.71h-37.09c-1.08 0-2.6.63-3.37 1.4l-69.02 68.54c-.77.76-.77 2 0 2.76l28.09 27.78c.77.76 2.29 1.39 3.37 1.39h62.41" />
                                <path class="lines" stroke="#31B495"
                                    d="M520.82 561.7v-4.74c0-1.08-.89-1.96-1.98-1.96h-13.21c-1.09 0-2.6-.62-3.37-1.39l-43.36-42.88a5.45 5.45 0 0 1-1.4-3.35v-190.4c0-1.08.63-2.6 1.4-3.36l20.89-20.74a5.45 5.45 0 0 0 1.4-3.35v-95.4c0-1.08-.63-2.58-1.4-3.35L292.4 4.7l-.6-40.88c0-1.08-.62-2.58-1.4-3.35L278.8-51.07" />
                                <path class="lines" stroke="#1EB2D8"
                                    d="M275.76 745h99.28c1.09 0 2.6-.63 3.38-1.4l174.33-172.75a5.52 5.52 0 0 1 3.38-1.4h46.75c1.08 0 2.6-.62 3.35-1.38l51.47-51.46a5.42 5.42 0 0 0 1.38-3.35V311.29c0-1.07-.63-2.58-1.4-3.35l-51.84-51.3a5.52 5.52 0 0 0-3.38-1.4h-17.95a1.97 1.97 0 0 1-1.97-1.95v-44.47c0-1.07-.89-1.96-1.97-1.96h-88.63a1.97 1.97 0 0 1-1.97-1.96v-19.2c0-1.07-.64-2.58-1.4-3.34L309.87 4.92" />
                                <path class="lines" stroke="#F4D21F"
                                    d="M1002.65 123.83H926.5c-1.08 0-2.6.62-3.37 1.39l-92.28 91.46a5.52 5.52 0 0 1-3.37 1.39l-131.87-.08c-1.09 0-2.6.63-3.37 1.37l-51.9 51.19c-.77.76-.77 2 0 2.76l21.22 21.1c.77.76 1.4 2.27 1.4 3.35v15.69" />
                                <path class="lines" stroke="#BE2F39"
                                    d="M672.51 437.64h54.25c1.08 0 2.6.63 3.37 1.4l49.04 48.7c.77.76 2.29 1.38 3.37 1.38h45.16c1.08 0 2.6-.62 3.37-1.39L914.39 405a5.52 5.52 0 0 1 3.37-1.4h42.22c1.08 0 2.6.63 3.37 1.4l100.8 100.1" />
                                <path class="lines" stroke="#E5683E"
                                    d="M672.51 434.31h55.63c1.08 0 2.6.63 3.37 1.4l49.14 48.8c.77.76 2.29 1.38 3.37 1.38l41.9-.04c1.08 0 2.6-.62 3.37-1.39l62.08-61.68a5.45 5.45 0 0 0 1.4-3.35l-.1-268.18c0-1.08-.63-2.59-1.4-3.35l-99.8-99.28a5.52 5.52 0 0 0-3.37-1.39H422.62c-1.08 0-2.6.63-3.37 1.4L260.28 206.3a5.52 5.52 0 0 1-3.38 1.39H127.3c-1.08 0-2.6.62-3.37 1.39l-36.71 36.45a5.45 5.45 0 0 0-1.4 3.35v185.1" />
                                <path class="lines" stroke="#1EB2D8"
                                    d="M410.1 713.73l17.53 17.42c.77.76 2.29 1.39 3.37 1.39h42.02c1.09 0 2.6-.63 3.37-1.4l26.02-25.83 123.2-.31" />
                                <path class="lines" />
                                <path class="lines" stroke="#2283BC"
                                    d="M307.34 907.08c.77-.77.52-1.4-.57-1.4H108.29a1.97 1.97 0 0 1-1.98-1.95V743.59c0-1.08.9-1.96 1.98-1.96h264.38c1.09 0 2.6-.63 3.38-1.4l23.75-23.58c.77-.76.77-2 0-2.76l-80.84-80.1c-.77-.76-.51-1.4.57-1.4h137.53c1.09 0 2.6-.62 3.38-1.38l53.63-53.26a5.52 5.52 0 0 1 3.37-1.4l88.57-.2c1.09 0 2.6-.62 3.38-1.38l55.6-55.22a5.45 5.45 0 0 0 1.4-3.35V409.93c0-1.08.9-1.96 1.98-1.96h29c1.08 0 2.6-.63 3.37-1.4l43.32-43.01a5.52 5.52 0 0 1 3.37-1.4h6.11c1.09 0 2.6-.62 3.38-1.38l53.12-52.76a5.52 5.52 0 0 1 3.37-1.39h13.6c1.08 0 2.6.63 3.37 1.4L892.79 370c.77.77 2.29 1.4 3.37 1.4h74.06c1.08 0 2.6.62 3.37 1.38l93.97 93.5" />
                                <path class="lines" stroke="#E6632A"
                                    d="M647.56 429.46v-33.62c0-1.08-.63-2.59-1.4-3.35l-31.45-31.22a5.52 5.52 0 0 0-3.37-1.4h-36.87c-1.08 0-2.6.63-3.37 1.4l-74.35 73.83a5.52 5.52 0 0 1-3.37 1.39H440.9a1.97 1.97 0 0 1-1.98-1.96v-71.5c0-1.08-.88-1.96-1.97-1.96H9.3c-1.08 0-2.6.63-3.37 1.4l-37.9 37.62a5.52 5.52 0 0 1-3.37 1.4h-57c-1.1 0-2.61.62-3.38 1.38l-13.2 13.1a5.52 5.52 0 0 1-3.37 1.4h-13.2" />
                                <path class="lines" stroke="#F4D21F"
                                    d="M219.9 357h144.49l76.54.13c1.08 0 1.97.88 1.97 1.96v71.7c0 1.08.89 1.96 1.97 1.96h46.36c1.08 0 2.6-.63 3.37-1.4l74.35-74a5.52 5.52 0 0 1 3.37-1.4h192.33c1.09 0 2.6-.62 3.37-1.38l43.58-43.28a5.52 5.52 0 0 1 3.37-1.39h10.6c1.08 0 2.6.63 3.37 1.4l62.65 62.2c.77.77 2.29 1.4 3.37 1.4h73.87c1.09 0 2.6.63 3.38 1.4l94.12 93.47 9.27.57c.84 0 2.17-.62 2.93-1.39l104.08-89.36a1.97 1.97 0 0 1 2.78 0l6.3 6.25" />
                                <path class="lines" stroke="#9DCA40"
                                    d="M599.92 564.19a6.6 6.6 0 0 0 4.04-1.67l47.94-47.6a6.5 6.5 0 0 0 1.67-4.01V313.84c0-1.3-.75-3.1-1.67-4.02l-47.94-47.6a6.6 6.6 0 0 0-4.04-1.66h-97.84a6.6 6.6 0 0 0-4.05 1.66l-47.93 47.6a6.5 6.5 0 0 0-1.68 4.02v197.07c0 1.29.75 3.1 1.68 4.01l47.93 47.6a6.6 6.6 0 0 0 4.05 1.67h97.84z" />
                                <path class="lines" stroke="#1EB2D8"
                                    d="M648.25 527.17v33.3c0 1.08-.63 2.58-1.4 3.35l-87.37 86.76c-.77.76-.51 1.39.57 1.39h70.82" />
                                <path class="lines" stroke="#BC6D21"
                                    d="M476.04 273.32v-18.86c0-1.08-.63-2.59-1.4-3.35l-30.9-30.68a5.52 5.52 0 0 0-3.37-1.4H274.62" />
                                <path class="lines" stroke="#9F83B6"
                                    d="M923.43 372.6V119.09c0-1.07-.64-2.58-1.4-3.34L757.4-47.74a5.52 5.52 0 0 0-3.37-1.39H351.57c-1.09 0-2.6.63-3.38 1.4L310.5-10.3" />
                                <path class="lines" stroke="#ED8E3F"
                                    d="M317-49.77L304.42-37.3a5.58 5.58 0 0 0-1.42 3.35l-.36 21.45a5.3 5.3 0 0 0 1.36 3.35L493.36 178.9c.77.76 1.4 2.27 1.4 3.35v18.41c0 1.08.89 1.96 1.97 1.96h87.86c1.09 0 1.98.88 1.98 1.96v34.67c0 1.08.88 1.96 1.97 1.96h23.3c1.08 0 2.6.63 3.37 1.4l46.16 45.83c.77.77 1.4 2.28 1.4 3.35v138.64l.07 84.4c0 1.08-.63 2.6-1.38 3.35l-53.63 53.27a5.52 5.52 0 0 1-3.37 1.39H557.9c-1.08 0-2.6.63-3.37 1.39L380.57 746.98a5.52 5.52 0 0 1-3.38 1.39H112.47c-1.09 0-1.97.88-1.97 1.96v93.24c0 1.08-.9 1.96-1.98 1.96h-224.54" />
                                <path class="lines" stroke="#DA5A98"
                                    d="M415.07 612.97l63.3-62.86a5.52 5.52 0 0 1 3.37-1.4h124.67c1.08 0 2.6-.6 3.37-1.37l28.23-27.83a5.35 5.35 0 0 0 1.4-3.33V478.2c0-1.07.89-1.96 1.97-1.96H694c1.09 0 1.97-.88 1.97-1.95v-52.11c0-1.08.64-2.59 1.4-3.35l29.57-29.37a5.45 5.45 0 0 0 1.4-3.35v-76c0-1.08.9-1.96 1.98-1.96h37.9a4 4 0 0 0 4-4v-29.3c0-1.08.63-2.59 1.4-3.35l35.35-35" />
                                <path class="lines" stroke="#1AA5D0"
                                    d="M893.1 374.7L847.5 420a5.52 5.52 0 0 1-3.37 1.38H618.66c-1.09 0-2.6-.62-3.37-1.39l-81.65-81.08a5.52 5.52 0 0 0-3.37-1.39H384.49c-1.08 0-2.6.63-3.37 1.4l-17.14 17.02" />
                                <path class="lines" stroke="#55B549"
                                    d="M288.52 640.2h-46.9c-1.09 0-1.98.88-1.98 1.95v26.65c0 1.07-.89 1.95-1.97 1.95h-89.32" />
                                <path class="lines" stroke="#D3C452"
                                    d="M281.34 229.6l9.65 9.59c.77.76 2.29 1.39 3.37 1.39l146.76-.2c1.09 0 2.6.63 3.38 1.37l115.95 114c.77.76.77 1.99 0 2.75l-37.2 37.05a1.96 1.96 0 0 0 0 2.78l49.62 49.28c.77.77 2.3 1.4 3.38 1.4h138.28c1.08 0 2.6.62 3.37 1.39l37.26 37c.77.76 2.3 1.4 3.38 1.4h21.7" />
                                <path class="lines" stroke="#9DCA40"
                                    d="M-116.02 841.87h216.77c1.09 0 1.97-.89 1.97-1.96v-99.83c0-1.08.9-1.96 1.98-1.96h266.24c1.08 0 2.6-.62 3.37-1.39l20.18-20.04c.77-.76.77-2.02 0-2.76l-78.7-78.2a5.45 5.45 0 0 1-1.4-3.35v-1.57c0-1.07.88-1.96 1.97-1.96l139.22.02c1.09 0 2.6-.62 3.38-1.39l53.7-53.48a4.86 4.86 0 0 1 2.8-1.39c.76 0 1.41-.88 1.41-1.96v-6.62" />
                                <path class="lines" stroke="#B00D7C"
                                    d="M317.92 257.82l73.16 72.65c.77.77 1.4 2.27 1.4 3.35v45.25c0 1.08.63 2.59 1.4 3.35l12.02 11.93c.77.77 2.28 1.4 3.37 1.4h9.86c1.09 0 2.6-.63 3.38-1.4l6.29-6.25a5.52 5.52 0 0 1 3.37-1.39h85.81c1.08 0 2.6-.62 3.37-1.39l63.1-62.66a5.52 5.52 0 0 1 3.38-1.4h161.56c1.08 0 1.97.89 1.97 1.96v178.66c0 1.07-.63 2.58-1.4 3.35l-11.42 11.34a5.52 5.52 0 0 1-3.38 1.39H529.03a1.97 1.97 0 0 1-1.98-1.96v-73.07c0-1.07-.88-1.96-1.97-1.96h-88.26a1.97 1.97 0 0 1-1.97-1.95V406.5c0-1.08-.89-1.96-1.97-1.96-1.99 0-3.5-.63-4.28-1.4l-7.44-7.38" />
                                <path class="lines" stroke="#DA5A98"
                                    d="M650.42-78.35v211.36c0 1.08.63 2.59 1.4 3.35l46.73 46.4c.77.77 1.4 2.28 1.4 3.36v35.79l-2.49-.14c-.75 0-1.97.63-2.74 1.4l-18.32 18.19a5.45 5.45 0 0 0-1.4 3.35v116.95c0 1.07.63 2.58 1.38 3.35l46.53 46.58a5.42 5.42 0 0 1 1.38 3.35l-.02 30.34c0 1.08-.63 2.59-1.4 3.35l-4.91 4.88a5.52 5.52 0 0 1-3.37 1.4H599.52c-1.08 0-1.97.87-1.97 1.95v36c0 1.08-.89 1.96-1.97 1.96h-92.71c-1.09 0-2.6.63-3.38 1.4l-19.58 19.45a5.52 5.52 0 0 1-3.38 1.39h-63.61" />
                                <path class="lines" stroke="#1EB2D8"
                                    d="M281.48 745v84.33c0 1.08-.89 1.96-1.97 1.96h-57.48c-1.09 0-1.98.88-1.98 1.96v10.36c0 1.08-.88 1.96-1.97 1.96H110.52" />
                                <path class="lines" stroke="#F5C739"
                                    d="M10.95 362.32l113.4 112.62c.78.77 2.3 1.4 3.38 1.4h36.12c1.08 0 2.6.62 3.37 1.38l205.45 204.03c.77.76 2.29 1.39 3.37 1.39l62.74.03h29.53c1.09 0 2.6.63 3.37 1.4l16.36 16.23c.77.77 2.29 1.4 3.37 1.4h134.34" />
                                <path class="lines" stroke="#31B495"
                                    d="M275.82 590.44l24.44-24.27a5.52 5.52 0 0 1 3.37-1.4h121.52c1.08 0 2.6.63 3.37 1.4l34.32 34.08c.77.77 2.3 1.4 3.38 1.4h54.36" />
                                <path class="lines" stroke="#AD7D20"
                                    d="M633.41 278.74l-21.36-21.22a5.45 5.45 0 0 1-1.4-3.35V-78.58" />
                                <path class="lines" stroke="#1F8C43"
                                    d="M754.4 192.02v20.11c0 1.08-.9 1.96-1.98 1.96h-94.49c-1.08 0-2.6.63-3.37 1.4l-50.28 49.93a5.45 5.45 0 0 0-1.4 3.35v56.41c0 1.08.63 2.59 1.4 3.35l10.63 10.56c.77.76 1.4 2.27 1.4 3.35v121.45c0 1.08-.89 1.96-1.97 1.96H429.6c-1.08 0-2.6-.62-3.37-1.39l-21.2-21.06-15.77 14.8a5.52 5.52 0 0 1-3.37 1.38H282.15c-1.08 0-2.6.63-3.37 1.37l-62.1 61.3a5.5 5.5 0 0 1-3.37 1.37h-69.85c-1.09 0-2.6.63-3.37 1.4l-68.22 67.73a5.52 5.52 0 0 1-3.37 1.4H34.1c-1.09 0-2.6.62-3.38 1.38l-61.64 61.22a5.45 5.45 0 0 0-1.4 3.35v98.02c0 1.08-.89 1.96-1.97 1.96h-30.76c-1.08 0-2.6.63-3.37 1.4l-48.29 47.95" />
                                <path class="lines" stroke="#74BB63"
                                    d="M184.55 422.03v34.09c0 1.07-.63 2.58-1.4 3.35l-56.48 55.88a5.52 5.52 0 0 1-3.37 1.4H-34.6" />
                                <path class="lines" stroke="#E5683E"
                                    d="M980.12 416.59l-15.05-14.95a5.52 5.52 0 0 0-3.38-1.4h-46.04c-1.08 0-2.6.63-3.37 1.4l-14.5 14.4c-.77.76-1.4.5-1.4-.57v-34.93c0-1.08-.63-2.58-1.4-3.35l-2.48-2.47" />
                                <path class="lines" stroke="#DA5A98"
                                    d="M826.77 238.25v54.43c0 1.08.63 2.59 1.4 3.35l86.38 85.78c.77.77 2.29 1.4 3.37 1.4h98.61c1.09 0 2.6-.63 3.36-1.4l22.6-22.8a5.47 5.47 0 0 1 3.36-1.39h106.38c1.08 0 1.97-.88 1.97-1.96l.04-95.24c0-1.08.89-1.96 1.97-1.96h39.02c1.09 0 1.97.88 1.97 1.96v48.1" />
                                <path class="lines" stroke="#E6632A"
                                    d="M12.87 361.05h-5c-1.1 0-2.61-.63-3.38-1.4l-17.72-17.58a5.52 5.52 0 0 0-3.37-1.4h-16.9c-1.09 0-2.6-.62-3.38-1.38l-55.64-55.26a5.52 5.52 0 0 0-3.38-1.4h-15.19" />
                                <path class="lines" stroke="#3EB373"
                                    d="M959.23 126.08l19.2 19.06c.76.76 2.28 1.39 3.36 1.39h177.42c1.09 0 1.97.88 1.97 1.96v100.84a3 3 0 0 0 3 3h36.42c1.08 0 1.97.88 1.97 1.96v54.65" />
                                <path class="lines" stroke="#2765B0"
                                    d="M33.17 798.75h242.12c1.08 0 1.97-.88 1.97-1.96V672.9c0-1.08-.89-1.96-1.97-1.96h-30.12a1.97 1.97 0 0 1-1.98-1.96v-26.76c0-1.07-.88-1.96-1.97-1.96h-20.87" />
                                <path class="lines" stroke="#EB9D12"
                                    d="M458.48 496.1h9.55c1.09 0 2.6-.63 3.37-1.4l48.23-47.83a5.52 5.52 0 0 1 3.38-1.39h24.26c1.08 0 2.6.63 3.37 1.39l23.26 23.1c.77.76 2.29 1.39 3.37 1.39h111.06c1.09 0 1.97-.88 1.97-1.96v-54.46c0-1.08-.63-2.59-1.4-3.33l-20.35-20.04-2.8-2.76-1.17-1.16a5.52 5.52 0 0 0-3.37-1.39h-11.66a1.97 1.97 0 0 1-1.97-1.96V310.6c0-1.08.88-1.96 1.97-1.96h77.38" />
                                <path class="lines" stroke="#9DCA40"
                                    d="M-34.94 402.19v111.19c0 1.07.63 2.58 1.4 3.35l49.06 48.71c.76.77 2.28 1.4 3.37 1.4h21.8c1.08 0 2.6.62 3.37 1.39l113 112.22c.78.77 2.3 1.4 3.38 1.4h170.6c1.08 0 1.97.87 1.97 1.95v60.41" />
                            </g>
                        </svg>
                    </div>
                    <h4>
                        We believe in Technology and Innovation.
                        We build all kinds of Mobile and Web Applications using the technologies we are fully expertise in.
                    </h4>
                </div>
            </div>
        </div>
    </section>
    {{-- end --}}

    {{-- Pricing Section --}}
    <section id="pricing">
        <div class="w3-container w3-white" style="padding: 70px 15px">

            <div class="w3-center">
                <h2 >Our Hostings</h2>
                <label class="switch">
                    <input type="checkbox" class="price-toggler">
                    <span class="slider round"></span>
                </label>
            </div>

            <div class="w3-row">
                <div class="w3-col l3">
                    <div class="w3-card w3-margin" style="padding: 30px 10px;">
                        <div class="w3-green w3-padding w3-center w3-round">
                            <h3>Basic</h3>
                            <h4>KWD <span class="bprice">4</span> / <span class="bplan">Month</span></h4>
                        </div>
                        <ul class="w3-ul">
                            <li>
                                <ul class="w3-ul server-info">
                                    <li>
                                        {{-- <span><i class="w3-xlarge fas fa-memory"></i>Ram</span> --}}
                                        <span>Ram</span>
                                        <span>1 GB</span>
                                    </li>
                                    <li>
                                        {{-- <span><i class="w3-xlarge fas fa-microchip"></i>Processor</span> --}}
                                        <span>Processor</span>
                                        <span>1 Core</span>
                                    </li>
                                    <li>
                                        {{-- <span><i class="w3-xlarge fas fa-hdd"></i>Storage</span> --}}
                                        <span>Storage</span>
                                        <span>25 GB</span>
                                    </li>
                                    <li>
                                        {{-- <span><i class="w3-xlarge fas fa-satellite-dish"></i>Bandwidth</span> --}}
                                        <span>Bandwidth</span>
                                        <span>1 TB</span>
                                    </li>
                                </ul>
                            </li>
                            <hr>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Free Domain
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Linux Server Hosting
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Free SSL Certificate
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Free Backups
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                24x7 Support
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Unlimited Applications
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Unlimited Sub Domains
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Dedicated Firewalls
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w3-col l3">
                    <div class="w3-card w3-margin" style="padding: 30px 10px;">
                        <div class="w3-blue w3-padding w3-center w3-round">
                            <h3>Popular</h3>
                            <h4>KWD <span class="pprice">7</span> / <span class="pplan">Month</span></h4>
                        </div>
                        <ul class="w3-ul">
                            <li>
                                <ul class="w3-ul server-info">
                                    <li>
                                        {{-- <span><i class="w3-xlarge fas fa-memory"></i>Ram</span> --}}
                                        <span>Ram</span>
                                        <span>2 GB</span>
                                    </li>
                                    <li>
                                        {{-- <span><i class="w3-xlarge fas fa-microchip"></i>Processor</span> --}}
                                        <span>Processor</span>
                                        <span>1 Core</span>
                                    </li>
                                    <li>
                                        {{-- <span><i class="w3-xlarge fas fa-hdd"></i>Storage</span> --}}
                                        <span>Storage</span>
                                        <span>50 GB</span>
                                    </li>
                                    <li>
                                        {{-- <span><i class="w3-xlarge fas fa-satellite-dish"></i>Bandwidth</span> --}}
                                        <span>Bandwidth</span>
                                        <span>2 TB</span>
                                    </li>
                                </ul>
                            </li>
                            <hr>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Free Domain
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Linux Server Hosting
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Free SSL Certificate
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Free Backups
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                24x7 Support
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Unlimited Applications
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Unlimited Sub Domains
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Dedicated Firewalls
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w3-col l3">
                    <div class="w3-card w3-margin" style="padding: 30px 10px;">
                        <div class="w3-pink w3-padding w3-center w3-round">
                            <h3>Advanced</h3>
                            <h4>KWD <span class="aprice">13</span> / <span class="aplan">Month</span></h4>
                        </div>
                        <ul class="w3-ul">
                            <li>
                                <ul class="w3-ul server-info">
                                    <li>
                                        {{-- <span><i class="w3-xlarge fas fa-memory"></i>Ram</span> --}}
                                        <span>Ram</span>
                                        <span>4 GB</span>
                                    </li>
                                    <li>
                                        {{-- <span><i class="w3-xlarge fas fa-microchip"></i>Processor</span> --}}
                                        <span>Processor</span>
                                        <span>2 Core</span>
                                    </li>
                                    <li>
                                        {{-- <span><i class="w3-xlarge fas fa-hdd"></i>Storage</span> --}}
                                        <span>Storage</span>
                                        <span>80 GB</span>
                                    </li>
                                    <li>
                                        {{-- <span><i class="w3-xlarge fas fa-satellite-dish"></i>Bandwidth</span> --}}
                                        <span>Bandwidth</span>
                                        <span>4 TB</span>
                                    </li>
                                </ul>
                            </li>
                            <hr>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Free Domain
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Linux Server Hosting
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Free SSL Certificate
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Free Backups
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                24x7 Support
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Unlimited Applications
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Unlimited Sub Domains
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Dedicated Firewalls
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w3-col l3">
                    <div class="w3-card w3-margin" style="padding: 30px 10px;">
                        <div class="w3-red w3-padding w3-center w3-round">
                            <h3>Premium</h3>
                            <h4>KWD <span class="prprice">25</span> / <span class="prplan">Month</span></h4>
                        </div>
                        <ul class="w3-ul">
                            <li>
                                <ul class="w3-ul server-info">
                                    <li>
                                        {{-- <span><i class="w3-xlarge fas fa-memory"></i>Ram</span> --}}
                                        <span>Ram</span>
                                        <span>8 GB</span>
                                    </li>
                                    <li>
                                        {{-- <span><i class="w3-xlarge fas fa-microchip"></i>Processor</span> --}}
                                        <span>Processor</span>
                                        <span>4 Core</span>
                                    </li>
                                    <li>
                                        {{-- <span><i class="w3-xlarge fas fa-hdd"></i>Storage</span> --}}
                                        <span>Storage</span>
                                        <span>160 GB</span>
                                    </li>
                                    <li>
                                        {{-- <span><i class="w3-xlarge fas fa-satellite-dish"></i>Bandwidth</span> --}}
                                        <span>Bandwidth</span>
                                        <span>5 TB</span>
                                    </li>
                                </ul>
                            </li>
                            <hr>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Free Domain
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Linux Server Hosting
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Free SSL Certificate
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Free Backups
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                24x7 Support
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Unlimited Applications
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Unlimited Sub Domains
                            </li>
                            <li>
                                <i class="fw far fa-check-circle w3-text-green w3-xlarge"></i>
                                Dedicated Firewalls
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end --}}

	{{-- Contact Us Section --}}
	<div id="contact-us" class="w3-container" style="padding:120px 16px">
        <div class="w3-row-padding">
			<div class="w3-col m6">
				<img src="/assets/images/contact.svg" width="100%" alt="about">
            </div>
            <div class="w3-col m6">
				<div class="contact-info">
					<h2 class="w3-center">Contact Us</h2>
					<p class="w3-center w3-large">Lets get in touch</p>
					<div class="w3-margin">
						<div class="row">
                            <h4>Kuwait</h4>
							<div class="one">
								<p><i class="fa fa-map-marker fa-fw w3-large w3-margin-right"></i> Kuwait, Al Farwaniyah</p>
								<p><i class="fa fa-phone fa-fw w3-large w3-margin-right"></i> Phone: <a href="tel:+965 6766 1149">+965 6766 1149</a></p>
								<p><i class="fa fa-envelope fa-fw w3-large w3-margin-right"> </i> Email: <a href="mailto:mohan.velegacherla@gmail.com">mohan.velegacherla@gmail.com</a></p>
							</div>
                            <h4>India</h4>
							<div class="two">
								<p><i class="fa fa-map-marker fa-fw w3-large w3-margin-right"></i> India, Hydrabad</p>
								<p><i class="fa fa-phone fa-fw w3-large w3-margin-right"></i> Phone: <a href="tel:+91 70135 30977">+91 70135 30977</a></p>
								<p><i class="fa fa-envelope fa-fw w3-large w3-margin-right"> </i> Email: <a href="mailto:giriprasadnallu@gmail.com">giriprasadnallu@gmail.com</a></p>
							</div>
						</div>						
					</div>
					{{-- <div>
						<form action="/action_page.php" target="_blank">
							<p><input class="w3-input w3-border" type="text" placeholder="Name" required="" name="Name"></p>
							<p><input class="w3-input w3-border" type="email" placeholder="Email" required="" name="Email"></p>
							<p><input class="w3-input w3-border" type="text" placeholder="Subject" required="" name="Subject"></p>
							<p><input class="w3-input w3-border" type="text" placeholder="Message" required="" name="Message"></p>
							<p>
							  <button class="w3-button w3-black" type="submit">
								<i class="fa fa-paper-plane"></i> SEND MESSAGE
							  </button>
							</p>
						  </form>
					</div> --}}
				</div>
            </div>
        </div>
    </div>
    {{-- end --}}
    
    
    <!-- Team Section -->
    <!-- Footer -->
	<footer class="w3-container w3-black">
        <div class="w3-row">
            <div class="w3-col l3">
                <h4>Quick Links</h4>
                <ul class="w3-ul">
                    <li>About Us</li>
                    <li>Contact Us</li>
                    <li>Products</li>
                    <li>Technologies</li>
                    <li>Portfolio</li>
                </ul>
            </div>
            <div class="w3-col l3">
                <h4>Our Services</h4>
                <ul class="w3-ul">
                    <li>Web Hosting</li>
                    <li>Domain Services</li>
                    <li>SSL Certificates</li>
                    <li>Server Maintenance</li>
                    <li>Payment Gateway Integrations</li>
                </ul>
            </div>
            <div class="w3-col l3">
                <h4>Development</h4>
                <ul class="w3-ul">
                    <li>Mobile Apllications[ iOS & Android ]</li>
                    <li>Web Applications</li>
                    <li>E-Commerce Applications</li>
                    <li>Content Management Systems</li>
                    <li>Asset Manage Systems</li>
                </ul>
            </div>
            <div class="w3-col l3">
                <h4>Know us more..</h4>
                <ul class="w3-ul">
                    <li>Team</li>
                    <li>Clients</li>
                    <li>Pricing</li>
                    <li>Privacy Policy</li>
                    <li>Terms & Conditions</li>
                </ul>
            </div>

        </div>
		<div class="w3-center w3-padding w3-margin">
			<h5>Sahas Information Systems || All Rights Reserved || {{date('Y')}}</h5>
		</div>
	</footer>
    <script>
        // $(function () {
    	// 	$(window).on('scroll', function () {
        // 		if ( $(window).scrollTop() > 10 ) {
        //     		$('.navbar').addClass('active');
        // 		} else {
        //     		$('.navbar').removeClass('active');
        // 		}
    	// 	});
		// });
    </script>
    <script src='/assets/js/deer-animation.js'></script>
    <script src='/assets/js/line-animation.js'></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
</body>
</html>
