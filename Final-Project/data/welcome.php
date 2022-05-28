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
	#demo{
		margin-left:250px;
	}
	#side-bar {
            display: flex;
            flex-direction: column;
            overflow: scroll;
            padding:10px;
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
                   <h1 >ADMIN PANEL</h1>



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

                <div  id="main-content" class="col-md-10">
                    <div id="card-1" class="card px-3 py-3">
                        <h5 class="text-center">About us</h5>
                        <hr>
                        <p> Hindusthan Educational & Charitable Trust in 1998, with the primary objective of providing Education for deserving students irrespective of caste and creed. Embraced by serene nature, world-class infrastructure and excellent learning environment, Hindusthan College of Arts & Science ( HICAS ) stands out in academic excellence and is most preferred among the best colleges. Vision and Mission of HiCAS is to provide world class education to the students to face global challenges and to inculcate the latest trends in technological advancement. To cater the needs of the environmental and ethical values in the mind of students to become good citizens and entrepreneurs. The mission of the college is to pursue a philosophy of perceptual acquisition of knowledge. The important policy is to provide value based education and to bring out the hidden potential in students that equip them to approach life with optimism.</p>
                    </div> <br>
					</div>
	
</body>
</html>