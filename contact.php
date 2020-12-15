<?php
include "includes/connection.php";
if(isset($_POST['submit']))
{
    $name       = @trim(stripslashes($_POST['name']));
    $email      = @trim(stripslashes($_POST['email']));
    $message    = @trim(stripslashes($_POST['message']));

    $email_from = $email;
    $email_to = 'himaranimathews@gmail.com';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
}
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us | PETSWORLD</title>
        <link rel = "icon" href ="https://www.petsworld.in/pub/media/favicon/stores/1/pets.png" 
        type = "image/x-icon"> 
    <script src="https://kit.fontawesome.com/f4bbad3365.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link type="text/css" rel="stylesheet" href="css/style.css">
   <style>
    body { 
 background-image: url(img/u.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
         
    </style>  
</head>
<body style="padding-top: 50px;">
     <?php
        include 'includes/header.php';
        ?>
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-10">
		  <h1 class="title">LIVE SUPPORT</h1>
		  <h2>24 hours|7 days a week| 365 days <br>a year Live Technical Support</h2>
         
      </div>
        <div class="col-sm-2">
         <img align="right" src="img/contact.png"  alt="contact us">
        </div>
    </div>
    

<div class="row">
    <div class="col-sm-9">
        <div class="contact-form">
            <h2>Get In Touch</h2>
	           <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="contact.php">
				    
                    <div class="form-group col-sm-9">
				        <input type="text" name="name" class="form-control" required="required" placeholder="Name" >
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
				    </div>
				            
                    <div class="form-group col-sm-7">
				                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
				    </div>
				</form>
        </div>
    </div>
	    		
        <div class="col-sm-3">
	       <div class="contact-info">
	           <h2 class="title">Contact Info</h2>
	               <address>
				    <p>Pets <i class="fas fa-paw"></i> World Shop,</p>
				    <p>Thodupuzha,Idukki</p>
				    <p>Kerala,India</p>
				    <p>Phone:(+91) 9447511526</p>
				    <p>Pin:685585</p>
				    <p>Email:petworldhima@gmail.com</p>
	               </address>
	               
	            <div><h2 class="title">Follow Us On&#58;</h2>
                   <a href="http://www.facebook.com/petsworld" target="_blank"><img src="./img/logofb.png" alt="fb logo" style="width:30px; height:30px; border:0"></a>
                   <a href="http://www.twitter.com/petsworld" target="_blank"><img src="./img/logotwitter.png" alt="twitter logo" style="width:30px; height:30px; border:0 padding-left:10px;"></a>
               </div>
            </div>
        </div>
    </div>
</div>
      <?php include 'includes/footer.php'; ?>
    </body>
</html>
