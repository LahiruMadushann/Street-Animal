<?php

    require '../database_connector.php';
    require '../functions.php';

    if( isset($_POST['password_old'])&&
        isset($_POST['password'])&&
        isset($_POST['password_again'])){
            $password_old =  $_POST['password_old'];
            $password =  $_POST['password'];
            $password_again =  $_POST['password_again'];
            
        

        /*--- ENCRYPTING THE PASSWORD ---*/
        $password_hash = md5($password);
        $password_hash_old = md5($password_old);
       
       

        if(!empty($password_old)&&!empty($password)&&!empty($password_again)){
    
                if ($password!=$password_again){
                    echo "<script type='text/javascript'>alert('Passwords do not match');</script>";
                
                }else{

                 $query = "SELECT `password` FROM `login_admin` WHERE `password`='$password_hash_old'";
                    $query_run = mysqli_query($con,$query);

                    if (mysqli_num_rows($query_run)==1){
                        $password1 =  mysqli_real_escape_string($con,$_POST['password']);
                        
                        $query2="UPDATE `login_admin` SET password='$password_hash' WHERE username='Admin'";
                        $query_run = mysqli_query($con,$query2);
                        echo "<script type='text/javascript'>alert('Succesfully Update Your Password');</script>";
                        header("Location: ChangePassword.php");
                    }else{
                        echo "<script type='text/javascript'>alert('Username Or Password Incorrect');</script>";
                        
                      
                    }
                }
            }

        }else{
            echo "<script type='text/javascript'>alert('All fields are required');</script>";
          
        }


?>