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
                        <div class="day">Make</div>
                      </div>
                      <span class="schedule">Volvo</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Model</div>
                      </div>
                      <span class="schedule">XC 90</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Color</div>
                      </div>
                      <span class="schedule">white</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Drive Type</div>
                      </div>
                      <span class="schedule">4x4</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Transmission</div>
                      </div>
                      <span class="schedule">Automatic</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Condition</div>
                      </div>
                      <span class="schedule">Used</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Year</div>
                      </div>
                      <span class="schedule">2021</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Mileage</div>
                      </div>
                      <span class="schedule">280,000</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Fuel Type</div>
                      </div>
                      <span class="schedule">Diesel</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Engine Size</div>
                      </div>
                      <span class="schedule">5.2L</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Doors</div>
                      </div>
                      <span class="schedule">5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">Cylinders</div>
                      </div>
                      <span class="schedule">10</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="me-auto">
                        <div class="day">VIN</div>
                      </div>
                      <span class="schedule">2D456THA798700213GT21</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="listing_single_description mt30">
                <h4 class="mb30">Description <span class="float-end body-color fz13">ID #9535</span></h4>
                <p class="first-para">The all-new Volvo XC60 is a terrific luxury compact SUV. It's been fully redesigned for 2017 and features improvements across the board. These changes bump the vehicle from its previous midpack standing; it now resides with some of the best in the class. Some of the most notable improvements include a state-of-the-art infotainment system, more legroom for rear-seat riders, and peppy engine choices.</p>
                <p class="mb25">Occupying over 8,000 square feet, perched over 1,100 feet in the air with absolutely breathtaking panoramic 360-degree views of all of New York City and the surrounding tri-state area, The 82nd Floor at 432 Park Avenue has been completely reimagined by one of the most sought-after design houses in London and represents an utterly unique opportunity to own a globally significant property.</p>
                <p class="mt10 mb20">The Amrutha Lounge means port in the Turkish language, however the restaurant opens its doors to all aspects of the Mediterranean kitchen. The kitchen will be mostly focused on Mediterranean food; the owners of the restaurant are young professional chefs who can bring new, exciting tastes to Angel, Islington which will show through in the quality of food they prepare.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="user_profile_service">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="title">Features</h4>
                  </div>
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="subtitle">Convenience</h5>
                  </div>
                  <div class="col-lg-6 col-xl-5">
                    <ul class="service_list">
                      <li>Heated Seats</li>
                      <li>Heated Steering Wheel</li>
                      <li>Navigation System</li>
                      <li>Power Liftgate</li>
                    </ul>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="subtitle">Entertainment</h5>
                  </div>
                  <div class="col-lg-6 col-xl-5">
                    <ul class="service_list">
                      <li>Apple CarPlay/Android Auto</li>
                      <li>Bluetooth</li>
                      <li>HomeLink</li>
                    </ul>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="subtitle">Exterior</h5>
                  </div>
                  <div class="col-lg-6 col-xl-5">
                    <ul class="service_list">
                      <li>Alloy Wheels</li>
                      <li>Sunroof/Moonroof</li>
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
                      <li>Backup Camera</li>
                      <li>Blind Spot Monitor</li>
                      <li>Brake Assist</li>
                      <li>LED Headlights</li>
                      <li>Stability Control</li>
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
            
            <h4 class="mb30">Contact Seller</h4>
            <form action="#">
              <div class="row">
                <div class="col-lg-12">
                  <div class="mb-3">
                    <input class="form-control form_control" type="text" placeholder="Name">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mb-3">
                    <input class="form-control form_control" type="text" placeholder="Phone">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mb-3">
                    <input class="form-control form_control" type="email" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                    <textarea class="form-control" rows="6">I am interested in a price quote on this vehicle. Please contact me at your earliest convenience with your best price for this vehicle.</textarea>
                  </div>
                  <button type="submit" class="btn btn-block btn-thm mt10 mb20">Book Now</button>
                  <button type="submit" class="btn btn-block btn-whatsapp mb0"><span class="flaticon-whatsapp mr10 text-white"></span>WhatsApp</button>
                </div>
              </div>
            </form>
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
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-car-single-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Sep 2022 21:13:54 GMT -->
</html>
