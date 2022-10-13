<?php

require '../core.php';
require '../database_connector.php';
require '../functions.php';

    if(isset($_GET['user_id'])){

        $u_id=$_GET['user_id'];
    
        $query3="DELETE FROM `userdetail` WHERE user_id=$u_id";
        $query_run = mysqli_query($con,$query3);

        $query4="DELETE FROM `user_login` WHERE user_id=$u_id";
        $query_run = mysqli_query($con,$query4);

       

        header("Location: RegisteredUsers.php");
    
      }else{
        header("Location: RegisteredUsers.php");
      }

?>