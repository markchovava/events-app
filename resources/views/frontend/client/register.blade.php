@extends('frontend.__layouts.master')

@section('frontend.master')

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/37.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Register Client</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Register Event</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Contact Us Area Start -->
    <section class="contact--us-area section-padding-100-0">
        <div class="container">
            <div class="row">
                
                <!-- Contact Form -->
                <div class="col-12 col-lg-12">
                    <div class="contact_from_area mb-100 clearfix">
                        <!-- Contact Heading -->
                        <div class="contact-heading">
                            <h4>Register Client</h4>
                            <p>You are required to register as a client before you register the event.</p>
                        </div>
                        <div class="contact_form">
                            <form action="mail.php" method="post">
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="first_name" id="name" placeholder="First Name" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="last_name" id="name" placeholder="Last Name" required="required" />
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="email" id="email" placeholder="abc@example.com" required="required" />
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="phone" id="phone" placeholder="eg. +263 782 200021" required="required" />
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="address" id="address" 
                                                placeholder="Write your address..." required="required" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">
                                                        <div class="row">
                                                            <!-- Form Group -->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">
                                                                        <b>Date of Birth</b>
                                                                    </label> 
                                                                </div>
                                                            </div>
                                                            <!-- Form Group -->
                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control mb-30" name="day" id="day" placeholder="DD" required>
                                                                </div>
                                                            </div>
                                                            <!-- Form Group -->
                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control mb-30" name="month" id="month" placeholder="MM" required>
                                                                </div>
                                                            </div>
                                                            <!-- Form Group -->
                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control mb-30" name="year" id="year" placeholder="YYYY" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="container">
                                                            <div class="row">
                                                                <!-- Form Group -->
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">
                                                                            <b>Gender</b>
                                                                        </label> 
                                                                    </div>
                                                                </div>
                                                                <!-- Form Group -->
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <select name="gender" class="form-control form-select">
                                                                            <option value="">Select an option.</option>
                                                                            <option value="Male">Male</option>
                                                                            <option value="Female">Female</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>          
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="password" class="form-control mb-30" name="password" id="password" 
                                                placeholder="Password" required="required" />
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="password" class="form-control mb-30" name="password_confirmation" 
                                                id="password_confirmation" placeholder="Confirm Password" required="required" />
                                            </div>
                                        </div>
                                        

                                    
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" class="btn confer-btn">Register Client <i class="zmdi zmdi-long-arrow-right"></i></button>
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
    <!-- Contact Us Area End -->

   


   @endsection