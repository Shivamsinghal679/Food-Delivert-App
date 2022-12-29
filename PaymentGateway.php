<?php 
session_start();
$total_price=$_SESSION['total_price'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style_payment.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap"
      rel="stylesheet"
    />
    <script type="text/javascript">
        function check()
        {
            if(document.getElementById("UPI").checked)
            {
                document.getElementById('ifYes').style.visibility = 'visible';
            }
            else
            {
                document.getElementById('ifYes').style.visibility = 'hidden';
            } 
        }
    </script>
    <title>Foods Payment</title>
</head>
<body>
<center>
    <div class="payment-container">
        <form action="order_delivery.php" method="post">
            <div class="payment">
                <h1>Payment</h1>
                <hr>
                <div class="amount">
                    <h3>Trofi</h3>
                </div>
                <div class="bill">
                    <p>Bill details</p>
                    <table>
                        <tr>
                            <td>Item Total: </td>
                            <td>₹<?= number_format($total_price+40+20,2); ?></td>
                        </tr>
                        <tr>
                            <td>Delivery Fee:</td>
                            <td>₹40</td>
                        </tr>
                        <tr>
                            <td>Taxes and Charges: </td>
                            <td>₹20</td>
                        </tr>
                    </table>
                </div>
                
                <div class="opt">
                    <p>Payment option</p>
                    <input type="radio" name="Type" value="UPI" id="UPI" onclick="check();">
                    <label for="UPI">UPI</label>
                    <input type="radio" name="Type" value="COD" onclick="check();">
                    <label for="COD">Cash On Delivery</label>
                </div>
                <div id="ifYes" style="visibility:hidden">
                    <br>
                    
                    <label for="UPI">UPI Id</label>
                    <input type="text">
                </div>
                
                <div>
                    <br>
                    <input type="submit" class="btn" value="PAY">
                </div>
            </div>
        </form>
    </div>
</center>

</body>
</html>