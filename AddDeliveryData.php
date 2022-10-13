<?php

require './database_connector.php';
require './functions.php';
require './core.php';
$animal_id=$_GET['id'];

if(loggedin()){

    $user_id = getfield('userdetail','user_id','user_id',$con);
    

    if(isset($_POST['firstname'])&&
    isset($_POST['lastname'])&&
    isset($_POST['email'])&&
    isset($_POST['animalCategory'])&&
    isset($_POST['district'])&&
    isset($_POST['phone'])&&
    isset($_POST['address'])&&
    isset($_POST['phone'])){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $animalCategory = $_POST['animalCategory'];
        $district = $_POST['district'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
    
        if(!empty($firstname)&&!empty($lastname)&&!empty($district)&&!empty($email)&&!empty($phone)&&!empty($animalCategory)){

       
                    $query = "INSERT INTO `puppy_delivery_detail` VALUES (NULL,$animal_id,'".mysqli_real_escape_string($con,$firstname)."','".mysqli_real_escape_string($con,$lastname)."','".mysqli_real_escape_string($con,$email)."','".mysqli_real_escape_string($con,$animalCategory)."','".mysqli_real_escape_string($con,$district)."','".mysqli_real_escape_string($con,$address)."','".mysqli_real_escape_string($con,$phone)."')";
                    $query2 = "SELECT `user_id` FROM `animal_detail` WHERE `animal_id` = $animal_id";
                   

                    $query3="UPDATE `animal_detail` SET `status`='deactivated' WHERE `animal_id` =$animal_id";


                    $query_run1 = mysqli_query($con,$query2);
                    while ($row = mysqli_fetch_assoc($query_run1)){
                        $userID = $row['user_id'];
                       
                    }
                    $query4="SELECT * FROM `userdetail` WHERE `user_id`=$userID";
                    $query_run2 = mysqli_query($con,$query4);
                    while ($row = mysqli_fetch_assoc($query_run2)){
                        $uphone_number=$row['phone_number'];
                        $ufirstname = $row['firstname'];
                        $ulastname = $row['lastname'];
                        $uaddress = $row['address'];
                        $uemail = $row['email'];
                     
                    }
                    $fullName = $ufirstname . ' ' . $ulastname;
                    mysqli_query($con,$query3);
                    if($query_run = mysqli_query($con,$query)){
                            $subject = "Hey You Got A Puppy";
                            $message = "Congratulations You Got A Puppy We Deliver Your Puppy Soon \r\n
                                        Your Puppy Owner Detail \r\n
                                         Name : $fullName \r\n
                                         Mobile No : $uphone_number \r\n
                                         Address : $uaddress \r\n
                                         Email : $uemail \r\n";
                            $sender = "From: beahome12@gmail.com";
                            if(mail($email, $subject, $message, $sender)){
                                $info = "We've sent a verification code to your email - $email";
                                $_SESSION['info'] = $info;
                                $_SESSION['email'] = $email;
                                
                               
                            }else{
                                $message = "Failed while sending Email!";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                               
                            }
                                                
                        $message = "Successful Deliver Your Puppy";
                        echo "<script type='text/javascript'>alert('$message');location='payment.php';</script>";
                        

                    }else{
                        echo "<script type='text/javascript'>alert('Error in database');</script>";
                    }
                }

            }       


}else{
    header("Location: HomePage.php");
}

?>