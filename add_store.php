<?php 
include "connection.php";
$obj=new functions();
$obj->con();
if(isset($_POST['sub']))
{
	$obj->add_store($_POST['txtname'],$_POST['txtweb'],$_POST['txtcon']);
}

?>
<!doctype html>
<html lang="en">
<?php include "include/head.php";?>

<body>
<div class="wrapper">
<?php include "include/sidebar.php";?>
<div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3 class="text-center text-warning">Add store
                        <a href="show_store.php" class="btn btn-sm btn-outline-primary float-left ml-3"><i class="fas fa-arrow-left"></i> Go-back</a></h3>
                    </div>
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Add detail of store</h5>
                                    <form autocomplete="off" method="post" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="email">logo</label>
                                                <input type="file" class="form-control" name="txtlogo" placeholder="Logo">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="password">Name</label>
                                                <input type="text" class="form-control" name="txtname" placeholder="Name">
                                                </div>
                                            <div class="form-group col-md-6">
                                                <label for="email">Website</label>
                                                <input type="" class="form-control" name="txtweb" placeholder="Website">
                                                </div>
                                            <div class="form-group col-md-6">
                                                <label for="password">Content</label>
                                                <input type="text" class="form-control" name="txtcon" placeholder="Detail about store">
                                                </div>
                                        </div>
                                        <button type="submit" class="btn btn-warning" name="sub"><i class="fas fa-save"></i> Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                 </div>
            
</div>
 </div>
        
        <?php include "include/footer.php";?>      
