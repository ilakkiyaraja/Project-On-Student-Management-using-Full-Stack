<?php
$id1=$_GET['delete-id'];
$conn=mysqli_connect('localhost','root','','college');
if(isset($id1)){
   
    $sql="delete from staff where id='$id1'";
    $result=mysqli_query($conn,$sql);
    if($result){
   header('location:manage-staff.php');
    }
    else{
        echo"error";
    }
}

?>