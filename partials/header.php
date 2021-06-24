<?php 
  session_start();
  $cart = 0;
  if(isset($_SESSION['cart'])) {
  foreach($_SESSION['cart'] as $qty) {
  $cart += $qty;
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="../customcss/css/imagehover.min.css">
    <link rel="stylesheet" href="../customcss/style.css">
    <title></title>
    
  </head>
  <body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../images/logo.png" alt="" style="width: 100px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link h5 mx-2" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link h5 mx-2" href="/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link  h5 mx-2" href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  h5 mx-2" href="/products">Products</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link  h5 mx-2" href="/order">
                   <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart" class="svg-inline--fa fa-shopping-cart fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg>
                   <span>
                      <?php echo $cart?>
                   </span>
                   </a>
                </li> 
            </ul>
            </div>
        </div>
    </nav>