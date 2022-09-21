 <!-- header top -->
 <div class="header_top dn-992">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-xl-7">
          <div class="header_top_contact_opening_widget text-center text-md-start">
            <ul class="mb0">
              <li class="list-inline-item" ><a href="#" style="color:black;"><span class="flaticon-phone-call" style="color:black;"></span style="color:black;">+254 740 241 08</a></li>
              <li class="list-inline-item"><a href="#" style="color:black;"><span class="flaticon-map" style="color:black;"></span style="color:black;">Nairobi Kenya</a></li>
              <li class="list-inline-item"><a href="#" style="color:black;"><span class="flaticon-clock" style="color:black;"></span style="color:black;">Mon - Fri 8:00 - 18:00</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-xl-5">
          <div class="header_top_social_widgets text-center text-md-end">
            <ul class="m0">

              <?php  if($_SESSION['login']){?>
                <!-- <li class="list-inline-item"><a href="#loginform" data-bs-toggle="modal" data-bs-target="#logInModal">Logged In </a></li> -->
                <?php } else { ?>
              <li class="list-inline-item"><a href="#loginform" data-bs-toggle="modal" data-bs-target="#logInModal" style="color:black;">Login</a></li>
              <li class="list-inline-item"><a href="#regform" data-bs-toggle="modal" data-bs-target="#logInModal" style="color:black;">Register</a></li>
              <?php }  ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>