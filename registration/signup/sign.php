<?php

 $success=0;
 $user=0;


  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
  
  
    $sql="select * from `registration` where username='$username'";
    $result=mysqli_query($con,$sql);
    if($result){
      $num=mysqli_num_rows($result);
      if($num>0){
        $user=1;
      }else{
         $sql="insert into `registration`(username,password) 
    values('$username','$password')";
    $result=mysqli_query($con,$sql);   
       if($result){
      $success=1;
    }else{
      die(mysqli_error($con));
    }
      }
    }
  
  }


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>signup page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

<?php
  if($user){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>ohh no sorry!</strong> User Already exists.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
?>
<?php
  if($success){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>success!</strong> Signup successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
?>


    <h1 class='text-center text-primary mt-5'>SignUp Form</h1>
    <div class="container d-flex justify-content-center">

    <form style='width:500px' action='sign.php' method='post'>
  <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" name='username' placeholder='Enter your name'>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class="form-control" name='password' placeholder='Enter your password'>
  </div>
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
    </div>
    <p class='text-center m-5'>Do you already have account ? <a href='login.php'>Login here</a></p>
  </body>
</html>