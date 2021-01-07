<?php 
include "connection.php";
$obj=new functions();
$obj->con();

isset($_SESSION['email']) or die(header("location:login.php"));
if(isset($_POST['btn_enter']))
{
	$obj->sender_data($_POST['txtname'],$_POST['txtnum'],$_POST['txtadd'],$_POST['txtemail']);
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
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4">
                                            <div class="icon-big text-center">
                                            <a href="show_coupons.php"><i class="teal fas fa-cut"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                               
                                            <p>Coupons</p>
                                            <span class="number"><?php $obj->coupons();?></span>     
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                        <i class="fas fa-redo-alt"></i> Updated every 30 minutes
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                            <a href="show_deals.php"><i class="olive fas fa-money-bill-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                                <p>Deals</p>
                                                <span class="number"><?php $obj->deals();?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-calendar"></i> In this current Month
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                            <a href="show_offers.php"> <i class="violet fas fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                                <p>Offers</p>
                                                <span class="number"><?php $obj->offers();?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                        <i class="fas fa-stopwatch"></i> In the last 24 Hour
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                            <a href="show_store.php"> <i class="red fas fa-toolbox"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                                <p>Stores</p>
                                                <span class="number"><?php $obj->store();?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                        <i class="fas fa-stopwatch"></i> In the last 24 Hour
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                            <a href="show_category.php"> <i class="yellow fas fa-dolly-flatbed"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                                <p>Category</p>
                                                <span class="number"><?php $obj->category();?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                        <i class="fas fa-stopwatch"></i> In the last 24 Hour
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                            <a href="contact.php"><i class="orange fas fa-envelope"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                                <p>Support Request</p>
                                                <span class="number"><?php $obj->Contact();?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                        <i class="fas fa-envelope-open-text"></i> Active in the last 7 days
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
            
    </div>


    <?php include "include/footer.php";?>

