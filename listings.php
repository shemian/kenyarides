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
<div class="wrapper">
	<div class="preloader"></div>
  
  <!-- header top -->
  <div class="header_top home3_style dn-992">
  <?php include('includes/header.php') ?>
  </div>
  
  <!-- Main Header Nav -->
  <header class="header-nav menu_style_home_one home3_style main-menu">
  <?php  include('includes/navbar.php') ?>
  </header>

  <!-- Inner Page Breadcrumb -->
  <section class="advance_search_menu_sectn bgc-thm2 pt20 pb0 mt70-992">
    <div class="container">
      <div class="row">
        <div class="col col-sm-4 col-lg-2">
          <div class="advance_search_style">
            <select class="selectpicker show-tick">
              <option>Condition</option>
              <option>Most Recent</option>
              <option>Recent</option>
              <option>Best Selling</option>
              <option>Old Review</option>
            </select>
          </div>
        </div>
        <div class="col col-sm-4 col-lg-2">
          <div class="advance_search_style">
            <select class="selectpicker show-tick">
              <option>Select Makes</option>
              <option>Audi</option>
              <option>Bentley</option>
              <option>BMW</option>
              <option>Ford</option>
              <option>Honda</option>
              <option>Mercedes</option>
            </select>
          </div>
        </div>
        <div class="col col-sm-4 col-lg-2">
          <div class="advance_search_style">
            <select class="selectpicker show-tick">
              <option>Select Models</option>
              <option>A3 Sportback</option>
              <option>A4</option>
              <option>A6</option>
              <option>Q5</option>
            </select>
          </div>
        </div>
        <div class="col col-sm-4 col-lg-2">
          <div class="advance_search_style">
            <select class="selectpicker show-tick">
              <option>Select Type</option>
              <option>Convertible</option>
              <option>Coupe</option>
              <option>Hatchback</option>
              <option>Sedan</option>
              <option>SUV</option>
            </select>
          </div>
        </div>
        <div class="col col-sm-4 col-lg-2">
          <div class="advance_search_style">
            <a class="advance_dd_btn" href="#collapseAdvanceSearch" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseAdvanceSearch"><span class="flaticon-cogwheel"></span> Advanced</a>
          </div>
        </div>
        <div class="col col-sm-4 col-lg-2">
          <div class="advance_search_style">
            <a class="btn search_btn btn-thm" href="#"><span class="flaticon-magnifiying-glass"></span> Search</a>
          </div>
        </div>
      </div>
      <div class="collapse" id="collapseAdvanceSearch">
        <div class="row bgc-thm2">
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <select class="selectpicker show-tick">
                <option>Year</option>
                <option>1967</option>
                <option>1990</option>
                <option>2000</option>
                <option>2002</option>
                <option>2005</option>
                <option>2010</option>
                <option>2015</option>
                <option>2020</option>
              </select>
            </div>
          </div>
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <input class="form-control form_control" type="text" placeholder="Min. Mileage">
            </div>
          </div>
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <input class="form-control form_control" type="text" placeholder="Max. Mileage">
            </div>
          </div>
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <select class="selectpicker show-tick">
                <option>Fuel Type</option>
                <option>Diesel</option>
                <option>Electric</option>
                <option>Hybrid</option>
                <option>Petrol</option>
              </select>
            </div>
          </div>
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <select class="selectpicker show-tick">
                <option>Transmission</option>
                <option>Autometic</option>
                <option>Manual</option>
                <option>Semi-Autometic</option>
              </select>
            </div>
          </div>
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <select class="selectpicker show-tick">
                <option>Doors</option>
                <option>2 Doors</option>
                <option>3 Doors</option>
                <option>4 Doors</option>
                <option>5 Doors</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <select class="selectpicker show-tick">
                <option>Interior Color</option>
                <option>Black</option>
                <option>Beige</option>
                <option>Brown</option>
                <option>Red</option>
              </select>
            </div>
          </div>
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <select class="selectpicker show-tick">
                <option>Exterior Color</option>
                <option>Black</option>
                <option>Beige</option>
                <option>Brown</option>
                <option>Red</option>
              </select>
            </div>
          </div>
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <select class="selectpicker show-tick">
                <option>Cylinders</option>
                <option>4</option>
                <option>6</option>
                <option>8</option>
              </select>
            </div>
          </div>
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <select class="selectpicker show-tick">
                <option>Listing Status</option>
                <option>Active</option>
                <option>Pending</option>
                <option>Disable</option>
              </select>
            </div>
          </div>
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <input class="form-control form_control" type="text" placeholder="VIN number">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="advance_search_style">
              <div class="uilayout_range">
                <h6 class="ass_price_title text-white text-start">Price</h6>
                <div id="slider"></div>
                <span id="slider-range-value1"></span>
                <span id="slider-range-value2"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="advance_search_style">
              <div class="ui_kit_checkbox text-start">
                <h6 class="ass_feature_title text-white">Features</h6>
                <div class="df mb20">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Adaptive Cruise Control (6,676)</label>
                </div>
                <div class="df mb20">
                  <input type="checkbox" class="custom-control-input" id="customCheck2">
                  <label class="custom-control-label" for="customCheck2">Cooled Seats (9,784)</label>
                </div>
                <div class="df mb20">
                  <input type="checkbox" class="custom-control-input" id="customCheck3">
                  <label class="custom-control-label" for="customCheck3">Keyless Start (9,784)</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="advance_search_style">
              <div class="ui_kit_checkbox text-start pt40 pt0-sm">
                <div class="df mb20">
                  <input type="checkbox" class="custom-control-input" id="customCheck4">
                  <label class="custom-control-label" for="customCheck4">Navigation System (9,784)</label>
                </div>
                <div class="df mb20">
                  <input type="checkbox" class="custom-control-input" id="customCheck5">
                  <label class="custom-control-label" for="customCheck5">Remote Start (9,784)</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Inner Page Breadcrumb -->
  <section class="inner_page_breadcrumb style2 inner_page_section_spacing">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="breadcrumb_content style2">
            <h2 class="breadcrumb_title">Safari Cars</h2>
            <p class="subtitle">Listings</p>
           
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Listing Grid View -->
  <section class="our-listing pt0 bgc-f9 pb30-991">
    <div class="container">
      <div class="row">
        <div class="listing_filter_row db-767">
          <div class="col-md-4">
            <div class="page_control_shorting left_area tac-sm mb30-767 mt15">
 
              <p>We found <span class="heading-color fw600"><?php echo htmlentities($cnt);?></span> Cars available for you</p>
           
            </div>
          </div>
        </div>
      </div>
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
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="car-listing">
            <div class="thumb">
              <div class="tag">FEATURED</div>
              <img src="image/vehicleimages/<?php echo htmlentities($result->Vehimg);?>"  alt="1.jpg">
              <div class="thmb_cntnt2">
                <ul class="mb0">
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                </ul>
              </div>
              <div class="thmb_cntnt3">
                <ul class="mb0">
                  <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                  <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="details">
              <div class="wrapper">
                <h5 class="price">Ksh <?php echo htmlentities($result->PricePerDay);?></h5>
                <h6 class="title"><a href="page-car-single-v1.html"><?php echo htmlentities($result->VehiclesTitle);?></a></h6>
                <div class="listign_review">
                  <ul class="mb0">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#">4.7</a></li>
                    <li class="list-inline-item">(684 reviews)</li>
                  </ul>
                </div>
              </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
            </div>
          </div>
        </div>
        <?php }} ?>
       
      </div>
       
   
    </div>
  </section>

  <!-- Our Footer -->

<a class="scrollToHome" href="#"><i class="fas fa-arrow-up"></i></a>
</div>
<!-- Wrapper End -->
<script src="js/jquery-3.6.0.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-select.min.js"></script>
<script src="js/jquery.mmenu.all.js"></script> <script src="js/ace-responsive-menu.js"></script>
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
<script src="js/pricing-slider.js"></script>
<script src="js/timepicker.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-list-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Sep 2022 21:13:48 GMT -->
</html>