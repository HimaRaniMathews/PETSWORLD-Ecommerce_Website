<?php
require("includes/connection.php");
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['e-mail'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);



  $query = "SELECT * FROM user WHERE email='$email'";
  $result = mysqli_query($con, $query)or die(mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  }  else {
    
    $query = "INSERT INTO user(name, email, password, contact, city)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: products.php');
  }
}
?>
<!doctype HTML>
<html>
<head>
<title>SIGNUP | PetsWorld</title>
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
 background-image: url(img/b1.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
         
    </style>  
</head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid decor_bg" id="content" style="padding: 20px;margin: 0px;">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-2 col-md-6 col-md-offset-2">
                        <h2 style="color:#21edff">SIGN UP &nbsp;<span class="glyphicon glyphicon-user"></span></h2>
                        <form  action="signup.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" >
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"   name="e-mail" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer style="margin-top:220px;bottom:0px;position:fixed;">
    <div class="container" >
        <center>
            <p>Copyright &copy; PETS <i class="fas fa-paw"></i>  WORLD |  Contact Us: +91 90000 00000</p>	
        </center>
    </div>
</footer>
    </body>
</html>