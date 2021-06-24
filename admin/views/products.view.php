<?php
            $auth=Auth::check();
            $pts=App::get("database")->all("products");
           $start=0;
            if(isset($_GET["start"])){
                $start=$_GET["start"];
            }
            $products=App::get("database")->limit("products",$start);
            
 ?>
<?php include("./partials/header.php")?>
  
    <div class="container my-4">
          <a href="/admin/formProducts" class="btn btn-primary text-md-end mb-3">Add Products</a>
        <div class="row">
                <?php if(isset($_GET["success"])):?>
                    <div class="alert alert-success">Adding Success</div>
                <?php endif;?>
                <?php if(isset($_GET["del"])):?>
                    <div class="alert alert-success">Delete Success</div>
                <?php endif;?>
                <?php foreach($products as $product):?>
                    <div class="col-12 col-md-6 col-lg-4 mt-3">
                        <div class="card" style="width: 18rem;">
                            <img src="../../images/<?=$product["image"]?>" class="card-img-top rounded-3 "alt="..." style="height: 250px;">
                            <div class="card-body">
                                    <h5 class="card-title text-center"><?=$product["name"]?></h5>
                                <div class="d-flex justify-content-between">
                                    <a href="/admin/editProduct?id=<?=$product['id']?>" 
                                    class="btn btn-primary">Edit</a>
                                    <a href="/admin/detailProduct?id=<?=$product['id']?>" class="btn btn-success">Detail</a>
                                    <a href="/admin/deleteProduct?id=<?=$product['id']?>&image=<?=$product['image']?>" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php endforeach;?>
                <nav aria-label="Page navigation example" class="mt-4 col-12">
                    <ul class="pagination">
                 
                        <?php
                             $t=0;
                            for($i=0;$i<count($pts);$i+=3){
                
                                $t++;
                                echo ' <li class="page-item"><a class="page-link" href="/admin/products?start='.$i.'">'.$t.'</a></li>';
                            }
                            ?>
                        </ul>
                </nav>
               
                
        </div>
    </div>
<?php include("./partials/footer.php")?>