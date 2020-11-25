<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="order_here_user.css">
    <style> 
      input[type=submit] {
        background-color: #1161ee;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
      }
      </style>
</head>
<body>
    <div class="container">
        <div class="title">
            <h2>Product Order Form</h2>
        </div>
      <div class="d-flex">
        <form action="order_by_user.php" method="POST">
          <label>
            <span class="fname">Item Name <span class="required">*</span></span>
            <input type="text" name="item_name" required>
          </label>
          <label>
            <span class="lname">Destination username <span class="required">*</span></span>
            <input type="text" name="destination_username" required>
          </label>
          <label>
            <span>Your username</span>
            <input type="text" name="source_username">
          </label>
          <label>
            <span>Your Country <span class="required">*</span></span>
            <select name="source_country" required>
              <option value="AUS">Australia</option>
              <option value="HKG">Hong Kong</option>
              <option value="IND">India</option>
              <option value="IDN">Indonesia</option>
              <option value="JPN">Japan</option>
              <option value="SGP">Singapore</option>
              <option value="LKA">Sri Lanka</option>
            </select>
          </label>
          <label>
            <span>Destination Country <span class="required">*</span></span>
            <select name="destination_country" required>
              <option value="AUS">Australia</option>
              <option value="HKG">Hong Kong</option>
              <option value="IND">India</option>
              <option value="IDN">Indonesia</option>
              <option value="JPN">Japan</option>
              <option value="SGP">Singapore</option>
              <option value="LKA">Sri Lanka</option>
            </select>
          </label>
          <label>
            <span>Weight <span class="required">*</span></span>
            <input type="number" name="weight" required> 
          </label>
          <div style="margin-top:50px;">
            <input type="radio" name="cash_on_delivery" value="cd" required> Cash on Delivery</input>
          </div>
         <input style="margin-top:50px;"type="submit" class="button" value="Submit" action="order_check.php">
        </form>
        <!-- <div class="Yorder">
          <table>
            <tr>
              <th colspan="2">Your order</th>
            </tr>
            <tr>
              <td>?php include 'order_by_user.php'; echo $item_name; ?></td>
              <td>?php include 'order_by_user.php'; echo $amount; ?></td>
            </tr>
            <tr>
              <td>Subtotal</td>
              <td>$88.00</td>
            </tr>
            <tr>
              <td>Shipping</td>
              <td>Free shipping</td>
            </tr>
          </table><br>
         
        </div>Yorder
       </div>
      </div> -->
</body>
</html>