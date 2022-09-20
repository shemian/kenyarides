<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['updateprofile']))
  {
$name=$_POST['fullname'];
$mobileno=$_POST['mobilenumber'];
$adress=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$email=$_SESSION['login'];
$sql="update tblusers set FullName=:name,ContactNo=:mobileno,Address=:adress,City=:city,Country=:country where EmailId=:email";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
$query->bindParam(':adress',$adress,PDO::PARAM_STR);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':country',$country,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->execute();
$msg="Profile Updated Successfully";
}

if(isset($_POST['update']))
  {
$password=md5($_POST['password']);
$newpassword=md5($_POST['newpassword']);
$email=$_SESSION['login'];
$sql ="SELECT Password FROM tblusers WHERE EmailId=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update tblusers set Password=:newpassword where EmailId=:email";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
$msg="Your Password succesfully changed";
}
else {
$error="Your current password is wrong";  
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
<link rel="stylesheet" href="css/fileuploader.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/dashbord_navitaion.css">
<link rel="stylesheet" href="css/responsive.css">
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
  
  <!-- header top -->
  <div class="header_top home3_style dn-992">
  <?php include('includes/header.php') ?>
  </div>
  
  <!-- Main Header Nav -->
  <header class="header-nav menu_style_home_one home3_style main-menu">
  <?php  include('includes/navbar.php') ?>
  </header>


  
 v>

	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-f9">
		<div class="container-fluid">
			<div class="row">
        <div class="col-xxl-10 offset-xxl-2 dashboard_grid_space">
        <?php 
$useremail=$_SESSION['login'];
$sql = "SELECT * from tblusers where EmailId=:useremail";
$query = $dbh -> prepare($sql);
$query -> bindParam(':useremail',$useremail, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
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
          <div class="row">
            <div class="col-lg-12">
              <div class="new_property_form mb30">
                <h4 class="title mb30">Account Details</h4>
                
               
                <form  method="post" >
                  <div class="row">
                    <div class="col-lg-7">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="mb20">
                            <label class="control-label">Full Name</label>
                            <input class="form-control form_control" type="text"name="fullname" value="<?php echo htmlentities($result->FullName);?>" id="fullname" type="text"  required>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb20">
                          <label class="control-label">Email Address</label>
                            <input class="form-control form_control" type="email" value="<?php echo htmlentities($result->EmailId);?>" name="emailid" id="email" type="email" required readonly>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb20">
                          <label class="control-label">Phone Number</label>
                            <input  class="form-control form_control" name="mobilenumber" value="<?php echo htmlentities($result->ContactNo);?>" id="phone-number" type="text" required>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb20">
                            <label class="control-label">Address</label>
                            <input  name="address"   class="form-control form_control"value="<?php echo htmlentities($result->Address);?>"  type="text" required>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb20">
                            <label class="control-label">City</label>
                            <input  class="form-control form_control"id="city" name="city" value="<?php echo htmlentities($result->City);?>" type="text">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb20">
                            <label class="control-label">Country</label>
                            <input  class="form-control form_control" id="country" name="country" value="<?php echo htmlentities($result->Country);?>" type="text">
                          </div>
                        </div>
                        
                        <div class="col-lg-12">
                          <div class="new_propertyform_btn">
                          <button type="submit" name="updateprofile" class="btn btn-thm ad_flor_btn">Save Changes <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php }} ?>
                </form>
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
                    <div class="mb20">
                      <label class="control-label">New Password</label>
                      <input class="form-control form_control" id="newpassword" type="password" name="newpassword" required>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-7">
                    <div class="mb20">
                      <label class="control-label">Confirm Password</label>
                      <input class="form-control form_control mb20" id="confirmpassword" type="password" name="confirmpassword"  required>
                      <input type="submit" value="Update" name="update" id="submit" class="btn btn-thm ad_flor_btn">
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
<script src="js/smartuploader.js"></script>
<script src="js/dashboard-script.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Sep 2022 21:13:41 GMT -->
</html>
<?php } ?>