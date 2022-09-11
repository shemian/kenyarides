<?php

if(isset($_POST['login'])){

    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $sql ="SELECT EmailId,Password,FullName FROM tblusers WHERE EmailId=:email and Password=:password";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':email', $email, PDO::PARAM_STR);
    $query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
    {
    $_SESSION['login']=$_POST['email'];
    $_SESSION['fname']=$results->FullName;
    $currentpage=$_SERVER['REQUEST_URI'];
    echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
    } else{
        echo "<script>alert('Invalid Details');</script>";
    }

}
?>



<div class="row mt30 tab-pane fade show active" id="loginform" role="tabpanel" aria-labelledby="home-tab">
    <div class="col-lg-12">
        <div class="login_form">
            <p>New to Cars.com? <a href="#regform">Sign up.</a> Are you a dealer?</p>
            <form method="post">
                <div class="mb-2 mr-sm-2">
                    <label class="form-label">Email </label>
                    <input type="text" class="form-control" name="email" >
                </div>
                <div class="form-group mb5">
                    <label class="form-label">Password  *</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="exampleCheck3">
                    <label class="custom-control-label" for="exampleCheck3">Remember me</label>
                    <a class="btn-fpswd float-end" href="#">Lost your password?</a>
                </div>
                <div class="form-group">
                  <input type="submit" name="login" value="Login" class="btn btn-log btn-thm mt5">
                </div>
            </form>
        </div>
    </div>
</div>
