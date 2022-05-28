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
                    <h5 style="box-shadow: 0px 2px 7px grey;" class="text-center">DASHBOARD</h5>

                    <br>
                    <button class="btn btn-outline-secondary"><a href="welcome.php"> WELCOME</a></button> <br>
                    <button class=" btn  btn-outline-secondary"> <a href="add-staff.php"> Add Staff </a></button> <br>
                    <button class=" btn  btn-outline-secondary "> <a href="manage-staff.php">Manage Staff </a> </button> <br>
                    <button class="btn  btn-outline-secondary"> <a href="add-student.php"> Add Student </a> </button>
                    <br>
                    <button class="btn  btn-outline-secondary"> <a href="manage-stud.php"> Manage Student </a> </button> <br>
                    <button class=" btn btn-outline-secondary"> <a href="events.php"> Add Events </a> </button> <br>
                    <button class="btn  btn-outline-secondary"> <a href="logout.php"> Logout </a> </button> <br>
                    <br>

                </div>

                <form class=" row flex-nowrap" method="post" action="">
                    <div class="col-md-10">
                    <div class="card px-3 py-3">
<h2 style="text-align: center;" >STUDENT DETAILS</h2> <br>  <br>
  <table class="table align-middle table-striped table-hover">
    <thead>
      <tr>
        <th >ID</th>
        <th > Student Name</th>
        <th >Reg.No</th>
        <th> Department</th>
        <th> Batch </td>
        <th> Email ID </td>
        <th> Age </td>
        <th> Mobile No. </td>
        <th> Parent Mobile no.</td>
        <th> Update </td>
        <th> Delete </td>
      </tr>
    </thead>
    <?php
             $con=mysqli_connect('localhost','root','','college');

             $sql="select * from student";
            $result= mysqli_query($con,$sql);
            if($result){
             while($row = mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $Sname=$row['Name'];
                 $regno=$row['Reg_no'];
                 $dpt=$row['Department'];
                 $batch=$row['Batch'];
                 $email=$row['Email'];
                 $age=$row['Age'];
                 $num=$row['Number'];
                 $pnum=$row['Pnumber'];
                
                 
                echo"
                <tr>
                <th>$id</th>
                <td>$Sname</td>
                <td>$regno</td>
                <td>$dpt</td>
                <td>$batch</td>
                <td>$email</td>
                <td>$age</td>
                <td>$num</td>
                <td>$pnum</td>
                <td>
                <button class='btn btn-success' >
                <a class='text-white text-decoration-none' href='update-student.php? update-id=$id'><i class='fa fa-pencil'></i> Update</a>  
                </button>
              </td>
              <td>
              <button class='btn btn-danger' >
              <a  class='text-white text-decoration-none' href='delete-stud.php? deleteid=$id'><i class='fa fa-trash'></i> Delete</a>
              </button>
            </td>
          </tr>
                 </tr>";
             }
     
            }
             
        ?>

    
</table>
</div>
</div>
                    </div>

                </form>
            </div>



        </div>
    </section>
</body>

</html>