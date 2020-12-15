<?php
require("includes/connection.php");
$msg='';
if(isset($_POST['submit']))
{

$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password =($password);

// Query checks if the email and password are present in the database.
$query = "SELECT id, email FROM user WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
   $msg="Please enter correct login details";
} else {
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: products.php');
}}
?>
<!doctype HTML>
<html>
<head>
<title>Home | PetsWorld</title>
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
 background-image: url(img/b2.jpg);
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
<!---------------Nav----------------------------------------------------------------------------------->   
    <div id="h1" style="padding-top:98px;">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-6">
                        <div class="panel panel-primary" >
                            <div class="panel-heading" style="color:#ff52eb;background-color:black">
                                <h4>LOGIN &nbsp;<span class="glyphicon glyphicon-log-in"></span></h4>
                            </div>
                            <div class="panel-body">
                                <form action="login.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br>
                                    <div style="color:red;margin-top: 15px;"><?php echo $msg;?></div>
                                </form>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<br><br><br>
         <footer style="margin-top:220px;bottom:0px;position:fixed;">
    <div class="container" >
        <center>
            <p>Copyright &copy; PETS <i class="fas fa-paw"></i>  WORLD |  Contact Us: +91 90000 00000</p>	
        </center>
    </div>
</footer>
    </body>
</html>
