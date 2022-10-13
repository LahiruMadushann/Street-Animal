<?php


    require './database_connector.php';
    require './functions.php';

    $user_id=$_GET['id']; 
/*--- IF THE USER NOT LOG IN ---*/


    if( isset($_POST['password_old'])&&
        isset($_POST['password'])&&
        isset($_POST['password_again'])){
            $password_old =  $_POST['password_old'];
            $password =  $_POST['password'];
            $password_again =  $_POST['password_again'];
            $password_hash = md5($password);
            $password_hash_old = md5($password_old);
            
        

        /*--- ENCRYPTING THE PASSWORD ---*/
       

        if(!empty($password_old)&&!empty($password)&&!empty($password_again)){

            /*--- CHECKING THE MAXIMUM LENGTH ---*/
           
                
                if ($password!=$password_again){
                    echo 'Passwords do not match';
                }else{

                    /*--- CHECKING USERNAME DUPLICATION ---*/
                    
                    $query = "SELECT `password` FROM `user_login` WHERE `password`='$password_hash_old' AND `user_id`=$user_id";
                    $query_run = mysqli_query($con,$query);

                    if (mysqli_num_rows($query_run)==1){
   
                        $query2="UPDATE `user_login` SET password='$password_hash' WHERE `user_id`=$user_id";
                        $query_run = mysqli_query($con,$query2);
                        echo "<script type='text/javascript'>alert('Succesfully Update The Password');location='user.php';</script>";
                        
                    }else{
                        echo "<script type='text/javascript'>alert('The password does not match exists');location='user.php';</script>";
                        
                        
                       
                  
                        
                    }
                }
            }

        }else{
            echo "All fields are required";
        }
 



/*--- IF THE USER LOG IN ---*/

?>