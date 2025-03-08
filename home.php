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
        background-color:#FEFFEB;
        font-family: 'Old Baskaville';
      }
.card:hover {
    transform: scale(1.1); 
    transition: transform 0.1s ease; 
    }
.footer {
    background:#271c48;
    color: white;
    width: 100%;
    padding: 20px;
    border-top: 1px solid black;
}
p a {
    color: white;
    text-decoration: none;
}

.footer {
    margin-top: auto;
    text-align: center;
}
.carousel-inner{
  height: 600px;
}
.card{
  height:400px;
  padding:20px;
}

</style>
  </head>
<body>
    <?php 
    require_once "functions.php";
    $data=display();

    ?>

    <div style="margin-top:60px; position:relative;">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="photo1.jpg" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="photo14.jpg" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="photo3.jpg" class="d-block w-100" alt="Slide 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
 </div>
<?php
if($data){ 
  ?>
<div class="container my-4">
    <p class="text-center fs-4">"Tourist places are reminders of the beauty and diversity of this incredible world."</p>
        <h4 class="text-center">Upcoming Event</h4>
      <div class="container my-4">
        <div class="row">
          <?php
          foreach($data as $blog){
          ?>
          <div class="col-md-4 mb-3 "> 
            <div class="card">
              <img src="./product_images/<?php echo $blog['image']?>" class="card-img-top w-100" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $blog['title']?></h5>
                <a href="detailblog.php?id=<?php echo $blog['id']; ?>" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
      </div>
        </div>
        </div>
        <div class="footer w-100">
          <p class="cls mx-auto">© 2024. All Rights Reserved.</p>
          <p>
            <a href="#"><i class="bi bi-facebook"></i> Facebook</a>
            <a href="#"><i class="bi bi-instagram"></i> Instagram</a>
            <a href="#"><i class="bi bi-twitter"></i> Twitter</a>
          </p></div>
        </div>
        <?php
          }
          ?>

</body>
</html>