<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{


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
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/responsive.css">
<link rel="stylesheet" href="../css/styles.css">
<title>KenyaTour</title>
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
</head>
<body>
<div class="wrapper ovh">
  <div class="preloader"></div>
  <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php include('includes/sidebar.php') ?>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php include('includes/header.php') ?>
                <!-- Page content-->
                <br>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-header">Vehicles</div>
                                <div class="card-body">
                                    <h5 class="card-title">Total Vehicles</h5>
                                    <?php 
                                    $sql ="SELECT id from tblvehicles ";
                                    $query = $dbh -> prepare($sql);
                                    $query->execute();
                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                    $veh=$query->rowCount();
                                    ?>
                                   <div class="stat-panel-number h1 "><?php echo htmlentities($veh);?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-header">Registerd Users</div>
                                <div class="card-body">
                                    <h5 class="card-title">Total Registerd Users</h5>
                                    <?php 
                                    $sql ="SELECT id from tblusers ";
                                    $query = $dbh -> prepare($sql);
                                    $query->execute();
                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                    $users=$query->rowCount();
                                    ?>
                                   <div class="stat-panel-number h1 "><?php echo htmlentities($users);?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-header">Bookings</div>
                                <div class="card-body">
                                    <h5 class="card-title">Number Of Bookings</h5>
                                    <?php 
                                    $sql ="SELECT id from tblbooking";
                                    $query = $dbh -> prepare($sql);
                                    $query->execute();
                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                    $bookings=$query->rowCount();
                                    ?>
                                   <div class="stat-panel-number h1 "><?php echo htmlentities($bookings);?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   
</div>

<script src="../js/jquery-3.6.0.js"></script> 
<script src="../js/jquery-migrate-3.0.0.min.js"></script> 
<script src="../js/popper.min.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/bootstrap-select.min.js"></script>
<script src="../js/jquery.mmenu.all.js"></script> 
<script src="../js/ace-responsive-menu.js"></script> 
<script src="../js/isotop.js"></script> 
<script src="../js/snackbar.min.js"></script> 
<script src="../js/simplebar.js"></script> 
<script src="../js/parallax.js"></script> 
<script src="../js/scrollto.js"></script> 
<script src="../js/jquery-scrolltofixed-min.js"></script> 
<script src="../js/jquery.counterup.js"></script> 
<script src="../js/wow.min.js"></script> 
<script src="../js/progressbar.js"></script> 
<script src="../js/slider.js"></script>
<script src="../js/timepicker.js"></script> 
<script src="../js/wow.min.js"></script>  
<script src="../js/script.js"></script>
</body>
</html>
<?php } ?>