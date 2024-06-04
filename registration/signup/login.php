<?php

$login=0;
$invalid=0;


  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
  
    $sql="select * from `registration` where username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
      $num=mysqli_num_rows($result);
      if($num>0){
       $login=1;
       session_start();
       $_SESSION['username']=$username;
       header('location:home.php');
      }else{
        $invalid=1;
    }
  }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <?php
  if($login){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>success!</strong> you are successfully loged in.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
?>
 <?php
  if($invalid){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Invalid credentials.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
?>

    <h1 class='text-center text-primary mt-5'>Login To Our Website</h1>
    <div class="container d-flex justify-content-center">

    <form style='width:500px' action='login.php' method='post'>
  <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" name='username' placeholder='Enter your name'>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class="form-control" name='password' placeholder='Enter your password'>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
    </div>
    <p class='text-center m-5'>you don't have an account? <a href='sign.php'>signup here</a></p>
  </body>
</html>