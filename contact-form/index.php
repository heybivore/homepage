<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'vendor/phpmailer/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/phpmailer/src/SMTP.php';
  $mail = new PHPMailer(true);
  $output = '';
  $addresses='';
  $transac = '';
  $attach='';
  
  $connect=mysqli_connect("localhost","root","","learndb") or die("connect");

  if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      $phone = $_POST['phone'];
      $office = $_POST['office'];

  try {
        //Transaction Number
        $transac = uniqid();
        //DB INSERT DATA
        $sql= "INSERT INTO verify (`name`,`mobile`,`email`,`office_src`,`subject`,`message`,`attachments`,`transac_no`) VALUES ('$name','$phone','$email','$office','$subject','$message','$attach','$transac')";

        if (mysqli_query($connect, $sql)) {
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($connect);
            }
            die();
        //EMAIL REPLY TO CLIENT
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        // Gmail ID which you want to use as SMTP server
        $mail->Username = 'caro@davaocity.gov.ph';
        // Gmail Password
        $mail->Password = 'carc_E39';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->AllowEmpty = true;

        // Email ID which you want to send the email
        $mail->setFrom('caro@davaocity.gov.ph');
        // Recipient/s Email ID where you want to receive emails
        $addresses = explode(',',$email);
          foreach ($addresses as $address) {
                $mail->AddAddress(trim($address));
               }



        $mail->isHTML(true); 
        //Attachment for Email
          foreach ($_FILES["attachment"]["name"] as $k => $v) { 
             if($_FILES["attachment"]["name"][$k] != ""){
              $mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
            }
          }
         
        //Subject for Email
        $mail->Subject = 'CARO Email Test';
        //Body for Email
        $mail->Body = "<h3> Thank you for availing our services. Your Transaction number is : $transac </h3>";

        $mail->send();
        $output = '<div class="alert alert-success">
                    <h5>Email sent succesfully!</h5>
                  </div>';


      } 

  catch (Exception $e) {
        $output = '<div class="alert alert-danger">
                    <h5>' . $e->getMessage() . '</h5>
                  </div>';
      }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="device-width, initial-scale=1" charset="UTF-8">
	<title>CARO Email System</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">

   <style>
	    body{
	    	background-image: url(image/back.jpg);
	    	background-size:cover;
	    }
	    hr{
	    	background: white;	
	    }

		.contact-form{
			background:rgba(0,0,0, .6);
			color:white;
			margin-top: 100px;
			padding: 20px;
			box-shadow: 0px 0px 10px 3px grey;
		}
    .map-responsive{
      overflow:hidden;
      padding-bottom:56.25%;
      position:relative;
      height:0;
    }
    .map-responsive iframe{
      left:0;
      top:0;
      height:100%;
      width:100%;
      position:absolute;
    }
   </style>


</head>
<body>

<div class="container contact-form">
	<h1>City Archives and Records Office</h1>
  <p><a href="https://time.is/Davao_City" id="time_is_link" rel="nofollow" style="font-size:15px;color:white">Date: </a>
    <span id="Davao_City_z42c" style="font-size:15px;color:white"></span>
    <script src="//widget.time.is/en.js"></script>
    <script>
    time_is_widget.init({Davao_City_z42c:{template:"DATE <br> TIME ", time_format:"12hours:minutes:seconds AMPM", date_format:"monthname monthnum, year"}});
    </script>
  </p>
	<hr>
	<div class="row">
      <form action="#" method="POST" enctype="multipart/form-data">
           <div class="form-group">
             <?= $output; ?>
           </div>
          <div class="col-md-13">

            <div class="form-group">
              <label for="office" >Select Type of Document:</label>
              <select name="office" id="office">
                <option value="caro">CARO Document</option>
                <option value="cto">CTO Document</option>
                <option value="cho">CHO Document</option>
                <option value="cmo">CMO Document</option>
              </select>
            </div>

            <div class="form-group">
           	  <label>Name</label>
           	  <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
              <label>Mobile Number</label>
              <input type="tel" class="form-control" id="phone" name="phone" value="09" pattern="^(09|\+639)\d{9}$" required>
            </div>

            <div class="form-group">
           	  <label>Email</label>
           	  <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
              <label>Subject</label>
              <input type="text" name="subject" class="form-control" >
            </div>

            <div class="form-group">
           	  <label>Message</label>
           	  <textarea  name="message" id="message" class="form-control" rows="7" placeholder="Insert text here . . ."></textarea>
            </div>
            <div class="form-group">
            <label>Attachments</label><br /> <input type="file"
                name="attachment[]" class="demoInputBox" multiple="multiple">

            </div>
            <div class="form-group">
              <small>Note: You can add multiple attachments by using Ctrl + Left Mouse Button</small>
            </div>

            <div class="form-group">
               <input type="submit" name="submit" value="Send" id="sendBtn" class="btn btn-primary btn-block" >
            </div>
          </div>
        </form> 
        <br>
        <div class="col-md-6">
        <h2>Contact Us</h2>
        <address>Candelaria, Talomo, Davao City, 8000 Davao del Sur</address>
        <p>Email: caro@davaocity.gov.ph</p>
        <p>Phone: (082) 225-6569</p>
        <div class="map-responsive">
          <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1399.8799211868627!2d125.61735262055755!3d7.072738265767854!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x42c94d2954a8a1b1!2sRecords%20Management%20and%20Archives%20Office%20-%20Davao%20City!5e0!3m2!1sen!2sph!4v1594866629912!5m2!1sen!2sph" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
        </div> 
        <p>
          <br>
          <br>
          <div style="text-align: center;">
            <span align="center" style="font-size: 12px;color: white;"> © 2021 - City Government of Davao</span>
          </div>
          
        </p>
       </div>

         
  </div>
</body>
</html>


<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleString();
</script>