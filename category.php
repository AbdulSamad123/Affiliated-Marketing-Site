<?php 
include "connection.php";
$obj=new functions();
$obj->con();

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8" />
      <title>Indus-Coupons | Categories</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta content="" name="description" />
      <meta content="Kupons" name="author" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
           <!--====== FAVICON ICON =======-->
     <link rel="shortcut icon" type="image/ico" href="assets/images/favicon.png" />
      <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
      <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css">
      <link href="assets/css/animsition.min.css" rel="stylesheet" type="text/css">
      <link href="owl.carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css">            
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <!-- Css -->
      <link href="assets/css/style.css" rel="stylesheet" type="text/css">
 
   <body>
      <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
         <!-- Navigation Bar-->
         <header class="header">
            <div class="top-nav  navbar m-b-0 b-0 bg-danger">
            <div class="container">
                  <div class="row">
                     <!-- LOGO -->
                     <div class="topbar-left col-sm-6">
                     </div>
                     <!-- End Logo container-->
                     <div class="nav navbar-nav navbar-right pull-right col-sm-6 col-xs-8">
                     <ul class="nav navbar-nav navbar-right pull-right">
                           <li>
                              <form role="search" class="app-search pull-left hidden-xs" method="post">
                                    <input class="form-control" placeholder="Search coupons ..." aria-label="Text input with multiple buttons" name="id"> 
                                 <a href="coupon.php" name="btn_main"><i class="ti-search"></i></a> 
                              </form>
                           </li>

                        </ul>
                    
                        <div class="menu-item">
                           <!-- Mobile menu toggle-->
                           <a class="navbar-toggle">
                              <div class="lines"> <span></span> <span></span> <span></span> </div>
                           </a>
                           <!-- End mobile menu toggle-->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="navbar-custom shadow">
               <div class="container">
               <div  id="navigation">
                     <div class="topbar-left col-sm-2 m-t-5">
                        <a  class="active" href="index.php"> <img src="assets/images/LOGO.png" alt="" class="img-responsive"> </a>
                     </div>
                     <!-- Navigation Menu-->
                     <ul class="navigation-menu col-sm-10">
                        <li class="has-submenu">
                           <a href="#"><i class="ti-cut"></i> <span> Coupons </span> </a>
                           <ul class="submenu">
                              <li><a href="coupon.php">Coupon</a> </li>
                              <li><a href="deal.php">Deals</a></li>
                              <li><a href="contact.php">Contact Us </a></li>
                           </ul>
                        </li>
                        <li class="has-submenu">
                           <a href="store.php"><i class="ti-shopping-cart"></i> <span> Stores </span> </a>
                        </li>
                        <li class="has-submenu">
                           <a href="category.php"><i class="ti-menu-alt"></i> <span> Categories </span> </a>
                        </li>
                        <li class="has-submenu">
                           <a href="#"><i class="ti-tag"></i> <span> Offers</span> </a>
                           <ul class="submenu">
                              <li><a href="Hot_deals.php">Hot deals</a> </li>
                           </ul>
                        </li>
                        <li class="has-submenu">
                           <a href="singup.php"><i class="ti-user"></i>Sing Up</a>
                        </li>
                        <li class="has-submenu"> 
                        <a href="login.php">
                        <i class="ti-lock"></i> <span> Login </span> </a> 
                        </li>
                       </ul>
                     <!-- End navigation menu  -->
                  </div>
               </div>
            </div>
         </header>
         <!-- Navigation ends -->
         <section class="results m-t-30">
            <div class="container m-5">
               <div class="row">
                  <div class="col-sm-3">
                     <div class="widget categories b-b-0">
                        <!-- /widget heading -->
                        <div class="widget-heading">
                           <h3 class="widget-title text-dark">
                             Categories
                           </h3>
                           <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                           <!-- Sidebar navigation -->
                           <ul class="nav sidebar-nav">
                           <li> <?php $obj->view_allcat();?></li>
                           </ul>
                           <!-- Sidebar divider -->
                        </div>
                     </div>
                     <div class="widget">
                        <!-- /widget heading -->
                        <div class="widget-heading">
                           <h3 class="widget-title text-dark">
                              Popular tags
                           </h3>
                           <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                           <ul class="tags">
                              <li> <a href="coupon.php" class="tag">
                                 Coupons
                                 </a> 
                              </li>
                              <li> <a href="coupon.php" class="tag">
                                 Discounts
                                 </a> 
                              </li>
                              <li> <a href="deal.php" class="tag">
                                 Deals
                                 </a> 
                              </li>
                              <li> <a href="store.php" class="tag">
                                 Store 
                                 </a> 
                              </li>
                              <li> <a href="category.php" class="tag">
                                 Fashion
                                 </a> 
                              </li>
                              <li> <a href="category.php" class="tag">
                                 Shoes
                                 </a> 
                              </li>
                              <li> <a href="category.php" class="tag">
                                 Kids
                                 </a> 
                              </li>
                              <li> <a href="category.php" class="tag">
                                 Travel
                                 </a> 
                              </li>
                              <li> <a href="category.php" class="tag">
                                 Vacations
                                 </a> 
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="widget trending-coupons">
                        <!-- /widget heading -->
                        <div class="widget-heading">
                           <h3 class="widget-title text-dark">
                              Trending Coupons
                           </h3>
                           <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                        <?php 
                         $conn=$_SESSION['conn'];
			                $sel=mysqli_query($conn,"SELECT coupon.discription, store.content, store.logo
                         from store join coupon on store.id=coupon.store where coupon.checkbox=1");
		                   $num=mysqli_num_rows($sel);
		                   for($i=1; $i<=$num; $i++)
		                   {
                          $row=mysqli_fetch_array($sel);
                          echo '<div class="media">';
				              echo '<div class="media-left media-middle"> <img src="assets/images/uploads/'."$row[2]".'" style=="height:64px;width:64px;"> </div>';
				              echo '<div class="media-body">';
				              echo '<h4 class="media-heading">'."$row[1]".'</h4>';
				              echo '<p>'."$row[0]".'</p>';
				              echo '</div>';
				              echo '</div>';
		                   }
			                ?>
                        </div>
                        <!-- // widget body -->
                     </div>
                  </div>
                  <!--/col -->
                  <div class="col-sm-9">
                     <div class="widget-body">
                        <div class="widget">
                           <ul class="nav nav-tabs solo-nav responsive-tabs" id="myTab">
                              <li class="active"><a data-toggle="tab" href="#popular"><i class="ti-bar-chart"></i>Popular <span class="badge badge-info"><?php $obj->popu();?></span> </a> </li>
                              <li class=""><a data-toggle="tab" href="#coupons"><i class="ti-cut"></i> Coupons <span class="badge badge-danger"><?php $obj->coupons();?></span></a> </li>
                              </ul>
                        </div>
                     </div>
                     <!--/widget -->
                     <!-- Tab panes -->
                     <div class="tab-content">
                     <div role="tabpanel" class="tab-pane single-coupon active" id="popular">
                        <?php 
                    $conn=$_SESSION['conn'];
                    $sel=mysqli_query($conn,"SELECT coupon.id, coupon.date, coupon.exp_date, coupon.discription, coupon.link, coupon.coupon_code, store.logo, store.name, store.website, store.content,category.name
                    FROM store JOIN coupon on store.id=coupon.store JOIN Category on category.id=coupon.category where coupon.checkbox=1");
                    $num=mysqli_num_rows($sel);
                    for($i=1; $i<=$num; $i++)
                    {
                          $row=mysqli_fetch_array($sel);
                          echo '<div class="coupon-wrapper coupon-single">'; 
                          echo '<div class="row">';
                          echo '<div class="coupon-data col-sm-2 text-center">';
                          echo '<div class="savings text-center">';
                          echo '<div>';
                          echo '<div class="media-center media-middle "> <img src="assets/images/uploads/'."$row[6]".'" style=="height:64px;width:64px;"> </div>';
                          echo '<div class="type">'."$row[7]".'</div>';
                          echo '</div>';
                          echo '</div>';
                          echo '</div>';
                          echo '<div class="coupon-contain col-sm-7">';
                         // echo '<h4 class="coupon-title"><a href="#">'."$row[3]".'</a></h4>';
                          echo '<p data-toggle="collapse" data-target="#more3">'."$row[3]".'</p>';
                          echo '<h4>Coupon Added on '."$row[1]".' & Expires on '."$row[2]".'</h4>';
                          echo '<p data-toggle="collapse" data-target="#more3">Category : '."$row[10]".'</p>';
                          echo '</div>';
                          echo '<div class="button-contain col-sm-3 text-center">';
                          echo '<a href="javascript:void(0)" class="btn-code get_id" data-id="'."$row[0]".'" data-toggle="modal" data-target="#Mymodal"> <span class="partial-code">'."$row[5]".'</span> <span class="btn-hover">Get Code</span> </a>';
                          echo '<div class="btn-group" role="group" aria-label="...">';
                          echo '<button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>';
                          echo '<button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>';
                          echo '<button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>';
                          echo '</div>';
                          echo '</div>';
                          echo '</div>';
                          echo '</div>';      
                    }
            ?>
                        </div>
                        <!-- / tabpanel -->
                        <div role="tabpanel" class="tab-pane single-coupon" id="coupons">
                        <?php 
                    $conn=$_SESSION['conn'];
                    $today_date=date('Y/m/d');
                    $sel=mysqli_query($conn,"SELECT coupon.id, coupon.date, coupon.exp_date, coupon.discription, coupon.link, coupon.coupon_code, store.logo, store.name, store.website, store.content,category.name
                    FROM store JOIN coupon on store.id=coupon.store JOIN Category on category.id=coupon.category where coupon.exp_date>='".$today_date."'");
                    $num=mysqli_num_rows($sel);
                    for($i=1; $i<=$num; $i++)
                    {
                          $row=mysqli_fetch_array($sel);
                          echo '<div class="coupon-wrapper coupon-single">'; 
                          echo '<div class="row">';
                          echo '<div class="coupon-data col-sm-2 text-center">';
                          echo '<div class="savings text-center">';
                          echo '<div>';
                          echo '<div class="media-center media-middle "> <img src="assets/images/uploads/'."$row[6]".'" style=="height:64px;width:64px;"> </div>';
                          echo '<div class="type">'."$row[7]".'</div>';
                          echo '</div>';
                          echo '</div>';
                          echo '</div>';
                          echo '<div class="coupon-contain col-sm-7">';
                        //   echo '<h4 class="coupon-title"><a href="#">'."$row[3]".'</a></h4>';
                          echo '<p data-toggle="collapse" data-target="#more3">'."$row[3]".'</p>';
                          echo '<h4>Coupon Added on '."$row[1]".' & Expires on '."$row[2]".'</h4>';
                          echo '<p data-toggle="collapse" data-target="#more3">Category : '."$row[10]".'</p>';
                          echo '</div>';
                          echo '<div class="button-contain col-sm-3 text-center">';
                          echo '<a href="javascript:void(0)" class="btn-code get_id" data-id="'."$row[0]".'" data-toggle="modal" data-target="#Mymodal"> <span class="partial-code">'."$row[5]".'</span> <span class="btn-hover">Get Code</span> </a>';
                          echo '<div class="btn-group" role="group" aria-label="...">';
                          echo '<button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>';
                          echo '<button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>';
                          echo '<button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>';
                          echo '</div>';
                          echo '</div>';
                          echo '</div>';
                          echo '</div>';    
                          
                    }
            ?>
                        </div>
                        <!-- / tabpanel -->
                     <!-- end: Tab content -->
                  </div>
               </div>
            </div>
         </section>
         <!-- Footer -->
         <footer id="footer">
            <div class="btmFooter">
               <div class="container">
                     <div class="col-sm-12 text-center m-t-20">
                     <p> <strong>
                        Copyright 2020
                        </strong>Indus-Coupons | This website is Designed by<strong>
                         <a href="https://www.facebook.com/profile.php?id=100004132877739">Abdul Samad</a>
                        </strong> 
                     </p>
                  </div>
                  <div class="col-sm-12 text-center m-t-30"></div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- start modal -->
         <div class="coupon_modal modal fade couponModal" id="Mymodal" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ti-close"></i></span> </button>
                    <div class="coupon_modal_content" id="load_data">
                      
                     </div>       
                 </div>
              </div>
          </div>
      </div>
      <!-- //wrapper -->
      <!-- jQuery  -->
      <script>
	  
	  $(document).ready(function(){
		  $(".get_id").click(function(){
			  var ids = $(this).data('id');
			   $.ajax({
				   url:"upload.php",
				   method:'POST',
				   data:{id:ids},
				   success:function(data){
					   
					   $('#load_data').html(data);
				   
				   }
				   
			   })
		  })
		  
	  })
	  </script>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/animsition.min.js"></script>
      <script src="owl.carousel/owl.carousel.min.js"></script>
      
      <!-- js -->
      <script src="assets/js/javascript.js"></script>
   </body>
</html>