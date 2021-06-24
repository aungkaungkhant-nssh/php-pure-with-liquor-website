<?php
    $auth=Auth::check();
    $admins=App::get("database")->all("admins");
    $roles=App::get("database")->all("roles");
?>

<?php include("../admin/partials/header.php") ?>

    <div class="container-fluid my-5">
        <div class="container">
            <?php if(isset($_GET["error"])):?>
                <div class="alert alert-danger">
                    Cannot Change Try Again!
                </div>
            <?php endif;?> 
            <?php if(isset($_GET["success"])):?>
                <div class="alert alert-success">
                Change Role  Success
                </div>
            <?php endif;?> 
            <?php if(isset($_GET["delete"])):?>
                <div class="alert alert-danger">
                    Delete Success
                </div>
            <?php endif;?> 
        </div>
        <a href="/admin/addForms" class="btn btn-primary text-center  my-3" style="margin-left: 1200px;">Add Admin</a>
        <table class="table table-striped">
            <thead>
                <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>ChangeRole</th>
                <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($admins as $admin):?>
                    <tr>
                        <td><?=$admin["id"]?></td>
                        <td><?=$admin["name"]?></td>
                        <td><?=$admin["email"]?></td>
                        <td><?=$admin["phone"]?></td>
                        <td>
                                <?php
                                    $roleId=$admin["role_id"];
                                    $roles=App::get("database")->roles($roleId);
                                ?>
                            <?php if($roles->role_name==="Admin"):?>
                                    <span class="badge bg-primary  p-2">
                                        <?=$roles->role_name?>
                                    </span>
                                    <?php elseif($roles->role_name==="Manager"):?>
                                        <span class="badge bg-success p-2">
                                        <?=$roles->role_name?>
                                        </span>
                                    <?php else:?>
                                        <span class="badge bg-secondary p-2">
                                        <?=$roles->role_name?>
                                        </span>
                                <?php endif;?>
                        
                        </td>
                        <td>
                            
                            <?php if($auth->role_name==="User"):?> 
                                ####
                            <?php else:?>
                              
                                <a href="/admin/changeRole?role=3&id=<?=$admin["id"]?>">
                                    <span class="badge bg-primary  p-2">
                                        Admin
                                    </span>
                                 </a>
                                <a href="/admin/changeRole?role=2&id=<?=$admin["id"]?>">
                                        <span class="badge bg-success  p-2">
                                            Manager
                                        </span>      
                                </a>
                                <a href="/admin/changeRole?role=1&id=<?=$admin["id"]?>">
                                        <span class="badge bg-secondary  p-2">
                                            User
                                        </span>
                                </a>
                             <?php endif;?>           
                           
                        
                        </td>
                        <td>
                           <?php if($auth->id!==$admin['id'] & $auth->role_name!=="User"):?>
                                <a href="/admin/deleteAdmin?id=<?=$admin["id"]?>" class="btn btn-danger">
                                        Delete
                                </a>
                            <?php else:?>
                               ###
                           <?php endif;?>
                          
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
     
    </div>

<?php include("../admin/partials/footer.php") ?>