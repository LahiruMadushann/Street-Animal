<?php
   require './core.php';
   require './database_connector.php';
   require './functions.php';

    $animal_id=$_GET['id'];      // animal id

    //OPERATION OF THE LOGIN BUTTON
      if(array_key_exists('login', $_POST)) {
        header("Location: ./login_form.php");
      }

    //OPERATION OF THE REGISTER BUTTON
      if(array_key_exists('register', $_POST)) {
        header("Location: ./registration_form.php");
      }

    //OPERATION OF THE LOGOUT BUTTON
      if(array_key_exists('logout', $_POST)) {
        header("Location: ./logout.php");
      }

    //OPERATION OF THE USER BUTTON
      if(array_key_exists('user', $_POST)) {
        header("Location: ./user.php");
      }

      $query="SELECT * FROM `animal_detail` WHERE `animal_id`= $animal_id";
     

      if($query_run = mysqli_query($con,$query)){

        while ($row = mysqli_fetch_assoc($query_run)){
            
            $picture = $row['picture'];
            $address = $row['address'];
            $contact_no = $row['contact_no'];
            
        }


  }else{
    echo "<script type='text/javascript'>alert('Database Error');</script>";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Detail</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link href="bootstrap-5.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="HomePage.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="AnimalDetail.css?v=<?php echo time(); ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
      
          

      

      
          
            <!-- <a href="login_form.php"><input class='btn btn-primary rounded-pill  btn-main-w ms-3'  type='button' name='login'   value='Login' /></a>
            <a href="registration_form.php"><input class='btn btn-primary rounded-pill btn-main-w ms-3' type='button' name='login' class='button' value='Register' /></a> -->
            <?php
                  if(loggedin()){

                    echo "
                   
 
                   
 
                    <div id='navbarSupportedContent' class='collapse navbar-collapse navSize navReSize' >
                    <ul class='navbar-nav ml-auto' >
                  
                      <li class='nav-item'  ><a href='About.php' class='nav-link'><span class='navColor'>About</span></a></li>
                      <li class='nav-item'><a href='Services.php' class='nav-link'><span class='navColor'>Services</span></a></li>
                      <li class='nav-item'><a href='ContactUs.php' class='nav-link'><span class='navColor'>Contact</span></a></li>
                    </ul>
 
                    <a href ='AddAnimalForm.php'><button type='button' class='btn btn-primary btn-main btn-main-w ms-3 navButton'   >Add Animal</button></a>
                    <form method='post' >

                      <button class='btn    ms-3 navButton buttonOutline'  type='submit' name='user' style='width:4vw;height:5vw;'><img src='userIcon.png'  class='rounded-circle' style='width:4vw;height:3.5vw;margin-right:-2vw;margin-left:-2vw;'></button>
                    
                    </form>
                    <form method='post'>
                    <button class='btn   ms-3  buttonOutline'  type='submit' name='logout' style='width:4vw;height:5vw;' ><img src='logout.png'  class='rounded-circle' style='width:4vw;height:3.5vw;margin-right:5vw;margin-left:-2vw;'></button>
                    
                   </form>
                    </div>
                    </div>";
 
                   }else{
                      echo "
                      
                      <div id='navbarSupportedContent' class='collapse navbar-collapse  navReSize mediumNavSize' style='padding-left: 42vw;'>
                      <ul class='navbar-nav ml-auto' >
                    
                        <li class='nav-item'  ><a href='About.php' class='nav-link'><span class='navColor'>About</span></a></li>
                        <li class='nav-item'><a href='Services.php' class='nav-link'><span class='navColor'>Services</span></a></li>
                        <li class='nav-item'><a href='ContactUs.php' class='nav-link'><span class='navColor'>Contact</span></a></li>
                      </ul> 
                      
                      <form method='post'>
                          <input class='btn btn-primary btn-main btn-main-w ms-3 navButton rounded-pill  btn-main-w ms-3' type='submit' name='login' class='button' value='Login' />
                      </form>
                      <form method='post'>
                           <input class='btn btn-primary btn-main btn-main-w ms-3 navButton rounded-pill  btn-main-w ms-3' type='submit' name='register' class='button' value='Register' />
                     </form>
                     </div>
                     </div>";
                  }
                  ?>
          
        </div>
      </nav>
    </div>

    <section >

    <div class="container">
            <div class="card mb-3 mt-4 mb-3 shadow-crd shadow p-3 " >
                <div class="card-body">

                  
<!-- 
                  
                  <h5><?php echo $address ?></h5>
                  
                  <h5>Tel: <?php echo "0".$contact_no ?></h5></br> -->


                  <div class="row">
                    <div class="col">   
                        
                        <img src="./<?php echo $picture; ?>" class="card-img-top" alt="..." style="max-width:100%;display:flex;" ></br></br>
                    
                    <div class="card  shadow-crd shadow headerText" style="height:8vw;top:-1.5vw;background-color:#00a8dd;color:white;text-align:center;">  
                          <p class="card-text" style="margin-top:5%">Hey!, I'm Your </p>
                          
                        </div>
                          
                    </div>

                    <div class="col" style="color:#00a8dd">

                      <h2 class="headerText"><u>Contact Details</u></h2>
                      <p class="normalText"><strong>Address : </strong><?php echo $address ?> </p>
                      <p class="normalText"><strong>Mobile No :</strong> <?php echo "0".$contact_no ?> </p>
                      <p class="normalText"><strong>Email :</strong> <?php echo "0".$contact_no ?> </p>

                      <h2 class="headerText"><u>Owner Details</u></h2>
                      <p class="normalText"><strong>Full Name : </strong><?php echo $address ?> </p>
                      <p class="normalText"><strong>District :</strong> <?php echo "0".$contact_no ?> </p>
                  

                <!-- popup -->

                <?php
                  if(loggedin()){

                ?>
                      <div class="card mb-3 mt-4 mb-3 shadow-crd shadow p-3 getPuupyText" style="width:100%;height:8vw" >
                      <p>If you want to come and get your puppy </p>
                      <a href="GetAnimalForm.php?id=<?php echo $animal_id ?>" class="btn btn-primary getPuppyButton getPuupyText" style="color:white;width:38vw;height:2.6vw;">Click Here</a>
                   </div>
                 
                   <div class="card  shadow-crd shadow p-3 getPuupyText" style="width:100%;height:8vw">
                   <p class="card-text">If you want to deliver your puppy to your home </p>
                   <a href="DeliverAnimalForm.php?id= <?php echo $animal_id ?>"; class="btn btn-primary getPuppyButton getPuupyText" style="color:white;width:38vw;height:2.6vw;">Click Here</a>
                  <?php echo '
                   </div>
                   ';
                   

                  }else{

                    echo '
                    
                      <div class="card mb-3 mt-4 mb-3 shadow-crd shadow p-3 getPuupyText" style="width:100%;height:8vw;">
                      
                        <p class="card-text" >If you want to come and get your puppy </p>
                        <button type="button" class="btn btn-primary getPuppyButton getPuupyText" data-bs-toggle="modal" data-bs-target="#myModal" style="color:white;width:38vw;height:2.6vw;">
                        Click Here
                        </button>
                      
                    </div>
                  
                  <!-- The Modal -->
                  <div class="modal" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                  
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Alert</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                  
                        <!-- Modal body -->
                        <div class="modal-body">
                          Please Login To Web Site
                        </div>
                  
                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <a href="login_form.php"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">OK</button></a>
                        </div>
                  
                      </div>
                    </div>
                  </div>
                    
                    ';


                     echo '
                   
                      <div class="card mb-3 mt-4 mb-3 shadow-crd shadow p-3 getPuupyText" style="width:100%;height:8vw;margin-top:0vw">
                      
                        <p class="card-text" ">If you want to deliver your puppy to your home </p>
                        <button type="button" class="btn btn-primary getPuppyButton getPuupyText" data-bs-toggle="modal" data-bs-target="#myModal" style="color:white;width:38vw;height:2.6vw;">
                        Click Here
                        </button>
                      
                     </div>
                   
                   <!-- The Modal -->
                   <div class="modal" id="myModal">
                     <div class="modal-dialog">
                       <div class="modal-content">
                   
                         <!-- Modal Header -->
                         <div class="modal-header">
                           <h4 class="modal-title">Alert</h4>
                           <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                         </div>
                   
                         <!-- Modal body -->
                         <div class="modal-body">
                           Please Login To Web Site
                         </div>
                   
                         <!-- Modal footer -->
                         <div class="modal-footer">
                           <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                         </div>
                   
                       </div>
                     </div>
                   </div>';
                  }
                  ?>

                <!-- popup -->

                <!-- <div class="card  shadow-crd shadow p-3 getPuupyText" style="width:100%;height:8vw">
                      <p class="card-text">If you want to deliver your puppy to your home </p>
                      <a href="DeliverAnimalForm.php?id=<?php echo $animal_id; ?>" class="btn btn-primary getPuppyButton getPuupyText" style="color:white;width:100%;height:2.6vw;">Click Here</a>
                     
                </div> -->

                  </div>
                 
                  <!-- <h2 class="card-title">About Us </h2>
                  <p class="card-text">hhhhh</p>
                  <h2 class="card-title">Facilities we offer </h2>
                  <p class="card-text">fghdhd</p> -->
                </div>
     </div>
 </div>
</section>

<section style="margin-top:5%" >

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



</section>
</body>
</html>