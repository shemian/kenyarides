<?php 
session_start();
include('includes/config.php');
if(strlen($email = $_SESSION['login'])){
// error_reporting(0);
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

	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-f9">
		<div class="container-fluid">
			<div class="row">
        <div class="col-xxl-10 offset-xxl-2 dashboard_grid_space">
					<div class="row">
						<div class="col-xl-8">
              <div class="col-lg-12 mb50">
                <div class="breadcrumb_content">
                  <h2 class="breadcrumb_title">My Listing</h2>
                 
                </div>
              </div>
						</div>
					</div>
          <div class="row">
            <div class="col-lg-12">
              <div class="dashboard_favorites_contents dashboard_my_lising_tabs p10-520">
                <div class="row">
                  <!-- Tab panes -->
                  <div class="col-lg-12 mt50">
                    <div class="tab-content row" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="col-lg-12">
                          <div class="table-responsive my_lisging_table">
                          
                            <table class="table">
                              <thead class="table-light">
                                <tr class="thead_row">
                                  <th class="thead_title pl20" scope="col">Make</th>
                                  <th class="thead_title" scope="col">Model</th>
                                  <th class="thead_title" scope="col">Year</th>
                                  <th class="thead_title" scope="col">Seating Capacity</th>
                                  <th class="thead_title" scope="col">FuelType</th>
                                  <th class="thead_title" scope="col">Action</th>
                                </tr>
                              </thead>
                              
                              <tbody>
                              <?php
                              
                              include('user_filter.php');
                              $user_id=getLoggedInUserId($email, $dbh);

                              $sql = "SELECT tblvehicles.*from tblvehicles WHERE tblvehicles.user_id=:user_id";
                              $query = $dbh -> prepare($sql);
                              $query->bindParam(':user_id',$user_id, PDO::PARAM_STR);
                              $query->execute();
                              $results=$query->fetchAll(PDO::FETCH_OBJ);
                              $cnt=1;
                              if($query->rowCount() > 0)
                              {
                                foreach($results as $result)
                                { 
                                  ?>
                                <tr>
                                  <th class="align-middle pl20" scope="row">
                                    <div class="car-listing bdr_none d-flex mb0">
                                      <div class="thumb w150">
                                        <img class="img-fluid" src="images/listing/1.jpg" alt="1.jpg">
                                      </div>
                                      <div class="details ms-1">
                                      <h6 class="title"><a href=""></a><?php echo htmlentities($result->VehiclesTitle);?> - <span><?php echo htmlentities($result->Vehbrand);?></span></h6>
                                        <h5 class="price">$<?php echo htmlentities($result->PricePerDay);?></h5>
                                      </div>
                                    </div>
                                  </th>
                                  <td class="align-middle"><?php echo htmlentities($result->Vehbrand);?></td>
                                  <td class="align-middle"><?php echo htmlentities($result->ModelYear);?></td>
                                  <td class="align-middle"><?php echo htmlentities($result->SeatingCapacity);?></td>
                                  <td class="align-middle"><?php echo htmlentities($result->FuelType);?></td>
                                  <td class="editing_list align-middle">
                                    <ul>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><span class="flaticon-view"></span></a>
                                      </li>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="flaticon-trash"></span></a>
                                      </li>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-trash"></span></a>
                                      </li>
                                    </ul>
                                  </td>
                                </tr>
                              <?php }} else{?>
                                <!-- <h6>You Don't have any listings yet!!</h6> -->
                                <?php }?>
                              </tbody>
                             

                            </table>
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
<a class="scrollToHome" href="#"><i class="fas fa-arrow-up"></i></a>
</div>
<!-- Wrapper End -->
<script src="js/jquery-3.6.0.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.mmenu.all.js"></script>
<script src="js/ace-responsive-menu.js"></script>
<script src="js/bootstrap-select.min.js"></script>
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
<script src="js/dashboard-script.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>
</html>
<?php } 
else{
    header('location:#loginform');
    
 }?>