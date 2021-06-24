<?php
    session_start();
    if(!isset($_SESSION["cart"])){
        header("Location: /");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="../customcss/style.css">
    <style>
        #side{
            height: 90vh;
        }
        @media screen and (max-width:500px) {
            #side{
                height: 15vh;
            }
        }
        @media screen and (max-width:800px) {
            #side{
                height: 15vh;
            }
        }
        @media screen and (max-width:1400px) {
            #side{
                height: 15vh;
            }
        }
    </style>
</head>
<body>
    <nav class="container-fluid bg-info py-2">
        <div class="container">
            <h1 class="text-white">View Cart</h1>
        </div>
    </nav>
    <section class="container-fluid">
        <div class="row">
            <div class="col-12 bg-red col-md-12 col-xl-4">
                <div class="row">
                    <div class="col-6 col-md-6 mt-3 h4 col-xl-12">
                        <a href="/clear-cart">Clear Cart</a>
                    </div>
                    <div class="col-6 col-md-6 col-xl-12 mt-3 h4">
                        <a href="/">Continue Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-12 bg-green col-md-12 col-xl-8 mt-3">
                <div class="mb-3">
                    <table class="table">
                        <thead>
                            <tr class="bg-success text-white">
                                <th>Shop Title</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $total=0;
                                foreach($_SESSION["cart"] as $id=>$qty):?>
                                <?php 
                                $products=App::get("database")->where("products",$id); 
                                $total+=$qty*$products->price;
                                ?>
                                <tr>
                                    <td><?=$products->name?></td>
                                    <td><?=$qty?></td>
                                    <td>$<?=$products->price?></td>
                                    <td>$<?=$qty*$products->price?></td>
                                </tr>
                            <?php endforeach;?>
                            <tr>
                                    <td colspan="3" align="right"><b>Total:</b></td>
                                    <td>$<?php echo $total; ?></td>
                                </tr>
                        </tbody>
                    </table>
                </div>
               
                <div class="form" style="margin-top: 50px;">
                    <h3 class="mb-3 text-center text-danger">Order Now</h3>
                     <form method="post" action="/submitorder">
                        <div class="form-group row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" >
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" >
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id=""  name="phone">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                            <textarea name="address" ></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-sm-10">
                            <input type="hidden" class="form-control" name="created_at" value="<?=date('Y-m-d')?>">
                            </div>
                        </div>
                        <input type="submit" value="Order" class="btn btn-primary">
                    </form>
                </div>
                
            </div>
        </div>
    </section>
</body>
</html>