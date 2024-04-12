<?php
include('config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Login V1</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

<meta name="robots" content="noindex, follow">
</head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<div class="login100-pic js-tilt" data-tilt>
<img src="images/img-01.webp" alt="IMG">
</div>


<form class="login100-form validate-form" method="POST" enctype="multipart/form-data">
<span class="login100-form-title">
Member Login
</span>


<div class="wrap-input100 validate-input" data-validate="Name is Username">
<input class="input100" type="text" name="username" placeholder="Username">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-envelope" aria-hidden="true"></i>
</span>
</div>


<div class="wrap-input100 validate-input" data-validate="Password is required">
<input class="input100" type="password" name="password" placeholder="Password">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>

<div class="wrap-input100 validate-input" data-validate="Password is required">
<input class="input100" type="password" name="Cpassword" placeholder=" Confirm Password">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>

<div class="wrap-input100 validate-input" data-validate="Email is required">
<input class="input100" type="email" name="mail" placeholder="Email Address">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>


<div class="wrap-input100 validate-input" data-validate="DOB is required">
<input class="input100" type="date" name="user_dob" placeholder="DOB">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>

<div class="wrap-input100 validate-input" data-validate="conatct is required">
<input class="input100" type="number" name="contact" placeholder="User Contact">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>

<div class="wrap-input100 validate-input" data-validate="address is required">
<input class="input100" type="text" name="user_address" placeholder="User Address">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>


<div class="wrap-input100 validate-input" data-validate="image is required">
<input class="input100" type="file" accept="image/jpg,image/jpeg,image/png" name="username_img" >
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>

<?php 

$UserCode = '1234567890USERCODE';

$code= substr(str_shuffle($UserCode),0,8);


?> 


<div class="wrap-input100 validate-input">
<input class="input100" readonly="" type="text" name="e_code" value="<?php echo $code;?>">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>

<div class="wrap-input100 validate-input" data-validate="address is required">
<input class="input100" type="text" name="Scode" placeholder="State Code">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>

<div class="wrap-input100 validate-input" data-validate="address is required">
<input class="input100" type="text" name="Ccode" placeholder="Country Code">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>


<?php 

$OTPgenerator = '1234567890EMPLOYEEOTP';

$otp = substr(str_shuffle($OTPgenerator),0,6);


?>


<div class="wrap-input100 validate-input">
<input class="input100" readonly="" type="text" name="otp" value="<?php echo $otp;?>">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>

<div class="container-login100-form-btn">
<button class="login100-form-btn" type="submit" name="submit">
Login
</button>
</div>


<div class="text-center p-t-12">
<span class="txt1">
Forgot
</span>
<a class="txt2" href="#">
Username / Password?
</a>
</div>
<div class="text-center p-t-136">
<a class="txt2" href="#">
Create your Account
<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
</a>
</div>

<?php 

$username = $_POST['username'];
$password = $_POST['password'];
$Cpassword = $_POST['Cpassword'];
$email = $_POST['mail'];
$DOB = $_POST['user_dob'];
$contact = $_POST['contact'];
$addres = $_POST['user_address'];
$U_code = $_POST['e_code'];
$Scode = $_POST['Scode'];
$Ccode = $_POST['Ccode'];
$otp = $_POST['otp'];


$targetFolder = 'userimage/';
$base_address = 'http://localhost/login/';
$orgFileName = $_FILES['username_img']['name'];
$tmpFileName = $_FILES['username_img']['tmp_name'];

$completeAddress = $base_address.$targetFolder.$orgFileName;

if(isset($_POST['submit']))
{
  move_uploaded_file($tmpFileName,$targetFolder.$orgFileName);

  if($password==$Cpassword)
  {
       $insertData = mysqli_query($config,"INSERT INTO sign_up(username,password,user_dob,contact_no,user_mail,user_otp,otp_status,address,employee_code,employee_img,state_code,country_code) VALUES('$username','$password','$DOB','$contact','$email','$otp','Pending','$addres','$U_code','$completeAddress','$Scode','$Ccode')"); 
       if($insertData)
       {
        session_start();
       $_SESSION['loggedInEMP'] = $email;
       echo "<script>window.location.href='dashboard.php'</script>";
        
       }
       else
       {
        echo "<script>alert('Try again')</script>";
       }
   }

}

?>


</form>
</div>
</div>
</div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>

<script src="vendor/tilt/tilt.jquery.min.js"></script>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>


<script src="js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8731530fab5147de","version":"2024.3.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>
