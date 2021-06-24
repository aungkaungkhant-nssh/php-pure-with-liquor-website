<?php
     $auth=Auth::check();
     $categories=App::get("database")->all("categories");
     $admins=App::get("database")->all("admins");
     $products=App::get("database")->all("products");
    $orders=App::get("database")->all("orders");
?>
<?php include("../admin/partials/header.php") ?>
    <main>
        <section class="container-fluid mb-5">
            <div class="container mt-5">
                <div class="row align-items-center justify-content-between">
                    <div class="card col-3 bg-secondary mt-3 " style="width: 18rem;height:10rem">
                        <div class="card-body text-center  text-white">
                            <h1 class="card-title counter"><?=count($admins)?></h1>
                            <h3>Admins</h3>
                        </div>
                    </div>
                    <div class="card col-3 bg-secondary mt-3 " style="width: 18rem;height:10rem">
                        <div class="card-body text-center  text-white">
                            <h1 class="card-title"><?=count($categories)?></h1>
                            <h3>Categories</h3>
                        </div>
                    </div>
                    <div class="card col-3 bg-secondary mt-3 " style="width: 18rem;height:10rem">
                        <div class="card-body text-center  text-white">
                            <h1 class="card-title"><?=count($products)?></h1>
                            <h3>Products</h3>
                        </div>
                    </div>
                    <div class="card col-3 bg-secondary mt-3 " style="width: 18rem;height:10rem">
                        <div class="card-body text-center  text-white">
                            <h1 class="card-title"><?=count($orders)?></h1>
                            <h3>Orders</h3>
                        </div>
                    </div>
                </div>
            
            </div>
        </section>
    </main>
  
<?php include("../admin/partials/footer.php") ?>