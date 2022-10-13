<?php 
    require '../core.php';
    require '../database_connector.php';
    require '../functions.php';
    
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Change Password</title>
        <link rel="shortcut icon" href="../logo.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark shadow p-3 mb-5" style="background-color:#4c46f2">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="adminPanel.php">Admin Panel</a>
            
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

            
            <a class="btn btn-success rounded-pill" href="../logout.php" style="color:#fff; margin-left:75%;">Logout</a>
           
        </nav>
        <div id="layoutSidenav" >
            <div id="layoutSidenav_nav" >
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" >
                    <div class="sb-sidenav-menu" style="background-color:#4c46f2" >
                        <div class="nav" >
                            <div class="sb-sidenav-menu-heading" style="color:white">Core</div>
                            <a class="nav-link" href="adminPanel.php">
                                <div class="sb-nav-link-icon" style="color:white"><i class="fas fa-book-open"></i></div>
                                <span style="color:white">Dashboard</span>
                            </a>
                            <div class="sb-sidenav-menu-heading" style="color:white">Interface</div>
                           
                           
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon" style="color:white"><i class="fas fa-table"></i></div>
                               <span style="color:white">Table</span>
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        User Overview
                                        <div class="sb-sidenav-collapse-arrow" ><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="RegisteredUsers.php">Registered Users</a>
                                            <a class="nav-link" href="DeactivatedUsers.php">Deactivated Users</a>
                                            <a class="nav-link" href="UserMessage.php">User Messages</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Animal Overview
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="RegisteredAnimal.php">Registered Animals</a>
                                            <a class="nav-link" href="DeactivatedAnimals.php">Deactivated Animals</a>
                                            <a class="nav-link" href="DiliveryAnimals.php">Dilivery Animals</a>
                                            <a class="nav-link" href="GetAnimals.php">Get Animals</a>
                                            
                                        </nav>
                                    </div>
                                  
                                </nav>
                            </div>
                            <a class="nav-link" href="ChangePassword.php">
                                <div class="sb-nav-link-icon" style="color:white"><i class="fas fa-book-open"></i></div>
                                <span style="color:white">Change Password</span>
                            </a>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer shadow p-3 " style="background-color:#4c46f2">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Change Admin Password</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="adminPanel.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Change Admin Password</li>
                        </ol>
                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Change Admin Password
                            </div>
            <div class="card-body">
                <form action="CheckPassword.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                        
                    <div class="mb-3">
                        <label for="password" class="form-label">Old Password</label>
                        <input type="password" class="form-control" id="password_old" name="password_old" placeholder="enter password" required>
                    </div>
                            
    
                    <div class="mb-3">
                        <label for="password" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="enter password" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_again" name="password_again" placeholder="confirm password" required>
                    </div>
            
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" onclick="showhide()">
                            <label class="form-check-label" for="show-pw" >Show Password</label>
                        </div>

                            
            
              <input type="submit" class="btn btn-primary btn-main mb-3 mt-3" value="Submit">
              <input type="reset" class="btn btn-secondary mb-3 mt-3 ms-3" style="border-radius:30px" value="Reset">
              <a href="login_form.php" class="ms-3">Login</a>
            </form>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="datatables-simple-demo.js"></script>
    </body>
</html>

<script>
  function showhide() {
  
  var x = document.getElementById("password_old");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  
  var y = document.getElementById("password");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
  var z = document.getElementById("password_again");
  if (z.type === "password") {
    z.type = "text";
  } else {
    z.type = "password";
  }
}

function showhidep() {
  var x = document.getElementById("hOpassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }

  var y = document.getElementById("hpassword");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
  var z = document.getElementById("hApassword");
  if (z.type === "password") {
    z.type = "text";
  } else {
    z.type = "password";
  }
}
</script>
