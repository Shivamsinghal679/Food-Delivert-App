<?php
session_start();
require_once 'Config4.php';
// add, remove, empty
if (!empty($_GET['action'])) {
  switch ($_GET['action']) {
      // add product to cart
      case 'add':
          if (!empty($_POST['Quantity'])) {
              $pid = $_GET['pid'];
              $query = "SELECT * FROM Products WHERE Id=".$pid;
              $result = mysqli_query($con, $query);
              while ($product = mysqli_fetch_array($result)) {
                  $itemArray = [
                      $product['Id'] => [
                          'name' => $product['PName'],
                          'Quantity' => $_POST['Quantity'],
                          'price' => $product['Price'],
                          'id'=>$product['Id']
                      ]
                  ];
                  if (isset($_SESSION['cart_item']) &&!empty($_SESSION['cart_item'])) {
                      if (in_array($product['Id'], array_keys($_SESSION['cart_item']))) {
                          foreach ($_SESSION['cart_item'] as $key => $value) {
                              if ($product['Id'] == $key) {
                                  if (empty($_SESSION['cart_item'][$key]["Quantity"])) {
                                      $_SESSION['cart_item'][$key]['Quantity'] = 0;
                                  }
                                  $_SESSION['cart_item'][$key]['Quantity'] += $_POST['Quantity'];
                              }
                          }
                      } else {
                          $_SESSION['cart_item'] += $itemArray;
                      }
                  } else {
                      $_SESSION['cart_item'] = $itemArray;
                  }
              }
          }
          break;
      case 'remove':
          if (!empty($_SESSION['cart_item'])) {
              foreach ($_SESSION['cart_item'] as $key => $value) {
                  if ($_GET['Id'] == $key) {
                      unset($_SESSION['cart_item'][$key]);
                  }
                  if (empty($_SESSION['cart_item'])) {
                      unset($_SESSION['cart_item']);
                  }
              }
          }
          break;
      case 'empty':
          unset($_SESSION['cart_item']);
          break;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles2.css">
    <title>Cart</title>
</head>
<body>
    <div class="container py-5">
    <div class="d-flex justify-content-between mb-2">
        <h3>Your Order</h3>
        <a class="btn btn-success" href="Index.php">Return To Restaurants</a>
        <a class="btn btn-success" href="Menu4.php">Go To Menu</a>
        <a class="btn btn-danger" href="Cart4.php?action=empty">Remove All Items</a>
    </div>
    <div class="row">
        
        <table class="table">
            <tbody>
            <tr>
                <th class="text-left">Name</th>
                <th class="text-left">Quantity</th>
                <th class="text-right">Item Price</th>
                <th class="text-right">Price</th>
                <th class="text-center">Remove Item</th>
            </tr>
            <?php
            $total_quantity = 0;
            $total_price = 0;
            ?>
            <?php
            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
                foreach ($_SESSION['cart_item'] as $item) {
                    $item_price = $item['Quantity'] * $item['price'];
                    ?>
            <tr>
                <td class="text-left"><?= $item['name'] ?></td>
                <td class="text-left"><?= $item['Quantity'] ?></td>
                <td class="text-right">₹<?= number_format($item['price'], 2) ?></td>
                <td class="text-right">₹<?= number_format($item_price, 2) ?></td>
                <td class="text-center"><a class="btn btn-danger" href="Cart4.php?action=remove&Id=<?=$item['id'];?>">X</a></td>
            </tr>
            <?php
                    $total_quantity += $item["Quantity"];
                    $total_price += ($item["price"]*$item["Quantity"]);
                }
            }

            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
                ?>
                <tr>
                    <td colspan="2" align="right">Total Quantity And Price:</td>
                    <td align="right"><strong><?= $total_quantity ?></strong></td>
                    <td align="right"><strong>₹<?= number_format($total_price, 2); ?></strong></td>
                    <td></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                <td></td>
                <td align="right"> </td>
                <td align="right"></td>
                <td></td>
                <td align="right"><a class="btn btn-success" href="PaymentGateway.php">Proceed To Payment</a></td>
                </tr>
            <?php }
                 $_SESSION['total_price'] = $total_price;
                ?>
          </tbody>
        </table>
    </div>   
</body>
</html>