<?php

$output = '';
$rec_id = $_POST['id'];
$conn=mysqli_connect("localhost","root","","indus"); 
 

$sql = "SELECT coupon.date, coupon.exp_date, coupon.discription, coupon.link, coupon.coupon_code, store.logo, store.name, store.website, store.content
FROM store JOIN coupon on store.id=coupon.store where coupon.id='$rec_id'";
$result = mysqli_query($conn,$sql);

 

   while($row = mysqli_fetch_assoc($result)) {
 
$output .=   '<div class="col-sm-10 col-sm-offset-1 text-center">'.'<h2>'.$row["content"].'</h2>'.'</div>'.'<div class="row">'.'<div class="col-sm-12">'.'<h5 class="text-center text-uppercase m-t-20 text-muted">just click on button and go to <strong>'.$row["name"].'</strong> and save your money</h5>'.'</div>'.'<div class="col-sm-12 text-center">'.'<input  class="m-b-5" type="text" value='.$row["coupon_code"].' id="myInput">'.'<button class="btn btn-danger btn-sm m-b-5" onclick="myFunction()">Copy</button>'.'<script> 
                  function myFunction()
                   {
                   var copyText = document.getElementById("myInput");
                   copyText.select();
                   copyText.setSelectionRange(0, 99999); /*For mobile devices*/
                   document.execCommand("copy");
                   }
                  </script>'.'</div>'.
             ' <div class="col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3"> <a href='.$row["link"].' target="_blank" class="coupon_code alert alert-info">Go to website '.
             '</a>'.
             '</div>'.
             '</div>'.
             '</div>';
 }
echo $output;
 
mysqli_close($conn);
?>