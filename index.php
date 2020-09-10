<?php
if (session_status() === PHP_SESSION_NONE){session_start();}
require_once ('config/db.php');

//getDestinations
require('flights/get-destinations.php');

//import header
require('includes/header.php');
 ?>

<!--
    !============= Banner Area Start ===========!
 -->


<section class="rt-banner-area">
    <div class="single-rt-banner rt-banner-height" id="home-banner" >
        <div class="container">
            <div class="row  rt-banner-height align-items-center">
                <div class="col-lg-9">
                    <div class="rt-banner-content" id="rt-banner-content">
                        <h2 class="wow fade-in-bottom mt-5 text-white" data-wow-duration="1s" data-wow-delay="0.5s">
                            Travel <br>
                            The World!
                        </h2>
                        <p class="wow fade-in-top text-white"><small><strong>
                            You can book a Flight Today.Search our Lowest Fares to <br>
                            Your favorite Destinations.Find a better way to travel</strong></small>
                        </p>

        <div class="rt-banner-searchbox standard-search wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="1s">
            <div class="tab-content" id="myTabContent">
                <?php

                require('includes/booking-form.php') ?>

            </div>
        </div><!-- /.rt-banner-searchbox -->


    <!--    <ul class="nav serachnavs wow fade-in-bottom" id="rtMultiTab" role="tablist" data-wow-duration="1.5s" data-wow-delay="1.5s">
            <li class="nav-item">
                <a class="nav-link active" id="first-tab" data-target="#rt-item_b_first" data-secondary="#rt-item_a_first" data-toggle="tab" href="#first" role="tab" aria-controls="first-tab" aria-selected="false">
                    <i class="icofont-airplane"></i>
                    <span>Flights</span>
                </a>
            </li>
        </ul>-->
                    </div><!-- end banner content -->
                </div><!-- end column -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end single rt banner -->
</section>


<!--
    ========= Counter Start ========================
 -->
<div class="counter-area">
    <div class="container">
        <div class="row mt-5">



            <div class="col-lg-4 col-md-6 col-12">
                <div class="media counter-box-1 align-items-center wow fadeInUp">
                    <img src="assets\images\counter-icons\counter_iocn_7.png" alt="counter_iocn" draggable="false">
                    <div class="media-body">
                        <h5>Destinations</h5>
                        <h6><span class="counter">50</span><span>+</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="media counter-box-1 align-items-center wow fadeInUp" data-wow-duration="1.5s">
                    <img src="assets\images\counter-icons\counter_iocn_5.png" alt="counter_iocn" draggable="false">
                    <div class="media-body">
                        <h5>Trusted Airlines</h5>
                        <h6><span class="counter">20</span><span>+</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="media counter-box-1 align-items-center wow fadeInUp" data-wow-duration="2s">
                <img src="assets\images\counter-icons\counter_iocn_6.png" alt="counter_iocn" draggable="false">
                    <div class="media-body">
                        <h5>Happy Travellers</h5>
                        <h6><span class="counter">10,000</span><span>+</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.counter -->

<!--
    ===========Services Area start==========
 -->
<section class="emigr-services-area rtbgprefix-contain" style="background-image: url(assets/images/backgrounds/dotbg.png)">
    <div class="spacer-bottom"></div><!-- /.spacer-bottom -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center mx-auto">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Why you should choose Ticketify?</span>
                        Our Core Values
                    </h2><!-- /.rt-section-title -->
                    <p>Our thoughtful team of knowledgeable experts are here to take care of every need,
                        from the second you contact us to when you return</p>
                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-lg-4 col-md-6 mx-auto text-center">
                <div class="services-box-1 wow fade-in-bottom">
                    <div class="services-thumb">
                        <img src="assets\images\icons-image\box-icon-13.png" alt="" draggable="false">
                    </div><!-- /.services-thumb -->
                    <h4>Reliability</h4>
                    <p></p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 mx-auto text-center">
                <div class="services-box-1 wow fade-in-bottom" data-wow-duration="1.5s">
                    <div class="services-thumb">
                        <img src="assets\images\icons-image\box-icon-11.png" alt="" draggable="false">
                    </div><!-- /.services-thumb -->
                    <h4>Effeciency</h4>
                    <p></p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 mx-auto text-center">
                <div class="services-box-1 wow fade-in-bottom" data-wow-duration="2s">
                    <div class="services-thumb">
                    <img src="assets\images\icons-image\box-icon-7.png" alt="" draggable="false">
                    </div><!-- /.services-thumb -->
                    <h4>Customer Focus</h4>
                    <p></p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="spacer-bottom"></div><!-- /.spacer-bottm -->
