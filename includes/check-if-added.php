<?php

function check_if_added_to_cart($item_id) {
    $user_id = $_SESSION['user_id']; 
     require("connection.php");
    $query = "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    if (mysqli_num_rows($result) >= 1) {
        return 1;
    } else {
        return 0;
    }
}

?>