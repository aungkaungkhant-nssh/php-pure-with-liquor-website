<?php 
    $auth=Auth::check();
?>
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
<body class="bg-info">
    <div class="container w-50 mt-5">
        <h1 class="text-center mb-4">Add Categories</h1>
        <?php  if(isset($_GET["fail"])): ?>
            <div class="alert alert-danger">
                Cannot Upload Error
            </div>
        <?php endif;?>
        <?php  if(isset($_GET["error"])): ?>
            <div class="alert alert-danger">
                Enter a Value
            </div>
        <?php endif;?>
           
       
         <form action="/admin/addcategories" method="post" enctype="multipart/form-data">
         <div class="mb-4">
                <label for="" class="form-label">Category Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" name="image">
            </div>
            
            <input type="hidden" name="created_at" value="<?php echo date('Y-m-d')?>">
            <a href="/admin/categories" class="btn btn-warning text-center  my-3" >Back</a>
            <button type="submit" class="btn btn-primary" style="margin-left: 520px;">Submit</button>
           
         </form>
    </div>
  




<!-- endfooter -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>