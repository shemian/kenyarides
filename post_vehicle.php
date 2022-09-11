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
    <div class="header_top home3_style dashbord_style dn-992">
    <?php include('includes/header.php') ?>
    </div>
  
  <!-- Main Header Nav -->
  <header class="header-nav menu_style_home_one home3_style dashbord_style main-menu">
     <?php  include('includes/navbar.php') ?>
</header>
  

<!-- listings section form -->
<section class="our-dashbord dashbord bgc-f9">
		<div class="container-fluid">
			<div class="row">
        <div class="col-xxl-10 offset-xxl-2 dashboard_grid_space">
          <div class="row">
            <div class="col-lg-12">
              <div class="extra-dashboard-menu dn-lg">
                <div class="ed_menu_list">
                  <ul>
                    <li><a href="page-dashboard.html"><span class="flaticon-dashboard"></span>Dashboard</a></li>
                    <li><a href="page-dashboard-profile.html"><span class="flaticon-user-2"></span>Profile</a></li>
                    <li><a href="page-dashboard-listing.html"><span class="flaticon-list"></span>My Listing</a></li>
                    <li><a href="page-dashboard-favorites.html"><span class="flaticon-heart"></span>Favorites</a></li>
                    <li><a class="active" href="page-dashboard-add-listings.html"><span class="flaticon-plus"></span>Add Listing</a></li>
                    <li><a href="page-dashboard-messages.html"><span class="flaticon-message"></span>Messages</a></li>
                    <li><a href="page-login.html"><span class="flaticon-logout"></span>Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
					<div class="row">
						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-lg mt50">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
									<ul id="myDropdown" class="dropdown-content">
                    <li><a href="page-dashboard.html"><span class="flaticon-dashboard"></span>Dashboard</a></li>
                    <li><a href="page-dashboard-profile.html"><span class="flaticon-user-2"></span>Profile</a></li>
                    <li><a href="page-dashboard-listing.html"><span class="flaticon-list"></span>My Listing</a></li>
                    <li><a href="page-dashboard-favorites.html"><span class="flaticon-heart"></span>Favorites</a></li>
                    <li><a class="active" href="page-dashboard-add-listings.html"><span class="flaticon-plus"></span>Add Listing</a></li>
                    <li><a href="page-dashboard-messages.html"><span class="flaticon-message"></span>Messages</a></li>
                    <li><a href="page-login.html"><span class="flaticon-logout"></span>Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-8">
              <div class="col-lg-12 mb50">
                <div class="breadcrumb_content">
                  <h2 class="breadcrumb_title">Add Listing</h2>
                  <p>Ready to jump back in?</p>
                </div>
              </div>
						</div>
					</div>
          <div class="row">
            <div class="col-lg-12">
              <div class="new_property_form">
                <h4 class="title mb30">Additional</h4>
                <form class="contact_form" name="contact_form" action="#" method="post" novalidate>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mb20">
                        <label class="form-label">Listing Title</label>
                        <input name="form_name" class="form-control form_control" type="text" placeholder="Title">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                        <label class="form-label">Condition</label>
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                          <option>Select</option>
                          <option data-tokens="Free">Most Recent</option>
                          <option data-tokens="PriceLevel2">Recent</option>
                          <option data-tokens="PriceLevel3">Best Selling</option>
                          <option data-tokens="PriceLevel4">Old Review</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                        <label class="form-label">Type</label>
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                          <option>Select</option>
                          <option data-tokens="Active">Active</option>
                          <option data-tokens="Pending">Pending</option>
                          <option data-tokens="Approved">Approved</option>
                          <option data-tokens="Others">Others</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                        <label class="form-label">Make</label>
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                          <option>Select</option>
                          <option data-tokens="Audi">Audi</option>
                          <option data-tokens="Bentley">Bentley</option>
                          <option data-tokens="BMW">BMW</option>
                          <option data-tokens="Ford">Ford</option>
                          <option data-tokens="Honda">Honda</option>
                          <option data-tokens="Mercedes">Mercedes</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                        <label class="form-label">Model</label>
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                          <option>Select</option>
                          <option data-tokens="Free">A3 Sportback</option>
                          <option data-tokens="PriceLevel2">A4</option>
                          <option data-tokens="PriceLevel3">A6</option>
                          <option data-tokens="PriceLevel4">Q5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="mb20">
                        <label class="form-label">Price (USD)</label>
                        <input name="form_name" class="form-control form_control" type="text" placeholder="150 $">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                        <label class="form-label">Year</label>
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                          <option>2020</option>
                          <option data-tokens="Year">Year</option>
                          <option data-tokens="1967">1967</option>
                          <option data-tokens="1990">1990</option>
                          <option data-tokens="2000">2000</option>
                          <option data-tokens="2002">2002</option>
                          <option data-tokens="2005">2005</option>
                          <option data-tokens="2010">2010</option>
                          <option data-tokens="2015">2015</option>
                          <option data-tokens="2020">2020</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                        <label class="form-label">Drive Type</label>
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                          <option>Select</option>
                          <option data-tokens="Convertible">Convertible</option>
                          <option data-tokens="Coupe">Coupe</option>
                          <option data-tokens="Hatchback">Hatchback</option>
                          <option data-tokens="Sedan">Sedan</option>
                          <option data-tokens="SUV">SUV</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                        <label class="form-label">Transmission</label>
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                          <option>Select</option>
                          <option data-tokens="Transmission">Transmission</option>
                          <option data-tokens="Autometic">Autometic</option>
                          <option data-tokens="Manual">Manual</option>
                          <option data-tokens="Semi-Autometic">Semi-Autometic</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                        <label class="form-label">Fuel Type</label>
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                          <option>Select</option>
                          <option data-tokens="Fuel Type">Fuel Type</option>
                          <option data-tokens="Diesel">Diesel</option>
                          <option data-tokens="Electric">Electric</option>
                          <option data-tokens="Hybrid">Hybrid</option>
                          <option data-tokens="Petrol">Petrol</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="mb20">
                        <label class="form-label">Mileage</label>
                        <input name="form_name" class="form-control form_control" type="text" placeholder="100">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="mb20">
                        <label class="form-label">Engine Size</label>
                        <input name="form_name" class="form-control form_control" type="text" placeholder="Select">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                        <label class="form-label">Cylinders</label>
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                          <option>Select</option>
                          <option data-tokens="4">4</option>
                          <option data-tokens="6">6</option>
                          <option data-tokens="8">8</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                        <label class="form-label">Color</label>
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                          <option>Select</option>
                          <option data-tokens="Black">Black</option>
                          <option data-tokens="Beige">Beige</option>
                          <option data-tokens="Brown">Brown</option>
                          <option data-tokens="Red">Red</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                        <label class="form-label">Doors</label>
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                          <option>Select</option>
                          <option data-tokens="Doors">Doors</option>
                          <option data-tokens="2 Doors">2 Doors</option>
                          <option data-tokens="3 Doors">3 Doors</option>
                          <option data-tokens="4 Doors">4 Doors</option>
                          <option data-tokens="5 Doors">5 Doors</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb20">
                        <label class="form-label">VIN</label>
                        <input name="form_name" class="form-control form_control" type="text" placeholder="Select">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="mb20">
                        <label class="form-label">Description</label>
                        <textarea name="form_message" class="form-control" rows="10" placeholder="Description"></textarea>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="new_property_form">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="title mb30">Select Your Car Features</h4>
                  </div>
                  <div class="col-sm-4 col-md-4 col-xl-3 col-xxl">
                    <div class="ui_kit_checkbox mb30-lg">
                      <label class="form-label mb25">Comfort</label>
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
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Navigation System (9,784)</label>
                      </div>
                      <div class="df">
                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                        <label class="custom-control-label" for="customCheck5">Remote Start (9,784)</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-4 col-xl-3 col-xxl">
                    <div class="ui_kit_checkbox mb30-lg">
                      <label class="form-label mb25">Entertainment</label>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                        <label class="custom-control-label" for="customCheck6">Adaptive Cruise Control (6,676)</label>
                      </div>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                        <label class="custom-control-label" for="customCheck7">Cooled Seats (9,784)</label>
                      </div>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck8">
                        <label class="custom-control-label" for="customCheck8">Keyless Start (9,784)</label>
                      </div>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck9">
                        <label class="custom-control-label" for="customCheck9">Navigation System (9,784)</label>
                      </div>
                      <div class="df">
                        <input type="checkbox" class="custom-control-input" id="customCheck10">
                        <label class="custom-control-label" for="customCheck10">Remote Start (9,784)</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-4 col-xl-3 col-xxl">
                    <div class="ui_kit_checkbox mb30-lg">
                      <label class="form-label mb25">Safety</label>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck11">
                        <label class="custom-control-label" for="customCheck11">Adaptive Cruise Control (6,676)</label>
                      </div>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck12">
                        <label class="custom-control-label" for="customCheck12">Cooled Seats (9,784)</label>
                      </div>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck13">
                        <label class="custom-control-label" for="customCheck13">Keyless Start (9,784)</label>
                      </div>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck14">
                        <label class="custom-control-label" for="customCheck14">Navigation System (9,784)</label>
                      </div>
                      <div class="df">
                        <input type="checkbox" class="custom-control-input" id="customCheck15">
                        <label class="custom-control-label" for="customCheck15">Remote Start (9,784)</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-4 col-xl-3 col-xxl">
                    <div class="ui_kit_checkbox mb30-lg">
                      <label class="form-label mb25">Seats</label>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck16">
                        <label class="custom-control-label" for="customCheck16">Adaptive Cruise Control (6,676)</label>
                      </div>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck17">
                        <label class="custom-control-label" for="customCheck17">Cooled Seats (9,784)</label>
                      </div>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck18">
                        <label class="custom-control-label" for="customCheck18">Keyless Start (9,784)</label>
                      </div>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck19">
                        <label class="custom-control-label" for="customCheck19">Navigation System (9,784)</label>
                      </div>
                      <div class="df">
                        <input type="checkbox" class="custom-control-input" id="customCheck20">
                        <label class="custom-control-label" for="customCheck20">Remote Start (9,784)</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-4 col-xl-3 col-xxl">
                    <div class="ui_kit_checkbox mb30-lg">
                      <label class="form-label mb25">Other</label>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck21">
                        <label class="custom-control-label" for="customCheck21">Adaptive Cruise Control (6,676)</label>
                      </div>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck22">
                        <label class="custom-control-label" for="customCheck22">Cooled Seats (9,784)</label>
                      </div>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck23">
                        <label class="custom-control-label" for="customCheck23">Keyless Start (9,784)</label>
                      </div>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck24">
                        <label class="custom-control-label" for="customCheck24">Navigation System (9,784)</label>
                      </div>
                      <div class="df">
                        <input type="checkbox" class="custom-control-input" id="customCheck25">
                        <label class="custom-control-label" for="customCheck25">Remote Start (9,784)</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="new_property_form">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="title mb30">Gallery</h4>
                  </div>
                  <div class="col-lg-12">
                    <label class="form-label">Featured Image</label>
                    <ul class="mb0 mt10">
                      <li class="list-inline-item">
                        <div class="portfolio_item">
                          <img class="img-fluid" src="images/listing/a1.jpg" alt="a1.jpg">
                          <div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete">
                            <a href="#"><span>X</span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-inline-item">
                        <div class="portfolio_item">
                          <img class="img-fluid" src="images/listing/a2.jpg" alt="a2.jpg">
                          <div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete">
                            <a href="#"><span>X</span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-inline-item">
                        <div class="portfolio_item">
                          <img class="img-fluid" src="images/listing/a3.jpg" alt="a3.jpg">
                          <div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete">
                            <a href="#"><span>X</span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-inline-item vat">
                        <div class="upload_file_input_add_remove style-right mb30-sm">
                          <span class="btn_upload">
                            <input type="file" id="imag3" title="" class="input-img" placeholder="UPLOAD FILES"/>
                            <span class="">UPLOAD FILES</span>
                          </span>
                          <img id="ImgPreview3" src="#" class="preview3" alt=""/>
                          <button id="removeImage3" class="btn-rmv3" type="button"><span>X</span></button>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-12">
                    <div class="mb20">
                      <label class="form-label">Video - copy any online video link e.g. YouTube, Facebook, Instagram or .mp4</label>
                      <input name="form_name" class="form-control form_control" type="text" placeholder="Video Link">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="new_property_form">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="title mb30">Location</h4>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="mb20">
                      <label class="form-label">Location</label>
                      <input name="form_name" class="form-control form_control" type="text" placeholder="Address">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="mb20">
                      <label class="form-label">Latitude</label>
                      <input name="form_name" class="form-control form_control" type="text" placeholder="Latitude">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="mb20">
                      <label class="form-label">Longitude</label>
                      <input name="form_name" class="form-control form_control" type="text" placeholder="Longitude">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="new_propertyform_btn mb20">
                      <div class="h550 bdrs8" id="map-canvas"></div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="new_propertyform_btn">
                      <a href="#" class="btn btn-thm ad_flor_btn">Add Listing</a>
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