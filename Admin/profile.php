<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
// Code for change password	
if(isset($_POST['submit']))
	{

$password=md5($_POST['password']);
$newpassword=md5($_POST['newpassword']);
$username=$_SESSION['alogin'];
$sql ="SELECT * FROM admin WHERE UserName=:username and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update admin set Password=:newpassword where UserName=:username";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':username', $username, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
$msg="Your Password succesfully changed";
}
else {
$error="Your current password is not valid.";	
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
<link rel="stylesheet" href="../css/fileuploader.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/dashbord_navitaion.css">
<link rel="stylesheet" href="../css/responsive.css">
<title>KenyaTour</title>
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>
    <script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
  

  <?php include('includes/header.php') ?>



	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-f9">
		<div class="container-fluid">
			<div class="row">
        <div class="col-xxl-10 offset-xxl-2 dashboard_grid_space">
        <?php 
// $username=$_SESSION['login'];
// $sql = "SELECT * from admin where UserName=:username";
// $query = $dbh -> prepare($sql);
// $query -> bindParam(':username',$username, PDO::PARAM_STR);
// $query->execute();
// $results=$query->fetchAll(PDO::FETCH_OBJ);
// $cnt=1;
// if($query->rowCount() > 0)
// {
// foreach($results as $result)
// { ?>
					<div class="row">
						<div class="col-xl-8">
              <div class="col-lg-12 mb50">
                <div class="breadcrumb_content">
                  <h2 class="breadcrumb_title">Profile</h2>
                  <p>Ready to jump back in?</p>
                </div>
              </div>
						</div>
					</div>
       
            <div class="col-lg-12">
              <div class="new_property_form">
                <div class="row">
                <form name="chngpwd" method="post" onSubmit="return valid();">
                  <div class="col-lg-12">
                    <h4 class="title mb30">Change Password</h4>
                  </div>
                  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                  else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                  <div class="col-sm-6 col-lg-7">
                    <div class="mb20">
                    <label class="control-label">Current Password</label>
                      <input class="form-control form_control" id="password" name="password"  type="password" required>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-7">
                  <!-- <div class="mb20">
                            <label class="control-label">Full Name</label>
                            <input class="form-control form_control" type="text"name="usernname" value="<?php echo htmlentities($result->Username);?>" id="usernamename" type="text"  required>
                          </div>
                  </div> -->
                 
                  <div class="col-sm-6 col-lg-7">
                    <div class="mb20">
                      <label class="control-label">New Password</label>
                      <input class="form-control form_control" id="newpassword" type="password" name="newpassword" required>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-7">
                    <div class="mb20">
                      <label class="control-label">Confirm Password</label>
                      <input class="form-control form_control mb20" id="confirmpassword" type="password" name="confirmpassword"  required>
                      <input type="submit" value="Update" name="submit" id="submit" class="btn btn-thm ad_flor_btn">
                    </div>
                  </div>
                
                </div>
      
                </form>
              </div>
            </div>
           
          </div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="fas fa-arrow-up"></i></a>
</div>

<script src="../js/jquery-3.6.0.js"></script>
<script src="../js/jquery-migrate-3.0.0.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.mmenu.all.js"></script>
<script src="../js/ace-responsive-menu.js"></script>
<script src="../js/bootstrap-select.min.js"></script>
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
<script src="../js/smartuploader.js"></script>
<script src="../js/dashboard-script.js"></script>
<script src="../js/script.js"></script>
</body>
</html>
<?php } ?>