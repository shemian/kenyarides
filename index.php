<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>


<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="auto, car, car dealer, car dealership, car listing, cars, classified, dealership, directory, listing, modern, motors, responsive">
<meta name="description" content="Voiture - Automotive & Car Dealer HTML Template">
<meta name="CreativeLayers" content="ATFN">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<title>KenyaTour</title>
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
</head>
<body>
<div class="wrapper ovh">
  <div class="preloader"></div>
 
  <!-- Sidebar Panel End -->
  <?php include('includes/header.php') ?>
  
  <!-- Main Header Nav -->
  <header class="header-nav menu_style_home_one transparent main-menu">
     <?php  include('includes/navbar.php') ?>
</header>

  <!-- Modal -->
  <div class="sign_up_modal modal fade" id="logInModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body container p60">
          <div class="row">
            <div class="col-lg-12">
              <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#loginform" role="tab" aria-controls="home" aria-selected="true">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#regform" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content container p0" id="myTabContent">
          <?php include('includes/login.php')?>
          <?php include('includes/register.php')?>
            
          </div>
        </div>
      </div>
    </div>
  </div>
    
  <!-- login and registration forms  -->
  <div class="sign_up_modal modal fade" id="logInModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body container p60">
          <div class="row">
            <div class="col-lg-12">
              <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#loginform" role="tab" aria-controls="home" aria-selected="true">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#regform" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content container p0" id="myTabContent">
          <?php include('includes/login.php')?>
          <?php include('includes/register.php')?>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- Main Header Nav For Mobile -->
  <div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
      <div class="header stylehome1">
        <div class="mobile_menu_bar">
          <a class="menubar" href="#menu"><small>Menu</small><span></span></a>
        </div>
        <div class="mobile_menu_main_logo"><img class="nav_logo_img img-fluid" src="images/header-logo2.svg" alt="images/header-logo2.png"></div>
      </div>
    </div>

  </div>
  
  <!-- Home Design -->
  <section class="home-one bg-home1">
    <div class="container">
      <div class="row posr">
        <div class="col-lg-10 m-auto">
          <div class="home_content home1_style">
            <div class="home-text text-center mb30">
              <h2 class="title"><span class="aminated-object1"><img class="objects" src="images/home/title-bottom-border.svg" alt=""></span>Kenya Safari Cars</h2>
              <p class="para">Find the right Safari Car.</p>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </section>
  
 

  <!-- Featured Product  -->
  <section class="featured-product">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="main-title text-center">
            <h2>Featured Listings</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="popular_listing_sliders row">
            <!-- Nav tabs -->
            <div class="nav nav-tabs col-lg-12 justify-content-center" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All Vehicles</button>
            </div>
            <!-- Tab panes -->
            <div class="tab-content col-lg-12" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                <?php 
                       $sql = "SELECT tblvehicles.*from tblvehicles";
                       $query = $dbh -> prepare($sql);
                       $query->execute();
                       $results=$query->fetchAll(PDO::FETCH_OBJ);
                       $cnt=1;
                       if($query->rowCount() > 0)
                       {
                        foreach($results as $result)
                        { 
                      
                      ?>
                  <div class="col-sm-4 col-xl-3">
                 
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag"><?php echo htmlentities($result->Vehcondition);?></div>
                        <a href="vehicle_detail.php?vhid=<?php echo htmlentities($result->id);?>"><img src="image/vehicleimages/<?php echo htmlentities($result->Vehimg);?>"  alt="1.jpg"></a>
                        
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">ksh <?php echo htmlentities($result->PricePerDay);?></h5>
                          <h6 class="title"><a href="vehicle_detail.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->VehiclesTitle);?> - <span><?php echo htmlentities($result->Vehbrand);?></a></span></h6>
                          
                        </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="fa fa-chair me-2"></span><?php echo htmlentities($result->SeatingCapacity);?></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span><?php echo htmlentities($result->FuelType);?></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span><?php echo htmlentities($result->ModelYear);?></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                 
                  </div>
                
                  <?php }} ?>
                  
                </div>
                 
              </div>
             
            </div>
          </div>
        </div>
      </div>
      <div class="row mt20">
        <div class="col-lg-12">
          <div class="text-center">
            <a href="listings.php" class="more_listing">Show All Cars <span class="icon"><span class="fas fa-plus"></span></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>


  
  <!-- Our Footer -->
  <?php include('includes/footer.php') ?>
  <a class="scrollToHome" href="#"><i class="fas fa-arrow-up"></i></a>
</div>

<script src="js/jquery-3.6.0.js"></script> 
<script src="js/jquery-migrate-3.0.0.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-select.min.js"></script>
<script src="js/jquery.mmenu.all.js"></script> 
<script src="js/ace-responsive-menu.js"></script> 
<script src="js/isotop.js"></script> 
<script src="js/snackbar.min.js"></script> 
<script src="js/simplebar.js"></script> 
<script src="js/parallax.js"></script> 
<script src="js/scrollto.js"></script> 
<script src="js/jquery-scrolltofixed-min.js"></script> 
<script src="js/jquery.counterup.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/progressbar.js"></script> 
<script src="js/slider.js"></script>
<script src="js/timepicker.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/script.js"></script>
</body>
</html>