<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login V15</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

<meta name="robots" content="noindex, follow">
</head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
<span class="login100-form-title-1">
Sign In
</span>
</div>
<form class="login100-form validate-form" method="POST" enctype="multipart/form-data">


<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
<span class="label-input100">Username</span>
<input class="input100" type="text" name="username" placeholder="Enter username">
<span class="focus-input100"></span>
</div>


<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
<span class="label-input100">Password</span>
<input class="input100" type="password" name="pass" placeholder="Enter password">
<span class="focus-input100"></span>
</div>


<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
<span class="label-input100">Password</span>
<input class="input100" type="password" name="re_pass" placeholder="Enter password again">
<span class="focus-input100"></span>
</div>


<div class="wrap-input100 validate-input m-b-18" data-validate="Date is required">
<span class="label-input100">DOB</span>
<input class="input100" type="date" name="date" placeholder="Enter DOB">
<span class="focus-input100"></span>
</div>


<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
<span class="label-input100">Conatct no.</span>
<input class="input100" type="password" name="Cnumber" placeholder="Enter contact no.">
<span class="focus-input100"></span>
</div>


<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
<span class="label-input100">Email-Id</span>
<input class="input100" type="email" name="email" placeholder="Enter email">
<span class="focus-input100"></span>
</div>


<?php 

$textGenerator = '1234567890USERCODE';

$code= substr(str_shuffle($textGenerator),0,8);


?> 


<div class="wrap-input100 validate-input m-b-18" >
<span class="label-input100">Unique Code</span>
<input class="input100" type="text" readonly="" name="Ucode" value="<?php echo $code;?>" >
<span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input m-b-18" data-validate="Address is required">
<span class="label-input100">Address</span>
<input class="input100" type="address" name="Uaddress" placeholder="Enter Address">
<span class="focus-input100"></span>
</div>


<div class="wrap-input100 validate-input m-b-18" data-validate="Image is required">
<span class="label-input100">User Image</span>
<input class="input100" type="file" name="image" >
<span class="focus-input100"></span>
</div>


<div class="wrap-input100 validate-input m-b-18" data-validate="State Code is required">
<span class="label-input100">State Code</span>
<input class="input100" type="text" name="Uaddress" placeholder="Enter State Code">
<span class="focus-input100"></span>
</div>




<?php 

$OTPgenerator = '1234567890EMPLOYEEOTP';

$otp = substr(str_shuffle($OTPgenerator),0,6);


?>


<div class="wrap-input100 validate-input m-b-18" >
<span class="label-input100">OTP</span>
<input class="input100" type="text" readonly="" name="otp" value="<?php echo $otp;?>">
<span class="focus-input100"></span>
</div>



<div class="wrap-input100 validate-input m-b-18" data-validate="Country Code is required">
<span class="label-input100">Country Code</span>
<input class="input100" type="text" name="Uaddress" placeholder="Enter Country Code">
<span class="focus-input100"></span>
</div>

<div>
<a href="#" class="txt1">
Forgot Password?
</a>
</div>

<div class="container-login100-form-btn">
<button class="login100-form-btn" name="signup" type="submit">
Login
</button>
</div>
<?php 

    $username = $_POST['username'];
    $password = $_POST['pass'];
    $cnfpassword = $_POST['re_pass'];
    $DOB = $_POST['date'];
    $contact = $_POST['Cnumber'];
    $mail = $_POST['email'];
    $UserCode = $_POST['Ucode'];
    $Address = $_POST['Uaddress'];
    $Scode = $_POST['Scode'];
    $Ccode = $_POST['Ccode'];
    $UserOtp = $_POST['otp'];

$targetFolder = 'userimage/';
$base_address = 'http://localhost/registration_data/';
$orgFileName = $_FILES['image']['name'];
$tmpFileName = $_FILES['image']['tmp_name'];

$completeAddress = $base_address.$targetFolder.$orgFileName;

if(isset($_POST['signup']))
{
      session_start();
    $_SESSION['activeUser'] = $username;
    move_uploaded_file($tmpFileName,$targetFolder.$orgFileName);

    if($password == $cnfpassword)
    {
    echo "<script>window.location.href='otpverify.php'</script>";

     $insertData = mysqli_query($config,"INSERT INTO sign_up(username,password,user_dob,contact_no,user_mail,user_otp,otp_status,address,employee_code,employee_img,state_code,country_code) VALUES('$username','$password','$DOB','$contact','$mail','$UserOtp','Pending','$Address','$UserCode','$completeAddress','$Scode','$Ccode')"); 

       

     if($insertData)
     {
        echo "<script>alert('Data and User Image Inserted')</script>";
        echo "<script>window.location.href='otpverify.php'</script>";
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

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

</body>
</html>
