<?php 
$conn=mysqli_connect("localhost","root","","indus");
$email=$_SESSION['email'];
$sel=mysqli_query($conn,"select * from login where Email='".$email."'");
$fetch=mysqli_fetch_array($sel);

?>
<nav id="sidebar" class="active text-warning" >
            <div class="sidebar-header">
                <img src="assets/images/LOGO.png" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="show_coupons.php"><i class="fas fa-cut"></i>Coupons </a>
                </li>
                <li>
                    <a href="show_deals.php"><i class="fas fa-box-open"></i>Deals </a>
                </li>
                <li>
                    <a href="show_offers.php"><i class="fas fa-gifts"></i>Offers </a>
                </li>             
                <li>
                    <a href="show_store.php"><i class="fas fa-store"></i>Stores </a>
                </li>
                <li>
                    <a href="show_category.php"><i class="fas fa-gift"></i>Categories </a>
                </li> 
                <li>
                    <a href="show_customer.php"><i class="fas fa-icons"></i>Customer</a>
                </li>
                <li>
                    <a href="show_contact.php"><i class="fas fa-user-shield"></i> Contact</a>
                </li>
                <li>
                    <a href="user.php"><i class="fas fa-user-friends"></i>User</a>
                </li>
            </ul>
        </nav>

        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
                <button type="button" id="sidebarCollapse" class="btn btn-outline-warning default-warning-menu"><i class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i> <span><?php echo $fetch[1];?></span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                        <li><a href="change_pass.php" class="dropdown-item"><i class="fas fa-key"></i> Change password</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>