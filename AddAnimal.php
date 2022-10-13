<?php
session_start();

require 'database_connector.php';
require 'functions.php';
$email = "";
$username = "";
$errors = array();
$user_id=$_GET['id'];

    if( 
        isset($_POST['category'])&&
        isset($_POST['phone'])&&
        isset($_POST['district'])&&
        isset($_POST['address'])&&
        isset($_FILES['propic'])){
            $category =  $_POST['category'];
            $phone =  $_POST['phone'];
            $address =  $_POST['address'];
            $district =  $_POST['district'];
            $image = $_FILES['propic'];

            $imagefilename = $image['name'];
            
            $imagefileerror = $image['error'];
            
            $imagefiletemp = $image['tmp_name'];
            
            $filename_separate = explode('.',$imagefilename);
            
            $file_extension = strtolower(end($filename_separate));

            $upload_images = 'Animal_Image/'.$imagefilename;
            
            move_uploaded_file($imagefiletemp,$upload_images);

        if(!empty($phone)&&!empty($address)&&!empty($district)&&!empty($upload_images)){

                        //INSERTING VALUES TO THE ANIMAL DETAIL TABLE
                        $query2 = "INSERT INTO `animal_detail` VALUES (NULL,$user_id,'".mysqli_real_escape_string($con,$category)."','".mysqli_real_escape_string($con,$upload_images)."','".mysqli_real_escape_string($con,$district)."','".mysqli_real_escape_string($con,$address)."','".mysqli_real_escape_string($con,$phone)."','deactivated')";

                        if(($query_run2 = mysqli_query($con,$query2))){

                          $message = "Successful Addes Your Animal";
                          echo "<script type='text/javascript'>alert('$message');location='AddAnimalForm.php';</script>";
                      

                    }   

                        
               

        }else{
            echo "<script type='text/javascript'>alert('All fields are required');</script>";
           
        }
    }


?>