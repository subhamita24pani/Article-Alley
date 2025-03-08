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
          margin:0;
          padding:0;
          background-image:url(photo4.jpg);
          font-family: 'Old Baskaville';
          background-attachment: fixed;
          background-size:cover;
        
        }
        .card{
          background: rgba(255, 255, 255, 0.7);
          width:500px;
          margin-top:100px;
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
     $user = $_SESSION['username'];
  ?> 
  
<div class="card  border border-0 shadow-lg text-dark  mx-auto mb-4">
    <div class="mt-5 mx-auto">
    <h2><?php echo $user?> Post Your Article</h1>
    </div>
  <div class="card-body fs-5">
    <form action="upload.php" method="post" enctype = "multipart/form-data" >
        <label class="form-label">Title:</lable><br>
        <input type="text" name="title" placeholder="Enter your title" class="form-control" required><br>
        <label class="form-label">Upload Date:</lable><br>
        <input type="date" name="date" class="form-control" required><br>
        <label>Upload Image:</label>
        <input type="file" name="image" class="form-control" required><br>
        <label class="form-label">Write here:</lable><br>
        <textarea  cols="90" rows="10" name="article" class="form-control" required></textarea><br>
        <div class="text-center">
        <input type="submit" name="add" value="Upload" class="btn btn-primary col-6">  
      </div>
    </form>
  </div>
</div>
    <!-- </div> -->
<?php
if(isset($_POST['add'])){
  $title = $_POST['title'];
  $date = $_POST['date'];
  $image = $_FILES['image'];
  $content = $_POST['article'];
  $new_name = time()."-".$image['name'];
  $upload_path="product_images/".$new_name;
  if(move_uploaded_file($image['tmp_name'],  $upload_path)){
    require_once "functions.php";
    $res = addData($user,$title,$date,$new_name,$content);
    if($res){
         header("location:myaccount.php");
        
    } else {
        echo " Error While Adding.";
    }
} else {
    echo "File Upload Error";
}
}

?>
</body>
</html>