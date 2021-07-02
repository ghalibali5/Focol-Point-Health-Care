<?php
include 'header.php';

?>
<!-- HOME -->

<header>
    <!-- <div class="overlay"></div> -->
    <!--<video loop controls autoplay>-->
    <!--    <source id="myVideo" src="covid.mp4" type="video/mp4">-->
    <!--</video>-->
       <video height="256" loop autoplay muted controls id="vid">
         <source type="video/mp4" src="covid.mp4"></source>
         <source type="video/ogg" src="covid.mp4"></source>
    </video>
</header>
<section id="appointment" data-stellar-background-ratio="3" style="background-position: 0px -990px; background-color:#CCCCCC;">
    <div class="container"style=" background-color:white;">
        <div class="row">
            <div class="col-md-6 col-sm-6" style="
                padding-top: 20px;
                padding-bottom: 20px;
                ">
                <img src="images/1.jpg" class="img-responsive" style="
                width: 100%;
                border-style: solid;
                border-width: 5px 5px 5px 5px;
                border-color: #810809;
                box-shadow: 0px 0px 10px 0px rgb(0 0 0 / 50%);
                ">
            </div>
            <br>
            <div class="col-md-6 col-sm-6" style="padding-top: 58px;">
                <!-- CONTACT FORM HERE -->
                <form id="appointment-form" role="form" method="post" action="#">
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s;">
                        <h2 class="home-sec2-head">Testing</h2><br>
                        <p style="text-align: center;">We safely collect your sample and have it interpreted by our
                        physician instantly.</p><br>
                        <h2 class="home-sec2-head">SCHEDULE NOW</h2><br>
                        <p style="text-align: center;">In-Home Testing and Appointment for Business Office
                        </p>
                        <br>
                        <br>
                        <div class="col-md-4 col-sm-4" style="
                            height: 20px;
                            width:100px;
                            margin: -19px -50px;
                            position:relative;
                            top:50%;
                            left: 43%;
                            ">
                            <a href="appointment.php" class="btn btn-primary btn-lg" id="change">Schedule Now</a>
                        </div>
                    </div>
                </form></div>
                
            </div>
        </div>
        
    </section>
    <br>
    <br>
    <br>
    <br>
    <!-- ABOUT -->
    <section id="Testing" data-stellar-background-ratio="2.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="home-sec3">RT PCR Testing </h2>
                        <br>
                        <p style="text-align: center;">
                            “Currently Infected?” This Nasal PCR
                            test can determine if you are currently
                            infected with COVID-19 and is
                            approximately 99% accurate.
                            <br>
                            <br>
                            If you are experiencing symptoms at the
                            time of your test, we recommend a
                            virtual visit with a doctor on the day
                            of sample collection to safely manage
                            symptoms.
                        </p>
                        <br><br>
                    </div>
                </div>
                <br>
                <div class="col-md-6 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <a href="news-detail.html">
                            <img src="images/8.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6"  id="picture">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                        <a href="news-detail.html">
                            <img src="images/2.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <br>
                <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <br>
                        <p style="text-align: center;color: black;">
                            *If you have insurance, we can submit it to our billing department to cover the cost.
                            (Collection fees vary)
                        </p>
                        <br>
                        <p style="text-align: center;color: black;">
                            If your insurance does not cover, you may receive a bill from the lab.
                        </p>
                        <br>
                        <p style="text-align: center;color: black;">
                            *If you do not have insurance, you can pay cash/card. Contact us for more details.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <!-- ABOUT -->
    <section id="kaam" style="
        padding-bottom: 41px;
        padding-top: 0px;
        ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6" style="float: right;">
                    <div class="about-info">
                        <h2 class="home-sec4-head">“Do I have antibodies for COVID-19?”</h2>
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <p style="color: white;">
                                This blood draw tests for antibodies and can determine whether you have been ever been exposed to COVID-19. The results of these tests do not determine whether you are currently infected, but they do tell us if you have been infected in the past. Our serology antibody test is 100% specific. This means our test has zero false positives.
                            </p>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MAKE AN APPOINTMENT -->
    <section id="appointment" data-stellar-background-ratio="3" style="background-color: #8B0000; color: white; padding-bottom: 50px; padding-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <!-- CONTACT FORM HERE -->
                    <h2 class="home-sec5-head">Safe, quick and accurate results, all within the comfort of your car or home</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- NEWS -->
    <section id="news" data-stellar-background-ratio="2.5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <img src="images/5.png" class="img-responsive home-img-5" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="home-sec5">Experts in TV & Film Production
                        </h2>
                        <h2 class="home-sec5-p">We Specialize in Studio & On Location Testing
                        </h2>
                        <ul class="home-sec5-ul">
                            <li>Our team has over 75 years of combined experience in the entertainment industry.</li>
                            <li>Key understanding of the on-site nuisances of entertainment production. We speak the
                            Language!</li>
                            <li>Provide an on-the-ground, experienced production representative to establish a testing
                            basecamp and implement protocols at each studio or location.</li>
                            <li>Focal Point Health Care owns multiple labs to ensure quick results &amp; fast turn-around to
                            keep productions on-time and on-budget.</li>
                            <li>FPHC labs and testing services are licensed in all 50 US States & Canada and have been granted Emergency Use Authorization (EAU) by the FDA for SARS-CoV-2 tests.</li>
                        </ul>
                        <div class="col-md-4 col-sm-4">
                            <a href="services.php" class="btn btn-primary btn-lg">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NEWS-->
    <section id="news" data-stellar-background-ratio="2.5" style=" padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="home-sec5">Vitamin IV
                        </h2><br>
                        <h2 class="home-sec5-p">Preventative Method (In-Home)
                        </h2><br>
                        <h2 style="text-align: left;color:#7B736F;font-size: 22px; line-height: 30px;">Recommendation for Non-Critically Ill Patients With COVID-19</h2>
                        <p style="text-align: left;">There are insufficient data for the COVID-19 Treatment Guidelines Panel<br> (the Panel) to
                            recommend either for or against the use of vitamin C for the treatment of <br>COVID-19 in
                        non-critically ill patient<br></p>
                        <br>
                        <div class="row">
                            <div class="col-md-4 col-sm-4" style="
                                float: right;
                                " id="mobile">
                                <a href="appointment.php" class="btn btn-primary btn-lg"  >Schedule Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-6 col-sm-12">
                    
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <a href="news-detail.html">
                            <img src="images/6.jpeg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <!-- GOOGLE MAP
    <section id="google-map">
        How to change your own map point
        1. Go to Google Maps
        2. Click on your location point
        3. Click "Share" and choose "Embed map" tab
        4. Copy only URL and paste it within the src="" field below
            
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945"
        width="100%" height="350" frameborder="0" style="border:0"
        allowfullscreen></iframe>
    </section>
    -->
    <!-- MAKE AN APPOINTMENT -->
    <section id="appointment" data-stellar-background-ratio="3" style="background-color: #8B0000; color: white; padding-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <!-- CONTACT FORM HERE -->
                    <form id="appointment-form" role="form" method="post" action="#">
                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                            <h2 style="color: white; text-align: center; font-size: 80px; font-weight: 500;">Let’s Test</h2>
                            <br>
                            <p style="color: white; text-align: center;">
                                <span style="font-size: 19px;">
                                    Phone Number: 800-549-8001 / Email: 
                                    <a href="mailto:info@FocalPointHealthcare.com" data-auto-recognition="true" style="color: white;">info@focalpointhealthcare.com
                                    </a>
                                </span>
                            </p>
                            <br>
                        </div>

                        <div class="row wow fadeInUp" data-wow-delay="0.8s">
                            <div class="col-md-4 col-sm-4">
                                <label for="email" style="color: white;">Name</label>
                                <input type="email" class="form-control" id="email" name="name" placeholder="Name">
                            </div>
                            <div class="col-md-4">
                                <label for="email" style="color: white;">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                            </div>
                            <div class="col-md-4">
                                <label for="telephone" style="color: white;">Phone</label>
                                <input type="tel" class="form-control" id="email" name="phone" placeholder="Phone">
                            </div>
                            <div class="col-md-12">
                                <label for="Message" style="color: white;">Message</label>
                                <textarea class="form-control" style="height: 100px;" id="message" name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-md-12">
                            <br><br>
                                <center><button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button></center>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>