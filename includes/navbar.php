
    <nav > 
      <div class="container posr"> 
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
          <button type="button" id="menu-btn">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
        </div>
        <a href="index.html" class="navbar_brand float-start dn-md">
          
          <img class="logo2 img-fluid" src="images/header-logo2.svg" alt="header-logo2.svg">
				</a>
        <!-- Responsive Menu Structure-->
        <ul id="respMenu" class="ace-responsive-menu menu_list_custom_code wa text-end" data-menu-style="horizontal">
          <li> <a href="index.php"><span class="title">Home</span></a></li>
          <li> <a href="post_vehicle.php"><span class="title">List A car</span></a></li>
          <li> <a href="#"><span class="title">Listings</span></a></li>
         
          <li> <a href="#"><span class="title">Contact Us</span></a></li>

          
          <?php
          $email=$_SESSION['login'];
          $sql = "SELECT FullName FROM tblusers WHERE EmailId=:email";

          $query= $dbh -> prepare($sql);
          $query-> bindParam(':email', $email, PDO::PARAM_STR);
          $query-> execute();
          $results=$query->fetchAll(PDO::FETCH_OBJ);
          if($query->rowCount() > 0)
          {
            foreach($results as $result) {
             ?>

            <li> <a href="#"  class="fa fa-user"><span class="title"><?php echo htmlentities( $result->FullName); }}?></span></a>
            <?php  if($_SESSION['login']){?>
              <ul>
                <li><a href="page-dashboard.html">Dashboard</a></li>
                <li><a href="page-dashboard-profile.html">Profile</a></li>
                <li><a href="user_listing.php">My Listing</a></li>
                <li><a href="page-dashboard-favorites.html">Favorites</a></li>
                <li><a href="page-dashboard-add-listings.html">Add Listing</a></li>
                <li><a href="page-dashboard-messages.html">Messages</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
              <?php } else { ?>


                <?php } ?>
          </li>
          
         
          </li>
          
          <?php if($_SESSION['login']) {?>
         
          <li class="add_listing"><a href="post_vehicle.php">+ Add Listing</a></li>
          <?php } else { ?>
            <li class="add_listing"><a href="#logInModal" data-bs-target="#logInModal">Login to List</a></li>
          <?php } ?>

          <li class="sidebar_panel"><a class="sidebar_switch pt0" href="#"><span></span></a></li>
        </ul>
      </div>
    </nav>
