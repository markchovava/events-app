@extends('frontend.__layouts.master')

@section('frontend.master')

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/37.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Register Event</h2>
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
                            <h4>Register Event</h4>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae</p>
                        </div>
                        <div class="contact_form">
                            <form action="mail.php" method="post">
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Event Name" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="description" class="form-control mb-30" id="description" cols="30" rows="6" placeholder="Description" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">
                                                        <div class="row">
                                                            <!-- Form Group -->
                                                            <div class="col-lg-12">
                                                                <h5>Date</h5>
                                                            </div>
                                                            <!-- Form Group -->
                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control mb-30" name="day" id="email" placeholder="DD" required>
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
                                                        <div class="row">
                                                            <!-- Form Group -->
                                                            <div class="col-lg-12">
                                                                <h5>Time</h5>
                                                            </div>
                                                            <!-- Form Group -->
                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control mb-30" name="hour" id="hour" placeholder="HH">
                                                                </div>
                                                            </div>
                                                            <!-- Form Group -->
                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control mb-30" name="minute" id="minute" placeholder="MM" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>          
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="venue" id="venue" placeholder="Event Venue" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="address" id="address" placeholder="Event Address" required>
                                            </div>
                                        </div>
                                    
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group">
                                                <h5>Event Image</h5>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="file" class="form-control mb-30" name="image" id="image" placeholder="Your image" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <input type="file" class="mb-30" name="speaker_image" id="subject" placeholder="Your Image" />
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control mb-30" 
                                                                                name="speaker_name" id="speaker_name" 
                                                                                placeholder="Speaker Name" required="required" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control mb-30" 
                                                                                name="speaker_profession" id="speaker_occupation" 
                                                                                placeholder="Speaker Profession" required="required" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control mb-30" 
                                                                                name="speaker_topic" id="speaker_topic" placeholder="Speaker Topic" 
                                                                                required="required" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 d-flex justify-content-end align-items-start">
                                                        <button type="submit" class="btn confer-btn">Add</button>
                                                    </div>
                                                    
                                            
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" class="btn confer-btn">Register Event <i class="zmdi zmdi-long-arrow-right"></i></button>
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