<?php
error_reporting(0);
if(isset($_POST['signup'])){

    $fname=$_POST['fullname'];
    $email=$_POST['emailid']; 
    $mobile=$_POST['mobileno'];
    $password=md5($_POST['password']);

    $sql="INSERT INTO  tblusers(FullName,EmailId,ContactNo,Password) VALUES(:fname,:email,:mobile,:password)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':fname',$fname,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
    $query->bindParam(':password',$password,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();

    if($lastInsertId){
        echo "<script>alert('Registration successfull. Now you can login');</script>";
    }
    else{
        echo "<script>alert('Something went wrong. Please try again');</script>";
    }
}

?>
<script>
function checkAvailability() {
    $("#loaderIcon").show();
    jQuery.ajax({
        url: "check_availability.php",
        data:'emailid='+$("#emailid").val(),
        type: "POST",
        success:function(data){
            $("#user-availability-status").html(data);
            $("#loaderIcon").hide();
        },
        error:function (){}
    });
    }
    </script>
    <script type="text/javascript">
        function valid()
        {
            if(document.signup.password.value!= document.signup.confirmpassword.value)
            {
                alert("Password and Confirm Password Field do not match  !!");
                document.signup.confirmpassword.focus();
                return false;
            }
            return true;
            }
    </script>

<div class="row mt30 tab-pane fade" id="regform" role="tabpanel" aria-labelledby="profile-tab">
    <div class="col-lg-12">
        <div class="sign_up_form">
            <p>Already have a profile? <a href="#loginform">Sign in.</a></p>
            <form method="post" name="signup" onSubmit="return valid();">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="fullname" required="required" >
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="emailid" id="emailid"  onBlur="checkAvailability()" required="required" >
                            <span id="user-availability-status" style="font-size:12px;"></span> 
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Mobile Number</label>
                            <input type="text" class="form-control" name="mobileno" required="required" >
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-6">
                        <div class="form-group mb20">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required="required" >
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb20">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="confirmpassword" required="required" >
                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <input type="submit" value="Sign Up" name="signup" id="submit" class="btn btn-signup btn-thm mb0">
                </div>
            </form>
        </div>
    </div>
</div>