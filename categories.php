<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="./vendor/css/imagehover.min.css">
    <link rel="stylesheet" href="./customcss/style.css">
    <title></title>
    
  </head>
  <body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="" style="width: 100px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link h5 mx-2" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link h5 mx-2" href="about.php">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link  h5 mx-2" href="categories.php">Categories</a>
                </li>
                <li class="nav-item">
                <a class="nav-link  h5 mx-2" href="product.php">Products</a>
                </li>
                
            </ul>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
    <!-- header -->
    <header class="container-fluid">
        <div class="container w-50">
            <div class="row align-items-center" style="padding-top: 350px;">
                <div class="col-lg-10 col-xs-12 mx-auto">
                    <input type="text" class="form-control form-control-lg p-2 h4" placeholder="Search...">
                </div>
                <div class="col-lg-2 d-none d-xl-block">
                    <img src="./images/search.png" alt="" class="w-40 bg-info p-3 rounded-circle mb-3" style="cursor: pointer;">
                </div>
                
            </div>
        </div>
    </header>
    <!-- endheader -->

  

    <!-- categories -->
    <section class="container-fluid bg-light py-5">
        <div class="container">
            <h1 class="text-center">Explore Categories</h1>
            <div class="categories-contianer row d-flex justify-content-around text-center">
                <div class="card rounded-circle rounded-circle mt-5" style="width: 18rem;">
                    <img src="images/vodka.jpg" class="card rounded-circle-img-top rounded-3 w-100 h-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center h4 mt-2">Absolute Vodka</h5>
                    </div>
                </div>
                <div class="card rounded-circle mt-5" style="width: 18rem;">
                    <img src="images/dowells.jpg" class="card-img-top rounded-3 w-100 h-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center h4 mt-2">McDowells</h5>
                    </div>
                </div>
                <div class="card rounded-circle mt-5" style="width: 18rem;">
                    <img src="images/king.jpg" class="card-img-top rounded-3  w-100 h-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center h4 mt-2">KingFisher</h5>
                    </div>
                </div>
                
                <a href="" class="mt-5 h6 text-danger">See All Categories</a>
            </div>
           
        </div>
    </section>
    <!-- end categories -->

   
    
    <!-- footer -->
    <footer class="container-fluid py-5">
        <div class="container">
            <div class="icon-container text-center">
                <a href="http://facebook.com/">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" class="svg-inline--fa fa-facebook fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg>
                </a>
                <a href="http://instagram.com">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram-square" class="svg-inline--fa fa-instagram-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"></path></svg>
                </a>
                <a href="http://google.com">
                     <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" class="svg-inline--fa fa-google fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>
                </a>
            </div>
            <p class="text-center mt-4 h5">All reserved devloped by Aung Kaung Khant <?= date("Y")?></p>
        </div>
    </footer>
    <!-- endfooter -->




  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
   
  </body>
</html>