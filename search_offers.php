<?php 
include "connection.php";
$obj=new functions();
$obj->con();
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8" />
      <title>Indus-Coupons | Hot-Deals</title>
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
      <script>
        $(document).keydown(function (event) {
          if (event.keyCode == 123) { // Prevent F12
              return false;
          } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
              return false;
          }
      });
      document.onkeydown = function(e) {
    if(event.keyCode == 123) {
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
     return false;
    }

    if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
     return false;
    }      
 }
<script type="text/JavaScript">
//courtesy of BoogieJack.com
function killCopy(e){
return false
}
function reEnable(){
return true
}
document.onselectstart=new Function ("return false")
if (window.sidebar){
document.onmousedown=killCopy
document.onclick=reEnable
}
      </script>

   <body oncontextmenu="return false;" onselectstart="return false"
      onkeydown="if ((arguments[0] || window.event).ctrlKey) return false">
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
                        <a  class="logo"> <img src="assets/images/LOGO.png" alt="" class="img-responsive"> </a>
                     </div>
                     <!-- Navigation Menu-->
                     <ul class="navigation-menu">
                        <li class="active"> <a href="index.php"><i class="ti-home"></i> <span> Home </span> </a> </li>
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
                           <form role="search" class="app-search pull-left hidden-xs" method="post">
                                 <input class="form-control" placeholder="Search coupons ..." aria-label="Text input with multiple buttons" name="id"> 
                              <a href="coupon.php" name="btn_main"><i class="ti-search"></i></a> 
                           </form>
                        </li>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="login.php"><i class="ti-lock" style="margin-left:8px;font-size:25px;color:black"></i></a>
                     </ul>
                     <!-- End navigation menu  -->
                  </div>
               </div>
            </div>
         </header>
         <!-- Navigation ends -->
         <div class="breadcrmb-wrap hidden-xs">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a> </li>
                        <li class="breadcrumb-item"><a href="#">Search</a> </li>
                        <li class="breadcrumb-item active">Search results</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <!--end:Breadcrumbs -->
         <section class="results m-t-30">
            <div class="container">
               <div class="row">
                  <div class="col-sm-3">
                                         <!-- //popular stores widget -->
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
                              <li> <a href="#" class="tag">
                                 Coupons
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Discounts
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Deals
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Shopname 
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Ebay
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Fashion
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Shoes
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Kids
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Travel
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                             
                                 Vacations
                                 </a> 
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!--/search form -->
                     <div class="widget">
                        <!-- /widget heading -->
                        <div class="widget-heading">
                           <h3 class="widget-title text-dark">
                              Top Stores  
                           </h3>
                           <div class="widget-widgets"> <a href="store.php">View More Stores <span class="ti-angle-right"></span></a> </div>
                           <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                           <div class="row">
                           <?php
                            $conn=$_SESSION['conn'];
                            $sel=mysqli_query($conn,"select * from store");
                            $num=mysqli_num_rows($sel);
                            for($i=1; $i<=$num; $i++)
                           {
                              $row=mysqli_fetch_array($sel);
                              echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 thumb">';
                              echo '<div class="thumb-inside">';
                              echo '<a class="thumbnail" href='."$row[3]".'> <img class="img-responsive" src="assets/images/'."$row[1]".'" style=="height:64px;width:64px;"> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>';
                              echo '</div>';					
                              echo '<div class="store_name text-center">';
                              echo '<h5>'."$row[2]".'</h5>';
                              echo '</div>';
                              echo ' </div>';
                           }
                           ?>                        
                           </div>
                        </div>
                     </div>
                     <!-- // tags -->
                  </div>
                  <!--/col -->
 

                              <?php 
                              $conn=$_SESSION['conn'];
                              $str = $_SESSION['offers.id'];
                              $sel=mysqli_query($conn," SELECT offers.id, offers.date,offers.exp_date,offers.discription,offers.link,offers.image,offers.code, store.logo, store.name,store.website,store.content,category.name
                              from store join offers on store.id=offers.store JOIN Category on category.id=offers.category where store.id='".$str."'");
                              $num=mysqli_num_rows($sel);
                              for($i=1; $i<=$num; $i++)
                              {
                                    $row=mysqli_fetch_array($sel);
                                    echo '<div class="col-sm-9" style="float:right;">'; 
                                    echo '<div class="widget">';
                                    echo '<div class="coupon-block equal">';
                                    echo '<a class="coupon-image bg-image" href=" title="" data-image-src="assets/images/'."$row[5]".'" ></a>';
                                    echo '<div class="col-sm-12">';
                                    echo '<a>';
                                    echo ' <div class="media">';
                                    echo ' <div class="media-body">';
                                    echo ' <h4 class="media-heading m-t-30">'."$row[3]".'</h4>';                                    
                                    echo ' <h4 class="media-heading m-t-10">'."$row[10]".'</h4>';
                                    echo ' <h4 class="media-heading m-t-10">Category : '."$row[11]".'</h4>';
                                    echo '<div class="col-sm-12"> <span class="expiry_date"><p>Deal Added on '."$row[1]".' & Expires on '."$row[2]".'</p></span>';
                                    echo ' <div class="action-block">';
                                    echo '<a href="javascript:void(0)" class="btn-code get_id" data-id="'."$row[0]".'" data-toggle="modal" data-target="#Mymodal"> <span class="partial-code">'."$row[6]".'</span> <span class="btn-hover">Get Code</span> </a>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo ' </div>';
                                    echo ' </div>';
                                    echo ' </a>';
                                    echo ' </div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                              }
                              ?>
                                
                        
            </div>
         </section>
         <!-- Footer -->
         <footer id="footer">
            <div class="btmFooter">
               <div class="container">
                     <div class="col-sm-12 text-center m-t-20">
                     <p> <strong>
                        Copyright 2020
                        </strong>Indus-Coupons | This website is Designed by <i class="ti-heart">
                        </i> <strong>
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
 <!-- Large modal -->
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
				   url:"unloaded.php",
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