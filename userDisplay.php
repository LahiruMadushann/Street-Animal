<?php
session_start();

require 'database_connector.php';
require 'functions.php';
$email = "";
$username = "";
$errors = array();

/*--- IF THE USER NOT LOG IN ---*/
if(!loggedin()){

    if( isset($_POST['username'])&&
        isset($_POST['password'])&&
        isset($_POST['password_again'])&&
        isset($_POST['firstname'])&&
        isset($_POST['lastname'])&&
        isset($_POST['gender'])&&
        isset($_POST['email'])&&
        isset($_POST['phone'])&&
        isset($_POST['district'])&&
        isset($_POST['address'])&&
        isset($_FILES['propic'])){
            $username =  $_POST['username'];
            $password =  $_POST['password'];
            $password_again =  $_POST['password_again'];
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


        if(!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($firstname)&&!empty($lastname)&&!empty($gender)&&!empty($email)&&!empty($phone)&&!empty($address)&&!empty($district)&&!empty($upload_images)){

            /*--- CHECKING THE MAXIMUM LENGTH ---*/
            if(strlen($username)>30||strlen($firstname)>20||strlen($lastname)>20||strlen($phone)>10){
                echo "<script type='text/javascript'>alert('Please look to maxlength of fields');location='registration_form.php';</script>";
            }else{  
                
                if ($password!=$password_again){
                    echo "<script type='text/javascript'>alert('Passwords do not match');location='registration_form.php';</script>";
                    
                }else{

                    /*--- CHECKING USERNAME DUPLICATION ---*/
                    $query = "SELECT `username` FROM `user_login` WHERE `username`='$username'";
                    $query_run = mysqli_query($con,$query);
                    
                    if (mysqli_num_rows($query_run)==1){
                      
                        echo "<script type='text/javascript'>alert('The username  already exists.');location='registration_form.php';</script>";
                        
                    }else{

                        $query2 = "INSERT INTO `userdetail` VALUES (NULL,'".mysqli_real_escape_string($con,$phone)."','".mysqli_real_escape_string($con,$district)."','".mysqli_real_escape_string($con,$firstname)."','".mysqli_real_escape_string($con,$lastname)."','".mysqli_real_escape_string($con,$gender)."','".mysqli_real_escape_string($con,$address)."','".mysqli_real_escape_string($con,$email)."','".mysqli_real_escape_string($con,$upload_images)."')";

                        if(($query_run2 = mysqli_query($con,$query2))){

                        $username1 =  mysqli_real_escape_string($con,$_POST['username']);
                        $password1 =  mysqli_real_escape_string($con,$_POST['password']);
                        $encpass = md5($password);
                        $code = rand(999999, 111111);
                        $status = "verified";
                        
                        


                        $insert_data = "INSERT INTO user_login (username, password, code, status)
                                        values('$username1','$encpass', '$code', '$status')";
                        $data_check = mysqli_query($con, $insert_data);
                        if($data_check){
                            $subject = "Email Verification Code";
                            $message = "Your verification code is $code";
                            $sender = "From: beahome12@gmail.com";
                            if(mail($email, $subject, $message, $sender)){
                                $info = "We've sent a verification code to your email - $email";
                                $_SESSION['info'] = $info;
                                $_SESSION['email'] = $email;
                                $_SESSION['password'] = $password;
                                $message = "Successfully Registered";
                                echo "<script type='text/javascript'>alert('$message');location='user-otp.php';</script>";
                                exit();
                            }else{
                                $errors['otp-error'] = "Failed while sending code!";
                            }
                        }else{
                            $errors['db-error'] = "Failed while inserting data into database!";
                        }

                    }   

                        
                    }
                }
            }

        }else{
            echo "<script type='text/javascript'>alert('All fields are required');location='login_form.php';</script>";
            
        }
    }

}


?>