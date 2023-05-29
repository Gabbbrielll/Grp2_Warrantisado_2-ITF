<?php 
include "connect.php";
session_start();
if(!isset($_SESSION["Email"])){
  header("login.php");
}
if (isset($_POST['submit'])) { 
  $email = $_POST['Email'];
  $pass = $_POST['Password'];
  $select = " SELECT * FROM signup WHERE E_mail = '$email' && Pass_word = '$pass' ";
  $result = mysqli_query($conn, $select);
  if (mysqli_num_rows($result)>0){
  header('location:homepage.php');

  }else{
    echo '<script>alert("You have entered an unregistered account")</script>';
  }

    
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title> 
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Warrantisado</span></div>
        <form action="" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="E-mail" name="Email" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="Password" required>
          </div>
          <div class="row button">
            <input type="submit" value="Login" name="submit">
          </div>
          <div class="signup-link">No Account? <a href="signup.php">Signup now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>
