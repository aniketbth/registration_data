<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="ui/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="ui/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>

                        <form method="POST" class="register-form" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username"  placeholder="Your Name"/>
                            </div>

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email"  placeholder="Enter Email"/>
                            </div>

                            <div class="form-group">
                                <label for="number"><i class="zmdi zmdi-phone"></i></label>
                                <input type="number" name="Cnumber" placeholder="Enter your Contact no."/>
                            </div>

                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="pass"  placeholder="Your Password"/>
                            </div>
                             <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass"  placeholder="Re-enter Your Password"/>
                            </div>

                            <div class="form-group">
                                <label for="date"><i class="zmdi zmdi-format-strikethrough"></i></label>
                                <input type="date" name="date"  placeholder="Your DOB"/>
                            </div>

                            <div class="form-group">
                                <label for="Address"><i class="zmdi zmdi-time-countdown"></i></label>
                                <input type="text" name="Uaddress"  placeholder="Address"/>
                            </div>

<?php 

$textGenerator = '1234567890USERCODE';

$code= substr(str_shuffle($textGenerator),0,8);


?> 

                             <div class="form-group">
                                <label for="code"><i class="zmdi zmdi-panorama-horizontal"></i></label>
                                <input type="text" name="Ucode" value="<?php echo $code;?>" />
                            </div>

                            <div class="form-group">
                                <label><i class="zmdi zmdi-collection-image-o"></i></label>
                                <input type="file" name="image" accept="image/jpg,image/png,image/jpeg" />
                            </div>

                            <div class="form-group">
                                <label for="code"><i class="zmdi zmdi-panorama-horizontal"></i></label>
                                <input type="text" name="Scode"  placeholder="State Code"/>
                            </div>

                            <div class="form-group">
                                <label for="code"><i class="zmdi zmdi-panorama-horizontal"></i></label>
                                <input type="text" name="Ccode"  placeholder="Country Code"/>
                            </div> 


<?php 

$OTPgenerator = '1234567890EMPLOYEEOTP';

$otp = substr(str_shuffle($OTPgenerator),0,6);


?>

                            <div class="form-group" style="display: none;">
                                <label for="code"><i class="zmdi zmdi-panorama-horizontal"></i></label>
                                <input type="text" name="otp" value="<?php echo $otp;?>"  />
                            </div>



                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>


                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>

                    <div class="signup-image">
                        <figure><img src="ui/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>

                </div>
            </div>
        </section>

      

    </div> 

    <!-- JS -->
    <script src="ui/vendor/jquery/jquery.min.js"></script>
    <script src="ui/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>


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
    move_uploaded_file($tmpFileName,$targetFolder.$orgFileName);

    if($password == $cnfpassword)
    {
    session_start();
    $_SESSION['activeUser'] = $mail;

     // $insertData = mysqli_query($config,"INSERT INTO sign_up(username,password,user_dob,contact_no,user_mail,user_otp,otp_status,address,employee_code,employee_img,state_code,country_code) VALUES('$username','$password','$DOB','$contact','$mail','$UserOtp','Pending','$Address','$UserCode','$completeAddress','$Scode','$Ccode')"); 

       

     // if($insertData)
     // {
     //    echo "<script>alert('Data and User Image Inserted')</script>";
     //    echo "<script>window.location.href='otpverify.php'</script>";
     // }
     // else
     // {
     //  echo "<script>alert('Try again')</script>";
     // }
  }
}

?>