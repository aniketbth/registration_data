<?php 
include('../config.php');
?>

<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/style.css">
<title>Login #3</title>
</head>
<body>


<div class="half">
<div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.webp');"></div>
<div class="contents order-2 order-md-1">
<div class="container">
<div class="row align-items-center justify-content-center">
<div class="col-md-6">
<div class="form-block">
<div class="text-center mb-5">
<h3>Login to <strong>Colorlib</strong></h3>

</div>

<form  method="POST" enctype="miltipart/form-data">


<div class="form-group first">
<label for="mail">Email Address</label>
<input type="mail" class="form-control" name="Umail" placeholder="your-email@gmail.com">
</div>

<div class="form-group last mb-3">
<label for="username">Username</label>
<input type="text" class="form-control" name="username" placeholder="UserName">
</div>


<div class="form-group last mb-3">
<label for="password">Password</label>
<input type="password" class="form-control" name="pass" placeholder="Your Password" >
</div>

<!-- <div class="form-group last mb-3">
<label for="password"> Confirm Password</label>
<input type="password" class="form-control" name="Cpass" placeholder="Enter Your Password Again">
</div> -->



<div class="form-group last mb-3">
<label for="date">DOB</label>
<input type="date" class="form-control" name="DOB" placeholder="Your DOB">
</div>


<div class="form-group last mb-3">
<label for="number">Contact no.</label>
<input type="number" class="form-control" name="Cnum" placeholder="Your Contact Number" >
</div>

<div class="form-group last mb-3">
<label for="address">Address</label>
<input type="text" class="form-control" name="address" placeholder="Your Address " >
</div>

<?php 

$UserCode = '1234567890USERCODE';

$code= substr(str_shuffle($UserCode),0,8);


?> 

<div class="form-group last mb-3">
<label for="text">User-Id</label>
<input type="text" class="form-control" readonly="" name="Ucode" value="<?php echo $code;?>" >
</div>

<div class="form-group last mb-3">
<label for="text">State Code</label>
<input type="text" class="form-control" name="Scode" placeholder="Your State Code">
</div>


<div class="form-group last mb-3">
<label for="text">Country Code</label>
<input type="text" class="form-control" name="Ccode" placeholder="Your Country Code">
</div>

<div class="form-group last mb-3">
<label for="image">User Image</label>
<input type="file" class="form-control" name="Uimage" accept="image/jpg,image/png,image/jpeg">
</div>

<?php 

$OTPgenerator = '1234567890EMPLOYEEOTP';

$otp = substr(str_shuffle($OTPgenerator),0,6);


?>

<div class="form-group last mb-3" style="display: none;">
<label for="otp">Country Code</label>
<input type="otp" class="form-control" name="otp" value="<?php echo $otp;?>" >
</div>


<div class="d-sm-flex mb-5 align-items-center">
<label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
<input type="checkbox" checked="checked" />
<div class="control__indicator"></div>
</label>


<span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
</div>


<button class="btn btn-block btn-primary" type="submit" name="submit">Sign Up</button>

</form>



<?php
$UserEmail = $_POST['Umail'];
$UserPass = $_POST['pass'];
// $confirmPass =$_POST['Cpass'];
$Username = $_POST['username'];
$UserDob = $_POST['DOB'];
$UserContact = $_POST['Cnum'];
$UserAddress = $_POST['address'];
$UserCode = $_POST['Ucode'];
$UserScode = $_POST['Scode'];	
$UserCcode = $_POST['Ccode'];
$UserOtp = $_POST['otp'];

$targetFolder = 'userimage/';
$base_address = 'http://localhost/signup_data/';
$orgFileName = $_FILES['Uimage']['name'];
$tmpFileName = $_FILES['Uimage']['tmp_name'];

$completeAddress = $base_address.$targetFolder.$orgFileName;



if(isset($_POST['submit']))

	 // move_uploaded_file($tmpFileName,$targetFolder.$orgFileName);
 {
	
	// if($UserPass == $confirmPass)

    // {
		session_start();
    
	$_SESSION['loggedInUser'] = $UserEmail;
	 header('location:otpverify.php');

		// $insertData = mysqli_query($config,"INSERT INTO sign_up(username,password,user_dob,contact_no,user_mail,user_otp,otp_status,address,employee_code,employee_img,state_code,country_code) VALUES('$Username','$UserPass','$UserDob','$UserContact','$UserEmail','$UserOtp','Pending','$UserAddress','$UserCode','$completeAddress','$UserScode','$UserCcode')"); 
	
		
        // if($insertData)
        //  {
        //   	echo "<script>alert('Data inserted')</script>";
     
	    //      header('location:session.php');
        //  }
        //  else
        //  {
        //  	echo "<script>alert('Try again')</script>";
        //  }
     // }
}




?>


</div>
</div>
</div>
</div>
</div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>