</section>


<!--
    ============Deal Area Start===============
 -->


 <section class="deal-area   rtbgprefix-full bg-hide-md" style="background-image: url(assets/images/backgrounds/bgshapes_1.png)">
    <div class="container-fluid p-0">
       <div class="deal-carosel-active owl-carousel">
            <div class="row single-deal-carosel align-items-center">
                <div class="col-lg-5">
                    <div class="deal-bg" style="background-image: url(assets/images/all-img/city/nai1.jpg)">
                        <div class="inner-content">
                            <h4 data-animation="fadeInDown" data-duration=".2s" data-delay=".4s"><i class="fa fa map-marker"></i>Nairobi, Kenya</h4>
                            <p data-animation="fade-in-bottom" data-duration=".2s" data-delay=".4s">City in the sun</p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.deal-bg -->
                </div><!-- /.col-md-6 -->
                <div class="col-lg-7">
                    <div class="rt-section-title-wrapper text-white" data-animation="fadeIn" data-duration=".4s">
                        <h2 class="rt-section-title">
                            <span>Take a Look at Our</span>
                             Top Destinations
                        </h2><!-- /.rt-section-title -->
                        <p>Find great experiences, trips, and activities at fantastic prices around the globe.</p>
                        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                        <div class="deal-bottom-content">
                            <div class="rating-box">
                                <span class="d-block">EXCELLENT</span>
                                <span class="d-block"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>  of 205 Reviews</span>
                                <span class="d-block">Reviewed by Omar Adan</span>
                            </div><!-- /.rating-box -->
                            <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                            <h4>Nairobi, Kenya</h4>
                            <p>
                                Nairobi is Kenya’s capital city. In addition to its urban core, the city has Nairobi National Park,
                                a large game reserve known for breeding endangered black rhinos and home to giraffes, zebras and lions.
                                 Next to it is a well-regarded elephant orphanage operated by the David Sheldrick Wildlife Trust.
                                 Nairobi is also often used as a jumping-off point for safari trips elsewhere in Kenya
                            </p>
                            <div class="rt-button-group">
                                <a href="https://www.tripadvisor.com/Tourism-g294207-Nairobi-Vacations.html" target="_blank" class="rt-btn rt-gradient rt-rounded rt-Bshadow-2">Read More</a>
                            </div>
                        </div><!-- /.deal-bottom-content -->
                    </div><!-- /.rt-section-title-wrapper -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            <div class="row single-deal-carosel align-items-center">
                <div class="col-lg-5">
                    <div class="deal-bg" style="background-image: url(assets/images/all-img/city/kampala.jpg)">
                        <div class="inner-content">
                            <h4 data-animation="fadeInDown" data-duration=".2s" data-delay=".4s"><i class="fa fa map-marker"></i>Kampala, Uganda</h4>
                            <p data-animation="fade-in-bottom" data-duration=".2s" data-delay=".4s"></p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.deal-bg -->
                </div><!-- /.col-md-6 -->
                <div class="col-lg-7">
                    <div class="rt-section-title-wrapper text-white" data-animation="fadeIn" data-duration=".4s">
                        <h2 class="rt-section-title">
                            <span>Take a Look at Our</span>
                            Top Destinations
                        </h2><!-- /.rt-section-title -->
                        <p>Find great experiences, trips, and activities at fantastic prices around the globe.</p>
                        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                        <div class="deal-bottom-content">
                            <div class="rating-box">
                                <span class="d-block">EXCELLENT</span>
                                <span class="d-block"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>  of 205 Reviews</span>
                                <span class="d-block">Reviewed by Omondi Dennis</span>
                            </div><!-- /.rating-box -->
                            <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                            <h4>Kampala, Uganda</h4>
                            <p>
                                Kampala is Uganda's national and commercial capital bordering Lake Victoria, Africa's largest lake.
                                Hills covered with red-tile villas and trees surround an urban centre of contemporary skyscrapers.
                                In this downtown area, the Uganda Museum explores the country's tribal heritage through an extensive
                                 collection of artefacts. On nearby Mengo Hill is Lubiri Palace, the former seat of the Buganda Kingdom
                            </p>
                            <div class="rt-button-group">
                                <a href="https://www.tripadvisor.com/Tourism-g293841-Kampala_Central_Region-Vacations.html" target="_blank" class="rt-btn rt-gradient rt-rounded rt-Bshadow-2">Read More</a>
                              <!--  <a href="#" class="rt-btn rt-outline-gradientL rt-rounded">Help Me Plan My Trip</a>-->
                            </div>
                        </div><!-- /.deal-bottom-content -->
                    </div><!-- /.rt-section-title-wrapper -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            <div class="row single-deal-carosel align-items-center">
                <div class="col-lg-5">
                    <div class="deal-bg" style="background-image: url(assets/images/all-img/city/dar.jpg)">
                        <div class="inner-content">
                            <h4 data-animation="fadeInDown" data-duration=".2s" data-delay=".4s"><i class="fa fa map-marker"></i>Dar Es Salaam</h4>
                            <p data-animation="fade-in-bottom" data-duration=".2s" data-delay=".4s"></p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.deal-bg -->
                </div><!-- /.col-md-6 -->
                <div class="col-lg-7">
                    <div class="rt-section-title-wrapper text-white" data-animation="fadeIn" data-duration=".4s">
                        <h2 class="rt-section-title">
                            <span>Take a Look at Our</span>
                          Top Destinations
                        </h2><!-- /.rt-section-title -->
                        <p>Find great experiences, trips, and activities at fantastic prices around the globe.</p>
                        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                        <div class="deal-bottom-content">
                            <div class="rating-box">
                                <span class="d-block">EXCELLENT</span>
                                <span class="d-block"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>  of 205 Reviews</span>
                                <span class="d-block">Reviewed by Kim - Denmark</span>
                            </div><!-- /.rating-box -->
                            <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                            <h4>Dar Es Salaam</h4>
                            <p>
                                Dar es Salaam, a major city and commercial port on Tanzania’s Indian Ocean coast, grew from a fishing village.
                                 The open-air Village Museum has re-created the traditional homes of local and other Tanzanian tribes and hosts
                                  tribal dancing. It’s part of the National Museum, which offers Tanzanian history exhibits, including the fossils
                                   of human ancestors found by anthropologist Louis Leakey.
                            </p>
                            <div class="rt-button-group">
                                <a href="https://www.tripadvisor.com/Tourism-g293748-Dar_es_Salaam_Dar_Es_Salaam_Region-Vacations.html" target="_blank" class="rt-btn rt-gradient rt-rounded rt-Bshadow-2">Read More</a>
                            </div>
                        </div><!-- /.deal-bottom-content -->
                    </div><!-- /.rt-section-title-wrapper -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
       </div><!-- /.deal-carosel-active -->
    </div><!-- /.container -->
 </section>
