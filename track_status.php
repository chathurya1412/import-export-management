<?php
require 'config.php';
$order_no=$_POST["order_no"];
$stmt=mysqli_stmt_init($conn);
$qwe='';
$qwe1='';
$qwe2=0;
$qwe3='';
$selects="SELECT order_status,item_name,total_amt from order_table where order_no='$order_no'";
if(mysqli_stmt_prepare($stmt,$selects)){
    $stmt->execute();
    $stmt->bind_result($qwe,$qwe1,$qwe2);
    while($stmt->fetch()){
    }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="order_by_user.css">
</head>
<body>
<div class="Yorder">
          <table>
            <tr>
              <th colspan="2">Your order</th>
            </tr>
            <tr>
              <td>Item name</td>
              <td><?php echo $qwe1; ?></td>
            </tr>
            <tr>
              <td>Subtotal</td>
              <td><?php echo $qwe2; ?></td>
            </tr>
            <tr>
              <td>order  status</td>
              <td><?php echo $qwe; ?></td>
            </tr>
          </table><br>
         
        </div><!-- Yorder -->
       </div>
      </div>
</body>
</html>