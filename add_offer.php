<?php 
include "connection.php";
$obj=new functions();
$obj->con();
if(isset($_POST['sub']))
{
	$obj->add_offer($_POST['txtdate'],$_POST['txtexp'],$_POST['txtdis'],$_POST['txtlink'],$_POST['txtcod'],$_POST['txtstore'],$_POST['txtcat']);
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
                        <h3 class="text-center text-warning">Add Offers
                        <a href="show_offers.php" class="btn btn-sm btn-outline-primary float-left ml-3"><i class="fas fa-arrow-left"></i> Go-back</a></h3>
                    </div>
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Enter your Offer details</h5>
                                    <form autocomplete="off" method="post" enctype="multipart/form-data">
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label for="Date">Date</label>
                                                <input type="Date" class="form-control" name="txtdate" placeholder="Date"  >
                                                <small class="form-text text-muted">Please enter date of issue</small>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="Date">Expiry Date</label>
                                                <input type="date" class="form-control" name="txtexp" placeholder="Expiry Date">
                                                <small class="form-text text-muted">Please enter expiry date of offer</small>
                                           </div>
                                        </div>
                                        <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="address">Discription</label>
                                            <input type="text" class="form-control" name="txtdis" placeholder="Discription and detail of your offer"  >
                                        </div>
                                        </div>
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="address">Link</label>
                                            <input type="url" class="form-control" name="txtlink" placeholder="link of the offer"  >
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="email">Banner Image</label>
                                                <input type="file" class="form-control" name="txtimg" placeholder="Logo"  >
                                        </div>
                                        </div>  
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="city">Offer Code</label>
                                                <input type="text" class="form-control" name="txtcod" placeholder="Offer Code"  >
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="state">Store</label>
                                                <select name="txtstore" class="form-control"  >
                                                       <?php $obj->view_str();?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="state">Category</label>
                                                <select name="txtcat" class="form-control"  >
                                                         <?php $obj->view_cat();?>
                                                </select>
                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-warning" name="sub" ><i class="fas fa-save"></i> Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                 </div>
            
</div>
 </div>
        
        <?php include "include/footer.php";?>      