<!--
    ========works start==========
 -->
<div class="spacer-top"></div><!-- /.spacer-top -->
 <section class="works-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 text-center mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Here's How It Works</span>
                        Getting Started? It’s Simple
                    </h2><!-- /.rt-section-title -->
                    <p>Prepare For Your Trip.Find out all you need to know before you go.Traveling is as unique as you are. And there is no one
                    package that fits all. That's why we offer customized travel packages aggregated from different Airlines.</p>
                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom">
                    <div class="services-thumb">
                        <img src="assets\images\service-icons\search.png" style="border-radius:80px;"width="135px" alt="service-icons" draggable="false">
                    </div><!-- /.services-thumb -->
                    <span class="inner-counter"></span>
                    <h4>Search</h4>
                    <p>Over 50 Destinations and Airlines
                    </p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom" data-wow-duration="1s">
                    <div class="services-thumb">
                        <img src="assets\images\service-icons\s_icon_5.png" width="135px" alt="service-icons" draggable="false">
                    </div><!-- /.services-thumb -->
                    <span class="inner-counter"></span>
                    <h4>Compare </h4>
                    <p>By price, rating
                        and more.</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom" data-wow-duration="1.5s">
                    <div class="services-thumb">
                        <img src="assets\images\service-icons\counter_iocn_4.png"  width="135px" alt="service-icons" draggable="false">
                    </div><!-- /.services-thumb -->
                    <span class="inner-counter"></span>
                    <h4>Book</h4>
                    <p>Book your ticket</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom" data-wow-duration="2s">
                    <div class="services-thumb">
                        <img src="assets\images\service-icons\s_icon_4.png" width="135px" alt="service-icons" draggable="false">
                    </div><!-- /.services-thumb -->
                    <span class="inner-counter"></span>
                    <h4>Pay</h4>
                    <p>Pay online securely</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class="col-12 text-center mt-4">
                <a href="#" class="rt-btn rt-gradient text-uppercase rt-sm rt-rounded rt-Bshadow-2">Travel the world</a><!-- /.rt-btn -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
 </section>
