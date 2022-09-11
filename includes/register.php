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
                            <label class="form-label">Mobile Number</label>
                            <input type="text" class="form-control" name="mobileno" required="required" >
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="emailid" id="emailid"  onBlur="checkAvailability()" required="required" >
                            <span id="user-availability-status" style="font-size:12px;"></span> 
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
                <button type="submit" class="btn btn-signup btn-thm mb0">Sign Up</button>
            </form>
        </div>
    </div>
</div>