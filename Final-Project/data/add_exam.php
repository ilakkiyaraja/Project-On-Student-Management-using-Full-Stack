<?php
$db=mysqli_connect("localhost","root","","college");
if(!$db)
{
    echo "failed";
}

session_start();
if(!isset($_SESSION['id'])){
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
                    <h1>STAFF PANEL</h1>



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
                    <button class="btn btn-outline-secondary"><a href="staff_home.php"> Profile</a></button> <br>
                   
                    <button class=" btn  btn-outline-secondary "> <a href="add_exam.php">Add Exam </a> </button> <br>
                    <button class="btn  btn-outline-secondary"> <a href="post-result.php"> Post Results </a> </button> <br>
                    <button class="btn  btn-outline-secondary"> <a href="view-stud.php"> View Students </a> </button> <br>
                    <button class=" btn btn-outline-secondary"> <a href="view-reult.php"> View Results </a> </button> <br>
                    <button class="btn  btn-outline-secondary"> <a href="staff-logout.php"> Logout </a> </button> <br>
                    <br>
                </div>

                <div id="main-content" class="col-md-10">
                    <div style="height: 720px;" id="card-1" class="card px-3 py-3">

                        <hr>
                        <form method="post" action="">
                            <div class="col-md-6">
                                <div style="width: 471px; height: 620px; margin-left:270px;" class="card px-5 py-5">
                                    <h2 class="display-5">Set Exam</h2>
                                    <br>

                                    <input class="form-control" name="Ename" required placeholder="Exam Name"
                                        type="text"> <br>

                                    <input class="form-control" list="datalistOptions" required name="Etype" id="exampleDataList"
                                        placeholder="Exam Type">
                                    <datalist id="datalistOptions">
                                        <option value="CIA 1">
                                        <option value="CIA 2">
                                        <option value="CIA 3">
                                        <option value="Model">
                                        <option value="Semester">
                                    </datalist>
                                    <br>
                                    <input type="date" name="Edate" required placeholder="Exam date"
                                        class="form-control">
                                    <br>
                                    <input class="form-control" required list="datalistOptions1" name="Esession"
                                        id="exampleDataList" placeholder="Exam Session">
                                    <datalist id="datalistOptions1">
                                        <option value="FN">
                                        <option value="AN">

                                    </datalist>
                                    <br>
                                    <input class="form-control" required list="datalistOptions2" name="Eclass"
                                        id="exampleDataList" placeholder="Department">
                                    <datalist id="datalistOptions2">
                                        <option value="B.Sc Cs">
                                        <option value="B.Sc It">

                                    </datalist>
                                    <br>
                                    <input class="form-control" required list="datalistOptions3" name="Esub" id="exampleDataList"
                                        placeholder="Subject">
                                    <datalist id="datalistOptions3">
                                        <option value="Data Mining">
                                        <option value="C++">
                                        <option value="Animation Techniques">

                                    </datalist>
                                    <br>
                                    <input type="submit" value="ADD" name="enter" class="btn   btn-success"> <br> <br>


                                    <?php
    if(isset($_POST["enter"])){
        $conn=mysqli_connect("localhost","root","","college");
        if(!$conn){
            echo"error connecting";
        }
       $Ename=$_POST['Ename'];
       $Etype=$_POST['Etype'];
       $Edate=$_POST['Edate'];
       $Session=$_POST['Esession'];
       $department=$_POST['Eclass'];
       $sub=$_POST['Esub'];
//$sql="insert into staff(id,Staff_name,Staff_qulaify,Staff-pay) values('$staffname','$Qualify','$payment')";
$sql="INSERT INTO exam (`id`, `Ename`, `Etype`, `Edate`, `session`, `class`, `subject`) VALUES (NULL, ' $Ename', '$Etype', ' $Edate', '$Session', '$department','$sub')";
$result=mysqli_query($conn,$sql);
if($result){
  echo"<h3 style='color:green;'>Exam added</h3>";
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
                    <br>



                    <script>


                    </script>

</body>

</html>