<!--
    ============ Portfolio Start===============
 -->
<div class="spacer-top"></div><!-- /.spacer-top -->
<section class="portfolio-area rt-section-padding rtbgprefix-full bg-hide-md gradinet-bg-md" style="background-image: url(assets/images/backgrounds/portfoliobg.png)">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 text-center mx-auto text-center">
                <div class="rt-section-title-wrapper text-white">
                    <h2 class="rt-section-title">
                        <span>Today’s Fare Deals from Nairobi
                    </h2><!-- /.rt-section-title -->
                    <p>Browse through our most popular
                    Destinations!Our Featured fare deals can help you find the prices that's perfect and affordable to you!.</p>
                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row grid">
            <div class="col-lg-4 col-md-6 grid-item cat-1 cat-5 cat-4">
              <a href="https://www.tripadvisor.com/Tourism-g294210-Mombasa_Coast_Province-Vacations.html" target="_blank">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url(assets/images/all-img/city/Mombasa.jpg)">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge kes">
                        <span>From</span>
                        <span><sup>KES </sup> 4,950</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>Mombasa</h6>

                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
              </a>
            </div><!-- /.col-md-4 -->
            <div class="col-lg-4 col-md-6 grid-item cat-2 cat-3 cat-5">
              <a href="https://www.tripadvisor.com/Tourism-g317064-Kisumu_Nyanza_Province-Vacations.html" target="_blank">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url(assets/images/all-img/city/kisumu.jpg)" data-wow-duration="1s">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge kes">
                        <span>From</span>
                        <span><sup>KES </sup> 3,550</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>Kisumu</h6>

                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
              </a>
            </div><!-- /.col-md-4 -->
            <div class="col-lg-4 col-md-6 grid-item cat-1 cat-4">
              <a href="https://www.tripadvisor.com/Tourism-g317068-Ukunda_Coast_Province-Vacations.html" target="_blank">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url(assets/images/all-img/city/Ukunda.png)" data-wow-duration="1.3s">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge kes">
                        <span>From</span>
                        <span><sup>KES </sup> 6,950</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>Ukunda</h6>

                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
              </a>
            </div><!-- /.col-md-4 -->
            <div class="col-lg-4 col-md-6 grid-item cat-4 cat-3 cat-5">
              <a href="https://www.tripadvisor.com/Tourism-g294208-Lamu_Island_Coast_Province-Vacations.html" target="_blank">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url(assets/images/all-img/city/Lamu.jpg)" data-wow-duration="1.6s">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge kes">
                        <span>From</span>
                        <span><sup>KES </sup> 7,950</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>Lamu</h6>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
                </a>
            </div><!-- /.col-md-4 -->
            <div class="col-lg-4 col-md-6 grid-item cat-1 cat-5">
              <a href="https://www.tripadvisor.com/Tourism-g293748-Dar_es_Salaam_Dar_Es_Salaam_Region-Vacations.html" target="_blank">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url(assets/images/all-img/city/dar.jpg)" data-wow-duration="1.9s">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge kes">
                        <span>From</span>
                        <span><sup>KES </sup>17,500</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>Dar Es Salaam</h6>

                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
                </a>
            </div><!-- /.col-md-4 -->
            <div class="col-lg-4 col-md-6 grid-item cat-3 cat-5">
              <a href="https://www.tripadvisor.com/Tourism-g297913-Arusha_Arusha_Region-Vacations.html" target="_blank">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url(assets/images/all-img/city/arusha.jpg)" data-wow-duration="2.2s">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge kes">
                        <span>From</span>
                        <span><sup>KES</sup> 10,950</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>Arusha</h6>

                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
                </a>
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-12 text-center mt-4">
                <a href="#" class="rt-btn rt-gradient text-uppercase rt-sm rt-rounded rt-Bshadow-1">browse more</a><!-- /.rt-btn -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!--
    ======== Flight deals start======
 -->

