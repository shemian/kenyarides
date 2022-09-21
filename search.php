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
  <?php 
//Query for Listing count
$vehbrand=$_POST['vehbrand'];
$fueltype=$_POST['fueltype'];
$vehcondition=$_POST['vehcondition'];
$sql = "SELECT id from tblvehicles where tblvehicles.Vehbrand=:vehbrand and tblvehicles.FuelType=:fueltype and tblvehicles.Vehcondition=:vehcondition";
$query = $dbh -> prepare($sql);
$query -> bindParam(':vehbrand',$vehbrand, PDO::PARAM_STR);
$query -> bindParam(':fueltype',$fueltype, PDO::PARAM_STR);
$query -> bindParam(':vehcondition',$vehcondition, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=$query->rowCount();
?>

</div>
</div>



  <!-- Inner Page Breadcrumb -->
  <section class="advance_search_menu_sectn bgc-thm2 pt20 pb0 mt70-992">
    <div class="container">
    <form action="search.php" method="post">
      <div class="row">
     
        <div class="col col-sm-4 col-lg-2">
          <div class="advance_search_style">
            <select class="selectpicker show-tick" name="vehcondition">
                <option>Select</option>
                <option data-tokens="New" value="New">New</option>
                <option data-tokens="Used" value="Used">Used</option>
            </select>
          </div>
        </div>
        <div class="col col-sm-4 col-lg-2">
          <div class="advance_search_style">
            <select class="selectpicker show-tick" name="vehbrand">
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
        <div class="col col-sm-4 col-lg-2">
          <div class="advance_search_style">
            <select class="selectpicker show-tick" name="fueltype">
 
                <option>Select</option>
                <option data-tokens="Diesel" value="Diesel">Diesel</option>
                <option data-tokens="Electric" value="Electric">Electric</option>
                <option data-tokens="Petrol" value="Petrol">Petrol</option>
            </select>
          </div>
        </div>

        <div class="col col-sm-4 col-lg-2">
          <div class="advance_search_style">
            <button class="btn search_btn btn-thm" type="submit" ><span class="flaticon-magnifiying-glass"></span> Search</button>
          </div>
        </div>
  
      </div>
      </form>
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
        $sql = "SELECT tblvehicles.* from tblvehicles where tblvehicles.Vehbrand=:vehbrand and tblvehicles.FuelType=:fueltype  and tblvehicles.Vehcondition=:vehcondition";
        $query = $dbh -> prepare($sql);
        $query -> bindParam(':vehbrand',$vehbrand, PDO::PARAM_STR);
        $query -> bindParam(':fueltype',$fueltype, PDO::PARAM_STR);
        $query -> bindParam(':vehcondition',$vehcondition, PDO::PARAM_STR);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
        foreach($results as $result)
        {  ?>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="car-listing">
            <div class="thumb">
              <div class="tag"><?php echo htmlentities($result->Vehcondition);?></div>
              <img src="image/vehicleimages/<?php echo htmlentities($result->Vehimg);?>"  alt="1.jpg">
              
              
            </div>
            <div class="details">
              <div class="wrapper">
                <h5 class="price">Ksh <?php echo htmlentities($result->PricePerDay);?></h5>
                <h6 class="title"><a href="page-car-single-v1.html"><?php echo htmlentities($result->VehiclesTitle);?></a></h6>
              
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
        <?php }} else{?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Oops!</strong> No Vehicle Found.
  
</div>
            <?php }?>
       
      </div>
       
   
    </div>
  </section>

  <!-- Our Footer -->

<a class="scrollToHome" href="#"><i class="fas fa-arrow-up"></i></a>
</div>


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
<script src="js/script.js"></script>
</body>
</html>