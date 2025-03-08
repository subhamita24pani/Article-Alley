<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogging Website</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .nav-item{
            font-weight: bold;
        }
        </style>
</head>
 <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top"style="background-color:#271c48;">
        <div class="container-fluid">
            <div class="navbar-logo-text">
                <img src="logo.jpg " alt="Logo" class="logo rounded-circle mb-3"style="height:40px; width:40px"> 
                <span class="text-lg fs-2 text-white">Article Alley</span>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="logout.php">Log Out</a>
                    </li>
                    <div class="btn btn-outline-dark btn-sm rounded-pill  bg-light-opacity-10">
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="myaccount.php">
                          <i class="bi bi-person-fill"></i>  My Account 
                        </a>
                    </li>
                  </div>
                </ul>
            </div>
        </div>
    </nav>
    
    
    <script src="./bootstrap.bundle.min.js"></script>
</body>
</html>