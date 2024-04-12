<?php

session_start();
unset($_SESSION["loggedInEMP"]);
session_destroy();
header("Location:index.php");


?>