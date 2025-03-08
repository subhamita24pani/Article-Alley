<?php
  include_once "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Article Alley - Login</title>
   <style>
    body{
          margin:0;
          padding:0;
          background-image:url(photo4.jpg);
          font-family: 'Old Baskaville';
          background-attachment: fixed;
          background-size:cover;
        
        }
        .login-card{
          background: rgba(255, 255, 255, 0.7);
          width:500px;
          margin-top:100px;
          padding:20px;
        }
    </style>
</head>
<body>
  
  <!-- Background Overlay -->
  <div class="overlay"></div>

  <!-- Login Card -->
  <div class="d-flex justify-content-center align-items-center text-dark" style="height: 100vh; position: relative;">
    <div class="login-card text-center col-md-4">
      <h2 class="mb-4">Sign In</h2>
      <form action="signin.php" method="post">
      <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" id="username" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <input type="submit" name='submit' class="btn btn-primary w-50" value="Sign In"><br><br>
        <p>Don't have an account?please<a href="reg.php"> SignUp</a></p>
      </form>
    </div>
  </div>

  <?php
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        require_once "functions.php";
        $res=login($username,$password);
        if($res){
            session_start();
            $_SESSION['username']=$res['username'];
            $_SESSION['password']=$res['password'];
            header("location:myaccount.php");
        } else{
            echo "Invalid Email or Password";
        }
    }
    ?>
</body>
</html>
