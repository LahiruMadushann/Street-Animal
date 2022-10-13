<?php

require '../core.php';
require '../database_connector.php';
require '../functions.php';

    if(isset($_GET['animal_id'])){

        $a_id=$_GET['animal_id'];
    
        $query3="UPDATE `animal_detail` SET status='activated' WHERE animal_id=$a_id";
        
        $query_run = mysqli_query($con,$query3);

       

        header("Location: DeactivatedAnimals.php");
    
      }else{
        header("Location: DeactivatedAnimals.php");
      }

?>