<!---------------Nav----------------------------------------------------------------------------------->   
<div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container" >
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand" style="color:#ff52eb">PETS <i class="fas fa-paw"></i> WORLD </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php 
            if(isset($_SESSION['email']))
                {?>
                <li ><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                <li><a href = "settings.php"><span class= "glyphicon glyphicon-user"></span> Profile</a></li>
                <li><a href = "logout_script.php"><span class= "glyphicon glyphicon-log-in"></span> Logout</a></li>
                <?php
            }else{ 
                ?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php" ><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
                <li><a href="about.php"><span class="glyphicon glyphicon-th-list"></span> About Us</a></li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                        <?php
                    }
                    ?>
            </ul>
            </div>
        </div>
</div>