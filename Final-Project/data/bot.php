<?php
session_start();
?>

<?php


$conn = mysqli_connect("localhost","root","","onlinebot");

if($conn){
$user_messages = mysqli_real_escape_string($conn, $_POST['messageValue']);

$query = "SELECT * FROM chatbot WHERE messages LIKE '%$user_messages%'";
$runQuery = mysqli_query($conn, $query);

if(mysqli_num_rows($runQuery) > 0){
   
    $result = mysqli_fetch_assoc($runQuery);
    
    echo $result['response'];
}else{
    echo "Sorry can't be able to understand you!";
}
}else{
    echo "connection Failed " . mysqli_connect_errno();
}
?>