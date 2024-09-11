<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>VH. Maintenance</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset("assets/img/VMAIN_favicon.png") }}">
    <link href="{{ asset("assets/css/style.css") }}" rel="stylesheet" media="screen">
    <link href="{{ asset("assets/css/chblue.css") }}" rel="stylesheet" media="screen">
    <link href="{{ asset("assets/css/theme-responsive.css") }}" rel="stylesheet" media="screen">
    <link href="{{ asset("assets/css/dtb/jquery.dataTables.min.css") }}" rel="stylesheet" media="screen">
    <link href="{{ asset("assets/css/select2.min.css") }}" rel="stylesheet" media="screen">
    <link href="{{ asset("assets/css/toastr.min.css") }}" rel="stylesheet" media="screen">
    <script type="text/javascript" src="{{ asset("assets/js/jquery.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/jquery-ui.1.10.4.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/toastr.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/modernizr.js") }}"></script>


    <style>
        .ellipsis {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            margin-left:5px;
            margin-right: 5px;
        }

        .image_01_parallax{
            background: url( {{ asset('assets/img/slide/slide_img.jpg') }} );
        }
        .image_02_parallax{
            background: url( {{ asset('assets/img/slide/slide_img_2.jpg') }}  );
        }
        .image_03_parallax{
            background: url( {{ asset('assets/img/slide/slide_img.jpg') }}  );
        }
        .image_04_parallax{
            background: url( {{ asset('assets/img/slide/slide_img_2.jpg') }}  );
        }
        .image_05_parallax{
            background: url( {{ asset('assets/img/slide/slide_img.jpg') }} );
        }
        .image_06_parallax{
            background: url( {{ asset('assets/img/slide/slide_img_2.jpg') }} );
        }
        .image_07_parallax{
            background: url( {{ asset('assets/img/slide/slide_img.jpg') }} );
        }
    </style>

    @livewireStyles

