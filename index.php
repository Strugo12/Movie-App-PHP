<?php 
include("database.php");
include("loginform.php");
include("passwordform.php");
include("registerform.php");
$user_id=$_SESSION['id'];
$user=mysqli_query($db, 'SELECT * FROM users WHERE id="'.$user_id.'"');
$row=mysqli_fetch_array($user);
?>

<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="jquery.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Movieforia</title>
        <link rel="shortcut icon" href="logo.jpg">
        <script>
            function Login() {
                document.getElementById('login').style.display='none'
                document.getElementById('changepassword').style.display='block'
                }
                function Register() {
                document.getElementById('register').style.display='none'
                document.getElementById('login').style.display='block'
                }
        </script>
      <style>
        <?php include "index.css";
              include "register.css";
              include "password.css";
              include "login.css";
        ?>
    </style>
    </head>
    <body>
        <h1 id="naslov"> 
            MOVIEFORIA
            <?php 
              if (strlen($_SESSION['id']==0)){ ?>
        <aside id="log">
            <button onclick="document.getElementById('login').style.display='block'">Login</button>
            <br>
            <button onclick="document.getElementById('register').style.display='block'">Register</button>
        </aside>
        <?php } 
        else{ ?>
            <aside id="logged_in">
              <?php echo $row['username']?>
              <aside id="menu_logged_in">
              <a href="logout.php">
              <button>Logout</button>
              </a>
              <br>
              <button>Moj profil</button>
              </aside>
              </aside>
             
      <?php } ?>
    </h1>

    <nav id="izbornik">
        <img src="logo.jpg" alt="" style="width: 60px; height: 60px; float: left;">
        <ul>
            <br>
            <li><a href=""><button>Action</button></a></li>
            <li><a href=""><button>Adventure</button></a></li>
            <li><a href=""><button>Biography </button></a></li>
            <li><a href=""><button>Comedy</button></a></li>
            <li><a href=""><button>Crime</button></a></li>
            <li><a href=""><button>Drama</button></a></li>
            <li><a href=""><button>Family</button></a></li>
            <li><a href=""><button>Science fiction</button></a></li>
            <li><a href=""><button>Fantasy</button></a></li>
            <li><a href=""><button>Historical</button></a></li>
            <li><a href=""><button>Horror</button></a></li>
            <li><a href=""><button>Mystery</button></a></li>
            <li><a href=""><button>Political</button></a></li>
            <li><a href=""><button>Romance</button></a></li>
            <li><a href=""><button>Thriller</button></a></li>
            <li><a href=""><button>Western</button></a></li>
            <li><a href=""><button>TV Shows</button></a></li>
            <form action="">
            <input type="text" placeholder="Search...">
            </form>
        </ul>
    </nav>
    </body>
    
</html>
<script>  
    $(document).ready(function(){  
    $('#name').on('input change', function () {
        var username = $(this).val();
        if($(this).val() != "") {
            document.getElementById("registerbtn").disabled = false;
            document.getElementById("registerbtn").style.backgroundColor = "rgb(43, 43, 43)";
        $.ajax({
         url:'livesearch.php',
         method:"POST",
         data:{user_name:username},
         success:function(data)
         {
          if(data != '0')
          {
           $('#availability').html('Username not available');
           $('#registerbtn').attr("disabled", true).css("background-color", "#778899");
           $('#availability').css("color", "red");
           $( "#usermail" ).prop( "disabled", true );
          }
          else{
           $('#availability').html('Username Available');
           $('#registerbtn').css("background-color", "rgb(43, 43, 43)");
           $('#availability').css("color", "Green");
           $( "#usermail" ).prop( "disabled", false );
          }
         }
        })
      }
      else{
        document.getElementById("availability").innerHTML = "Fill me";
        document.getElementById("availability").style.color = "red";
        document.getElementById("registerbtn").disabled = true;
        document.getElementById("registerbtn").style.backgroundColor = "#778899";
      }
    });

    $('#usermail').on('input change', function () {
        var mail = $(this).val();
        if($(this).val() != "") {
            document.getElementById("registerbtn").disabled = false;
            document.getElementById("registerbtn").style.backgroundColor = "rgb(43, 43, 43)";
        $.ajax({
         url:'livesearch.php',
         method:"POST",
         data:{user_mail:mail},
         success:function(data)
         {
          if(data != '0')
          {
           $('#availabilitymail').html('Mail adress not available');
           $('#registerbtn').attr("disabled", true).css("background-color", "#778899");
           $('#availabilitymail').css("color", "red");
           $( "#name" ).prop( "disabled", true );
          }
          else{
           $('#availabilitymail').html('Mail adress Available');
           $('#registerbtn').css("background-color", "rgb(43, 43, 43)");
           $('#availabilitymail').css("color", "Green");
           $( "#name" ).prop( "disabled", false );
          }
         }
        })
      }
      else{
        document.getElementById("availabilitymail").innerHTML = "Fill me";
        document.getElementById("availabilitymail").style.color = "red";
        document.getElementById("registerbtn").disabled = true;
        document.getElementById("registerbtn").style.backgroundColor = "#778899";
      }
    });
});  
    


$(document).ready(function(){  
    $('#password_username').on('input change', function () {
        var pw_username = $(this).val();
        $.ajax({
         url:'livesearch.php',
         method:"POST",
         data:{pw_username:pw_username},
         success:function(data)
         {  
            $('#security_question').html(data);
          }
         
        })
    });
});      
</script>





    
    