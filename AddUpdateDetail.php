<?php
session_start();

require 'database_connector.php';
require 'functions.php';
$email = "";
$username = "";
$errors = array();

    if( isset($_POST['userID'])&&
        isset($_POST['firstname'])&&
        isset($_POST['lastname'])&&
        isset($_POST['gender'])&&
        isset($_POST['email'])&&
        isset($_POST['phone'])&&
        isset($_POST['district'])&&
        isset($_POST['address'])&&
        isset($_FILES['propic'])){
            $userID=$_POST['userID'];
            $firstname =  $_POST['firstname'];
            $lastname =  $_POST['lastname'];
            $gender =  $_POST['gender'];
            $email =  $_POST['email'];
            $phone =  $_POST['phone'];
            $address =  $_POST['address'];
            $district =  $_POST['district'];
            $image = $_FILES['propic'];

            $imagefilename = $image['name'];
            
            $imagefileerror = $image['error'];
            
            $imagefiletemp = $image['tmp_name'];
            
            $filename_separate = explode('.',$imagefilename);
            
            $file_extension = strtolower(end($filename_separate));

            $upload_images = 'userpics/'.$imagefilename;
            
            move_uploaded_file($imagefiletemp,$upload_images);

        if(!empty($firstname)&&!empty($lastname)&&!empty($gender)&&!empty($email)&&!empty($phone)&&!empty($address)&&!empty($district)&&!empty($upload_images)){

            /*--- CHECKING THE MAXIMUM LENGTH ---*/
            if(strlen($username)>30||strlen($firstname)>20||strlen($lastname)>20||strlen($phone)>10){
              
                $message = "Please look to maxlength of fields";
                echo "<script type='text/javascript'>alert('$message');location='updateDetail.php';</script>";
            }else{  
                

                        //INSERTING VALUES TO THE userdetail TABLE
                        $query2="UPDATE `userdetail` SET user_id='$userID',phone_number='$phone',district='$district',firstname='$firstname',
                        lastname='$lastname',gender='$gender',address='$address',email='$email',district='$district',profile_pic='$upload_images'
                         WHERE user_id=$userID";

                        
                        mysqli_query($con,$query2);
                        if(($query_run2 = mysqli_query($con,$query2))){
                            $message = "Succefully Update Your Data";
                            echo "<script type='text/javascript'>alert('$message');location='user.php';</script>";
                       
                        }else{
                            $message = "Failed while inserting data into database!";
                            echo "<script type='text/javascript'>alert('$message');location='updateDetail.php';</script>";
    
                        }

                    }   

                        
                  
          

        }else{
            $message = "All fields are required";
            echo "<script type='text/javascript'>alert('$message');location='updateDetail.php';</script>";
            
        }
    }


?>