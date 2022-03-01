<?php 
include "connection.php";
$obj=new functions();
$obj->con();
if(isset($_POST['sub']))
{
	$obj->add_Category($_POST['txtcat']);
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
                        <h3 class="text-center text-warning">Add Category
                        <a href="show_category.php" class="btn btn-sm btn-outline-primary float-left ml-3"><i class="fas fa-arrow-left"></i> Go-back</a></h3>
                    </div>
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form autocomplete="off" method="post">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <input type="text" class="form-control" name="txtcat" placeholder="Category"  >
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
