<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'ecommerce');
$sql = "SELECT * FROM products WHERE featured = 1";
$featured = $con->query($sql);
?>

<div class="col-md-2"></div>
   <div class ="col-md-3">
     <div class="row">
       <h2 class = "text-center">Product Details</h2> 
       <?php
         while($product = mysqli_fetch_assoc($featured)):

       ?>
       <div class = "col-md-5">
        <h4> <?= $product['title'];?></h4>
        <img src = "<?=$product['image'];?>" alt = "<?= $product['title'];?>"/>
        <p class = "lprice">$ <?= $product['price'];?></p>
        <p class = "descr"><?= $product['description'];?></p>
        <p class = "brnd"> <?= $product['brand'];?></p>
       </div>
       <?php endwhile; ?> 
     </div>
   </div>  