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
            <div class="row flex-nowrap">

                <div id="side-bar" class="col-md-2 side-nav ">
                    <h5 style="box-shadow: 0px 2px 7px grey; background-color:#5A0275;" class="text-center text-white">
                        DASHBOARD</h5>

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
                <form class=" row flex-nowrap" method="post" action="">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-4">

                        <div style="width: 417px; height: 515px;" class="card px-5 py-5">
                            <h2 class="display-5">Add New Student</h2>
                            <br>
                            <input class="form-control" name="name" required placeholder="Student Name" type="text">
                            <br>
                            <input type="text" name="reg_no" required placeholder="Reg.no" class="form-control">
                            <br>
                            <input type="text" name="class" required placeholder="Department" class="form-control"> <br>
                            <input type="text" name="Batch" required placeholder="Batch" class="form-control"> <br>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div style="width: 417px; height: 515px;" class="card px-5 py-5">
                            <input type="text" name="Email" required placeholder="Email ID" class="form-control"> <br>
                            <input type="text" name="age" required placeholder="Age" class="form-control"> <br>
                            <input type="text" name="number" required placeholder="Mobile No." class="form-control">
                            <br>
                            <input type="text" name="Pnumber" required placeholder=" Parent Mobile No."
                                class="form-control">
                            <br>
                            <input type="submit" value="ADD" name="enter" class="btn   btn-success"> <br>

                            <br>
                            <?php
    if(isset($_POST["enter"])){
        $conn=mysqli_connect("localhost","root","","college");
        if(!$conn){
            echo"error connecting";
        }
       $studentname=$_POST['name'];
       @$regno=$_POST['reg_no'];
       $department=$_POST['class'];
       $batch=$_POST['Batch'];
       $age=$_POST['age'];
       $number=$_POST['number'];
       $Pnumber=$_POST['Pnumber'];
       $email=$_POST['Email'];
$sql="INSERT INTO student (`id`, `Name`, `Reg_no`, `Department`, `Batch`, `Age`, `Number`, `Pnumber`, `Email`) VALUES (NULL, ' $studentname',' $regno',' $department',' $batch', '$age', ' $number', '$Pnumber', '$email')";
$result=mysqli_query($conn,$sql);
if($result){
  echo"<h3 style='color:green;'>Student added</h3>";
}
else{
    echo"error";
}

    }

?>
                        </div>
                    </div>
                </form>
            </div>


        </div>
        </div>
    </section>
</body>

</html>