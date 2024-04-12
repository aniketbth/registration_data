<?php
session_start();
include('config.php');

if(!isset($_SESSION['loggedInEMP']))
{
	unset($_SESSION['loggedInEMP']);
	session_destroy();
	header("location:index.php");
}

?>

<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color:ghostwhite;  
}  
button {   
       background-color: black;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid grey
        ;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid black;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>   
</head>    
<body style="background-color:black;">
<div style="height: 120px;"></div>    
    <center> <h1>  Verify Here</h1> </center>   


    <form method="POST">  

        <div class="container">   
       
            <label>OTP for : <?php echo $_SESSION['loggedInEMP']; ?></label>   
            <input type="text"  name="opt" required="">  
        
            <button type="submit" name="verify" >Verify Here</button>   
       
            <input type="checkbox" checked="checked"> Remember me   
            <button type="submit" class="cancelbtn"> Cancel</button>   
       

            Forgot <a href="#"> password? </a>   
        </div>
        <div>
            <button onclick="window.location.href='Logout.php'">Back</button>
        </div> 

     <?php

     $OTP = $_POST['opt'];

     
     if(isset($_POST['verify']))
     {
        $matchOtp = mysqli_query($config,"SELECT * FROM sign_up WHERE user_mail = '{$_SESSION['loggedInEMP']}' AND user_otp = '$OTP'");

        if(mysqli_num_rows($matchOtp)>0)
        {
        	mysqli_query($config,"UPDATE sign_up SET otp_status = 'Verified' WHERE user_mail = '{$_SESSION['loggedInEMP']}'");
            echo "<script>alert('OTP Verified')</script>";
        }
        else
        {
           echo "<script>alert('OTP not found.Please try again')</script>"; 
        }
     }

?>
    </form>     

</body>     
</html>  



