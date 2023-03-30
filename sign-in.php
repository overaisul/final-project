<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./sign-in.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Jaldi:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
    />
  </head>
  <body>
    <center><b class="welcome">Welcome to the website</b></center>
    
    <br>
    <br>
    <center>
  <div class="wrapper">
    <h2>Sign In</h2>
    <form action=""method="POST">
      <div class="input-box">
      <input type="text" placeholder="Enter your Email" name="email">
      </div>
      <div class="input-box">
      <input type="password" placeholder="Enter your Password"name="password">
      </div>
      <br>
      <input class="btn mx-auto" type="submit"name="submit"value="Sign In">
      <br> 
      <br>
      <small>If you Don't Have a Account! Click Register Now.</small>

      <div class="input-box button">
          <a href="register.php">
        <input type="text" value="Register Now"></a>
      </div>
    </form>
  </div>
  </center>  
  </body>
</html>




<?php
if(isset($_POST['submit']))
 {
      $email=$_POST['email'];
 
      $password =$_POST['password'];

      $conn=mysqli_connect("localhost","root","","medical");

     $sql="SELECT * FROM registration WHERE email='$email' AND password='$password'";

    //  echo $email;
    //  echo $password;

     $res=mysqli_query($conn,$sql);
     $count=mysqli_num_rows($res);
     if($count>=1)
     {
      echo "<script>alert('Welcome to the Homepage');
      window.location.href='home.html';
          </script>
      ";
     }
     else{
      echo "<script>alert('Please Enter Valid Information.');
      window.location.href='sign-in.php';
          </script>
      ";
        
     }
 }
?>