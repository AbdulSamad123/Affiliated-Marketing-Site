<?php 
include "connection.php";
$obj=new functions();
$obj->con();
$obj->del_deal($_POST['id']);
?>
<!doctype html>

<html lang="en">
<?php include "include/head.php";?>

<body>
<div class="wrapper">
<?php include "include/sidebar.php";?>
<div class="content">
<div class="page-title">
                        <h3 class="text-center text-warning">Deals
                            <a href="add_deal.php" class="btn btn-sm btn-outline-primary float-right"><i class="fas fa-plus-circle"></i> Add-Deals</a>
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Date</th>
                                        <th>Expiry</th>
                                        <th>Deal Deatail</th>
                                        <th>Link</th>
                                        <th>Deal code</th>
                                        <th>Store</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $obj->view_deal();?>
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

                   
</div>       
</div>
<?php include "include/footer.php";?>

