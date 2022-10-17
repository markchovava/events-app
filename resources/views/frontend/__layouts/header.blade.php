 <!-- Header Area Start -->
 <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="./index.html"><img src="{{ asset('./__assets/confer/img/core-img/logo.png') }}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="{{ $active == 'Home' ? 'active' : '' }}">
                                    <a href="{{ route('frontend.home') }}">Home</a>
                                </li>
                                <li class="{{ $active == 'About' ? 'active' : '' }}">
                                    <a href="{{ route('frontend.about') }}">About Us</a>
                                </li>
                                <li class="{{ $active == 'Events' ? 'active' : '' }}">
                                    <a href="javascript:;">Events</a>
                                    <ul class="dropdown">
                                        <li>
                                            <a href="{{ route('frontend.event') }}">Upcoming Events</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('frontend.event.view') }}">Single event</a>
                                        </li>   
                                    </ul>
                                </li>
                                <li class="{{ $active == 'Contact' ? 'active' : '' }}">
                                    <a href="{{ route('frontend.contact') }}">Contact Us</a></li>
                            </ul>

                            <!-- Get Tickets Button -->
                            <a href="javascript:;" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">
                                Register Event <i class="zmdi zmdi-long-arrow-right"></i>
                            </a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->