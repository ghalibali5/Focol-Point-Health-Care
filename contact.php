<?php
    include 'header.php';

if (isset($_REQUEST['submit']))
{

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $message = $_POST['message'];


$to = "mubbashirqureshi93@gmail.com";
$subject = "Contact Us Focal Point Health Care";

$message = "
<html>
<head>
<title>Contact Us Focal Point Health Care</title>
</head>
<body>
<table>
<tr>
<th>First Name: </th>
<td>".$fname."</td>
</tr>
<tr>
<th>Last Name: </th>
<td>".$lname."</td>
</tr>
<tr>
<th>Email: </th>
<td>".$email."</td>
</tr>
<tr>
<th>Phone: </th>
<td>".$phone."</td>
</tr>
<tr>
<th>Address: </th>
<td>".$address."</td>
</tr>
<tr>
<th>Message: </th>
<td>".$message."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@focalpointhealthcare.com>' . "\r\n";
// $headers .= 'Cc: myboss@focalpoint.com' . "\r\n";

mail($to,$subject,$message,$headers);

}
?>

<!-- GOOGLE MAP
<section id="google-map">
    <!-- How to change your own map point
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
<section id="appointment" data-stellar-background-ratio="3" style="background-color: #8B0000; color: white;padding-bottom: 60px;">
    <div class="container">
        <div class="row">
            <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                <div class="text-center">
                    <i class="fas fa-pen" style="font-size:50px;"></i>
                </div>
                <h2 class="contact-banner-head">Contact us</h2>
                <h3 style="color: white; text-align: center;">Sign up with your email address to receive news and
                updates.
                </h3>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>
<div class="row">
    <div class="container">
        <div class="col-md-6 col-sm-6">
            <!-- CONTACT FORM HERE -->
            <div class="about-info">
                <h4 class="wow fadeInUp animated contactHead">RT Focal Point Healthcare is here on the front line combating the Covid-19 pandemic. </h4>
                    <br>
                    <div class="wow fadeInUp animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                        <p class="cpara">Good hardworking Americans we want to hear from you; So that we may
                        effectively improve our service in any area..</p>
                        <br>
                        <br>
                        <br>
                        <p class="cpara">Call: (800) 549-8001</p>
                        <p class="cemail"><a href="mailto:info@focalpointhealthcare.com">Email:info@focalpointhealthcare.com</a></p>
                        <p class="cpara">Text us: (800) 549-8001</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <!-- CONTACT FORM HERE -->
                <form id="appointment-form" role="form" method="post" action="contact.php">
                    <!-- SECTION TITLE -->
                    <div class="wow fadeInUp" data-wow-delay="0.8s">

                        <div class="col-md-12">
                            <h4 class="contactHeads">Complete Form:</h4>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="name" style="color: white;">First Name</label>
                            <input type="text" class="form-control cf" id="name" name="fname" placeholder="Full Name">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="name" style="color: white;">Last Name</label>
                            <input type="text" class="form-control cf" id="name" name="lname" placeholder="Last Name">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="name" style="color: white;">Email</label>
                            <input type="email" class="form-control cf" id="email" name="email" placeholder="Email">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="telephone" style="color: white;">Phone Number</label>
                            <input type="tel" class="form-control cf" id="phone" name="phone" placeholder="Phone">
                        </div>


                        <div class="col-md-12 col-sm-12">
                            <label for="address" style="color: white;">Address</label>
                            <input type="text" class="form-control cf" id="address" name="address" placeholder="Address">

                            <label for="Message" style="color: white;">Message</label>
                            <textarea class="form-control cmf" rows="5" id="message" name="message" placeholder="Message"></textarea>
                            <br>
                            <button type="submit" class="form-control" id="cf-submit" name="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<?php include 'footer.php';?>