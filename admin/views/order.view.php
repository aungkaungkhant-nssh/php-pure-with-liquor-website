<?php 
    $auth=Auth::check();
    $orders=App::get("database")->all("orders");

?>
<?php include("../admin/partials/header.php") ?>
    <div class="container my-5">
            <div class="row">
                <?php foreach($orders as $order):?>
                    <?php if($order['status']):?>
                        <div class="col-12 col-lg-6 col-xl-6 stirke">
                    <?php else:?>
                        <div class="col-12 col-lg-6 col-xl-6">
                    <?php endif;?>

                            <b><?php echo $order['name'] ?></b>
                            <i><?php echo $order['email'] ?></i>
                            <span><?php echo $order['phone'] ?></span>
                            <p><?php echo $order['address'] ?></p>
                            <?php  if($order['status']):?>
                                <a href="/admin/status?status=0 & id=<?=$order['id']?>"><span>Undo</span></a>
                            <?php else:?>
                                <a href="/admin/status?status=1 & id=<?=$order['id']?>"><span>Mark us delivered</span></a>
                            <?php endif;?>
                        
                    </div>
                    <div class="col-12 col-lg-6 col-xl-6" style="display:block">
                                <?php 
                                    $items=App::get("database")->orders($order['id']);
                                ?>
                                <?php foreach($items as $item):?>
                                    
                                    <b>
                                        <a href="../book-detail.php?id=<?php echo $item['book_id'] ?>">
                                        <?php echo $item['name'] ?>
                                        </a>
                                        (<?php echo $item['qty'] ?>)
                                    </b>
                                <?php endforeach;?>    
                    </div>
                    <hr>
                    
                <?php endforeach;?>
            </div>
    </div>
<?php include("../admin/partials/footer.php") ?>