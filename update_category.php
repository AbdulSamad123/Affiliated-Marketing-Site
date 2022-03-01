<?php 
include "connection.php";
$obj=new functions();
$obj->con();
$conn = $_SESSION['conn'];
$id = $_GET['id'];
$select = mysqli_query( $conn, "select * from category where id='$id'" );
$row = mysqli_fetch_array( $select );
if(isset($_POST['sub']))
{
    $obj -> update_category($_POST['txtcat']);
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
                        <h3 class="text-center text-warning">Update Category
                        <a href="show_category.php" class="btn btn-sm btn-outline-primary float-left ml-3"><i class="fas fa-arrow-left"></i> Go-back</a></h3>
                    </div>
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form autocomplete="off" method="post">
                                    <div class="form-group">
                                            <label for="address">Id No</label>
                                            <input type="text" value="<?php echo $row[0];?>"  class="form-control" name="txtdis"readonly name="id"  >
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <input type="text" value="<?php echo $row[1];?>" class="form-control" name="txtcat" placeholder="Category"  >
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
