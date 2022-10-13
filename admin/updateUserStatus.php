<?php

require '../core.php';
require '../database_connector.php';
require '../functions.php';

    if(isset($_GET['user_id'])){

        $u_id=$_GET['user_id'];
    
        $query3 = "UPDATE user_login SET status='notverified' WHERE user_id=$u_id";
        $query_run = mysqli_query($con,$query3);

        

       

        header("Location: RegisteredUsers.php");
    
      }else{
        header("Location: RegisteredUsers.php");
      }

?>