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
        *
{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
    box-sizing: border-box;
}
#container
{
    height: 100vh;
    width: 100%;
    position: relative;
    display: grid;
    place-items: center;
    background: #f6f6f6;
    overflow: hidden;
}
/* #dot1
{
    height: 900px;
    width: 900px;
    position: absolute;
    top: -200px;
    right: -200px;
    background: #fc86ab;
    border-radius: 50%;
}
#dot2
{
    height: 900px;
    width: 900px;
    position: absolute;
    bottom: -200px;
    left: -200px;
    background: #17e782;
    border-radius: 50%;
} */
#screen
{
    height: 550px;
    width: 700px;
    border-radius: 30px;
    background: #f6f6f6;
    border-radius: 25px;
    border: 15px solid #fff;
    box-shadow: 3px 3px 15px rgba(0,0,0,0.2);
    position: relative;
    overflow: hidden;
}
#header
{
    height: 80px;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: #fff;
    display: grid;
    place-items: center;
    font-size: 25px;
    color: #000;
    font-weight: bold;
    
}
#messageDisplaySection
{
    height: 380px;
    width: 100%;
    position: absolute;
    left: 0;
    top: 100px;
    padding: 0 20px;
    
    overflow-y: auto;
}
.chat
{
    min-height: 40px;
    max-width: 60%;
    padding: 15px;
    border-radius: 10px;
    margin: 15px 0;
}
.botMessages
{
    background: #000;
    color: #fff;
    
}
#messagesContainer
{
    height: auto;
    width: 100%;
    display: flex;
    justify-content: flex-end;
}
.usersMessages
{
    background: #00000010;
}
#userInput
{
    height: 50px;
    width: 90%;
    position: absolute;
    left: 5%;
    bottom: 1%;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
}
#messages
{
    height: 50px;
    width: 90%;
    position: absolute;
    left: 0;
    border: none;
    outline: none;
    background: transparent;
    padding: 0px 15px;
    font-size: 17px;
}
#send
{
    height: 50px;
    width: 24%;
    position: absolute;
    right: 0;
    border: none;
    outline: none;
    display: grid;
    place-items: center;
    color: #fff;
    font-size: 20px;
    background: #17e782;
    cursor: pointer;
    display: none;
}
.admin li{
  list-style-type:none;
}
.admin li a{
    text-decoration:none;
    margin-left:300px;
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
                   <h1 style="margin-left:-90px;" >CHATBOT SYSTEM</h1>



                    </ul>
                  <ul class="admin">
                      <li>
                          <a href="botadmin.php">Admin Login</a>
                      </li>
                  </ul>
                    </form>
                </div>
            </div>
        </nav>
    </section>

    <br>
    <section>
    <div id="container">
        <div id="dot1"></div>
        <div id="dot2"></div>
        <div id="screen">
            <div id="header">ONLINE CHATBOT</div>
            <div id="messageDisplaySection">
                
        </div>
          
            <div id="userInput">
                <input type="text" name="messages" id="messages" autocomplete="OFF" placeholder="Type Your Message Here." required>
                <input type="submit" value="Send" id="send" name="send">
            </div>
        </div>
    </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <!-- Jquery Start -->
    <script>
        $(document).ready(function(){
            $("#messages").on("keyup",function(){

                if($("#messages").val()){
                    $("#send").css("display","block");
                }else{
                    $("#send").css("display","none");
                }
            });
        });
       
        $("#send").on("click",function(e){
            $userMessage = $("#messages").val();
            $appendUserMessage = '<div class="chat usersMessages">'+ $userMessage +'</div>';
            $("#messageDisplaySection").append($appendUserMessage);

          
            $.ajax({
                url: "bot.php",
                type: "POST",
                
                data: {messageValue: $userMessage},
               
                success: function(data){
                    
                    $appendBotResponse = '<div id="messagesContainer"><div class="chat botMessages">'+data+'</div></div>';
                    $("#messageDisplaySection").append($appendBotResponse);
                }
            });
            $("#messages").val("");
            $("#send").css("display","none");
        });
    </script>
</body>
</html>