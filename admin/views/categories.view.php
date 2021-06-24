<?php
            $auth=Auth::check();
            $cats=App::get("database")->all("categories");
           $start=0;
            if(isset($_GET["start"])){
                $start=$_GET["start"];
            }
            $categories=App::get("database")->limit("categories",$start);
            
 ?>
<?php include("./partials/header.php")?>
  
    <div class="container my-4">
          <a href="/admin/formCategories" class="btn btn-primary text-md-end mb-3">Add Categories</a>
        <div class="row">
                <?php if(isset($_GET["success"])):?>
                    <div class="alert alert-success">Adding Success</div>
                <?php endif;?>
                <?php if(isset($_GET["del"])):?>
                    <div class="alert alert-success">Delete Success</div>
                <?php endif;?>
                <?php foreach($categories as $category):?>
                    <div class="col-12 col-md-6 col-lg-4 mt-3">
                        <div class="card" style="width: 15rem;">
                            <img src="../../images/<?=$category["category_image"]?>" class="card-img-top rounded-3 w-100 h-100" alt="..." >
                            <div class="card-body">
                                    <h5 class="card-title text-center"><?=$category["category_name"]?></h5>
                                <div class="d-flex justify-content-between">
                                    <a href="/admin/deleteCat?id=<?=$category['id']?>&imgname=<?=$category["category_image"]?>" class="btn btn-danger">Delete</a>
                                    <a href="/admin/editCat?id=<?=$category['id']?>" class="btn btn-primary">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php endforeach;?>
                <nav aria-label="Page navigation example" class="mt-4 col-12">
                    <ul class="pagination">
                 
                        <?php
                             $t=0;
                            for($i=0;$i<count($cats);$i+=3){
                
                                $t++;
                                echo ' <li class="page-item"><a class="page-link" href="/admin/categories?start='.$i.'">'.$t.'</a></li>';
                            }
                        ?>
                    </ul>
                </nav>
               
                
        </div>
    </div>
<?php include("./partials/footer.php")?>
