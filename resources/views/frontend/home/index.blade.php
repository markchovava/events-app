@extends('frontend.__layouts.master')

@section('frontend.master')

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(__assets/images/bg/president.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-right">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Data Center <br>Conference</h2>
                                <h6 data-animation="fadeInUp" data-delay="500ms">HICC, Harare, Zimbabwe </h6>
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="#" class="btn confer-btn">More Information <i class="zmdi zmdi-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(__assets/confer/img/bg-img/45.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text-two text-center">
                                <h5 data-animation="fadeInUp" data-delay="100ms">The event consistently</h5>
                                <h2 data-animation="fadeInUp" data-delay="300ms">OSHA Compliance</h2>
                                <!-- Event Meta -->
                                <div class="event-meta" data-animation="fadeInUp" data-delay="500ms">
                                    <a class="event-date" href="#"><i class="zmdi zmdi-account"></i> January 14, 2019</a>
                                    <a class="event-author" href="#"><i class="zmdi zmdi-alarm-check"></i> Laura Green</a>
                                </div>
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="#" class="btn confer-btn m-2">View more <i class="zmdi zmdi-long-arrow-right"></i></a>
                                    <a href="#" class="btn confer-btn m-2">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Icon -->
        <div class="icon-scroll" id="scrollDown"></div>
    </section>
    <!-- Welcome Area End -->


    <!-- What We offer Area Start -->
    <section class="what-we-offer-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-3 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Our Services</p>
                        <h4>What We Offer</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="{{ asset('./__assets/confer/img/core-img/icon.png') }}" alt="">
                        </div>
                        <h5>Conference</h5>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque</p>
                    </div>
                </div>

                <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="{{ asset('./__assets/confer/img/core-img/icon-2.png') }}" alt="">
                        </div>
                        <h5>Workshops</h5>
                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum</p>
                    </div>
                </div>

                <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="{{ asset('./__assets/confer/img/core-img/icon-3.png') }}" alt="">
                        </div>
                        <h5>Coffee Breaks</h5>
                        <p>On the other hand, we denounce with righteous indignation</p>
                    </div>
                </div>

                <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="{{ asset('./__assets/confer/img/core-img/icon-4.png') }}" alt="">
                        </div>
                        <h5>Events</h5>
                        <p>These cases are perfectly simple and easy to distinguish in a free hour</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What We offer Area End -->


    <!-- About Us And Countdown Area Start -->
    <section class="about-us-countdown-area section-padding-100-0" id="about">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms">About Us</h6>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">
                            Welcome to the Events Website
                        </h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum hic 
                            praesentium explicabo corrupti minima sit animi porro numquam veniam 
                            provident nobis quidem, qui aperiam a officia nemo enim! Voluptas, delectus.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex neque voluptas 
                            veritatis laborum eos nisi quidem ad alias? Tenetur aut placeat perspiciatis 
                            odit delectus eos dolorum dignissimos earum sit magnam.
                        </p>
                        <a href="#" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="300ms">
                            More Information <i class="zmdi zmdi-long-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- About Thumb -->
                <div class="col-12 col-md-6">
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <img src="{{ asset('./__assets/confer/img/bg-img/2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- About Us And Countdown Area End -->


    <!-- Our Blog Area Start -->
    <section class="our-blog-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url(__assets/confer/img/bg-img/17.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Events</p>
                        <h4>Upcoming Events</h4>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <img src="{{ asset('./__assets/images/event/president.jpg') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#">Street Food Convention</a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> January 14, 2019</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> Laura Green</a>
                            </div>
                            <p>Street Food Convention will showcase products like Packed food, beef and lamb, street food.</p>
                        </div>
                        <div class="blog-btn">
                            <a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <img src="{{ asset('./__assets/images/event/table.jpg') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#">Tedx Moscow Conference</a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>January 14, 2019</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i>Laura Green</a>
                            </div>
                            <p>Street Food Convention will showcase products like Packed food, beef and lamb, street food.</p>
                        </div>
                        <div class="blog-btn">
                            <a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <img src="{{ asset('./__assets/images/event/pageant.jpg') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#">Los Angeles Institute</a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>January 14, 2019</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i>Laura Green</a>
                            </div>
                            <p>Street Food Convention will showcase products like Packed food, beef and lamb, street food.</p>
                        </div>
                        <div class="blog-btn">
                            <a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <img src="{{ asset('./__assets/images/event/mic.jpg') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#">Street Food Convention</a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> January 14, 2019</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> Laura Green</a>
                            </div>
                            <p>Street Food Convention will showcase products like Packed food, beef and lamb, street food.</p>
                        </div>
                        <div class="blog-btn">
                            <a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <img src="{{ asset('./__assets/confer/img/bg-img/19.jpg') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#">Tedx Moscow Conference</a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>January 14, 2019</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i>Laura Green</a>
                            </div>
                            <p>Street Food Convention will showcase products like Packed food, beef and lamb, street food.</p>
                        </div>
                        <div class="blog-btn">
                            <a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <img src="{{ asset('./__assets/confer/img/bg-img/20.jpg') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#">Los Angeles Institute</a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>January 14, 2019</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i>Laura Green</a>
                            </div>
                            <p>Street Food Convention will showcase products like Packed food, beef and lamb, street food.</p>
                        </div>
                        <div class="blog-btn">
                            <a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Our Blog Area End -->


    <!-- Our Schedule Area Start -->
    <section class="our-schedule-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Schedule</p>
                        <h4>Daily Events Plan</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="schedule-tab">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="conferScheduleTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#step-one" role="tab" aria-controls="step-one" aria-expanded="true">Monday <br> <span>January 14, 2019</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#step-two" role="tab" aria-controls="step-two" aria-expanded="true">Tuesday <br> <span>January 15, 2019</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#step-three" role="tab" aria-controls="step-three" aria-expanded="true">Wednesday <br> <span>January 16, 2019</span></a>
                            </li>
                        </ul>
                    </div>

                    <!-- Tab Content -->
                    <div class="tab-content" id="conferScheduleTabContent">
                        <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('./__assets/confer/img/bg-img/10.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Dealing with Difficult People</h6>
                                                    <p>by <span>Gary Armstrong</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="#" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('./__assets/confer/img/bg-img/11.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Crop Insurance Conference</h6>
                                                    <p>by <span>Amanda Hudson</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="#" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('./__assets/confer/img/bg-img/12.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Capdm Executive Conference</h6>
                                                    <p>by <span>Martha Burke</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="#" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('./__assets/confer/img/bg-img/13.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Street Food Convention</h6>
                                                    <p>by <span>Jeffrey Morales</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="#" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <!-- More Schedule Btn -->
                                    <div class="col-12">
                                        <div class="more-schedule-btn text-center mt-50 wow fadeInUp" data-wow-delay="300ms">
                                            <a href="#" class="btn confer-gb-btn">View Full Schedule</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="step-two" role="tabpanel" aria-labelledby="tuesday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('./__assets/confer/img/bg-img/11.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Crop Insurance Conference</h6>
                                                    <p>by <span>Amanda Hudson</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="#" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('./__assets/confer/img/bg-img/12.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Capdm Executive Conference</h6>
                                                    <p>by <span>Martha Burke</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="#" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('./__assets/confer/img/bg-img/13.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Street Food Convention</h6>
                                                    <p>by <span>Jeffrey Morales</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="#" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <!-- More Schedule Btn -->
                                    <div class="col-12">
                                        <div class="more-schedule-btn text-center mt-50 wow fadeInUp" data-wow-delay="300ms">
                                            <a href="#" class="btn confer-gb-btn">View Full Schedule</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="step-three" role="tabpanel" aria-labelledby="wednesday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('./__assets/confer/img/bg-img/10.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Dealing with Difficult People</h6>
                                                    <p>by <span>Gary Armstrong</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="#" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('./__assets/confer/img/bg-img/13.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Street Food Convention</h6>
                                                    <p>by <span>Jeffrey Morales</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="#" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <!-- More Schedule Btn -->
                                    <div class="col-12">
                                        <div class="more-schedule-btn text-center mt-50 wow fadeInUp" data-wow-delay="300ms">
                                            <a href="#" class="btn confer-gb-btn">View Full Schedule</a>
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
    <!-- Our Schedule Area End -->


    <!-- Our Ticket Pricing Table Area Start -->
    <section class="our-ticket-pricing-table-area bg-img bg-gradient-overlay section-padding-100-0 jarallax" style="background-image: url(__assets/confer/img/bg-img/14.jpg);">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Choose a Ticket</p>
                        <h4>Ticket Pricing</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-lg-4">
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">1 day pass</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="{{ asset('./__assets/confer/img/core-img/p1.png') }}" alt="">
                        </div>
                        <h2 class="ticket-price"><span>$</span>59</h2>
                        <a href="#" class="btn confer-btn w-100 mb-30">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> One Day Conference Ticket</p>
                            <p><i class="zmdi zmdi-check"></i> Coffee-break</p>
                            <p><i class="zmdi zmdi-check"></i> Lunch and Networking</p>
                            <p><i class="zmdi zmdi-check"></i> Keynote talk</p>
                            <p><i class="zmdi zmdi-check"></i> Talk to the Editors Session</p>
                        </div>
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table active text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Full pass</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="{{ asset('./__assets/confer/img/core-img/p2.png') }}" alt="">
                        </div>
                        <h2 class="ticket-price"><span>$</span>99</h2>
                        <a href="#" class="btn confer-btn w-100 mb-30">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> One Day Conference Ticket</p>
                            <p><i class="zmdi zmdi-check"></i> Coffee-break</p>
                            <p><i class="zmdi zmdi-check"></i> Lunch and Networking</p>
                            <p><i class="zmdi zmdi-check"></i> Keynote talk</p>
                            <p><i class="zmdi zmdi-check"></i> Talk to the Editors Session</p>
                        </div>
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Group pass</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="{{ asset('./__assets/confer/img/core-img/p3.png') }}" alt="">
                        </div>
                        <h2 class="ticket-price"><span>$</span>199</h2>
                        <a href="#" class="btn confer-btn w-100 mb-30">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> One Day Conference Ticket</p>
                            <p><i class="zmdi zmdi-check"></i> Coffee-break</p>
                            <p><i class="zmdi zmdi-check"></i> Lunch and Networking</p>
                            <p><i class="zmdi zmdi-check"></i> Keynote talk</p>
                            <p><i class="zmdi zmdi-check"></i> Talk to the Editors Session</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Ticket Pricing Table Area End -->


    <!-- Our Sponsor And Client Area Start -->
    <section class="our-sponsor-client-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Partners &amp; Sponsors</p>
                        <h4>OFFICIAL SPONSOR</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Our Sponsor area -->
                    <div class="our-sponsor-area d-flex flex-wrap">
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="{{ asset('./__assets/confer/img/core-img/p-1.png') }}" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="{{ asset('./__assets/confer/img/core-img/p-2.png') }}" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="{{ asset('./__assets/confer/img/core-img/p-3.png') }}" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="{{ asset('./__assets/confer/img/core-img/p-4.png') }}" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="{{ asset('./__assets/confer/img/core-img/p-5.png') }}" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="{{ asset('./__assets/confer/img/core-img/p-6.png') }}" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="{{ asset('./__assets/confer/img/core-img/p-7.png') }}" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="{{ asset('./__assets/confer/img/core-img/p-8.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Our Sponsor And Client Area End -->
    

    <!-- Contact Area Start -->
    <section class="contact-our-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Have Question?</p>
                        <h4>Contact us</h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-sm-3">
                    <div class="contact-information mb-100">
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Address:</p>
                            <h6>184 Main Collins Street</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Phone:</p>
                            <h6>(226) 446 9371</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Email:</p>
                            <h6>confer@gmail.com</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Website:</p>
                            <h6>www.confer.com</h6>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-8">
                    <!-- Contact Form -->
                    <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms">
                        <div class="contact_form">
                            <form action="mail.php" method="post" id="main_contact_form">
                                <div class="contact_input_area">
                                    <div id="success_fail_info"></div>
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name2" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="subject" id="subject" placeholder="Your Number">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="Your Message *"></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" class="btn confer-btn">Send Message <i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->

@endsection