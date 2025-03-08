<?php
include_once "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Article Alley - SignUp</title>
  
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
        .error{
          color:red;
        }
    </style>

</head>
<body>
  <!-- Login Card -->
  <div class="d-flex justify-content-center align-items-center" style="height: 100vh; position: relative;">
    <div class="login-card text-center col-md-4">
      <h2 class="mb-4">Sign Up</h2>
      <form action="reg.php" method="post" onsubmit="validate(event)">
      <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" id="username" name="username" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" id="email" name="email" class="form-control">
          <label class="error" id="emailError"></label>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" id="password" name="password" class="form-control">
          <label class="error" id="passwordError"></label>
        </div>
        <input type="submit" name='submit' class="btn btn-primary w-50" value="Sign In">
      </form>
    </div>
  </div>
  <script src="regvalid.js"></script>
  <?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    if($username=="" || $email=="" || $password == "") 
    { 
       ?> 
       <script>alert("Error:Fields are Empty!!!"); 
         window.location="reg.php"; 
       </script> 
       <?php 
    } 
    require_once "functions.php";
    $res = addUser($username, $email, $password);
    if($res){
        ?> 
        <script> 
            alert('Successfully Registered.'); 
            window.location ="signin.php"; 
        </script> 
        <?php 
    } else {
        ?> 
        <script>alert('Something Went wrong');</script> 
        <?php 
    }
}
?>
<script src="regvalid.js"></script>
</body>
</html>
