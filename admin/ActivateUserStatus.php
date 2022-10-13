<?php

require '../core.php';
require '../database_connector.php';
require '../functions.php';

    if(isset($_GET['user_id'])){

        $u_id=$_GET['user_id'];
    
        $query3 = "UPDATE user_login SET status='verified' WHERE user_id=$u_id";
        $query_run = mysqli_query($con,$query3);

        header("Location: DeactivatedUsers.php");
    
      }else{
        header("Location:  DeactivatedUsers.php");
      }

?>