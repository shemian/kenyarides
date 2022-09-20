<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('../Enums/BookingStatus.php');
include('../includes/updateBooking.php');

// if(strlen($_SESSION['alogin'])==0)
// 	{	
// header('location:index.php');
// }
// else{
	


if(isset($_REQUEST['booking_id']))
	{
		$booking_id=intval($_GET['booking_id']);
		if(isset($_REQUEST['action']))
		{
			$action = $_GET['action'];
			if($action==='confirm'){
				updateBookingStatus($booking_id, BookingStatus::CONFIRMED, $dbh);
				$msg="Booking Successfully Confirmed";
			}else if($action==='return'){
				updateBookingStatus($booking_id, BookingStatus::RETURNED, $dbh);
				$msg="Vehicle returned Successfully";
			}
			else{
				updateBookingStatus($booking_id, BookingStatus::CANCELLED, $dbh);
				$msg="Booking Successfully Cancelled";
			}
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
                <div class="content-wrapper">
                <div class="container-fluid">

<div class="row">
    <div class="col-md-12">

        <h2 class="page-title">Manage Bookings</h2>

        <!-- Zero Configuration Table -->
        <div class="panel panel-default">
            <div class="panel-heading">Bookings Info</div>
            <div class="panel-body">
            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                        <th>#</th>
                            <th>Name</th>
                            <th>Vehicle</th>
                            <th>From Date</th>
                            <th>To Date</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Posting date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                            <th>Vehicle</th>
                            <th>From Date</th>
                            <th>To Date</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Posting date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>

                    <?php
                    $sql = "SELECT tblusers.FullName,tblvehicles.Vehbrand,tblvehicles.VehiclesTitle,tblbooking.FromDate,tblbooking.ToDate,tblbooking.message,tblbooking.VehicleId as vid,tblbooking.Status,tblbooking.PostingDate,tblbooking.id  from tblbooking join tblvehicles on tblvehicles.id=tblbooking.VehicleId join tblusers on tblusers.EmailId=tblbooking.userEmail";
                    $query = $dbh -> prepare($sql);
                    $query->execute();
                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                    $cnt=1;
                    if($query->rowCount() > 0)
                       {
                         foreach($results as $result)
                         {				?>
                        <tr>
                            <td><?php echo htmlentities($cnt);?></td>
                            <td><?php echo htmlentities($result->FullName);?></td>
                            <td><a href="edit-vehicle.php?id=<?php echo htmlentities($result->vid);?>"><?php echo htmlentities($result->Vehbrand);?> , <?php echo htmlentities($result->VehiclesTitle);?></td>
                            <td><?php echo htmlentities($result->FromDate);?></td>
                            <td><?php echo htmlentities($result->ToDate);?></td>
                            <td><?php echo htmlentities($result->message);?></td>
                            <td>
                                <?php
                                    if($result->Status==0)
                                    {
                                    echo htmlentities('Not Confirmed yet');
                                    } else if ($result->Status==1) {
                                    echo htmlentities('Confirmed');
                                    }
                                    else if ($result->Status==5) {
                                        echo htmlentities('Returned');
                                        }
                                    else{
                                        echo htmlentities('Cancelled');
                                    }
                                ?>
                            </td>

                            <td><?php echo htmlentities($result->PostingDate);?></td>
                            <td><a href="bookings.php?booking_id=<?php echo htmlentities($result->id);?>&action=confirm" onclick="return confirm('Do you really want to Confirm this booking')"> Confirm</a> /
                            <a href="bookings.php?booking_id=<?php echo htmlentities($result->id);?>&action=cancel" onclick="return confirm('Do you really want to Cancel this Booking')"> Cancel</a>/	
                            <a href="bookings.php?booking_id=<?php echo htmlentities($result->id);?>&action=return" onclick="return confirm('Do you really want to The Return of  this Car')">Returned</a>
                            </td>

                        </tr>
                        <?php $cnt=$cnt+1; }} ?>
            
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
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   
</div>

<!-- Wrapper End --> 
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
