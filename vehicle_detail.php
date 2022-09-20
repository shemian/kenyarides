<?php 
session_start();
include('includes/config.php');
error_reporting(0);

if(isset($_POST['submit']))
{
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate']; 
$message=$_POST['message'];
$useremail=$_SESSION['login'];
$status=0;
$vhid=$_GET['vhid'];
$sql="INSERT INTO  tblbooking(userEmail,VehicleId,FromDate,ToDate,message,Status) VALUES(:useremail,:vhid,:fromdate,:todate,:message,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':vhid',$vhid,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Booking successfull.');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}

}

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
  <!-- Sidebar Panel Start -->
  
  <!-- header top -->
  <div class="header_top home3_style dn-992">
  <?php include('includes/header.php') ?>
  </div>
  
  <!-- Main Header Nav -->
  <header class="header-nav menu_style_home_one home3_style main-menu">
  <?php  include('includes/navbar.php') ?>
  </header>

  <!-- Agent Single Grid View -->
  <?php 
$vhid=intval($_GET['vhid']);
$sql = "SELECT tblvehicles.* from tblvehicles where tblvehicles.id=:vhid";
$query = $dbh -> prepare($sql);
$query->bindParam(':vhid',$vhid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ 
?>  
  <section class="our-agent-single bgc-f9 pb90 mt70-992 pt30">

    <div class="container">
      <div class="row mb30">
        <div class="col-lg-7 col-xl-8">
          <div class="single_page_heading_content">
            <div class="car_single_content_wrapper">
              
              <h2 class="title"><?php echo htmlentities($result->VehiclesTitle);?></h2>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xl-4">
          
            <div class="price_content">
              <div class="price mt60 mb10 mt10-md"><h3><small class="mr15"></small>Ksh <?php echo htmlentities($result->PricePerDay);?></h3></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-xl-8">
          <div class="row">
            <div class="col-lg-12">
              <div class="single_product_grid single_page1">
                <div class="single_product_slider">
                  <div class="item">
                    <div class="sps_content">
                      <div class="thumb">
                        <div class="single_product">
                          <div class="single_item">
                            <div class="thumb">
                              <div class="tags">FEATURED</div>
                              <img class="img-fluid" src="image/vehicleimages/<?php echo htmlentities($result->Vehimg);?>">
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                 
                  <div class="item">
                    <div class="sps_content">
                      <div class="thumb">
                        <div class="single_product">
                          <div class="single_item">
                            <div class="thumb">
                              <div class="tags">FEATURED</div>
                              <img class="img-fluid" src="image/vehicleimages/<?php echo htmlentities($result->Vehimg);?>" >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 
               
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="opening_hour_widgets p30 mt30">
                <div class="wrapper">
                  <h4 class="title">Overview</h4>
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Brand</div>
                      </div>
                      <span class="schedule"><?php echo htmlentities($result->Vehbrand);?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Condition</div>
                      </div>
                      <span class="schedule"><?php echo htmlentities($result->Vehcondition);?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Siting Capacity</div>
                      </div>
                      <span class="schedule"><?php echo htmlentities($result->SeatingCapacity);?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Model Year</div>
                      </div>
                      <span class="schedule"><?php echo htmlentities($result->ModelYear);?></span>
                    </li>
                    
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Fuel Type</div>
                      </div>
                      <span class="schedule"><?php echo htmlentities($result->FuelType);?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="listing_single_description mt30">
                <h6>Overview</h6>
                <p><?php echo htmlentities($result->VehiclesOverview);?></p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="user_profile_service">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="title">Features</h4>
                  </div>
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="subtitle">Security</h5>
                  </div>
                  <div class="col-lg-6 col-xl-5">
                    <ul class="service_list">
                      <?php if($result->AirConditioner==1){?>
                      <li>Air Conditioner</li>
                      <?php } else?> 
                      <?php if($result->PowerDoorLocks==1){?>
                      <li>Power Door Locks</li>
                      <?php } else?> 
                      <?php if($result->AntiLockBrakingSystem==1){?>
                      <li>Anti breaking System</li>
                      <?php } else?> 
                      <?php if($result->PowerWindows==1){?>
                      <li>Power Window</li>
                      <?php } else?>
                    </ul>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="subtitle">Comfort</h5>
                  </div>
                  <div class="col-lg-6 col-xl-5">
                    <ul class="service_list">
                    <?php if($result->BrakeAssist==1){?>
                      <li>Break Assist</li>
                      <?php } else?>
                      <?php if($result->PowerSteering==1){?>
                      <li>power Sterring</li>
                      <?php } else?>
                    </ul>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="subtitle">Interior</h5>
                  </div>
                  <div class="col-lg-6 col-xl-5">
                    <ul class="service_list">
                    <?php if($result->DriverAirbag==1){?>
                      <li>Driver Airbag</li>
                      <?php } else?>
                      <?php if($result->PassengerAirbag==1){?>
                      <li>Passanger Airbag</li>
                      <?php } else?>
                    </ul>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="subtitle">Safety</h5>
                  </div>
                  <div class="col-lg-6 col-xl-5">
                    <ul class="service_list">
                    <?php if($result->CentralLocking==1){?>
                      <li>Central Looking</li>
                      <?php } else?>
                      <?php if($result->CrashSensor==1){?>
                      <li>Crash Censor</li>
                      <?php } else?>
                      <?php if($result->LeatherSeats==1){?>
                      <li>Leather Seats</li>
                      <?php } else?>
                    </ul>
                  </div>
                </div>
                <hr>
                
              </div>
             
            </div>
            
            
          </div>
        </div>
        <div class="col-lg-4 col-xl-4">
          
          <div class="sidebar_seller_contact">
          <?php

            $Is_Booked= $results[0]->Is_booked;
            if($Is_Booked){
          ?>
            <div class="widget_heading">
              <h5><i class="" aria-hidden="true"></i>Vehicle Not available</h5>
              <a href="index.php" class="btn btn-block btn-thm mt10 mb20">View Realated Vehicles</a>
   
            </div>
            <?php } else{?>

            <h4 class="mb30">Contact Seller</h4>
            <form method="post">
              <div class="row">
                <div class="col-lg-12">
                  <div class="mb-3">
                    <label for="Start date">Start Date</label>
                    <input name="fromdate" class="form-control form_control" type="date" required>
                  </div>
                </div>
                <div class="col-lg-12">
                <div class="mb-3">
                    <label for="Start date">End Date</label>
                    <input name="todate" class="form-control form_control" type="date" required>
                  </div>
                </div>
                
                <div class="col-md-12">
                  <div class="mb-3">
                    <textarea class="form-control" rows="6" name="message" placeholder="Message" required></textarea>
                  </div>
                  <?php if($email=$_SESSION['login']){ ?>
                  <input type="submit" class="btn btn-block btn-thm mt10 mb20"  name="submit" value="Book Now">
                  <?php } else { ?>
                    <a href="index.php" class="btn btn-block btn-thm mt10 mb20">Login To Book</a>
                    <?php } ?>
                </div>
              </div>
            </form>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php }} ?>


	<!-- Our Footer -->
  <?php include('includes/footer.php') ?>
<a class="scrollToHome" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Wrapper End -->
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;callback=initMap"></script>
<script src="js/googlemaps1.js"></script>
<script src="js/script.js"></script>
</body>
</html>