<div class="spacer-top"></div><!-- /.spacer-top -->


<!--
    ====== call to action======
 -->

<div class="spacer-top"></div><!-- /.spacer-top -->
<section class="rt-cta-area">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-box-1 d-flex flex-lg-row flex-column align-items-center text-center text-lg-left justify-content-lg-between rtbgprefix-cover text-white justify-content-center" style="background-image: url(assets/images/backgrounds/cat_1.jpg)">
                    <div class="left-column">
                        <h4 class="wow fade-in-top" data-wow-duration="1s" data-wow-delay="0.2s">
                            Not sure how to book? <span>We're here to help you</span>
                        </h4>
                        <p class="wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="0.2s">
                            Send us an email and someone on our team will be in touch with you!
                        </p>
                    </div><!-- /.left-column -->
                    <div class="right-column">
                        <a href="tel:+254728979121" class="rt-btn rt-gradient rt-sm text-uppercase rt-rounded rt-Bshadow-2 wow fade-in-left" data-wow-duration="1s" data-wow-delay="0.6s"><i class="fa fa-phone"></i> +254728979121</a><!-- /.rt-btn -->
                    </div><!-- /.right-column -->
                </div><!-- /.inner-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

</section>

<!--
    =======app area strat=========
 -->

<div class="spacer-top"></div><!-- /.spacer-top -->


<section class="app-area rtbgprefix-cover" style="background-image: url(assets/images/backgrounds/app_bg.png)" data-scrollax-parent="true">
    <div class="rt-shape-elements-1 rtbgprefix-contain" style="background-image: url(assets/images/shape-elements/shape-3.png)" data-scrollax="properties: { translateY: '50px' }"></div><!-- /.rt-shape-elements-1 -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center text-lg-left">
                <img src="assets\images\all-img\app.png" alt="mockup image" draggable="false" class="wow fade-in-left" data-wow-duration="1s" data-wow-delay="0.2s">
            </div><!-- /.col-lg-5 -->
            <div class="col-lg-7">
                <div class="rt-section-title-wrapper">
                    <div class="wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="0.6s">
                        <h2 class="rt-section-title">
                            <span>For faster and Effecient Booking.</span>
                            Download Our App
                        </h2><!-- /.rt-section-title -->
                        <p>
                            All your tickets, in one place.You handle the booking.Access reservations and
                            more on your favorite device!View trending destinations. Discover popular places. Listen to
                            your heart. Experience the world.
                            Experience different Airlines. Create unforgettable memories.Keep up-to-date with
                            active Fare prices. Managing your Bookings has never
                            been easier.

                        </p>
                        <br>
                        <p>
                            Download the Ticketify app and join our ever-growing community of passionate
                            travellers.Discover new adventures and create unforgettable
                            memories.
                        </p>
                    </div><!-- /.wow -->
                    <div class="rt-button-group mt-5 wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="0.9s">
                        <a href="#" class="rt-btn rt-app-parimary rt-rounded">
                            <div class="app-thumb">
                                <i class="fab fa-google-play"></i>
                            </div><!-- /.app-thumb -->
                            <div class="app-text">
                                <span>GET IT ON</span>
                                <span>Playstore</span>
                            </div><!-- /.app-text -->
                        </a>
                        <a href="#" class="rt-btn rt-app-secondary rt-rounded">
                            <div class="app-thumb">
                                <i class="fab fa-apple"></i>
                            </div><!-- /.app-thumb -->
                            <div class="app-text">
                                <span>GET IT ON</span>
                                <span>Appstore</span>
                            </div><!-- /.app-text -->
                        </a>
                    </div><!-- /.rt-button-group -->
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>


<!--
    ============= Testimonilas area start==========
 -->
<?php
require('includes/testimonials.php');
 ?>


<!--
    ============= Brands area start==========
 -->


<div class="spacer-top"></div><!-- /.spacer-top -->
<?php
require('includes/patners.php');
 ?>

<?php
//import footer
require('includes/footer.php');

 ?>
