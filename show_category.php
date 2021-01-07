<?php 
include "connection.php";
$obj=new functions();
$obj->con();
?>
<!doctype html>

<html lang="en">
<?php include "include/head.php";?>

<body>
<div class="wrapper">
<?php include "include/sidebar.php";?>
<div class="content">
<div class="page-title">
                        <h3 class="text-center text-warning">Categories
                            <a href="add_category.php" class="btn btn-sm btn-outline-primary float-right"><i class="fas fa-plus-circle"></i> Add</a>
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Categories</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $obj->view_category()?>
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

                   
</div>       
</div>
<?php include "include/footer.php";?>

