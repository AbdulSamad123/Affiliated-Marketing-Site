<?php 
include "connection.php";
$obj=new functions();
$obj->con();
$conn = $_SESSION['conn'];
$id = $_GET['id'];
$select = mysqli_query( $conn, "select * from coupon where id='$id'" );
$row = mysqli_fetch_array( $select );
if(isset($_POST['sub']))
{
    $obj -> upd_coupon($_POST['txtdate'],$_POST['txtexp'],$_POST['txtdis'],$_POST['txtlink'],$_POST['txtcod'],$_POST['txtstore'],$_POST['txtcat'],$_POST['checkbox']);
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
                        <h3 class="text-center text-warning">Update Coupons
                        <a href="show_coupons.php" class="btn btn-sm btn-outline-primary float-left ml-3"><i class="fas fa-arrow-left"></i> Go-back</a></h3>
                    </div>
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Update your coupons details</h5>
                                    <form autocomplete="off" method="post">
                                    <div class="form-group">
                                            <label for="address">Id No</label>
                                            <input type="text" value="<?php echo $row[0];?>"  class="form-control" name="txtdis"readonly name="id">
                                        </div>
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label for="Date">Date</label>
                                                <input type="Date" value="<?php echo $row[1];?>"  class="form-control" name="txtdate" placeholder="Date">
                                                <small class="form-text text-muted">Please enter date of issue</small>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="Date">Expiry Date</label>
                                                <input type="date" value="<?php echo $row[2];?>"  class="form-control" name="txtexp" placeholder="Expiry Date">
                                                <small class="form-text text-muted">Please enter expiry date of coupon</small>
                                           </div>
                                        </div>
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="address">Discription</label>
                                            <input type="text" value="<?php echo $row[3];?>"  class="form-control" name="txtdis" placeholder="Discription and detail of your coupon">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="address">Link</label>
                                            <input type="url" value="<?php echo $row[4];?>"  class="form-control" name="txtlink" placeholder="Link of the coupon">
                                        </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="Coupon Code">Coupon Code</label>
                                                <input type="text" value="<?php echo $row[5];?>"  class="form-control" name="txtcod" placeholder="Coupon Code">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="store">Store</label>
                                                <select name="txtstore" value="<?php echo $row[6];?>"  class="form-control">
                                                      <option value="<?php echo $row[6];?>">Select Store</option>
                                                      <?php $obj->view_str();?> 
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="category">Category</label>
                                                <select name="txtcat" class="form-control">
                                                    <option value="<?php echo $row[7];?>">Select Category</option>
                                                    <?php $obj->view_cat();?>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="<?php echo $row[8];?>"  name="checkbox">
                                                <label class="form-check-label" for="gridCheck">Popular Coupon</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-warning" name="sub"><i class="fas fa-save"></i> Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                 </div>
            
</div>
 </div>
        
        <?php include "include/footer.php";?>      
