<?php

session_start();
error_reporting(0);
include('includes/config.php');
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

						<h2 class="page-title">Registered Users</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Reg Users</div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										    <th>#</th>
											<th> Name</th>
											<th>Email </th>
											<th>Contact no</th>
											<th>Reg Date</th>
                                            <th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>#</th>
											<th> Name</th>
											<th>Email </th>
											<th>Contact no</th>
											
											<th>Reg Date</th>
                                           
                                            <th>Action</th>
										</tr>
										</tr>
									</tfoot>
									<tbody>
									    <?php $sql = "SELECT * from  tblusers ";

										$query = $dbh -> prepare($sql);
										$query->execute();
										$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0)
										{
										foreach($results as $result)
										{				
										?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->FullName);?></td>
											<td><?php echo htmlentities($result->EmailId);?></td>
											<td><?php echo htmlentities($result->ContactNo);?></td>
	                                        
											<td><?php echo htmlentities($result->RegDate);?></td>
											
											<td><a href="reg-users.php?aeid=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really Want to View the user')"> View</a> /
											<a href="reg-users.php?eid=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to Delete The user')"> Delete</a>
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
<!-- Custom script for all pages --> 
<script src="../js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Sep 2022 21:12:54 GMT -->
</html>