@extends('frontend.__layouts.master')

@section('frontend.master')

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url({{ asset('__assets/confer/img/img/bg-img/37.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Blog Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="blog.html">Blog Grid</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <section class="confer-blog-details-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Post Details Area -->
                <div class="col-12 col-lg-8 col-xl-9">
                    <div class="pr-lg-4 mb-100">
                        <!-- Post Content -->
                        <div class="post-details-content">

                            <!-- Post Thumbnail -->
                            <div class="post-blog-thumbnail mb-30">
                                <img src="{{ asset('./__assets/confer/img/bg-img/46.jpg') }}" alt="">
                            </div>

                            <!-- Post Title -->
                            <h4 class="post-title">BW Education Leadership Summit</h4>

                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> January 14, 2019</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> Laura Green</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-favorite-outline"></i> 8 Likes</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-comment-outline"></i> 12 Comments</a>
                            </div>

                            <p>
                                BW Education Leadership Summit focuses on recognizing applauding the quality of education in 
                                India by uniting Institution leaders and regulators to explore how they can leverage technologies, 
                                strategies and Management tools with each other to help create a world class Institution. Bringing 
                                together the Gamut of Early Childhood Brands, K 12 Brands, Exceptional Schools, Engineering Colleges.
                            </p>
                            <p>
                                Beyond demonstrating that marketing really works, the right 
                                analytics strategies can provide insights that inspire impactfu
                                l marketing decisions, leading to increased ROI and revenue growth. J
                                oin us for our Marketing Analytics &amp; Insights Summit for a two-day deep dive into how top companies are 
                                using big data and analytics to dramatically improve the efficiency and efficacy of their marketing mix.
                            </p>
                        </div>

                        <div class="row">
                            <!-- Single Speaker Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Thumb -->
                                    <div class="speaker-single-thumb">
                                        <img src="{{ asset('./__assets/confer/img/bg-img/4.jpg') }}" alt="">
                                    </div>
                                    <!-- Social Info -->
                                    <div class="social-info">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                        <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                    </div>
                                    <!-- Info -->
                                    <div class="speaker-info">
                                        <h5>Albert Barnes</h5>
                                        <p>Founder</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Speaker Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Thumb -->
                                    <div class="speaker-single-thumb">
                                        <img src="{{ asset('./__assets/confer/img/bg-img/5.jpg') }}" alt="">
                                    </div>
                                    <!-- Social Info -->
                                    <div class="social-info">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                        <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                    </div>
                                    <!-- Info -->
                                    <div class="speaker-info">
                                        <h5>Patricia Stanley</h5>
                                        <p>Product Lead</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Speaker Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Thumb -->
                                    <div class="speaker-single-thumb">
                                        <img src="{{ asset('./__assets/confer/img/bg-img/6.jpg') }}" alt="">
                                    </div>
                                    <!-- Social Info -->
                                    <div class="social-info">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                        <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                    </div>
                                    <!-- Info -->
                                    <div class="speaker-info">
                                        <h5>Evelyn Stone</h5>
                                        <p>Photographer</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Speaker Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Thumb -->
                                    <div class="speaker-single-thumb">
                                        <img src="{{ asset('./__assets/confer/img/bg-img/7.jpg') }}" alt="">
                                    </div>
                                    <!-- Social Info -->
                                    <div class="social-info">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                        <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                    </div>
                                    <!-- Info -->
                                    <div class="speaker-info">
                                        <h5>Evelyn Stone</h5>
                                        <p>Photographer</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Speaker Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Thumb -->
                                    <div class="speaker-single-thumb">
                                        <img src="{{ asset('./__assets/confer/img/bg-img/8.jpg') }}" alt="">
                                    </div>
                                    <!-- Social Info -->
                                    <div class="social-info">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                        <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                    </div>
                                    <!-- Info -->
                                    <div class="speaker-info">
                                        <h5>Susan Hopkins</h5>
                                        <p>UX Manager</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Speaker Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Thumb -->
                                    <div class="speaker-single-thumb">
                                        <img src="{{ asset('./__assets/confer/img/bg-img/9.jpg') }}" alt="">
                                    </div>
                                    <!-- Social Info -->
                                    <div class="social-info">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                        <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                    </div>
                                    <!-- Info -->
                                    <div class="speaker-info">
                                        <h5>Michael Fowler</h5>
                                        <p>Product Design</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Post Tags & Social Info -->
                        <div class="post-tags-social-area mt-30 pb-5 d-flex flex-wrap align-items-center">
                            <!-- Popular Tags -->
                            <div class="popular-tags d-flex align-items-center">
                                <p><i class="zmdi zmdi-label"></i></p>
                                <ul class="nav">
                                    <li><a href="#">Conference</a></li>
                                    <li><a href="#">Workshops</a></li>
                                </ul>
                            </div>

                            <!-- Author Social Info -->
                            <div class="author-social-info">
                                <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="#"><i class="zmdi zmdi-share"></i></a>
                            </div>
                        </div>

                        

                       
                        <!-- Leave A Reply -->
                        <div class="confer-leave-a-reply-form clearfix">
                            <h4 class="mb-30 mt-30">Add info to Book a place</h4>
                            
                            <!-- Leave A Reply -->
                            <div class="contact_form">
                                <form action="#" method="post">
                                    <div class="contact_input_area">
                                        <div class="row">
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Your Name" required>
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="name" id="name-2" placeholder="Last Name" required>
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail" required>
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
                                                    <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="Message" required></textarea>
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

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="confer-sidebar-area mb-100">

                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <div class="search-widget">
                                <form action="#" method="post">
                                    <input type="search" name="search-form" id="searchForm" placeholder="Search">
                                    <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                </form>
                            </div>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <h5 class="widget-title mb-30">Other Events</h5>

                            <!-- Single Recent Post Area -->
                            <div class="single-recent-post-area d-flex align-items-center">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="{{ asset('./__assets/confer/img/bg-img/47.jpg') }}" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <a href="single-blog.html" class="post-title">Los Angeles Institute</a>
                                    <a href="#" class="post-date"><i class="zmdi zmdi-time"></i> January 14, 2019</a>
                                </div>
                            </div>

                            <!-- Single Recent Post Area -->
                            <div class="single-recent-post-area d-flex align-items-center">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="{{ asset('./__assets/confer/img/bg-img/48.jpg') }}" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <a href="single-blog.html" class="post-title">Basel Peace Forum</a>
                                    <a href="#" class="post-date"><i class="zmdi zmdi-time"></i> January 14, 2019</a>
                                </div>
                            </div>

                            <!-- Single Recent Post Area -->
                            <div class="single-recent-post-area d-flex align-items-center">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="{{ asset('./__assets/confer/img/bg-img/49.jpg') }}" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <a href="single-blog.html" class="post-title">Global Goals Mun</a>
                                    <a href="#" class="post-date"><i class="zmdi zmdi-time"></i> January 14, 2019</a>
                                </div>
                            </div>

                            <!-- Single Recent Post Area -->
                            <div class="single-recent-post-area d-flex align-items-center">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="{{ asset('./__assets/confer/img/bg-img/47.jpg') }}" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <a href="single-blog.html" class="post-title">Los Angeles Institute</a>
                                    <a href="#" class="post-date"><i class="zmdi zmdi-time"></i> January 14, 2019</a>
                                </div>
                            </div>

                            <!-- Single Recent Post Area -->
                            <div class="single-recent-post-area d-flex align-items-center">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="{{ asset('./__assets/confer/img/bg-img/48.jpg') }}" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <a href="single-blog.html" class="post-title">Basel Peace Forum</a>
                                    <a href="#" class="post-date"><i class="zmdi zmdi-time"></i> January 14, 2019</a>
                                </div>
                            </div>

                            <!-- Single Recent Post Area -->
                            <div class="single-recent-post-area d-flex align-items-center">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="{{ asset('./__assets/confer/img/bg-img/49.jpg') }}" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <a href="single-blog.html" class="post-title">Global Goals Mun</a>
                                    <a href="#" class="post-date"><i class="zmdi zmdi-time"></i> January 14, 2019</a>
                                </div>
                            </div>

                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <h5 class="widget-title mb-30">Archives</h5>

                            <!-- Catagories List -->
                            <ul class="categories-list">
                                <li><a href="#">January 2022 <span>(5)</span></a></li>
                                <li><a href="#">February 2022 <span>(7)</span></a></li>
                                <li><a href="#">March 2022 <span>(3)</span></a></li>
                                <li><a href="#">April 2022 <span>(3)</span></a></li>
                                <li><a href="#">May 2022 <span>(10)</span></a></li>
                                <li><a href="#">June 2022 <span>(12)</span></a></li>
                                <li><a href="#">July 2022 <span>(4)</span></a></li>
                            </ul>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <h5 class="widget-title mb-30">Tag Cloud</h5>

                            <!-- Tag Cloud -->
                            <ul class="tag-cloud">
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Conference</a></li>
                                <li><a href="#">Digital</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->

@endsection