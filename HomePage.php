<?php
   require './core.php';
   require './database_connector.php';
   require './functions.php';

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link href="bootstrap-5.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="HomePage.css?v=<?php echo time(); ?>">
   
    <link rel="stylesheet" href="cardStyle.css?v=<?php echo time(); ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body >
  <div>
    <nav class="navbar navbar-expand shadow p-3 mb-5 bg-white rounded "   >
        <div class="container mt-2 mb-2" id="navMenu" >
          <a href="HomePage.php" class="navbar-brand" >
            <!-- Logo Image -->
            <img src="logo.png" width="65vw" height="50vw" alt="" class="d-inline-block align-middle mr-2 " >
            <!-- Logo Text -->
            <span class="text-uppercase font-weight-bold " style="color: #00a8dd;">BE A HOME</span>
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
          
        </div>
      </nav>
    </div>

      <section >

        <div class="container">
          <div class="d-sm-flex align-items-center justify-content-between" >
            
            <div class="me-3">
    <!-- <img src="dogWall.jpg" class="MainImage shadow p-3 mb-5 bg-ghoustwhite rounded" /> -->

 <!--Slide show-->

 <!-- Carousel -->
 <div class="MainImage " style="margin-top:0.9%">
<div id="demo" class="carousel slide " data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner shadow mb-5 bg-ghoustwhite rounded">
    <div class="carousel-item active">
      <img src="HomePageIMG/catWall3.jpg" alt="Los Angeles" class="d-block" style="width: 100vw;height: 37vw;">
      <div class="carousel-caption ourPurpose">
        <h3 class="ourPurpose" style="margin-right: 76%;margin-top: -38%;color: #686868;">Hey Kind Person </h3>
        <p class="ourPurpose" style="margin-right: 76%;color: #686868;">Be A Home To  Street Animal </p>
        <a href="StreetAnimal.php" class="btn btn-primary purposeText" style="margin-right: 76%;">Click Here</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="HomePageIMG/dogWall2.png" alt="Chicago" class="d-block" style="width: 100vw;height: 37vw;" >
      <div class="carousel-caption ourPurpose" >
        <h3 class="ourPurpose" style="margin-left: 5%;margin-top: -38%;color:#686868;">Hey Kind Person </h3>
        <p class="ourPurpose" style="margin-left: 5%;color: #686868;">Be A Home To  Street Animal </p>
        <a href="StreetAnimal.php" class="btn btn-primary purposeText" style="margin-left: 5%;">Click Here</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="HomePageIMG/dogWall.jpg" alt="New York" class="d-block" style="width: 100vw;height: 37vw;" >
      <div class="carousel-caption ourPurpose">
        <h3 class="ourPurpose" style="margin-right: 76%;margin-top: -38%;color: #686868;">Hey Kind Person </h3>
        <p class="ourPurpose" style="margin-right: 76%;color: #686868;">Be A Home To </br> Street Animal </p>
        <a href="StreetAnimal.php" class="btn btn-primary purposeText" style="margin-right: 76%;">Click Here</a>
      </div>
    </div>
    
  </div>
  
  <!-- Left and right controls/icons -->
  <!-- <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon " ></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button> -->
</div>
</div>





    </div>
    </div>
    </div>
  </section>
  <!-- Select Animal -->
  <section class="text-dark p-5 text-center text-sm-start "  style="background-color: ghostwhite;" >
  
  <div class="ms-5 " style="margin-top:38%;">
    <h1 class="text-center ourPurpose " style="font-size:2vw">Selections For Your Puppy</h1>
    

</div>

<div style="margin-left:22vw">

     <a href="StreetDog.php"> <div style="margin-left:5.5vw;margin-right:2vw;margin-bottom:0%">
                        <table class="pic cardImage  " style="height:20vw;width:18vw;float:left;margin-right:4.5vw;">
                          <tr>
                            <td><img src="./selectAnimalPic/selectDog.png" class=" " alt="service" style="width:16vw;height:13vw"> </td>
                          </tr>
                         
                          
                        </table>
      </a>
                        
      </div>
      <a href="StreetCat.php">
      <div style="margin-left:7.5vw;margin-right:2vw;margin-bottom:0%">
                        <table class="pic cardImage  " style="height:20vw;width:18vw;margin-left:4.5vw;">
                          <tr>
                            <td><img src="./selectAnimalPic/selectCat.png" class=" " alt="service" style="width:16vw;height:13vw"> </td>
                          </tr>
                         
                          
                        </table>

                        
      </div>
     </a>
  </div>

 </section>



