<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link href="bootstrap-5.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="HomePage.css?v=<?php echo time(); ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body >
  <div>
    <nav class="navbar navbar-expand shadow p-3 mb-5 bg-white rounded "  >
        <div class="container mt-2 mb-2"  >
          <a href="HomePage.php" class="navbar-brand" >
            <!-- Logo Image -->
            <img src="logo.png" width="65vw" height="50vw" alt="" class="d-inline-block align-middle mr-2 ">
            <!-- Logo Text -->
            <span class="text-uppercase font-weight-bold" style="color: #00a8dd;">BE A HOME</span>
          </a>
      
        

      

      
          <div id="navbarSupportedContent" class="collapse navbar-collapse navReSize2 navSize" >
            <ul class="navbar-nav ml-auto ">
             
              <li class="nav-item " ><a href="#" class="nav-link"><span class="navColor">About</span></a></li>
              <li class="nav-item"><a href="#" class="nav-link"><span class="navColor">Services</span></a></li>
              <li class="nav-item"><a href="#" class="nav-link"><span class="navColor">Contact</span></a></li>
            </ul>
            <a href="login_form.php"><input class='btn btn-primary rounded-pill  btn-main-w ms-3'  type='button' name='login'   value='Login' /></a>
            <a href="registration_form.php"><input class='btn btn-primary rounded-pill btn-main-w ms-3' type='button' name='login' class='button' value='Register' /></a>
          </div>
        </div>
      </nav>
    </div>

<section>
<!-- Registration Form -->
<div class="container" style="height:2rem">
        </div>
        <div class="container text-center mt-3">
            <h1 class="text-secondary">REGISTER NOW</h1>
          </div>
          
            <div class="container mt-3 mb-5 shadow" style="width:800px">


        <div class="tab-content" id="nav-tabContent">

     
          <div class="tab-pane fade show active" id="nav-petowner" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

            <form action="userDisplay.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                        <div class="row">
                                <div class="col-md mt-3">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">First Name</label>
                                        <input class="form-control" id="firstname" aria-describedby="firstname" type="text" name="firstname" placeholder="first name " value="<?php if(isset($firstname)){ echo $firstname; } ?>" required>
                                    </div>
                                </div>
                                <div class="col-md mt-3">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Last Name</label>
                                        <input class="form-control" id="lastname" aria-describedby="username" type="text" name="lastname" placeholder="last name " value="<?php if(isset($lastname)){ echo $lastname; } ?>" required >
                                    </div>
                                </div>
                        </div>  

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="example@gmail.com" value="<?php if(isset($email)){ echo $email; } ?>" required>
                            </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="username" aria-describedby="username" value="<?php if(isset($username)){ echo $username; } ?>" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="enter password" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="Cpassword" name="password_again" placeholder="confirm password" required>
                    </div>
            
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" onclick="showhide()">
                            <label class="form-check-label" for="show-pw" >Show Password</label>
                        </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="female" name="gender" value="Female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea type="address" rows="2" name="address" id="address" class="form-control" value="<?php if(isset($address)){ echo $address; } ?>" required></textarea>
                            </div>

                            <div class="mb-3">

<label for="district" class="form-label">Select District </label>
<select class="form-select " name="district" >
    <option value="Matara">Matara</option>
    <option value="Colombo">Colombo</option>
    <option value="Kalutara">Kalutara</option>
    <option value="Anuradhapura">Anuradhapura</option>
    <option value="Polonnaruwa">Polonnaruwa</option>
    <option value="Matale">Matale</option>
    <option value="Kandy">Kandy</option>
    <option value="Nuwara Eliya">Nuwara Eliya</option>
    <option value="Puttalam">Puttalam</option>
    <option value="Kurunegala">Kurunegala</option>
    <option value="Kegalle">Kegalle</option>
    <option value="Ratnapura">Ratnapura</option>
    <option value="Jaffna">Jaffna</option>
    <option value="Kilinochchi">Kilinochchi</option>
    <option value="Mannar">Mannar</option>
    <option value="Mullaitivu">Mullaitivu</option>
    <option value="Vavuniya">Vavuniya</option>
    <option value="Trincomalee">Trincomalee</option>
    <option value="Batticaloa">Batticaloa</option>
    <option value="Ampara">Ampara</option>
    <option value="Badulla">Badulla</option>
    <option value="Monaragala">Monaragala</option>
    <option value="Hambantota">Hambantota</option>
    <option value="Gampaha">Gampaha</option>
    <option value="Galle">Galle</option>
</select>

</div>


                    <div class="mb-3">
                        <label for="phone" class="form-label">Mobile No</label>
                        <input type="text" class="form-control" id="phone" placeholder="mobile number" aria-describedby="phone" type="tel" placeholder="0713456789" pattern="[0-9]{10}" name="phone" value="<?php if(isset($phone)){ echo $phone; } ?>" required>
                    </div>

                    <div class="mb-3">
                       <label for="propic" class="form-label">Profile Picture</label> 
                       <input type="file" id="propic" name="propic" class="form-control" required>
                    </div>
            
              <input type="submit" class="btn btn-primary btn-main mb-3 mt-3" value="Submit">
              <input type="reset" class="btn btn-secondary mb-3 mt-3 ms-3" style="border-radius:30px" value="Reset">
              <a href="login_form.php" class="ms-3">Login</a>
            </form>
          </div>
        </div>
</section>

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
  var y = document.getElementById("Cpassword");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}

function showhidep() {
  var x = document.getElementById("hpassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  var y = document.getElementById("hCpassword");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
</script>

</body>
</html>