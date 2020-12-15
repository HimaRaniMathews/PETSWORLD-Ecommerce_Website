<?php

require("includes/connection.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE user_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>
<!doctype HTML>
<html>
<head>
<title>Success | PetsWorld</title>
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
 background-image: url(img/t.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
         
    </style>  
</head>
<body style="padding-top: 50px;">
     <?php
        include 'includes/header.php';
        ?><br>
    <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron" style="background-color:#f5b0e5;">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <footer style="margin-top:190px;">
    <div class="container" >
        <center>
            <br>
            <p>Copyright &copy; PETS <i class="fas fa-paw"></i>  WORLD |  Contact Us: +91 90000 00000</p>	
        </center>
    </div>
</footer>
    </body>
</html>