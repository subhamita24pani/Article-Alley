<?php
  include_once "navbar.php";
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Alley</title>
    <style>
        body{
            background-color:#F9FADE;
        }
    </style>
</head>
<body>
<?php
    require_once "functions.php";
    if(isset($_GET['id'])){
        $blogID = $_GET['id'];
        $res = getblogbyID($blogID);
        if($res){
            ?>
            <div class="container w-75"style="font-family: 'Old Baskaville';margin-top:100px;">
            <div class="card mt-4 mb-4">
            <div class="card-body">
               <!-- blog images --> 
               <img src="product_images/<?php echo $res['image'];?>" class="card-img-top w-100" alt="...">
            <!-- blog content -->
           <h5 class="card-title fw-bold fs-1"><?php echo $res['title'];?></h5>
           <p class="card-text fs-4 "><?php echo "Upload date: ".$res['date'];?></p>
           <p class="card-text fs-4"><?php echo"Writen by: ". $res['username'];?></p>
           <p class="card-text"><?php echo $res['content'];?></p>
           </div>
          </div>
         </div>
         <?php
        } 
    }
    ?>
    
</body>
</html>