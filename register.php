<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="./bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./sign-in.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jaldi:wght@700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" />
</head>

<body>
      <br><br>
      <br>
      <br>
      <center>
    <div class="wrapper">
      <h2>Registration</h2>
      <form action=""method="POST">
        <div class="input-box">
          <td><input type="text" name="id" placeholder="Enter Your Doctor id"  required></td>
          </div>
        <div class="input-box">
        <input type="text" placeholder="Enter your name" name="name" required>
        </div>
        <div class="input-box">
        <input type="text" placeholder="Enter your Email" name="email"required>
        </div>
        <div class="input-box">
          <td><input type="text" name="phone" placeholder="Enter your Phone Number"  required ></td>
          </div>
        <div class="input-box">
        <input type="password" placeholder="Enter your Password"name="password"required>
        </div>
        <div class="input-box">
          <td> <input type="password" name="confirm_password" placeholder="confirm password" required></td>
          </div>
        <br>
        <input class="btn mx-auto" type="submit"name="submit"value="Register Now">
        <br>
        <br>
        <div class="input-box button">
            <a href="start.html">
              <input type="text" value="Go back to Home"></a>
        </div>
      </form>
    </div>
    </center>
</body>

</html>


<?php

if(isset($_POST['submit']))
{
      $id=$_POST['id'];
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $password=$_POST['password'];
      $confirm_password=$_POST['confirm_password'];

      if($password==$confirm_password){
        $sql="INSERT INTO registration values ('$id','$name','$email','$phone','$password','$confirm_password')"; 

        $conn=mysqli_connect("localhost","root","","medical") or die(mysqli_error());
        $res=mysqli_query($conn, $sql);
      }
      echo "<script>alert('Password Did not matched.');
      window.location.href='register.php';
          </script>
      ";

}

?>