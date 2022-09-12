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
                                    <h4><span class="flaticon-car"></span>Recent Listed Cars</a></h4>
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
                                <form method="post" class="contact_form" name="contact_form" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb20">
                                                <label class="form-label">Vehicle Title</label>
                                                <input name="vehicletitle" class="form-control form_control" type="text" placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="ui_kit_select_search add_new_property mb20">
                                                <label class="form-label">Condition</label>
                                                <select name="condition" class="selectpicker" data-live-search="true" data-width="100%">
                                                    <option>Select</option>
                                                    <option value="new">New</option>
                                                    <option value="used">Used</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="mb20">
                                                <label class="form-label">Siting Capacity</label>
                                                <input name="sittingcapcity" class="form-control form_control" type="text" placeholder="9">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="ui_kit_select_search add_new_property mb20">
                                                <label class="form-label">Brand</label>
                                                <select class="selectpicker" name="brandname" data-live-search="true" data-width="100%">
                                                    <option>Select</option>
                                                    <option value="Audi">Audi</option>
                                                    <option value="Bentley">Bentley</option>
                                                    <option value="BMW">BMW</option>
                                                    <option value="Ford">Ford</option>
                                                    <option value="Honda">Honda</option>
                                                    <option value="Mercedes">Mercedes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="ui_kit_select_search add_new_property mb20">
                                                <label class="form-label">Fuel Type</label>
                                                <select class="selectpicker" name="fueltype" data-live-search="true" data-width="100%">
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
                                                <label class="form-label">Price Per Day (USD)</label>
                                                <input name="form_name" name="priceperday" class="form-control form_control" type="text" placeholder="150 $">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="ui_kit_select_search add_new_property mb20">
                                                <label class="form-label">Model Year</label>
                                                <input name="modelyear" class="form-control form_control" type="text" placeholder="2020">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb20">
                                                <label class="form-label">Vehicle Overview</label>
                                                <textarea name="vehicleoverview" class="form-control" rows="10" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-12">
                                <div class="new_property_form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="title mb30">Select Your Car Features</h4>
                                        </div>
                                         <div class="col-sm-4 col-md-4 col-xl-4 col-xxl">
                                            <div class="ui_kit_checkbox mb30-lg">
                                                <label class="form-label mb25">Comfort</label>
                                                <div class="df mb20">
                                                    <input type="checkbox" class="custom-control-input" id="leatherseats" name="leatherseats">
                                                    <label class="custom-control-label" for="customCheck1">Leather Seats</label>
                                                </div>
                                                <div class="df mb20">
                                                    <input type="checkbox" class="custom-control-input" id="cdplayer" name="cdplayer" value="1">
                                                    <label class="custom-control-label" for="customCheck2">CD Player</label>
                                                </div>
                                                <div class="df mb20">
                                                    <input type="checkbox" class="custom-control-input" id="airconditioner" name="airconditioner">
                                                    <label class="custom-control-label" for="customCheck3">Air Conditioner</label>
                                                </div>
                                                <div class="df mb20">
                                                    <input type="checkbox" class="custom-control-input" id="powersteering" name="powersteering" value="1">
                                                    <label class="custom-control-label" for="customCheck4">Power Steering</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-xl-4 col-xxl">
                                            <div class="ui_kit_checkbox mb30-lg">
                                                <label class="form-label mb25">Safety</label>
                                                <div class="df mb20">
                                                    <input type="checkbox" class="custom-control-input" id="powerdoorlocks" name="powerdoorlocks" value="1">
                                                    <label class="custom-control-label" for="customCheck11">Power Door Lock</label>
                                                </div>
                                                <div class="df mb20">
                                                    <input type="checkbox" class="custom-control-input" id="antilockbrakingsys" name="antilockbrakingsys" value="1">
                                                    <label class="custom-control-label" for="customCheck12">Anti Breaking System</label>
                                                </div>
                                                <div class="df mb20">
                                                    <input type="checkbox" class="custom-control-input" id="brakeassist" name="brakeassist" value="1">
                                                    <label class="custom-control-label" for="customCheck13">Break Assist</label>
                                                </div>
                                                <div class="df mb20">
                                                    <input type="checkbox" class="custom-control-input" id="driverairbag" name="driverairbag" value="1">
                                                    <label class="custom-control-label" for="customCheck14">Driver Airbag</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-xl-4 col-xxl">
                                            <div class="ui_kit_checkbox mb30-lg">
                                                <label class="form-label mb25">Comfort</label>
                                                <div class="df mb20">
                                                    <input type="checkbox" class="custom-control-input"id="centrallocking" name="centrallocking" value="1">
                                                    <label class="custom-control-label" for="customCheck16">Central Locking</label>
                                                </div>
                                                <div class="df mb20">
                                                    <input type="checkbox" class="custom-control-input"  id="crashcensor" name="crashcensor" value="1">
                                                    <label class="custom-control-label" for="customCheck17">Crush sensor</label>
                                                </div>
                                                <div class="df mb20">
                                                    <input type="checkbox" class="custom-control-input" id="leatherseats" name="leatherseats" value="1">
                                                    <label class="custom-control-label" for="customCheck18">Leather Seats</label>
                                                </div>
                                                <div class="df mb20">
                                                    <input type="checkbox" class="custom-control-input" id="passengerairbag" name="passengerairbag" value="1">
                                                    <label class="custom-control-label" for="customCheck19">Passanger Airbag</label>
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
                                                            <input type="file" id="imag3" name="img" class="input-img" placeholder="UPLOAD FILES"/>
                                                            <span class="">UPLOAD FILES</span>
                                                        </span>
                                                        <img id="ImgPreview3" src="#" class="preview3" alt=""/>
                                                        <button id="removeImage3" class="btn-rmv3" type="button"><span>X</span></button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-sm-offset-2">
                                <br><br>
                                <button class="btn btn-log btn-thm mt5" type="reset">Cancel</button>
                                <button class="btn btn-log btn-thm mt5" name="submit" type="submit">Save changes</button>
                            </div>
                        </form>

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