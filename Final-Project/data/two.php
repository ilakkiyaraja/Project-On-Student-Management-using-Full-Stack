<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: sans-serif;
            background-color: white;
            color: black;
        }

        .dark-mode {
        background-color: #1d1d1d;
        color: white;
    }

        .navbar {
            background-image: linear-gradient(to right, #af14c7, #4c1169);
        }

        .navbar-nav li {
            padding: 0 15px;
        }

        /*banner styels*/
        #banner {
            background-image: linear-gradient(to right, #af14c7, #4c1169);
            color: white;

            padding-top: 200px;
        }

        .img {
            width: 100%;
        }

        /*services styles*/
        #services {
            padding-top: 80px;
            padding-bottom: 80px;
        }

        /*review styles*/
        .reviews {
            border-left: 4px solid #af14c7;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .reviews img {
            height: 60px;
            width: 60px;
            border-radius: 50%;
            margin: 0 10px;
        }

        /*social media buttons*/
        .social {
            height: 50px;
            width: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #eee;
            border-radius: 50%;
            margin-right: 50px;
            cursor: pointer
        }

        .social:hover {
            background-color: #af14c7;
        }

        /*footer*/
        #footer {
            background-image: linear-gradient(to right, #af14c7, #4c1169);
            color: #fff;
        }

        #footer img {
            width: 100%;

        }

        .footer-content {
            padding: 20px;
        }

        .footer-content .fa {
            margin-right: 10px;
            font-size: 25px;
        }

        .navbar .navbar-nav .nav-link {
            text-decoration: none;
            color: white;
        }

        .active {
           color: #fff;
        }
          
      #search {
          position: relative;
          height: 50px;

      }
   #search #input {

box-shadow: none;
border: none;
height: 50px;
width: 50px;
transition: width 0.3s ease;
   }
#btn1 {
    height: 50px;
    width: 50px;
    position: absolute;
    transition: transform 0.3s ease; 

    
}
#search.active #input {
    width: 190px;
   
}

   #search.active #btn1 {
        transform: translateX(198px); 
        
   }
    
   @media  screen and (max-width: 768px) {
     .img-fluid {
        margin-top: 150px;
     }   
     #bannertext {
         text-align: center;
     }
     #socialbuttons {
         margin-left: 30px;
     }
     #socialtext{
         margin-right: 45px;
     }
     #search {
         width: 50px;
     }
    }
 

    </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="300">
    <section id="navigation">
        <nav id="nav-menu" class="navbar navbar-expand-lg navbar-scroll fixed-top  navbar-light ">
            <div class="container-fluid">
                <button class="navbar-toggler" style="background-color: white; outline: none;" type="button"
                    data-bs-toggle="collapse" data-bs-target="#demo">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo2.png" height="40px" width="40px" alt=""></a>
                <div class="collapse navbar-collapse" id="demo">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active"  
                                href="#banner">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "  id="list"
                                href="#services">ADMISSION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "  id="list"
                                href="#aboutus">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "  id="list"
                                href="#review">REVIEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active "  id="list"
                                href="login.php"> ADMIN LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active "  id="list"
                                href="staff_login.php"> STAFF LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active "  id="list"
                                href="mainbot.php"> CHATBOT</a>
                        </li>
                       
                            
                       
                    </ul>
                    
                    <form id="search" style="margin-right: 40px;" class="d-flex">
                        <input class="form-control me-2" id="input" type="search" placeholder="Search" aria-label="Search">
                        <button  class="btn btn-primary" type="button" id="btn1" ><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>
    </section>

    <!--bannner-->
    <section id="banner">

        <div class="container">
            <div class="row">
                <div id="bannertext" class="col-md-6">
                    <h1>BEST COLLEGE IN THE CITY</h1>
                    <p>Join our college and graduate and place in the best companies </p>
                    <button style="padding: 10px;  margin-bottom: 20px;" type="button"
                        class="btn btn-outline-light">Read More</button>
                </div>
                <div class="col-md-6 text-center">
                    <img src="images/undraw_real_time_sync_re_nky7.svg" height="300px" width="350px"
                        style="position: relative; top: -120px;" class="img-fluid" alt="">
                </div>
                      
            </div>
        </div>
        <img src="images/wave.svg" class="img" alt="">
    </section>

    <!--services-->
    <section id="services">

        <div class="container text-center">
            <h1 style="margin-bottom: 100px;">WHY CHOOSE HICAS</h1>
            <div class="row   text-center">
                <div class="col-md-4">
                    <img src="images/1service.svg" width="200px" style="margin-bottom: 20px;" alt="">
                    <h3 style="text-transform: uppercase;">DISCOVER
POSSIBILITIES</h3>
                    <p>

To provide world class education to the students to face global challenges and to inculcate the latest trends in technological advancement.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="images/2service.svg" width="200px" height="170px" style="margin-bottom: 20px;" alt="">
                    <h3 style="text-transform: uppercase;">INFRASTRUCTURE
BEST CAMPUS</h3>
                    <p>

Our College has the best campus infrastructure clubbed up with artistic buildings, beautiful gardens and playgrounds enhancing student life in college.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="images/3service.svg" width="200px" height="170px" style="margin-bottom: 20px;" alt="">
                    <h3 style="text-transform: uppercase;">LIBRARY
NEVER RUN OUT OF OPTIONS</h3>
                    <p>
