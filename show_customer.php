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
                        <h3 class="text-center text-warning">Customer</h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body" style="overflow-x:auto;">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>E-mail</th>
                                        <th>Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $obj->cus_data();?>
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

                   
</div>       
</div>
<?php include "include/footer.php";?>

