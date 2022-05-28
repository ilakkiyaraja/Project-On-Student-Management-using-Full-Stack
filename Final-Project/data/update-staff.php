<?php
$db=mysqli_connect("localhost","root","","college");
if(!$db)
{
    echo "failed";
}

session_start();
if(!isset($_SESSION['AID'])){
  header('location:login.php?mes=Acces Denied..','_self');
}
?>
<?php
$id1=$_GET['update-id'];
if(isset($_POST['enter'])){
    $conn=mysqli_connect('localhost','root','','college');

    $name1=$_POST['name'];
    $qual1=$_POST['qual'];
    $pay1=$_POST['pay'];
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    
  
    $sql="UPDATE `staff` SET  `Staff_name` = '$name1', `Staff_qulaify` = '$qual1', `Staff-pay` = '$pay1', `username` = '$username', `password` = '$pass' WHERE `id` = '$id1'";
    $print=mysqli_query($conn,$sql);
    if($print){
        header('location:manage-staff.php');
    }
    else{
        echo"error";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    #demo {
        margin-left: 250px;
    }

    #side-bar {
            display: flex;
        flex-direction: column;
        overflow: scroll;
        padding: 10px;
        height: 600px;
    }

    .side-nav {
        scroll-behavior: smooth;
    }

    #main-content .card {
        box-shadow: 2px 2px 5px rgb(70, 69, 69);
        border-radius: 15px;
    }

    #side-bar button {
        box-shadow: inset 2px 2px 2px rgb(99, 97, 97);
    }

    #side-bar button a {
        text-decoration: none;
        color: black;
    }

    #side-bar button a:hover {
        color: #fff;
    }
    </style>
</head>

<body>
    <section id="navigation-bar">
        <nav id="nav-menu" class="navbar navbar-expand-lg  ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#demo">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="img/Hicas-logo.jpg" height="90px" width="306px" alt=""></a>
                <div class="collapse navbar-collapse" id="demo">
                    <h1>ADMIN PANEL</h1>



                    </ul>

                    </form>
                </div>
            </div>
        </nav>
    </section>

    <br>
    <section id="side-nav">
        <div class="container-fluid">
            <div class="row">

                <div id="side-bar" class="col-md-2 side-nav ">
                    <h5 style="box-shadow: 0px 2px 7px grey;" class="text-center">DASHBOARD</h5>

                    <br>
                    <button class="btn btn-outline-secondary"><a href="welcome.php"> WELCOME</a></button> <br>
                    <button class=" btn  btn-outline-secondary"> <a href="add-staff.php"> Add Staff </a></button> <br>
                    <button class=" btn  btn-outline-secondary "> <a href="manage-staff.php">Manage Staff </a> </button> <br>
                    <button class="btn  btn-outline-secondary"> <a href="add-student.php"> Add Student </a> </button> <br>
                    <button class="btn  btn-outline-secondary"> <a href="manage-stud.php"> Manage Student </a> </button> <br>
                    <button class=" btn btn-outline-secondary"> <a href="events.php"> Add Events </a> </button> <br>
                    <button class="btn  btn-outline-secondary"> <a href="logout.php"> Logout </a> </button> <br>
                    <br>



                </div>
                <div id="main-content" class="col-md-10">
                    <div  style="height: 680px;" id="card-1" class="card px-3 py-3">
                        
                        <hr>
                        <form method="post" action="">
                            <div class="col-md-6">
                                <div style="width: 471px; height: 590px; margin-left:270px;" class="card px-5 py-5">
                                    <h2 class="display-5">Update Staff Details</h2>
                                    <br>

                                    <input class="form-control" name="name" placeholder="Staff Name" type="text"> <br>
                                    <input type="text" name="qual" placeholder="Qulaifiication" class="form-control">
                                    <br>
                                    <input type="text" name="pay" placeholder="Salary" class="form-control"> <br>
                                    <input type="text" name="username" required placeholder="username" class="form-control"> <br>
                                    <input type="text" name="pass" required placeholder="password" class="form-control"> <br>
                                    <input type="submit" value="ADD" name="enter" class="btn   btn-success"> <br> <br>



                                </div>


                            </div>
                        </form>


                    </div>
                    <br>



                    <script>


                    </script>

</body>

</html>