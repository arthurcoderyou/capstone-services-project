

<div>
    <section class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">
                    <img src="{{ asset("assets/img/slide/slide_img.jpg") }}" alt="fullslide1" data-bgposition="center center"
                        data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                        data-bgfitend="100" data-bgpositionend="right center">
                </li>
                <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">
                    <img src="{{ asset("assets/img/slide/slide_img_2.jpg") }}" alt="fullslide1" data-bgposition="top center"
                        data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                        data-bgfitend="100" data-bgpositionend="right center">
                </li>
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
        <div class="filter-title">
            <div class="title-header">
                <h2 style="color:#fff;">BOOK A SERVICE</h2>
                <p class="lead">Book a service at very affordable price, </p>
            </div>
            <div class="filter-header">
                <form id="sform" action="searchservices" method="post">
                    <input type="text" id="q" name="q" required="required" placeholder="What Services do you want?"
                        class="input-large typeahead" autocomplete="off">
                    <input type="submit" name="submit" value="Search">
                </form>
            </div>
        </div>
    </section>
    <section class="content-central">
        <div class="content_info content_resalt">
            <div class="container" style="margin-top: 40px;">
                <div class="row">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul id="sponsors" class="tooltip-hover">
                            @foreach ($scategories as $scategory)
                                <li data-toggle="tooltip" title="" data-original-title="{{ $scategory->name }} ">
                                    <a href="{{ route('home.services_by_category',['category_slug' => $scategory->slug]) }}">
                                        <img src="{{ asset("images/categories/".$scategory->image) }}"
                                        alt="{{ $scategory->name }}">
                                    </a>
                                </li>
                            @endforeach


                                {{--
                            <li data-toggle="tooltip" title="" data-original-title="Clean Oil Filter Screen / Change Oil Filter"> <a
                                    href="servicesbycategory/2.html"><img src="{{ asset("images/sercat/f_clean_oil_filter_screen.jpg") }}"
                                        alt="Clean Oil Filter Screen / Change Oil Filter"></a></li>
                            <li data-toggle="tooltip" title="" data-original-title="Clean Carburetor"> <a
                                    href="servicesbycategory/3.html"><img src="{{ asset("images/sercat/f_clean_carboretor.jpg") }}"
                                        alt="Clean Carburetor"></a></li>
                            <li data-toggle="tooltip" title="" data-original-title="Inspect/Clean Air Filter"> <a
                                    href="servicesbycategory/4.html"><img src="{{ asset("images/sercat/f_inspect_or_clean_air_filter.jpg") }}"
                                        alt="Inspect/Clean Air Filter"></a></li>
                            <li data-toggle="tooltip" title="" data-original-title="Clean Fuel Filter"> <a
                                    href="servicesbycategory/5.html"><img src="{{ asset("images/sercat/f_clean_fuel_filter.jpg") }}"
                                        alt="Clean Fuel Filter"></a></li>
                            <li data-toggle="tooltip" title="" data-original-title="Clean Spark Plug"> <a
                                    href="servicesbycategory/6.html"><img src="{{ asset("images/sercat/f_clean_spark_plug.jpeg") }}"
                                        alt="Clean Spark Plug"></a></li>
                            <li data-toggle="tooltip" title="" data-original-title="Fuel Pressure Test & Inspection"> <a
                                    href="servicesbycategory/7.html"><img src="{{ asset("images/sercat/f_fuel_pressure_test.jpg") }}"
                                        alt="Fuel Pressure Test & Inspection"></a></li>
                            <li data-toggle="tooltip" title="" data-original-title="DTC Reading / Erasing / Initializing / TP Reset"> <a
                                    href="servicesbycategory/7.html"><img src="{{ asset("images/sercat/f_tp_reset.jpg") }}"
                                        alt="DTC Reading / Erasing / Initializing / TP Reset"></a></li>
                            <li data-toggle="tooltip" title="" data-original-title="TDP and Major Overhaul Replacement"> <a
                                    href="servicesbycategory/7.html"><img src="{{ asset("images/sercat/f_tdp_and_major_overhaul.jpg") }}"
                                        alt="TDP and Major Overhaul Replacement"></a></li>
                            <li data-toggle="tooltip" title="" data-original-title="Battery Recharging"> <a
                                    href="servicesbycategory/7.html"><img src="{{ asset("images/sercat/f_battery_recharging.jpg") }}"
                                        alt="Battery Recharging"></a></li>
                            <li data-toggle="tooltip" title="" data-original-title="Bulb Replacement"> <a
                                    href="servicesbycategory/7.html"><img src="{{ asset("images/sercat/f_bulb_replacement.jpg") }}"
                                        alt="Bulb Replacement"></a></li>
                            <li data-toggle="tooltip" title="" data-original-title="Cables (Clutch, Throttle, Brake / Choke)"> <a
                                    href="servicesbycategory/7.html"><img src="{{ asset("images/sercat/f_cables.jpg") }}"
                                        alt="Cables (Clutch, Throttle, Brake / Choke)"></a></li>

                             --}}

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="semiboxshadow text-center">
            <img src="{{ asset("assets/img/img-theme/shp.png") }}" class="img-responsive" alt="">
        </div>
        <div class="content_info">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="titles">
                            <h2>VH.Maintenance <span>Choice</span> of Services</h2>
                            <i class="fa fa-plane"></i>
                            <hr class="tall">
                        </div>
                    </div>

                    <div class="portfolioContainer" style="margin-top: -50px;">
                        @foreach ($fservices as $service)
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="{{ route('home.service_details',['service_slug' => $service->slug]) }}">
                                    <div class="img-hover">
                                        <img src="{{ asset("images/services/thumbnails/".$service->thumbnail) }}" alt="{{ $service->name }}"
                                            class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>{{ $service->name }}</h3>
                                        <hr class="separator">
                                        <p>{{ $service->tagline }} Service</p>
                                        <div class="content-btn"><a href="{{ route('home.service_details',['service_slug' => $service->slug]) }}"
                                                class="btn btn-primary">Book Now</a></div>
                                        <div class="price"><span>&#8369;</span><b>From</b>{{ $service->price }}</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                        {{--
                        <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                            style="padding-right: 5px;padding-left: 5px;">
                            <a class="g-list" href="service-details/ac-installation.html">
                                <div class="img-hover">
                                    <img src="{{ asset("images/services/thumbnails/m_f_clean_oil_filter_screen.jpg") }}" alt="Clean Oil Filter Screen / Change Oil Filter"
                                        class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>Clean / Change Oil Filter Screen</h3>
                                    <hr class="separator">
                                    <p>Clean / Change Oil Filter Screen Service</p>
                                    <div class="content-btn"><a href="service-details/ac-installation.html"
                                            class="btn btn-primary">Book Now</a></div>
                                    <div class="price"><span>&#8369;</span><b>From</b>320</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                            style="padding-right: 5px;padding-left: 5px;">
                            <a class="g-list" href="service-details/ac-gas-top-up.html">
                                <div class="img-hover">
                                    <img src="{{ asset("images/services/thumbnails/m_f_clean_carboretor.jpg") }}" alt="Clean Carburetor"
                                        class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>Clean Carburetor</h3>
                                    <hr class="separator">
                                    <p>Clean Carburetor Service</p>
                                    <div class="content-btn"><a href="service-details/ac-gas-top-up.html"
                                            class="btn btn-primary">Book Now</a></div>
                                    <div class="price"><span>&#8369;</span><b>From</b>320</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                            style="padding-right: 5px;padding-left: 5px;">
                            <a class="g-list" href="service-details/ac-gas-refill.html">
                                <div class="img-hover">
                                    <img src="{{ asset("images/services/thumbnails/m_f_inspect_or_clean_air_filter.jpg") }}" alt="AC Gas Refill"
                                        class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>AC Gas Refill</h3>
                                    <hr class="separator">
                                    <p>AC Gas Refill</p>
                                    <div class="content-btn"><a href="service-details/ac-gas-refill.html"
                                            class="btn btn-primary">Book Now</a></div>
                                    <div class="price"><span>&#8369;</span><b>From</b>510</div>
                                </div>
                            </a>
                        </div>
                        --}}

                    </div>
                </div>
            </div>
        </div>
        <div class="content_info">
            <div class="bg-dark color-white border-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="services-lines-info">
                                <h2>WELCOME TO VH.MAINTENANCE</h2>
                                <p class="lead">
                                    Book best services at one place.
                                    <span class="line"></span>
                                </p>

                                <p>Find a wide variety of car services.</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ul class="services-lines">


                                @foreach ( $fscategories as $fscategory)
                                    <li>
                                        <a href="{{ route('home.services_by_category',['category_slug' => $fscategory->slug]) }}">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{ asset("images/categories/".$fscategory->image) }}"></i>
                                                <h5 class="text-wrap overflow-hidden ellipsis">{{ $fscategory->name }}</h5>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach

                                {{--
                                <li>
                                    <a href="servicesbycategory/3.html">
                                        <div class="item-service-line">
                                            <i class="fa"><img class="icon-img"
                                                    src="{{ asset("images/sercat/f_clean_spark_plug.jpeg") }}"></i>
                                            <h5 class="text-wrap overflow-hidden">Clean Spark Plug</h5>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="servicesbycategory/4.html">
                                        <div class="item-service-line">
                                            <i class="fa"><img class="icon-img"
                                                    src="{{ asset("images/sercat/f_fuel_pressure_test.jpg") }}"></i>
                                            <h5 class="ellipsis">Fuel Pressure Test & Inspection</h5>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="servicesbycategory/6.html">
                                        <div class="item-service-line">
                                            <i class="fa"><img class="icon-img"
                                                    src="{{ asset("images/sercat/f_tp_reset.jpg") }}"></i>
                                            <h5 class="ellipsis" >DTC Reading / Erasing / Initializing / TP Reset</h5>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="servicesbycategory/8.html">
                                        <div class="item-service-line">
                                            <i class="fa"><img class="icon-img"
                                                    src="{{ asset("images/sercat/f_tdp_and_major_overhaul.jpg") }}"></i>
                                            <h5 class="ellipsis">TDP and Major Overhaul Replacement</h5>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="servicesbycategory/11.html">
                                        <div class="item-service-line">
                                            <i class="fa"><img class="icon-img"
                                                    src="{{ asset("images/sercat/f_battery_recharging.jpg") }}"></i>
                                            <h5 class="ellipsis">Battery Recharging</h5>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="servicesbycategory/12.html">
                                        <div class="item-service-line">
                                            <i class="fa"><img class="icon-img"
                                                    src="{{ asset("images/sercat/f_bulb_replacement.jpg") }}"></i>
                                            <h5 class="ellipsis">Bulb Replacement</h5>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="servicesbycategory/13.html">
                                        <div class="item-service-line">
                                            <i class="fa"><img class="icon-img"
                                                    src="{{ asset("images/sercat/f_cables.jpg") }}"></i>
                                            <h5 class="ellipsis">Cables (Clutch, Throttle, Brake / Choke)</h5>
                                        </div>
                                    </a>
                                </li>
                                 --}}


                                <!-- images/sercat/service-icon.png -->

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="titles">
                        <h2>Vehicle <span>Parts</span> Services</h2>
                        <i class="fa fa-plane"></i>
                        <hr class="tall">
                    </div>
                </div>
            </div>
            <div id="boxes-carousel">

                @foreach ($aservices as $aservice )


                    <div>
                        <a class="g-list" href="{{ route('home.service_details',['service_slug' => $aservice->slug]) }}">
                            <div class="img-hover">
                                <img src="{{ asset("images/services/thumbnails/".$aservice->thumbnail) }}" alt="{{ $aservice->name }}" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>{{ $aservice->name }}</h3>
                                <hr class="separator">
                                <p>{{ $aservice->tagline }}</p>
                                <div class="content-btn"><a href="{{ route('home.service_details',['service_slug' => $aservice->slug]) }}"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#8369;</span><b>From</b>{{ $aservice->price }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach

                {{--
                <div>
                    <a class="g-list" href="service-details/ac-wet-servicing.html">
                        <div class="img-hover">
                            <img src="{{ asset("images/services/thumbnails/p_bore_up_cylinder_kit.jpg") }}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Bore Up Cylinder Kit </h3>
                            <hr class="separator">
                            <p>Motor Parts</p>
                            <div class="content-btn"><a href="service-details/ac-wet-servicing.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>&#8369;</span><b>From</b>200</div>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="g-list" href="service-details/ac-wet-servicing.html">
                        <div class="img-hover">
                            <img src="{{ asset("images/services/thumbnails/p_combination_wrench_set.jpg") }}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Combination Wrench Wet</h3>
                            <hr class="separator">
                            <p>Motor Parts</p>
                            <div class="content-btn"><a href="service-details/ac-wet-servicing.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>&#8369;</span><b>From</b>200</div>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="g-list" href="service-details/ac-wet-servicing.html">
                        <div class="img-hover">
                            <img src="{{ asset("images/services/thumbnails/p_motorcycle_cvt_parts_for_honda_click_125.jpg") }}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Motorcycle Cvt Parts for Honda Click 125</h3>
                            <hr class="separator">
                            <p>Motor Parts</p>
                            <div class="content-btn"><a href="service-details/ac-wet-servicing.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>&#8369;</span><b>From</b>200</div>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="g-list" href="service-details/ac-wet-servicing.html">
                        <div class="img-hover">
                            <img src="{{ asset("images/services/thumbnails/p_universal_spline_gearbox.jpg") }}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Universal Spline Gearbox</h3>
                            <hr class="separator">
                            <p>Motor Parts</p>
                            <div class="content-btn"><a href="service-details/ac-wet-servicing.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>&#8369;</span><b>From</b>200</div>
                        </div>
                    </a>
                </div>



                <div>
                    <a class="g-list" href="service-details/ac-wet-servicing.html">
                        <div class="img-hover">
                            <img src="{{ asset("images/services/thumbnails/p_yamaha_aerox_155_accessories.png") }}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Yamaha Aerox 155 Accessories</h3>
                            <hr class="separator">
                            <p>Motor Parts</p>
                            <div class="content-btn"><a href="service-details/ac-wet-servicing.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>&#8369;</span><b>From</b>200</div>
                        </div>
                    </a>
                </div>

                --}}

            </div>
        </div>
    </section>
</div>

