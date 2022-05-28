<?php
$id1=$_GET['deleteid'];
$conn=mysqli_connect('localhost','root','','college');
if(isset($id1)){
   
    $sql="delete from student where id='$id1'";
    $result=mysqli_query($conn,$sql);
    if($result){
      header('location:manage-stud.php');
    }
    else{
        echo"error";
    }
}

?>