</head>
<body>
    <div id="layout">
        <div class="info-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-left">
                            <li><a href="tel:+911234567890"><i class="fa fa-phone"></i> +91-1234567890</a></li>
                            <li><a href="mailto:contact@surfsidemedia.in"><i class="fa fa-envelope"></i>
                                    contact@vehicle_maintenance.in</a></li>
                        </ul>
                        <ul class="visible-xs visible-sm">
                            <li class="text-left"><a href="tel:+911234567890"><i class="fa fa-phone"></i>
                                    +91-1234567890</a></li>
                            <li class="text-right"><a href="index.php/changelocation.html"><i
                                        class="fa fa-map-marker"></i> PSU Alaminos Campus</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-right">
                            <li><i class="fa fa-comment"></i> FB Chat</li>
                            <li>
                                <a href="index.php/changelocation.html"><i class="fa fa-map-marker"></i>
                                    PSU Alaminos Campus
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header id="header" class="header-v3">
            <nav class="flat-mega-menu">
                <label for="mobile-button"> <i class="fa fa-bars"></i></label>
                <input id="mobile-button" type="checkbox">

                <ul class="collapse">
                    <li class="title">
                        <a href="/"><img src="{{ asset("images/VMAIN.png") }}"></a>
                    </li>


                    <li>
                        <a href="{{ route('home.service_categories') }}">Service Categories</a>
                    </li>

                    {{-- <li> <a href="javascript:void(0);">Tune Up</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="service-details/ac-wet-servicing.html">Change Oil</a></li>
                            <li><a href="service-details/ac-dry-servicing.html">Clean Oil Filter Screen</a></li>
                            <li><a href="service-details/ac-installation.html">Clean Carburetor</a></li>
                            <li><a href="service-details/ac-uninstallation.html">Inspect / Clean Air Filter</a></li>
                            <li><a href="service-details/ac-gas-top-up.html">Clean Fuel Filter</a></li>
                            <li><a href="service-details/ac-gas-refill.html">Clean Spark Plug</a></li>
                        </ul>
                    </li>

                    <li> <a href="javascript:void(0);">PGM-FI DIAGNOSIS</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="service-details/ac-wet-servicing.html">Fuel Pressure Test </a></li>
                            <li><a href="service-details/ac-dry-servicing.html">DTC Reading / Erasing / Initializing / TP Reset</a></li>
                            <li><a href="service-details/ac-installation.html">TOP & Major Overhaul Replacement</a></li>
                            <li><a href="service-details/ac-uninstallation.html">Battery Recharging</a></li>
                            <li><a href="service-details/ac-gas-top-up.html">Bulb Replacement</a></li>
                            <li><a href="service-details/ac-gas-refill.html">Cables (Clutch, Throttle, Brake/Choke)</a></li>
                        </ul>
                    </li> --}}

                    {{--
                    <li> <a href="#">Appliances</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="servicesbycategory/11.html">Computer Repair</a></li>
                            <li><a href="servicesbycategory/12.html">TV</a></li>
                            <li><a href="servicesbycategory/1.html">AC</a></li>
                            <li><a href="servicesbycategory/14.html">Geyser</a></li>
                            <li><a href="servicesbycategory/21.html">Washing Machine</a></li>
                            <li><a href="servicesbycategory/22.html">Microwave Oven</a></li>
                            <li><a href="servicesbycategory/9.html">Chimney and Hob</a></li>
                            <li><a href="servicesbycategory/10.html">Water Purifier</a></li>
                            <li><a href="servicesbycategory/13.html">Refrigerator</a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Home Needs</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="servicesbycategory/19.html">Laundry</a></li>
                            <li><a href="servicesbycategory/4.html">Electrical</a></li>
                            <li><a href="servicesbycategory/8.html">Pest Control</a></li>
                            <li><a href="servicesbycategory/7.html">Carpentry</a></li>
                            <li><a href="servicesbycategory/3.html">Plumbing </a></li>
                            <li><a href="servicesbycategory/20.html">Painting</a></li>
                            <li><a href="servicesbycategory/17.html">Movers &amp; Packers</a></li>
                            <li><a href="servicesbycategory/5.html">Shower Filters </a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Home Cleaning</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="service-details/bedroom-deep-cleaning.html">Bedroom Deep Cleaning</a></li>
                            <li><a href="service-details/overhead-water-storage.html">Overhead Water Storage </a></li>
                            <li><a href="/service-details/tank-cleaning">Tank Cleaning</a></li>
                            <li><a href="service-details/underground-sump-cleaning.html">Underground Sump Cleaning</a>
                            </li>
                            <li><a href="service-details/dining-chair-shampooing.html">Dining Chair Shampooing </a></li>
                            <li><a href="service-details/office-chair-shampooing.html">Office Chair Shampooing</a></li>
                            <li><a href="service-details/home-deep-cleaning.html">Home Deep Cleaning </a></li>
                            <li><a href="service-details/carpet-shampooing.html">Carpet Shampooing </a></li>
                            <li><a href="service-details/fabric-sofa-shampooing.html">Fabric Sofa Shampooing</a></li>
                            <li><a href="service-details/bathroom-deep-cleaning.html">Bathroom Deep Cleaning</a></li>
                            <li><a href="service-details/floor-scrubbing-polishing.html">Floor Scrubbing &amp; Polishing
                                </a></li>
                            <li><a href="service-details/mattress-shampooing.html">Mattress Shampooing </a></li>
                            <li><a href="service-details/kitchen-deep-cleaning.html">Kitchen Deep Cleaning </a></li>
                        </ul>
                    </li>


                    <li> <a href="#">Special Services</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="servicesbycategory/16.html">Document Services</a></li>
                            <li><a href="servicesbycategory/15.html">Cars &amp; Bikes</a></li>
                            <li><a href="servicesbycategory/17.html">Movers &amp; Packers </a></li>
                            <li><a href="servicesbycategory/18.html">Home Automation</a></li>
                        </ul>
                    </li>

                    --}}

                    @if(Route::has('login'))
                        @auth
                            @if(Auth::user()->utype == "ADM")
                                <li class="login-form">
                                    <a href="#" title="My Account (Admin)">My Account (Admin)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                        <li><a href="{{ route('admin.service_categories') }}">Service Categories</a></li>
                                        <li><a href="{{ route('admin.all_services') }}">All Services</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            @elseif(Auth::user()->utype == "SVP")
                                <li class="login-form">
                                    <a href="#" title="My Account (Service Provider)">My Account (Service Provider)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{ route('service_provider.dashboard') }}">Dashboard</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li class="login-form">
                                    <a href="#" title="My Account (Customer)">My Account (Customer)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{ route('customer.dashboard') }}">Dashboard</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            @endif


                        @else
                            <li class="login-form"> <a href="{{ route('register') }}" title="Register">Register</a></li>
                            <li class="login-form"> <a href="{{ route('login') }}" title="Login">Login</a></li>
                        @endif



                    @endif

                    <li class="search-bar">
                    </li>
                </ul>
            </nav>
        </header>

        {{ $slot }}

        <footer id="footer" class="footer-v1">
            <div class="container">
                <div class="row visible-md visible-lg">
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>TUNE UP </h3>
                        <ul>

                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/12.html">Change Oil</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/14.html">Clean Oil Filter Screen</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/13.html">Clean Carburetor</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/21.html">Inspect / Clean Air Filter</a>
                            </li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/22.html">Clean Fuel Filter</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/10.html">Clean Spark Plug</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>PGM-FI DIAGNOSIS </h3>


                        <ul>
                            <li><i class="fa fa-check"></i> <a
                                    href="service-details/ac-installation.html">Fuel Pressure Test </a></li>
                            <li><i class="fa fa-check"></i> <a
                                    href="service-details/ac-uninstallation.html">DTC Reading / Erasing / Initializing / TP Reset</a></li>
                            <li><i class="fa fa-check"></i> <a href="service-details/ac-repair.html">TOP & Major Overhaul Replacement</a></li>
                            <li><i class="fa fa-check"></i> <a href="service-details/ac-gas-refill.html">Battery Recharging</a>
                            </li>
                            <li><i class="fa fa-check"></i> <a href="service-details/ac-wet-servicing.html">Bulb Replacement</a></li>
                            <li><i class="fa fa-check"></i> <a href="service-details/ac-dry-servicing.html">Cables (Clutch, Throttle, Brake/Choke)</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>Vehicle Parts Available </h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/19.html">Aerox Fairings </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/4.html">Bore Up Cylinder Kit </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/8.html">Combination Wrench Wet </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/7.html">Motorcycle Cvt Parts for Honda Click 125 </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/3.html">Universal Spline Gearbox </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/20.html">Yamaha Aerox 155 Accessories </a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>CONTACT US</h3>
                        <ul class="contact_footer">
                            <li class="location">
                                <i class="fa fa-map-marker"></i> <a href="#"> PSU Alaminos Campus</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <a
                                    href="mailto:contact@vehicle_maintenance.in">contact@vehicle_maintenance.in</a>
                            </li>
                            <li>
                                <i class="fa fa-headphones"></i> <a href="tel:+911234567890">+91-1234567890</a>
                            </li>
                        </ul>
                        <h3 style="margin-top: 10px">FOLLOW US</h3>
                        <ul class="social">
                            <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                            <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                            <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row visible-sm visible-xs">
                    <div class="col-md-6">
                        <h3 class="mlist-h">CONTACT US</h3>
                        <ul class="contact_footer mlist">
                            <li class="location">
                                <i class="fa fa-map-marker"></i> <a href="#"> PSU Alaminos Campus</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <a
                                    href="mailto:contact@vehicle_maintenance.in">contact@vehicle_maintenance.in</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i> <a href="tel:+911234567890">+91-1234567890</a>
                            </li>
                        </ul>
                        <ul class="social mlist-h">
                            <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                            <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                            <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-down">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="nav-footer">
                                <li><a href="about-us.html">About Us</a> </li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="terms-of-use.html">Terms of Use</a></li>
                                <li><a href="privacy.html">Privacy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p class="text-xs-center crtext">&copy; 2024 VH.Maintenance. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <form id="logout-form" action="{{ route('logout') }}" method="post" style="width:0px; height:0px; opacity:0;">
            @csrf
        </form>
    </div>
    <script type="text/javascript" src="{{ asset("assets/js/nav/jquery.sticky.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/totop/jquery.ui.totop.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/accordion/accordion.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/rs-plugin/js/jquery.themepunch.tools.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/maps/gmap3.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/fancybox/jquery.fancybox.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/carousel/carousel.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/filters/jquery.isotope.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/twitter/jquery.tweet.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/flickr/jflickrfeed.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/theme-options/theme-options.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/theme-options/jquery.cookies.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/bootstrap/bootstrap.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/bootstrap/bootstrap-slider.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/dtb/jquery.dataTables.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/dtb/jquery.table2excel.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/dtb/script.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/select2.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/jquery.validate.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/validation-rule.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/bootstrap3-typeahead.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/main.js") }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 5000,
                startwidth: 1170,
                startheight: 480,
                minHeight: 250,
                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "preview1"
            });
        });
    </script>

    @livewireScripts
</body>
</html>
