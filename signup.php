<?php 
include "connect.php";
session_start();
if(!isset($_SESSION["Username"])){
  header("login.php");
}
if(isset($_POST["submit"])) 
{
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];

$insert = "INSERT INTO `signup` (`User_name`, `Pass_word`, `E_mail`) VALUES ('$Username', '$Password', '$Email')";
$result = mysqli_query($conn, $insert);
if ($result) {
  header("Location: prompt.html"); 
} else {
  echo "Sorry";
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="CSS/style.css" />
  </head>
  <body>
    <section class="container">
      <header>Sign-Up</header>

  
      <form class="form" action="" method="post">

        <div class="input-box">
          <label for="Username">Username</label>
          <input 
          type="text" 
          placeholder="Enter Username" 
          class="form-control"
          id="Username"
          name="Username"
          required />
        </div>

          <div class="input-box">
            <label for="Email">Email Address</label>
            <input 
            type="text" 
            placeholder="Enter Email" 
            class="form-control"
            id="Email"
            name="Email"
            required />
          </div>

          <div class="input-box">
            <label for="Password">Password</label>
            <input 
            type="text" 
            placeholder="Enter Password" 
            class="form-control"
            id="Password"
            name="Password"
            required />
          </div>
          
        <div class="button">
        <input type="submit" class="signup" value="Create Account" name="submit">
        </div>
          

          </div>
          <div class="return-link">Already have an Account? <a href="login.php">Return to Login</a></div>
           
      </form>
    </section>
  </body>
</html>
