<?php
session_start();
require_once 'Config4.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles1.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap"
      rel="stylesheet"
    />
    <title>Bikaner</title>
</head>
<body>
    <div class="menu">
       <div class="heading">
        
        <h1>Bikaner</h1>
        <h3>&mdash;MENU &mdash;</h3>
       </div>
       <?php 
       $query = "SELECT * FROM Products where Id=1";
       $product = mysqli_query($con, $query);
       if (!empty($product)) {
           while ($row = mysqli_fetch_array($product)) { 
       ?>
       <form action="Cart4.php?action=add&pid=<?= $row['Id'];?>" method="post">
       <div class="food-items">
           <img src="GolGappe.jpg">
           <div class="details">
              <div class="details-sub">
                <h5><?= $row['PName']; ?></h5>
                <h5 class="price">₹<?= number_format($row['Price'], 2); ?></h5>
              </div>
              <p>GolGappe</p>
              <input type="submit" name="Add to Cart" class="addtocart" value="Add to Cart">
              <input type="text" name="Quantity" value="" placeholder="Quantity">
            </div>
       </div>
       </form>
       <?php }
        } 
       else {
          echo "no products available";
       }   
      ?>
       <?php 
       $query = "SELECT * FROM Products where Id=2";
       $product = mysqli_query($con, $query);
       if (!empty($product)) {
           while ($row = mysqli_fetch_array($product)) { 
       ?>
       <form action="Cart4.php?action=add&pid=<?= $row['Id'];?>" method="post">
       <div class="food-items">
        <img src="Platter.jpg">
        <div class="details">
           <div class="details-sub">
             <h5><?= $row['PName']; ?></h5>
             <h5 class="price">₹<?= number_format($row['Price'], 2); ?></h5>
           </div>
           <p>Platter</p>
           <input type="submit" name="Add to Cart" class="addtocart" value="Add to Cart">
           <input type="text" name="Quantity" value="" placeholder="Quantity">
         </div>
    </div>
    </form>
    <?php }
     } 
     else {
          echo "no products available";
     }   
    ?>
    </div>
</body>
</html>