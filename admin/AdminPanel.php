<?php 
    require '../core.php';
    require '../database_connector.php';
    require '../functions.php';
    
    if(loggedin()){
    

        //COUNT OF  TOTAL USERS IN THE SYSTEM
        $users_total_query="SELECT * FROM `userdetail`";
    
        if($query_run_total = mysqli_query($con,$users_total_query)){
            $users_total_count = mysqli_num_rows( $query_run_total );
        }else{
            $users_total_count = 0;
        }
        // COUNT OF USERS THAT ARE ACTIVATED
        $users_total_query="SELECT * FROM `user_login` WHERE `status`= 'verified'";
    
        if($query_run_total = mysqli_query($con,$users_total_query)){
            $users_active_count = mysqli_num_rows( $query_run_total );
        }else{
            $users_active_count = 0;
        }

        //COUNT OF USERS THAT ARE DEACTIVATED

        $users_total_query="SELECT * FROM `user_login` WHERE `status`= 'notverified'";
    
        if($query_run_total = mysqli_query($con,$users_total_query)){
            $users_deactive_count = mysqli_num_rows( $query_run_total );
        }else{
            $users_deactive_count = 0;
        }

        //COUNT OF  TOTAL ANIMALS IN THE SYSTEM

        $animal_total_query="SELECT * FROM `animal_detail`";
    
        if($query_run_total = mysqli_query($con,$animal_total_query)){
            $animal_total_count = mysqli_num_rows( $query_run_total );
        }else{
            $animal_total_count = 0;
        }
        
       // COUNT OF ANIMALS THAT ARE ACTIVATED
        $animal_active_query="SELECT * FROM `animal_detail` WHERE `status`= 'activated'";
    
        if($query_run_active = mysqli_query($con,$animal_active_query)){
            $animal_active_count = mysqli_num_rows( $query_run_active );
        }else{
            $animal_active_count = 0;
        }
    
        //COUNT OF ANIMALS THAT ARE DEACTIVATED
        $animal_deactive_query="SELECT * FROM `animal_detail` WHERE `status`= 'deactivated'";
    
        if($query_run_deactive = mysqli_query($con,$animal_deactive_query)){
            $animal_deactive_count = mysqli_num_rows( $query_run_deactive );
        }else{
            $animal_deactive_count = 0;
        }
    
        
    
    }
    // else{
    //     
    // }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Panel</title>
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

            <!-- Right Content of the page -->

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        <!-- USERS OVERVIEW -->

                        <h3>Users Overview</h3>

                        <div class="row">
                            <div class="col-xl-3 col-md-6" >
                                <div class="card  text-white mb-4" style="background-color:#acabc9" >
                                    <div class="card-body" >Number of Registered Users - <?php echo $users_total_count; ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Users.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card  text-white mb-4" style="background-color:#2d7550">
                                    <div class="card-body">Number of Activated Users - <?php echo $users_active_count; ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="RegisteredUsers.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card  text-white mb-4" style="background-color:#f0734d">
                                    <div class="card-body">Number of Deactivated Users - <?php echo $users_deactive_count; ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="DeactivatedUsers.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                          
                        </div>

                        <!-- Animal OVERVIEW -->

                        <h3>Animal Overview</h3>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color:#acabc9">
                                    <div class="card-body">Number of Registered Animals - <?php echo $animal_total_count; ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Animals.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color:#2d7550">
                                    <div class="card-body">Number of Activated Animals - <?php echo $animal_active_count; ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="RegisteredAnimal.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color:#f0734d">
                                    <div class="card-body">Number of Deactivated Animals - <?php echo $animal_deactive_count; ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="DeactivatedAnimals.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>


                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
