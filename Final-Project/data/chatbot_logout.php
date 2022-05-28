<?php
	$db=mysqli_connect("localhost","root","","onlinebot");
    if(!$db)
    {
        echo "failed";
    }
    
	session_start();
	
	unset($_SESSION["bid"]);
	
	session_destroy();
	header('location:two.php');
?>
