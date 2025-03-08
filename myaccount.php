<?php
 include_once "navbar.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Alley</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
         body{
          margin:0;
          padding:0;
          background-color:#F9FADE;
          background-attachment: fixed;
          background-size:contain;
          color:white;
        }
        
       .background{
        background-image:url(photo4.jpg);
        background-attachment: fixed;
        background-size:cover;
        height:400px;
        width: 100%;

       } 
      button{
        margin:0;
        padding:0;
        height:20px;
      }
        
    </style>
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:signin.php");
        exit();
    }
    $user =  $_SESSION['username'];
    require_once "functions.php";
    $res = myImages($user);
        ?>
        <div class="background" style="font-family: 'Old Baskaville';">
        <div class="card  bg-transparent border border-0 text-dark w-75 mx-auto mt-2 mb-4 main">
            <div class="card-header text-white border border-0 mt-4">
           <h5 class="card-title text-center fs-2 fw-bold mt-5">MY BLOGS</h5>
           <p class="text-center fs-3 fw-bold">Fine-tune your drafts and share them with the world.</p>
        </div>
       <div class="card-body mt-5">
            <!-- blog card -->
             <?php
             if($res){
             ?>
        <?php foreach($res as $blog):?>
            <div class="card mt-4">
            <div class="card-body row">
               <!-- blog images --> 
            <div class="col-md-4" >
               <img src="product_images/<?php echo $blog['image'];?>" class="card-img-left w-100" alt="...">
            </div>
            <!-- blog content -->
           <div class="col-md-4" >
           <h5 class="card-title fw-bold fs-4"><?php echo $blog['title'];?></h5>
           <p class="card-text"><?php echo"Upload date:" .$blog['date'];?></p>
           <a href="detailblog.php?id=<?php echo $blog['id']; ?>" class="btn btn-primary">Read More</a>
          </div>
          <div class="dropdown col-md-4 d-flex justify-content-end">
             <button class="btn btn-light bg-transparent border-0 dropdown-toggle" type="button" id="menuButton" data-bs-toggle="dropdown" aria-expanded="false">
             <i class="bi bi-three-dots-vertical"></i>
             </button>
             <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="delete.php?id=<?php echo $blog['id'];?>">Delete</a></li>
             </ul>

         </div>
         </div>
        </div>
        <?php endforeach;?>
    </div>
    </div>  
    </div> 
        
    <?php      
    }else{
        ?>
        <script>
            alert("No blog uploaded");
            windows.location="myaccount.php";
        </script>
        <?php
    }
    ?>
    <a href="upload.php?username=<?php echo $user?>" style="text-decoration:none;position:fixed;bottom:100px;right:50px;">
        <i class=" btn btn-outline-primary rounded-pill bi bi-plus d-flex justify-content-end "style="color:cornflowblue;font-size:50px;"></i>
    </a>
    <br>
    
</body>
</html>