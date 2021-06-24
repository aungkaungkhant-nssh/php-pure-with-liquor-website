<?php $auth=Auth::check();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="../../customcss/style.css">
</head>
<body>
    <section class="container-fluid">
    <div class="container mt-4">
                <div class="container">
                     <img src="../../images/<?=$detail->image?>" alt="" style="width: 50%;height:50%">
                </div>
               
                <div class="container mt-4">
                    <h3><b>Name</b> : <i><?=$detail->name?></i></h3>
                    <span><b>Price</b> : $<i><?=$detail->price?></i></span>
                    <p><b>Detail</b> : <i><?=$detail->description?></i></p>
                </div>
                <div class="container mt-4">
                    <a href="/admin/products" class="btn btn-success">Back</a>
                </div>
    
    </div>  
    </section>
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>