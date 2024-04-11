<?php 
session_start();
$_SESSION['ActiveUser'];
include('config.php');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<input type="text" value="<?php echo $_SESSION['activeUser'];  ?>">

</body>

</html>