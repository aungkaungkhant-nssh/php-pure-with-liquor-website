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
<body class="bg-info">
    <div class="container w-50 mt-5">
        <h1 class="text-center mb-4">Add Admin</h1>
        <?php  if(isset($_GET["err"])): ?>
            <div class="alert alert-danger">
                Email include A-Z @ 123 <br><br>
                Password include 6 character A-Z a-z digit
            </div>
        <?php endif;?>
           
       
         <form action="/admin/register" method="post">
         <div class="mb-3">
                <label for="" class="form-label">Enter Your Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-5">
                <select class="form-select" aria-label="Default select example" name="role_id">
                    <option selected>Select Role id</option>
                    <option value="1">User</option>
                    <option value="2">Manager</option>
                    <option value="3">Admin</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="phone">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <input type="hidden" name="created_at" value="<?php echo date('Y-m-d')?>">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/admin/admins" class="btn btn-warning text-center  my-3" style="margin-left: 520px;">Back</a>
         </form>
    </div>
  




<!-- endfooter -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>