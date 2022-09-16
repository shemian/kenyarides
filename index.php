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
    <!-- /.mobile-menu -->
    <!-- <nav id="menu" class="stylehome1">
      <ul>
        <li><span>Home</span>
          <ul>
            <li><a href="index.html">Home V1</a></li>
            <li><a href="index2.html">Home V2</a></li>
            <li><a href="index3.html">Home V3</a></li>
            <li><a href="index4.html">Home V4</a></li>
            <li><a href="index5.html">Home V5</a></li>
            <li><a href="index6.html">Home V6</a></li>
            <li><a href="index7.html">Home V7</a></li>
          </ul>
        </li>
        <li><span>Explore</span>
          <ul>
            <li><span>User Dashboard</span>
              <ul>
                <li><a href="page-dashboard.html">Dashboard</a></li>
                <li><a href="page-dashboard-profile.html">Profile</a></li>
                <li><a href="page-dashboard-listing.html">My Listing</a></li>
                <li><a href="page-dashboard-favorites.html">Favorites</a></li>
                <li><a href="page-dashboard-add-listings.html">Add Listing</a></li>
                <li><a href="page-dashboard-messages.html">Messages</a></li>
                <li><a href="page-login.html">Login</a></li>
              </ul>
            </li>
            <li><a href="page-user-profile.html">User Profile</a></li>
          </ul>
        </li>
        <li><span>Listings</span>
          <ul>
            <li><span>Listing Styles</span>
              <ul>
                <li><a href="page-list-v1.html">Lising V1</a></li>
                <li><a href="page-list-v2.html">Lising V2</a></li>
                <li><a href="page-list-v3.html">Lising V3</a></li>
                <li><a href="page-list-v4.html">Lising V4</a></li>
                <li><a href="page-list-v5.html">Lising V5</a></li>
                <li><a href="page-list-v6.html">Lising V6</a></li>
                <li><a href="page-list-v7.html">Lising V7</a></li>
              </ul>
            </li>
            <li><span>Listing Map</span>
              <ul>
                <li><a href="page-list-v8.html">Map V1</a></li>
                <li><a href="page-list-v9.html">Map V2</a></li>
                <li><a href="page-list-v10.html">Map V3</a></li>
              </ul>
            </li>
            <li><span>Listing Single</span>
              <ul>
                <li><a href="page-car-single-v1.html">Single V1</a></li>
                <li><a href="page-car-single-v2.html">Single V2</a></li>
                <li><a href="page-car-single-v3.html">Single V3</a></li>
                <li><a href="page-car-single-v4.html">Single V4</a></li>
                <li><a href="page-car-single-v5.html">Single V5</a></li>
                <li><a href="page-car-single-v6.html">Single V6</a></li>
              </ul>
            </li>
            <li><a href="page-dashboard-add-listings.html">Add Listing</a></li>
          </ul>
        </li>
        <li><span>Blog</span>
          <ul>
            <li><a href="page-blog-grid.html">Blog Grid</a></li>
            <li><a href="page-blog-list.html">Blog List</a></li>
            <li><a href="page-blog-single.html">Blog Single</a></li>
          </ul>
        </li>
        <li><span>Shop</span>
          <ul>
            <li><a href="page-shop.html">Shop</a></li>
            <li><a href="page-shop-cart.html">Shop Cart</a></li>
            <li><a href="page-shop-checkout.html">Shop Checkout</a></li>
            <li><a href="page-shop-complete-order.html">Order Completed</a></li>
            <li><a href="page-shop-single.html">Shop Single</a></li>
            <li><a href="page-user-profile.html">User Profile</a></li>
          </ul>
        </li>
        <li><span>Pages</span>
          <ul>
            <li><a href="page-about.html">About Us</a></li>
            <li><a href="page-calculator.html">Loan Calculator</a></li>
            <li><a href="page-compare.html">Compare</a></li>
            <li><a href="page-contact.html">Contact</a></li>
            <li><a href="page-error.html">Error</a></li>
            <li><a href="page-faq.html">Faq</a></li>
            <li><a href="page-login.html">Login</a></li>
            <li><a href="page-pricing.html">Pricing Table</a></li>
            <li><a href="page-register.html">Sign up</a></li>
            <li><a href="page-service.html">Service</a></li>
            <li><a href="page-terms.html">Terms & Condition</a></li>
            <li><a href="page-ui-element.html">UI Elements</a></li>
          </ul>
        </li>
        <!-- Only for Mobile View -->
        <!-- <li class="mm-add-listing">
          <span class="border-none">
            <span class="mmenu-contact-info">
              <span class="phone-num"><i class="flaticon-map"></i> <a href="#">47 Bakery Street, London, UK</a></span>
              <span class="phone-num"><i class="flaticon-phone-call"></i> <a href="#">1-800-458-56987</a></span>
              <span class="phone-num"><i class="flaticon-clock"></i> <a href="#">Mon - Fri 8:00 - 18:00</a></span>
            </span>
            <span class="social-links">
              <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
              <a href="#"><span class="fab fa-pinterest"></span></a>
            </span>
          </span>
        </li>
      </ul> -->
    <!-- </nav>  -->
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
            <div class="advance_search_panel">
              <div class="row">
                <div class="col-lg-12">
                  <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-allstatus-tab" data-bs-toggle="pill" data-bs-target="#pills-allstatus" type="button" role="tab" aria-controls="pills-allstatus" aria-selected="true">All Status</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-usedcar-tab" data-bs-toggle="pill" data-bs-target="#pills-usedcar" type="button" role="tab" aria-controls="pills-usedcar" aria-selected="false">Used Cars</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-newcar-tab" data-bs-toggle="pill" data-bs-target="#pills-newcar" type="button" role="tab" aria-controls="pills-newcar" aria-selected="false">New Cars</button>
                    </li>
                  </ul>
                  <div class="adss_bg_stylehome1">
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-allstatus" role="tabpanel" aria-labelledby="pills-allstatus-tab">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="home1_advance_search_wrapper">
                              <ul class="mb0 text-center">
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_brand">
                                      <h6 class="title">Make</h6>
                                      <select class="selectpicker">
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
                                </li>
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_models">
                                      <h6 class="title">Models</h6>
                                      <select class="selectpicker">
                                        <option>Select Models</option>
                                        <option>A3 Sportback</option>
                                        <option>A4</option>
                                        <option>A6</option>
                                        <option>Q5</option>
                                      </select>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_prices">
                                      <h6 class="title">Price</h6>
                                      <select class="selectpicker">
                                        <option>All Price</option>
                                        <option>No max Price</option>
                                        <option>$2,000</option>
                                        <option>$5,000</option>
                                        <option>$10,000</option>
                                        <option>$15,000</option>
                                        <option>$5,000</option>
                                      </select>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <div class="d-block">
                                    <button class="btn btn-thm advnc_search_form_btn"><span class="flaticon-magnifiying-glass"></span>Search</button>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-usedcar" role="tabpanel" aria-labelledby="pills-usedcar-tab">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="home1_advance_search_wrapper">
                              <ul class="mb0 text-center">
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_brand">
                                      <h6 class="title">Make</h6>
                                      <select class="selectpicker">
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
                                </li>
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_models">
                                      <h6 class="title">Models</h6>
                                      <select class="selectpicker">
                                        <option>Select Models</option>
                                        <option>A3 Sportback</option>
                                        <option>A4</option>
                                        <option>A6</option>
                                        <option>Q5</option>
                                      </select>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_prices">
                                      <h6 class="title">Price</h6>
                                      <select class="selectpicker">
                                        <option>All Price</option>
                                        <option>No max Price</option>
                                        <option>$2,000</option>
                                        <option>$5,000</option>
                                        <option>$10,000</option>
                                        <option>$15,000</option>
                                        <option>$5,000</option>
                                      </select>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <button class="btn btn-thm advnc_search_form_btn"><span class="flaticon-magnifiying-glass"></span>Search</button>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-newcar" role="tabpanel" aria-labelledby="pills-newcar-tab">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="home1_advance_search_wrapper">
                              <ul class="mb0 text-center">
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_brand">
                                      <h6 class="title">Make</h6>
                                      <select class="selectpicker">
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
                                </li>
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_models">
                                      <h6 class="title">Models</h6>
                                      <select class="selectpicker">
                                        <option>Select Models</option>
                                        <option>A3 Sportback</option>
                                        <option>A4</option>
                                        <option>A6</option>
                                        <option>Q5</option>
                                      </select>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <div class="car_prices">
                                      <h6 class="title">Price</h6>
                                      <select class="selectpicker">
                                        <option>All Price</option>
                                        <option>No max Price</option>
                                        <option>$2,000</option>
                                        <option>$5,000</option>
                                        <option>$10,000</option>
                                        <option>$15,000</option>
                                        <option>$5,000</option>
                                      </select>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <div class="select-boxes">
                                    <button class="btn btn-thm advnc_search_form_btn"><span class="flaticon-magnifiying-glass"></span>Search</button>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All Status</button>
              <button class="nav-link" id="nav-shopping-tab" data-bs-toggle="tab" data-bs-target="#nav-shopping" role="tab" aria-controls="nav-shopping" aria-selected="false">New Cars</button>
              <button class="nav-link" id="nav-hotels-tab" data-bs-toggle="tab" data-bs-target="#nav-hotels" role="tab" aria-controls="nav-hotels" aria-selected="false">Used Cars</button>
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
                        <div class="tag">FEATURED</div>
                        <img src="image/vehicleimages/<?php echo htmlentities($result->Vehimg);?>" alt="1.jpg">
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price">$<?php echo htmlentities($result->PricePerDay);?></h5>
                          <h6 class="title"><a href=""></a><?php echo htmlentities($result->VehiclesTitle);?> - <span><?php echo htmlentities($result->Vehbrand);?></span></h6>
                          
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
            <a href="page-list-v1.html" class="more_listing">Show All Cars <span class="icon"><span class="fas fa-plus"></span></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>


  
  <!-- Our Footer -->
  <?php include('includes/footer.php') ?>
  <a class="scrollToHome" href="#"><i class="fas fa-arrow-up"></i></a>
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
<script src="js/wow.min.js"></script> 
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Sep 2022 21:12:54 GMT -->
</html>