<?php
require("includes/connection.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
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
</head>
<body style="padding-top: 50px;">
     <?php
        include 'includes/header.php';
        ?>
<!--------Slide------------------------------------------------------------------------------------>
    <div id="c1">
        <div id="c2">
             <a href=products.php><img class="mySlides" src="img/1.jpg" style="width:100%"></a>
             <a href=products.php><img class="mySlides" src="img/2.jpg" style="width:100%"></a>
             <a href=products.php><img class="mySlides" src="img/3.png" style="width:100%"></a>
             <a href=products.php><img class="mySlides" src="img/4.jpg" style="width:100%"></a>
        </div>
    </div>
<!-----------Category----------------------------------------------------------------------------------->   
<div class="container-fluid" style="padding-bottom: 30px;">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-3">
                        <a href="product.html#cat" >
                            <div class="thumbnail">
                                <img src="img/c.jfif" alt="" style="height: 200px;width: 100%">
                                <div class="caption">
                                    <h3 id="cap">CATS</h3>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="product.html#fish" >
                            <div class="thumbnail">
                                <img src="img/f.jfif" alt="" style="height: 200px;width: 100%">
                                <div class="caption">
                                    <h3 id="cap">FISHS</h3>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="product.html#bird" >
                            <div class="thumbnail">
                                <img src="img/w.jpg" alt="" style="height: 200px;width: 100%">
                                <div class="caption">
                                    <h3 id="cap">BIRDS</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    
                    <div class="col-sm-3">
                        <a href="product.html#dog" >
                            <div class="thumbnail">
                                <img src="img/d.jfif" alt="" style="height: 200px;width: 100%">
                                <div class="caption">
                                    <h3 id="cap">DOGS</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
  <!--Footer---------------------------------------------------------------->
        <?php
        include 'includes/footer.php';
        ?>

<!-----------SCRIPT------------------------------------------------------------------------------------------->   
<script>
var slideIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) 
  { slideIndex = 1
  } 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 4000); 
}
</script>
</body>
</html>