<!-- Our Purpose -->
  <section class="text-dark p-5 text-center text-sm-start "  style="background-color: ghostwhite;" >
  
   <div class="ms-5 ">
    <h1 class="text-center ourPurpose" style="margin-top:-2%">Our Purpose</h1>
    <p class="purposeText">
    Our Purpose is to save the lives of the homeless and unwanted companion animals of Sri Lanka.To employ programs and 
    policies to promote best practice, ethical, sustainable and compassionate treatment of these animals.To judge our 
    effectiveness by the extent to which animal lives are saved and improved, </br>and by the positive experience of the people we touch.
    </p>
   
    </div>

  <div class="container bg-ghoustwhite" >
    <div class="row text-center">
      <div class="col-md">
        <div class="card text-dark bg-white mb-3 shadow-crd shadow p-3 rounded-circle " >
          <img src="purpose1.png" class="card-img-top serviceImageSize" alt="service" style="width: 8vw;">
          <div class="card-body">
            <h5 class="card-title " style="font-size:1.4vw">Home</h5>
            <p class="purposeText">Give A Home For </br>Street Animal</p>
            
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card text-dark bg-white mb-3 shadow-crd shadow p-3 rounded-circle" >
          <img src="purpose2.png" class="card-img-top serviceImageSize" alt="service" style="width: 8vw;">
          <div class="card-body">
            <h5 class="card-title" style="font-size:1.4vw">Abandonment Of Animals</h5>
            <p class="purposeText">Minimizing The Abandonment Of </br>Animals On The Street </p>
            
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card text-dark bg-white mb-3 shadow-crd shadow p-3 rounded-circle" >
          <img src="purpose3.png" class="card-img-top serviceImageSize" alt="service" style="width: 8vw;height:7vw;">
          <div class="card-body">
            <h5 class="card-title" style="font-size:1.4vw">Bites</h5>
            <p class="purposeText">Minimizing street Animal </br>Bites </p>
            
          </div>
        </div>
      </div>
      
    </div>
  </div>




  </section>

  <section class="text-dark p-5 text-center text-sm-start"  style="background-color: ghostwhite;" >
    <div class="ms-5 ">
      <h1 class="text-center ourPurpose">About Us</h1>
      <p class="purposeText">
     We find street animals in Sri Lanka and save the lives of the homeless and unwanted companion animals of Sri Lanka.To employ programs and 
    policies to promote best practice, ethical, sustainable and compassionate treatment of these animals.To judge our 
    effectiveness by the extent to which animal lives are saved and improved,</br> and by the positive experience of the people we touch.
      </p>
  
</div>
      
<div class="container bg-ghoustwhite">
  <div class="row text-center">
    <div class="col-md">
      <div class="card text-dark bg-white mb-3 shadow-crd shadow p-3 aboutImage aboutImageSize" style="height:29vw;width:26.2vw;margin-top:8vw;">
        
        <div class="card-body " style="margin-left:-1vw;position:absolute;">
          <img src="./about/about1.jpeg" class="card-img-top aboutImageP aboutImageSize aboutImageCardSize" alt="About" style="width: 22vw;height:25vw;margin-left:1vw;margin-left:1vw">
                
          
        </div>
        
      </div>
    </div>
    <div class="col-md">
      <div class="card text-dark bg-white mb-3 shadow-crd shadow p-3 aboutImage aboutImageSize" style="height:29vw;width:26.2vw;">
        
        <div class="card-body" style="margin-left:-1vw">
          <img src="./about/about2.jpg" class="card-img-top aboutImageP aboutImageSize" alt="About" style="width: 22vw;height:25vw;margin-left:1vw">
          
          
        </div>
      </div>
    </div>
    <div class="col-md">
      <div class="card text-dark bg-white mb-3 shadow-crd shadow p-3 aboutImage aboutImageSize" style="height:29vw;width:26.2vw;margin-top:8vw" >
        
        <div class="card-body" style="margin-left:-1vw">
          <img src="./about/about3.jpg" class="card-img-top aboutImageP aboutImageSize" alt="About" style="width: 22vw;height:25vw;margin-left:1vw">
          
        </div>
      </div>
    </div>
    
  </div>
</div>


</section>

<section class="text-dark p-5 text-center text-sm-start"  style="background-color: ghostwhite;" >
  <div class="ms-5 ">
    <h1 class="text-center ourPurpose ">Our Services</h1>
    

</div>


<div class="container bg-ghoustwhite" >
  <div class="row text-center">
    <div class="col-md">
      <div class="card text-dark bg-white mb-3 shadow-crd shadow p-3 rounded-circle" >
        <img src="care.png" class="card-img-top serviceImageSize" alt="service" style="width: 8vw;">
        <div class="card-body">
          <h5 class="card-title">Care</h5>
          <p class="purposeText">We Find And Give A Home For </br>Street Animal</p>
         
        </div>
      </div>
    </div>
    <div class="col-md">
      <div class="card text-dark bg-white mb-3 shadow-crd shadow p-3 rounded-circle" >
        <img src="medicine.png" class="card-img-top serviceImageSize" alt="service" style="width:8vw;height:7vw;">
        <div class="card-body">
          <h5 class="card-title">Medicine</h5>
          <p class="purposeText">We Give Medicine For Sick </br>Street Animals</p>
          
        </div>
      </div>
    </div>
    <div class="col-md">
      <div class="card text-dark bg-white mb-3 shadow-crd shadow p-3 rounded-circle" >
        <img src="food.png" class="card-img-top serviceImageSize" alt="service" style="width: 8vw;">
        <div class="card-body">
          <h5 class="card-title">Food</h5>
          <p class="purposeText">We Give Foods For </br>Street Animals</p>
          
        </div>
      </div>
    </div>
    
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



</section>
   
</body>
</html>