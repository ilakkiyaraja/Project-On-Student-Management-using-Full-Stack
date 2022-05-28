<?php
$db=mysqli_connect("localhost","root","","onlinebot");
if(!$db)
{
    echo "failed";
}

session_start();
?>
<?php
				if(isset($_POST["submit"])){
				$conn=mysqli_connect("localhost","root","","onlinebot");
                if(!$conn){
                    echo"error connecting";
                }
                @$username=$_POST['username'];
                @$password=$_POST['password'];
                $sql="select * from admin where name='$username'";
                @$result=mysqli_query($conn,$sql);
                  if($result){
                      while($row=mysqli_fetch_assoc($result)){
                          $_SESSION["bid"]=$row["id"];
                          $name2=$row['name'];
                          $password2=$row['pass'];
                          if($username==$name2 and $password==$password2){
                            header('location:botadmin.php');
                          }
                          else{
                           echo"error"/*"<script> let username = document.getElementById('nameErr').innerHTML='error'; username.style.borderColor='white';</script>"*/;
                          }
                      }
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
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
   <style>
       @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

body {
    background-color: #ffffff;
    font-family: "Poppins", sans-serif;
    font-weight: 300
}

.height {
    height: 100vh
}

.card {
    border: none;
    padding: 20px;
    background-color: #1c1e21;
    color: #fff
}

.circle {
    height: 20px;
    width: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #5855e7;
    color: #fff;
    font-size: 10px;
    border-radius: 50%
}

.form-input {
    position: relative;
    margin-bottom: 10px;
    margin-top: 10px
}

.form-input i {
    position: absolute;
    font-size: 20px;
    top: 15px;
    left: 10px
} 

.form-control {
    height: 50px;
    background-color: #1c1e21;
    text-indent: 24px;
    font-size: 15px
}

.form-control:focus {
    background-color: #25272a;
    box-shadow: none;
    color: #fff;
    border-color: #4f63e7
}

.form-check-label {
    margin-top: 2px;
    font-size: 14px
}

.signup {
    height: 50px;
    font-size: 14px
}

.social {
    height: 50px;
    width: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid #eee;
    border-radius: 50%;
    margin-right: 10px;
    cursor: pointer
}

.social:hover {
    background-color: #0d6efd;
    border-color: #0d6efd
}
.error-msg{
    position:relative;
    font-size:17px;
    color:#ffffff;
    text-align:left;
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
                  



                    </ul>

                    </form>
                </div>
            </div>
        </nav>
    </section>
    <div class="container mt-5 mb-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5"> 
                    <form method="post" onsubmit="validateform()" action="">
                    <span class="circle"><i class="fa fa-check"></i></span>
                    <h5 class="mt-3">LOG IN TO ACCESS CHATBOT ADMIN PANEL</h5>
                    
                    <div class="form-input"> 
                        <i class="fa fa-user"></i>
                        <p class="error-msg" id="nameErr" ></p>
                         <input type="text" id="username" required name="username" class="form-control" placeholder="User name"> 
                        </div>
                    <div class="form-input">
                         <i class="fa fa-lock"></i>
                         <p class="error-msg" id="passwordErr" ></p>
                          <input type="password" required id="password" name="password" class="form-control" placeholder="password">
                         </div>
                    <div class="form-check">
                         <input class="form-check-input" type="checkbox" value="" checked>
                          <label class="form-check-label" for="flexCheckChecked"> Remember me</label> </div> 
                          <button type="submit" name="submit" class="btn btn-primary mt-4 signup">Continue</button>
                   
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- <script>
        let username=document.getElementById("username");
        let password=document.getElementById("password");
        let flag=1;
        
        function validateform() {
            if(username.value=""){
                document.getElementById("nameErr").innerHTMl="*Username is required";
                username.style.borderColor="white";
                flag=0;
            }
            elseif(username.value.length < 5){
                document.getElementById("nameErr").innerHTMl="*Username must be atleast 5 characters";
                username.style.borderColor="white";
                flag=0;
            }
            else{
                document.getElementById("nameErr").innerHTMl="";
                username.style.borderColor="";
                flag=0;  
            }

            //for password
            if(username.value=""){
                document.getElementById("passwordErr").innerHTMl="*Username is required";
                username.style.borderColor="white";
                flag=0;
            }
            elseif(username.value.length < 2){
                document.getElementById("passwordErr").innerHTMl="*Username must be atleast 5 characters";
                username.style.borderColor="white";
                flag=0;
            }
            else{
                document.getElementById("passwordErr").innerHTMl="";
                username.style.borderColor="";
                flag=0;  
            }
            if(flag){
                return true;
            }
            else{
                return false;
            }

        }
    </script> -->
</body>
</html>
