<?php 

include 'header.php';

if (isset($_REQUEST['submit']))
{

$name = $_POST['name'];
$location = $_POST['location'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$gender = $_POST['gender'];
$providinginsurance = $_POST['providinginsurance'];
$groupnumber = $_POST['groupnumber'];
$member = $_POST['member'];
$testqty = $_POST['testqty'];
$testtype = $_POST['testtype'];


$to = "mubbashirqureshi93@gmail.com";
$subject = "Appointment Focal Point Health Care";

$message = "
<html>
<head>
<title>Appointment Focal Point Health Care</title>
</head>
<body>
<table>
<tr>
<th>Name: </th>
<td>".$name."</td>
</tr>
<tr>
<th>Location: </th>
<td>".$location."</td>
</tr>
<tr>
<th>Phone: </th>
<td>".$phone."</td>
</tr>
<tr>
<th>Date: </th>
<td>".$date."</td>
</tr>
<tr>
<th>Gender: </th>
<td>".$gender."</td>
</tr>
<tr>
<th>Providing Insurance: </th>
<td>".$providinginsurance."</td>
</tr>
<tr>
<th>Insurance Group Number: </th>
<td>".$groupnumber."</td>
</tr>
<tr>
<th>Member: </th>
<td>".$member."</td>
</tr>
<tr>
<th>Test Quantity: </th>
<td>".$testqty."</td>
</tr>
<tr>
<th>Test Type: </th>
<td>".$testtype."</td>
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

<!-- MAKE AN APPOINTMENT -->
<section id="appointment" data-stellar-background-ratio="3"  style="padding-top: 30px;">
<div class="container">
    <div class="row">


        <div class="col-md-12 col-sm-12">
            <!-- CONTACT FORM HERE -->
            <form id="appointment-form" role="form" method="post" action="appointment.php" >

                <!-- SECTION TITLE -->
                <div class="section-title wow fadeInUp" data-wow-delay="0.4s"style="background-color:#8B0000; padding-top: 20px;">
                    <p style="color:white;text-align:center;">Please fill out the following form to help us understand your physical condition.

                    </p>
                    <p style="color:white;text-align:center;">
                        $199 for each additional test in a household

                    </p>

                </div>
                <br>
                <br>
                <div class="wow fadeInUp" data-wow-delay="0.8s">
                    <div class="col-md-6 col-sm-6">
                     <label for="Member Id" style="
                     font-family: "Roboto", sans-serif;
                     ">Full Name
                 </label>
                 <input type="Member Id" class="form-control" id="email" name="name"
                 style="
                 border: 1px solid #818a91;
                 ">
             </div>


             <div class="col-md-6 col-sm-6">
                <label for="select" style="
                font-family: "Roboto", sans-serif;
                ">Type Location</label>
                <select class="form-control" name="location">
                    <option value="Newport Beach, CA">Newport Beach, CA</option>
                    <option value="San Francisco, CA">San Francisco, CA</option>
                    <option value="Los Angeles, CA">Los Angeles, CA</option>
                    <option value="Las Vegas, NV">Las Vegas, NV</option>
                    <option value="Phoenix, AZ">Phoenix, AZ</option>
                    <option value="San Diego, CA">San Diego, CA</option>
                    <option value="Valley Village, CA">Valley Village, CA</option>
                    <option value="Santa Clarita, CA">Santa Clarita, CA</option>
                </select>
            </div>

            <div class="col-md-6 col-sm-6">
                <label for="telephone" style="
                font-family: "Roboto", sans-serif;
                ">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" style="
                border: 1px solid #818a91;
                ">
            </div>



            <div class="col-md-6 col-sm-6">
                <label for="date" style="
                font-family: "Roboto", sans-serif;
                ">Date of birth</label>
                <input type="date" name="date" value="" class="form-control" style="
                border: 1px solid #818a91;
                ">
            </div>

            <div class="col-md-12 col-sm-12" style="
            padding-bottom: 20px;
            ">
            <p style="
            color: black;
            font-weight: 500;
            font-size: 18px;

            ">
        Gender</p>

        <input type="radio" id="male" name="gender" value="male">
        <label for="male" style="
        color: #393939;
        font-weight: 500;
        font-size: 15px;

        ">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female" style="
        color: #393939;
        font-weight: 500;
        font-size: 15px;

        ">Female</label><br>

    </div>

    <div class="col-md-12 col-sm-12" style="
    padding-bottom: 20px;
    ">
    <p style="
    color: black;
    font-weight: 500;
    font-size: 18px;

    ">
Are you providing insurance? (+$50 if no)</p>

<input type="radio" id="male" name="providinginsurance" value="Yes">
<label for="male" style="
color: #393939;
font-weight: 500;
font-size: 15px;

">Yes</label><br>
<input type="radio" id="female" name="providinginsurance" value="No">
<label for="female" style="
color: #393939;
font-weight: 500;
font-size: 15px;

">No</label><br>

</div>

<div class="col-md-12 col-sm-12">
<label for="telephone" style="
font-family: "Roboto", sans-serif;
">Insurance Group Number</label>
<input type="tel" class="form-control" id="Insurance Group Number" name="groupnumber"
placeholder="Enter text here" style="
border: 1px solid #818a91;">
</div>
<div class="col-md-6 col-sm-6">
<label for="Member Id" style="
font-family: "Roboto", sans-serif;
">Member Id
</label>
<input type="Member Id" class="form-control" id="email" name="member"
placeholder="e.g., JD" style="
border: 1px solid #818a91;">
</div>

<div class="col-md-6 col-sm-6">
<label for="telephone" name="Additional" style="
font-family: "Roboto", sans-serif;
">Additional Test Quantity?
</label>
<input type="tel" class="form-control" id="phone" name="testqty" placeholder="Enter a number"style="
border: 1px solid #818a91;">

</div>


<div class="col-md-12 col-sm-12">
<label for="select" style="
font-family: "Roboto", sans-serif;
">Test Type</label>
<select class="form-control" name="testtype"  style="
border: 1px solid #818a91;
">
<option value="Drive Thru">Drive Thru</option>
<option value="At Home">At Home</option>
<option value="Pre-flight">Pre-flight</option>
<option value="Corporate Partnership">Corporate Partnership</option>

</select>
</div>


<div class="col-md-12 col-sm-12">

<br>
<!-- <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> -->
<label for="vehicle1" style="
color: black;
font-weight: 500;
font-size: 18px;
"> I declare that the information I have provided is accurate and complete</label><br>

<br>
<button type="submit" class="form-control" id="cf-submit" name="submit">Send</button>
</div>
</div>
</form>
</div>

</div>
</div>
</section>

<br>
<br>
<br>
<br>


<?php include 'footer.php';?>