With a fortified library containing not just books, but also digital medium of information, we make sure our students get the best worldview.

                    </p>
                </div>
            </div>
            <button type="button"
                style="margin-top: 20px; box-shadow: none; border: none; border-radius: 25px; padding: 9px 20px; background-image:linear-gradient(to right,#af14c7,#4c1169) ;"
                class="btn btn-primary ripple">All Facilities</button>
        </div>
    </section>

    <section id="aboutus">

        <div class="container text-center">
            <h1 style="margin-bottom: 100px;">ABOUT US</h1>
            <div class="row">
                <div class="col-md-6">
                    <img src="images/home2.png" height="500px" width="500px" alt="">
                </div>
                <div class="col-md-6">
                    <h3>ABOUT HICAS</h3>
                    <p>Hindusthan College of Arts & Science ( HICAS ) was founded by Hindusthan Educational & Charitable Trust in 1998, with the primary objective of providing Education for deserving students irrespective of caste and creed. Embraced by serene nature, world-class infrastructure and excellent learning environment, Hindusthan College of Arts & Science ( HICAS ) stands out in academic excellence and is most preferred among the best colleges. Vision and Mission of HiCAS is to provide world class education to the students to face global challenges and to inculcate the latest trends in technological advancement. To cater the needs of the environmental and ethical values in the mind of students to become good citizens and entrepreneurs. The mission of the college is to pursue a philosophy of perceptual acquisition of knowledge. The important policy is to provide value based education and to bring out the hidden potential in students that equip them to approach life with optimism.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="review">

        <div id="example4" class="container ">
            <h1 class="text-center">REVIEWS</h1>
            <div class="row">
                <div class="col-md-4 reviews">
                    Best College ,Good Infrastucture, Nice teaching <br>
                    <img src="images/user1.jpg" alt="">
                    <p style="display: inline-block; font-size: 15px; margin-top: 10px;"><b>ANGELINA</b> <br>
                        Student at HICAS
                    </p>
                </div>

                <div class="col-md-4 reviews">
                   Good college for oppurtunity seeking students <br>
                    <img src="images/user2.jpg" alt="">
                    <p style="display: inline-block; font-size: 15px; margin-top: 10px;"><b>CHRIS</b> <br>
                       Former student of HICAS
                    </p>
                </div>

                <div class="col-md-4 reviews">
                   Nice Environment to learn <br>
                    <img src="images/user1.jpg" alt="">
                    <p style="display: inline-block; font-size: 15px; margin-top: 10px;"><b>JOHN</b> <br>
                      Student at HICAS
                    </p>
                </div>
            </div>
        </div>
    </section>

<!-- social media icons -->
    <section style="margin-top: 50px;" id="connect">
        <div id="socialbuttons" class="container text-center">
            <p id="socialtext" >FIND US ON SOCIAL MEDIA</p>
            <div class="d-flex justify-content-center mt-4">
                <span class="social"><i class="fa fa-google"></i></span>
                <span class="social"><i class="fa fa-facebook"></i></span>
                <span class="social"><i class="fa fa-twitter"></i></span>
                <span class="social"><i class="fa fa-linkedin"></i></span>
            </div>
        </div>
    </section> <br> <br>

    <section id="footer">
    <footer class="footer-classic bg-default text-center text-sm-start">
        <img src="images/wave (1).svg" alt="">
        

<div class="container">
    <div class="row ">
        <div class="col-lg-3 ">
            <div class="brand-footer">
                <a class="brand" href="index.html"><img class="brand-logo-dark"
                        src="img/Hicas-logo.jpg" alt="" width="100" height="100" /></a>
            </div>
            <ul class="contact-list">
                <li> <span>Phone: </span><a href="tel:#">+ 1 (045) - 224 - 12 - 67</a></li>
                <li><span>Mail: </span><a href="mailto:#">info@hindusthan.net</a></li>
            </ul> 
        </div>
        <div class=" col-lg-3">
            <h4 class="footer-title">ADRESS :</h4>
            <ul class=" footer-list">
            City Campus, Nava India,
Avinashi Road,
Coimbatore - 641 028, TamilNadu, India.
Landline:0422 - 4440555 (100 Lines)
            </ul>
        </div>
        <div class="col-lg-3">
            <h4 class="footer-title">Our College</h4>
            <ul class=" footer-list">
                <li><a href="">Arts and science</a></li>
                <li><a href="">engineering</a></li>
                <li><a href="">medical</a></li>
                <li><a href="#">ITI</a></li>
            </ul>
        </div>
        <div class=" col-lg-3">
            <h4 class="footer-title">Our social networks</h4>
            <p>Join us in the social networks to receive the latest news and updates.</p>
            <ul class=" footer-list-1">
                <li class="list-inline-item"><a class="fa fa-youtube-play" href="#"></a></li>
                <li class="list-inline-item"><a class="fa fa-facebook-f" href="#"></a></li>
                <li class="list-inline-item"><a class="fa fa-instagram" href="#"></a></li>
                <li class="list-inline-item"><a class="fa fa-twitter" href="#"></a></li>
            </ul>
        </div>
    </div>
</div>
</div>




            </div>
            <hr>
            <p class="copyright text-center">Copyright @ Website 2022 </p>

        </div>
    </section>



    <script>
        //menu bar active
        const Menu = document.querySelectorAll("#list")

        Menu.forEach(list =>{
            list.addEventListener('click',()=>{
                removeActiveClasses()
                list.classList.add('active')
            })
        })
        function removeActiveClasses(){
            list.forEach(list=>{
                list.classList.remove('active')
            })
        }
        
       
// hidden search box
        const search= document.querySelector('#search')
  const btn=document.querySelector('#btn1')
  const input=document.querySelector('#input')
  btn.addEventListener('click', ()=>{
    search.classList.toggle('active')
  })
 //dark mode 
     function myFunction(){
        var element = document.body;
   element.classList.toggle("dark-mode");
     }    
    </script>
</body>

</html>