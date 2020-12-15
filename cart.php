<?php
require("includes/connection.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<!doctype HTML>
<html>
<head>
<title>My Cart | PetsWorld</title>
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
 background-image: url(img/r.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
         
    </style>  
</head>
<body style="padding-top: 50px;">
    <div class="container-fluid" id="content">
     <?php
        include 'includes/header.php';
        ?><br><br>
            <div class="row ">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table  table-striped  bg-info">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM user_items JOIN items ON user_items.item_id = items.id WHERE user_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                       $id="";
                                    $id .= $row["id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td></tr><tr><tr><tr><td></td><td><center><a href='success.php?itemsid=" . $id . "' class='btn btn-primary' >Confirm Order</a></center></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo '<h1 style="color:#21edff";>Add items to the cart first!</h1>';
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
    <footer style="margin-top:220px;bottom:0px;position:fixed;">
    <div class="container" >
        <center>
            <br>
            <p>Copyright &copy; PETS <i class="fas fa-paw"></i>  WORLD |  Contact Us: +91 90000 00000</p>	
        </center>
    </div>
</footer>
    </body>
</html>