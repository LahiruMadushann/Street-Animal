<?php 
require 'core.php';
require 'database_connector.php';

if(isset($_POST['username'])&&isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $password_hash = md5($password);
    // $password_hash = password_hash($password, PASSWORD_BCRYPT);
    
    if(!empty($username)&&!empty($password)){

        //QUERY TO CHECK THE USER LOGIN DETAILS
        $query_u="SELECT `user_id` FROM `user_login` WHERE `username`= '$username' AND `password`= '$password_hash' AND `status`= 'verified'";


        //QUERY TO CHECK THE ADMIN LOGIN DETAILS
         $query_a="SELECT `admin_id` FROM `login_admin` WHERE `username`= '$username' AND `password`= '$password_hash'";

        //CHECKING THE USER LOGIN DETAILS
        if($query_run_u = mysqli_query($con,$query_u)){
         $query_num_rows_u = mysqli_num_rows($query_run_u);

            if($query_num_rows_u==0){

              if($query_run_a = mysqli_query($con,$query_a)){
                $query_num_rows_a = mysqli_num_rows($query_run_a);
                
        
                    if($query_num_rows_a==0){
                      echo "<script type='text/javascript'>alert('Username Or Password Incorrect');</script>";
                    }
        
                    else if($query_num_rows_a==1){
        
                        /*  FETCHING THE DATA FROM THE DATABASE */ 
                        while ($admin_id = mysqli_fetch_assoc($query_run_a)){
                            $id = $admin_id['admin_id'];
                            $_SESSION['id'] = $id;
                            header("Location: admin/adminPanel.php");
                        }
                                                          
                    }
                
                }else{
                  echo "<script type='text/javascript'>alert('Error');</script>";
                }

            }
            
            else if($query_num_rows_u==1){

                /*  FETCHING THE DATA FROM THE DATABASE */ 
              while ($userid = mysqli_fetch_assoc($query_run_u)){
                  $id = $userid['user_id'];
                  $_SESSION['id'] = $id;
                  header("Location: HomePage.php");
              }
            }  else{
              echo "<script type='text/javascript'>alert('Password incorrect');</script>";
            }          

        }else{
          echo "<script type='text/javascript'>alert('Error');</script>";
        }

    }else{
      echo "<script type='text/javascript'>alert('Fill all the fields');</script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="index.css">

  <title>Login</title>
  <link rel="shortcut icon" href="logo.png" type="image/x-icon">
</head>
<body>

    <link href="bootstrap-5.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <link rel="stylesheet" href="HomePage.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="StreetAnimal.css?v=<?php echo time(); ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Street Animal</title>
 
</head>
<body style="background-color: ghostwhite;">  
<div>
    <nav class="navbar navbar-expand shadow p-3 mb-5 bg-white rounded "  >
        <div class="container mt-2 mb-2"  >
          <a href="HomePage.php" class="navbar-brand" >
            <!-- Logo Image -->
            <img src="logo.png" width="65vw" height="50vw" alt="" class="d-inline-block align-middle mr-2 ">
            <!-- Logo Text -->
            <span class="text-uppercase font-weight-bold" style="color: #00a8dd;">BE A HOME</span>
          </a>
      
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span>
   
          </button>

      

      
          <div id="navbarSupportedContent" class="collapse navbar-collapse navReSize mediumNavSize" style="padding-left: 52%;">
            <ul class="navbar-nav ml-auto ">
             
              <li class="nav-item " ><a href="#" class="nav-link"><span class="navColor">About </span></a></li>
              <li class="nav-item"><a href="#" class="nav-link"><span class="navColor">Services</span></a></li>
              <li class="nav-item"><a href="#" class="nav-link"><span class="navColor">Contact</span></a></li>
            </ul>
            <a href="login_form.php"><input class='btn btn-primary rounded-pill navButton btn-main-w ms-3'  type='button' name='login'   value='Login' /></a>
            <a href="registration_form.php"><input class='btn btn-primary rounded-pill navButton btn-main-w ms-3' type='button' name='login' class='button' value='Register' /></a>
          </div>
        </div>
      </nav>
    </div>

    <section>    

           <!-- Login form -->
           <div class="container" style="height:1rem">
        </div>
        
        <section class="p-5">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md">
                    <img class="img-fluid d-none d-sm-block" src="loginPuppy.png" alt="log-bg">
                    </div>

                    <div class="col-md">

                    <div class="container text-center mt-3">
                    <h1 class="text-secondary">LOGIN NOW</h1>
                </div>

            <div class="container mt-3 shadow" style="width:500px">
            <form action="<?php echo $current_file ?>" method="POST" autocomplete="off">
            <div class="mb-3">
                <label class="mt-3" for="username" class="form-label">Username </label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="username">
                <div id="emailHelp" class="form-text">Enter your registered username.</div>
             </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password </label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" onclick="showhide()">
                <label class="form-check-label" for="show-pw" >Show Password</label>
            </div>
            <input type="submit" class="btn btn-primary btn-main mb-3 mt-3" value="Login">
            <input type="reset" class="btn btn-secondary mb-3 mt-3 ms-1" style="border-radius:30px" value="Reset">
            
            <a href="registration_form.php" class="ms-3">Register</a>
            </form>
            </div>

                    </div>
                </div>
            </div>
        </section>
        
                
            
            <!-- Footer -->
            <section >

<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted shadow p-3 " >
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>BE A HOME
          </h6>
          <p>
          <img src="LOGO.png" alt="LOGO" style="width:8vw;height:7vw;">
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
              OUR VISION
          </h6>
          
          <p>
          Our vision is to save the lives of the homeless and unwanted companion animals of Sri Lanka.

          </p>
         
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Our Web Site
          </h6>
          <p>
            <a href="About.php" class="text-reset footerText">About</a>
          </p>
          <p>
            <a href="Services.php" class="text-reset footerText">Services</a>
          </p>
          <p>
            <a href="ContactUs.php" class="text-reset footerText">Contact Detail</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Premananda MW, Madiha, Matara</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            beAHome@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> 076 52 59 905</p>
          
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color:#8bc53f ;color: white;">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="" style="text-decoration: none;">Kulathunga.com</a>
  </div>
  
</footer>
<!-- Footer -->

<!-- #8bc53f -->
<!-- rgba(0, 0, 0, 0.05) -->


</section>
        
        

<script>
  function showhide() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>

</html>