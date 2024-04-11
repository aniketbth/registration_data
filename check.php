<?php 

session_start();

include('config.php');



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Check Session</title>
  </head>
  <body>

  	<div class="container" style="margin-top:45px;">

	<form method="POST"> 
	<div class="mb-3">
		<label>OTP for : <?php echo  $_SESSION['activeUser'];?> </label> 
	<label  class="form-label">Username</label>
	<input type="text" class="form-control" name="username" aria-describedby="emailHelp">
	</div>

	<div class="mb-3">
	<label class="form-label">Email</label>
	<input type="email" class="form-control" name="email">
	</div>

	<div class="mb-3">
	<label  class="form-label">Password</label>
	<input type="password" class="form-control" name="password">
	</div>

	


	<button type="submit" class="btn btn-primary" name="registerUser">Submit</button>
	</form>

  	</div>
  	


    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>


<?php 

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$registerUser = mysqli_query($config,"INSERT INTO test(username,email,password) VALUES('$username','$email','$password')");

if(isset($_POST['registerUser']))
{
	if($registerUser)
	{
		session_start();
		$_SESSION['activeUser'] = $email;
		echo "<script>alert('User Registered Successfully')</script>";
		echo "<script>window.location.href='otpverify.php'</script>";
	}
	else
	{
		echo "<script>alert('User Not Registered Successfully')</script>";
	}
}


?>