<?php

include('../config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login V6</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

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
<div class="wrap-login100 p-t-85 p-b-20">
<form class="login100-form validate-form" method="POST" enctype="multipart/form-data">

<span class="login100-form-title p-b-70">
Welcome
</span>

<span class="login100-form-avatar">
<img src="images/avatar-01.jpg" alt="AVATAR">
</span>

<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter username">
<input class="input100" type="text" name="username">
<span class="focus-input100" data-placeholder="Username"></span>
</div>


<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
<input class="input100" type="password" name="pass">
<span class="focus-input100" data-placeholder="Password"></span>
</div>

<div class="wrap-input100 validate-input m-b-50" data-validate="Re-enter password">
<input class="input100" type="password" name="re_pass">
<span class="focus-input100" data-placeholder=" Re-enter Password"></span>
</div>

<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Email">
<input class="input100" type="email" name="email">
<span class="focus-input100" data-placeholder="User Email"></span>
</div>

<div class="wrap-input100 validate-input m-b-50" data-validate="Enter DOB">
<input class="input100" type="Date" name="date">
<span class="focus-input100"span>
</div>

<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Contact no.">
<input class="input100" type="number" name="Cnumber">
<span class="focus-input100" data-placeholder="User Contact No."></span>
</div>

<?php 

$textGenerator = '1234567890USERCODE';

$code= substr(str_shuffle($textGenerator),0,8);


?> 

<div class="wrap-input100 validate-input m-b-50">
<input class="input100" type="text" readonly name="Ucode" value="<?php echo $code;?>">
<span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Address">
<input class="input100" type="text" name="Uaddress">
<span class="focus-input100" data-placeholder="User Address"></span>
</div>

<div class="wrap-input100 validate-input m-b-50" data-validate="Enter State Code">
<input class="input100" type="text" name="Scode">
<span class="focus-input100" data-placeholder="State code"></span>
</div>

<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Country Code">
<input class="input100" type="text" name="Ccode">
<span class="focus-input100" data-placeholder="Country Code"></span>
</div>


<?php 

$OTPgenerator = '1234567890EMPLOYEEOTP';

$otp = substr(str_shuffle($OTPgenerator),0,6);


?>


<div class="wrap-input100 validate-input m-b-50" >
<input class="input100" type="text" name="otp" value="<?php echo $otp;?>">
<span class="focus-input100" ></span>
</div>

<div class="wrap-input100 validate-input m-b-50" data-validate="Upload User Image">
<input class="input100" type="file" accept="image/jpg,image/png,image/jpeg" name="uploadImage">
<span class="focus-input100" ></span>
</div>


<div class="container-login100-form-btn">
<button class="login100-form-btn" type="submit" name="registerUser">
Login
</button>
</div>

</form>

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
    

    $targetFolder = 'Users_img/';
    $orgFileName = $_FILES['uploadImage']['name'];
    $tempFileName = $_FILES['uploadImage']['tmp_name'];

    $baseAddress = "http://localhost/registrarion_data/";

    $completeAddress = $baseAddress.$targetFolder.$orgFileName;

      
  if(isset($_POST['registerUser']))
  {
  // move_uploaded_file($tempFileName,$targetFolder.$orgFileName);
    echo $completeAddress;

  	if($password == $cnfpassword)
  	{
    session_start();
    $_SESSION['activeUser'] = $mail;

     $insertData = mysqli_query($config,"INSERT INTO sign_up(username,password,user_dob,contact_no,user_mail,user_otp,otp_status,address,employee_code,employee_img,state_code,country_code) VALUES('$username','$password','$DOB','$contact','$mail','$UserOtp','Pending','$Address','$UserCode','$completeAddress','$Scode','$Ccode')"); 

       

     if($insertData)
     {
        echo "<script>alert('Data and User Image Inserted')</script>";
        echo "<script>window.location.href='../otpverify.php'</script>";
     }
     else
     {
      echo "<script>alert('Try again')</script>";
     }
  }
}
?>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>

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
