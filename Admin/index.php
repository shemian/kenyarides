<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{

  echo "<script>alert('Invalid Details');</script>";

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
<meta name="CreativeLayers" content="ATFN">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/responsive.css">
<title>Kenyaour</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>
  <section class="our-contact inner_page_section_spacing bgc-f9">
    <div class="container">
      <div class="row">
      
        <div class="col-md-8">
          <div class="form_grid">
            <div class="wrapper">
              <h3 class="title mb20">Admin sign in</h3>
              <form method="post">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">Username</label>
                      <input class="form-control" type="text" placeholder="username"  name="username">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">Password</label>
                      <input class="form-control" type="password" placeholder="Password" name="password">
                    </div>
                  </div>
                 
                  
                  <div class="col-sm-12">
                    <br>
                    <div class="form-group mb0">
                      <button name="login" type="submit"class="btn btn-thm">Login</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<a class="scrollToHome" href="#"><i class="fas fa-arrow-up"></i></a>
</div>
<!-- Wrapper End -->
<script src="../js/jquery-3.6.0.js"></script>
<script src="../js/jquery-migrate-3.0.0.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/bootstrap-select.min.js"></script>
<script src="../js/jquery.mmenu.all.js"></script> <script src="js/ace-responsive-menu.js"></script>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;callback=initMap"></script>
<script src="../js/googlemaps1.js"></script>
<!-- Custom script for all pages --> 
<script src="../js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Sep 2022 21:14:33 GMT -->
</html>