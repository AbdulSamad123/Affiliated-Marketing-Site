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
                        <h3 class="text-center text-warning">Coupons
                            <a href="add_coupon.php" class="btn btn-sm btn-outline-primary float-right"><i class="fas fa-plus-circle"></i> Add-Coupon</a>
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body" style="overflow-x:auto;">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Date</th>
                                        <th>Expiry</th>
                                        <th>Discription</th>
                                        <th>Link</th>
                                        <th>Coupon Code</th>
                                        <th>Store</th>
                                        <th>Category</th>
                                        <th>Popular</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $obj->view_cops();?>
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

                   
</div>       
</div>
<?php include "include/footer.php";?>

