<?php
	$db=mysqli_connect("localhost","root","","college");
    if(!$db)
    {
        echo "failed";
    }
    
	session_start();
	
	unset($_SESSION["id"]);
	
	session_destroy();
	header('location:two.php');
?>
