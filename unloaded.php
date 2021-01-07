<?php

$output = '';
$rec_id = $_POST['id'];
$conn=mysqli_connect("localhost","root","","indus"); 
 

$sql = "SELECT offers.date,offers.exp_date,offers.discription,offers.link,offers.image,offers.code, store.logo, store.name,store.website,store.content
from store join offers on store.id=offers.store where offers.id='$rec_id'";
$result = mysqli_query($conn,$sql);

 

   while($row = mysqli_fetch_assoc($result)) {
 
$output .=   '<div class="col-sm-10 col-sm-offset-1 text-center">'.'<h2>'.$row["content"].'</h2>'.'</div>'.'<div class="row">'.'<div class="col-sm-12">'.'<h5 class="text-center text-uppercase m-t-20 text-muted">You dont need any code just to <strong>'.$row["name"].'</strong> any get the deal</h5>'.'</div>'.
             ' <div class="col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3"> <a href='.$row["link"].' target="_blank" class="coupon_code alert alert-info">Go to website '.'</a>'.'</div>'.'</div>'.'</div>';
            }
echo $output;
 
mysqli_close($conn);
?>