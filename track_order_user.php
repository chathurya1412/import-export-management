<!DOCTYPE html>
<html>
<head>
    <title>Track Order Status</title>
    <link rel="stylesheet" href="track_order_user.css">
</head>
<body>

<div class="drybn-hero drybn-hero--search">
  <div class="drybn-hero drybn-hero--search__overlay">
    <div class="drybn-hero drybn-hero--search__content">
      <div class="hero-heading">
        <h1>Track Your Order Here</h1>
      </div>
      <div class="hero-search" style="margin-left:35%;">
        <form action="track_status.php" method="POST">
            <label for="order_no">Enter your order number:</label><br>
            <input type="text" id="order_no" name="order_no" ><br>
            <input type="submit" value="Submit">
        </form>

    
      </div>
    </div>
  </div>
</div>
<div class="drybn-kicker">
  <div class="drybn-kicker__overlay">
    <div class="drybn-kicker__content">
      <h2>
        The status of your order is .....
      </h2>
    </div>
  </div>
</div>
</body>
</html>