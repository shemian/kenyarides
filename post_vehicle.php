<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($email = $_SESSION['login'])){
    include('user_filter.php');
    $user_id =getLoggedInUserId($email, $dbh);
   
 
 if(isset($_POST['submit']))
 {
    $vehicletitle=$_POST['vehicletitle'];
    if(isset($_POST['vehcondition'])) $vehcondition = $_POST['vehcondition'];
    $vehcondition="";
    if(isset($_POST['vehcondition'])) $vehcondition = $_POST['vehcondition'];
    $vehicleoverview=$_POST['vehicaloverview'];
    $priceperday=$_POST['priceperday'];
    $fueltype=$_POST['fueltype'];
    $vehbrand=$_POST['vehbrand'];
    $modelyear=$_POST['modelyear'];
    $seatingcapacity=$_POST['seatingcapacity'];
    $img=$_FILES["img"]["name"];
    
    $airconditioner="";
    if(isset($_POST['airconditioner'])) $airconditioner = $_POST['airconditioner'];
    $powerdoorlocks="";
    if(isset($_POST['powerdoorlocks'])) $powerdoorlocks = $_POST['powerdoorlocks'];
    $antilockbrakingsys="";
    if(isset($_POST['antilockbrakingsys'])) $antilockbrakingsys = $_POST['antilockbrakingsys'];
    $brakeassist="";
    if(isset($_POST['brakeassist'])) $brakeassist = $_POST['brakeassist'];
    $powersteering="";
    if(isset($_POST['powersteering'])) $powersteering = $_POST['powersteering'];
    $driverairbag="";
    if(isset($_POST['driverairbag'])) $driverairbag = $_POST['driverairbag'];  
    $passengerairbag="";
    if(isset($_POST['passengerairbag'])) $passengerairbag= $_POST['passengerairbag'];
    $powerwindow="";
    if(isset($_POST['powerwindow'])) $powerwindow = $_POST['powerwindow'];
    $centrallocking="";
    if(isset($_POST['centrallocking'])) $centrallocking = $_POST['centrallocking'];
    $crashcensor="";
    if(isset($_POST['crashcensor'])) $crashcensor = $_POST['crashcensor'];
    $leatherseats="";
    if(isset($_POST['leatherseats'])) $leatherseats = $_POST['leatherseats'];
   
    move_uploaded_file($_FILES["img"]["tmp_name"],"image/vehicleimages/".$_FILES["img"]["name"]);

    $sql="INSERT INTO tblvehicles(VehiclesTitle,user_id,Vehbrand,Vehcondition,VehiclesOverview,PricePerDay,FuelType,ModelYear,SeatingCapacity,Vehimg,AirConditioner,PowerDoorLocks,AntiLockBrakingSystem,BrakeAssist,PowerSteering,DriverAirbag,PassengerAirbag,PowerWindows,CentralLocking,CrashSensor,LeatherSeats) VALUES(:vehicletitle,:user_id,:vehbrand,:vehcondition,:vehicleoverview,:priceperday,:fueltype,:modelyear,:seatingcapacity,:img,:airconditioner,:powerdoorlocks,:antilockbrakingsys,:brakeassist,:powersteering,:driverairbag,:passengerairbag,:powerwindow,:centrallocking,:crashcensor,:leatherseats)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':vehicletitle',$vehicletitle,PDO::PARAM_STR);
    $query->bindParam(':user_id',$user_id,PDO::PARAM_STR);
    $query->bindParam(':vehbrand',$vehbrand,PDO::PARAM_STR);
    $query->bindParam(':vehcondition',$vehcondition,PDO::PARAM_STR);
    $query->bindParam(':vehicleoverview',$vehicleoverview,PDO::PARAM_STR);
    $query->bindParam(':priceperday',$priceperday,PDO::PARAM_STR);
    $query->bindParam(':fueltype',$fueltype,PDO::PARAM_STR);
    $query->bindParam(':modelyear',$modelyear,PDO::PARAM_STR);
    $query->bindParam(':seatingcapacity',$seatingcapacity,PDO::PARAM_STR);
    $query->bindParam(':img',$img,PDO::PARAM_STR);
    $query->bindParam(':airconditioner',$airconditioner,PDO::PARAM_STR);
    $query->bindParam(':powerdoorlocks',$powerdoorlocks,PDO::PARAM_STR);
    $query->bindParam(':antilockbrakingsys',$antilockbrakingsys,PDO::PARAM_STR);
    $query->bindParam(':brakeassist',$brakeassist,PDO::PARAM_STR);
    $query->bindParam(':powersteering',$powersteering,PDO::PARAM_STR);
    $query->bindParam(':driverairbag',$driverairbag,PDO::PARAM_STR);
    $query->bindParam(':passengerairbag',$passengerairbag,PDO::PARAM_STR);
    $query->bindParam(':powerwindow',$powerwindow,PDO::PARAM_STR);
    $query->bindParam(':centrallocking',$centrallocking,PDO::PARAM_STR);
    $query->bindParam(':crashcensor',$crashcensor,PDO::PARAM_STR);
    $query->bindParam(':leatherseats',$leatherseats,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId)
    {
        $msg="Vehicle posted successfully";
    }
    else 
    {
        $error="Something went wrong. Please try again";
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
                    <!-- <div class="row">
                        <div class="col-lg-12">
                            <div class="extra-dashboard-menu dn-lg">
                                <div class="ed_menu_list">
                                    <h4><span class="flaticon-car"></span>Recent Listed Cars</a></h4>
                                </div>
                            </div>
                        </div> -->
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
                                <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }
                                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                                <div class="panel-body">
                                <form method="post" class="contact_form" name="contact_form" action="post_vehicle.php" enctype="multipart/form-data">
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
                                                <select name="vehcondition" class="selectpicker" data-live-search="true" data-width="100%">
                                                    <option>Select</option>
                                                    <option data-tokens="New" value="New">New</option>
                                                    <option data-tokens="Used" value="Used">Used</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="mb20">
                                                <label class="form-label">Siting Capacity</label>
                                                <input name="seatingcapacity" class="form-control form_control" type="text" placeholder="9">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="ui_kit_select_search add_new_property mb20">
                                                <label class="form-label">Brand</label>
                                                <select class="selectpicker" name="vehbrand" data-live-search="true" data-width="100%">
                                                    <option>Select</option>
                                                    <option data-tokens="Audi" value="Audi">Audi</option>
                                                    <option data-tokens="Bentley" value="Bentley">Bentley</option>
                                                    <option data-tokens="BMW" value="BMW">BMW</option>
                                                    <option data-tokens="Ford" value="Ford">Ford</option>
                                                    <option data-tokens="Honda" value="Honda">Honda</option>
                                                    <option data-tokens="Mercedes" value="Mercedes">Mercedes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="ui_kit_select_search add_new_property mb20">
                                                <label class="form-label">Fuel Type</label>
                                                <select class="selectpicker" name="fueltype" data-live-search="true" data-width="100%">
                                                    <option>Select</option>
                                                    <option data-tokens="Diesel" value="Diesel">Diesel</option>
                                                    <option data-tokens="Electric" value="Electric">Electric</option>
                                                    <option data-tokens="Petrol" value="Petrol">Petrol</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                          
                                            <div class="mb20">
                                                <label class="form-label">Price Per Day (KSH)</label>
                                                <input name="priceperday" class="form-control form_control" type="text" placeholder="9">
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
                                                <textarea name="vehicaloverview" class="form-control" rows="10" placeholder="Description"></textarea>
                                            </div>
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
                                                            <input type="checkbox" class="custom-control-input" id="airconditioner" name="airconditioner" value="1">
                                                            <label class="custom-control-label" for="airconditioner">Air Conditioner</label>
                                                        </div>
                                                        <div class="df mb20">
                                                            <input type="checkbox" class="custom-control-input"id="powerdoorlocks" name="powerdoorlocks"  value="1">
                                                            <label class="custom-control-label" for="powerdoorlocks">Power Door Locks</label>
                                                        </div>
                                                        <div class="df mb20">
                                                            <input type="checkbox" class="custom-control-input" id="antilockbrakingsys" name="antilockbrakingsys" value="1">
                                                            <label class="custom-control-label" for="antilockbrakingsys">Anti Breaking system</label>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-xl-3 col-xxl">
                                                    <div class="ui_kit_checkbox mb30-lg">
                                                        <label class="form-label mb25">Comfort</label>
    
                                                        
                                                        <div class="df mb20">
                                                            <input type="checkbox" class="custom-control-input" id="brakeassist" name="brakeassist" value="1">
                                                            <label class="custom-control-label" for="brakeassist">Break Assist</label>
                                                        </div>
                                                        <div class="df">
                                                            <input type="checkbox" class="custom-control-input" id="powersteering" name="powersteering" value="1">
                                                            <label class="custom-control-label" for="powersteering">Power Steering </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-xl-3 col-xxl">
                                                    <div class="ui_kit_checkbox mb30-lg">
                                                        <label class="form-label mb25">Comfort</label>
                                                        <div class="df mb20">
                                                            <input type="checkbox" class="custom-control-input"  id="driverairbag" name="driverairbag" value="1">
                                                            <label class="custom-control-label" for="airconditioner">Driver Airbag</label>
                                                        </div>
                                                        <div class="df mb20">
                                                            <input type="checkbox" class="custom-control-input" id="passengerairbag" name="passengerairbag" value="1">
                                                            <label class="custom-control-label" for="powerdoorlocks">Passenger Airbag </label>
                                                        </div>
                                                        <div class="df mb20">
                                                            <input type="checkbox" class="custom-control-input" id="powerwindow" name="powerwindow" value="1">
                                                            <label class="custom-control-label" for="powerwindow">Power Windows</label>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-xl-3 col-xxl">
                                                    <div class="ui_kit_checkbox mb30-lg">
                                                        <label class="form-label mb25">Safety</label>
                                                        
                                                        <div class="df mb20">
                                                            <input type="checkbox" class="custom-control-input"  id="centrallocking" name="centrallocking" value="1">
                                                            <label class="custom-control-label" for="centrallocking">Central Locking</label>
                                                        </div>
                                                        <div class="df mb20">
                                                            <input type="checkbox" class="custom-control-input" id="crashcensor" name="crashcensor" value="1">
                                                            <label class="custom-control-label" for="powersteering">Crash Censor</label>
                                                        </div>
                                                        <div class="df">
                                                            <input type="checkbox" class="custom-control-input" id="leatherseats" name="leatherseats" value="1">
                                                            <label class="custom-control-label" for="powersteering">Leather Seats</label>
                                                        </div>
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
                                </div>
                            </form>
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
<script src="js/script.js"></script>
</body>
</html>
<?php } 
else{
    header('location:index.php');
    
 }?>