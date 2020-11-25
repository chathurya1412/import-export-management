<?php
 
require "config.php";
$item_name=$_POST["item_name"];
$destination_username=$_POST["destination_username"];
$source_username=$_POST["source_username"];
$source_country=$_POST["source_country"];
$destination_country=$_POST["destination_country"];
$weight=$_POST["weight"];
$distance=0;
$qwe=23;
// calculate amount, check source(for ship and order),destination(for user and order),status_ship
$selectu="select username from user where username='$destination_username'";
$selects="select ship_no from ship where ship_source='$source_country' and ship_status='AVAILABLE'";
// $result = $conn->query($selects);
// echo $result;
$stmt=mysqli_stmt_init($conn);
$stmt1=mysqli_stmt_init($conn);
// if ($stmt = $mysqli->prepare($selects)) {​​
//     $stmt->execute();
    
//     /* bind variables to prepared statement */
//     $stmt->bind_result($col1);
    
//     /* fetch values */
//     while ($stmt->fetch()) {​​
//     echo $col1;
//         }​​
    
//     /* close statement */
//     $stmt->close();
//     }​​
    
    
//prepare a prepared statement
// if(!mysqli_stmt_prepare($stmt,$selectu) ){
//     echo "DESTINATION USER DOES NOT EXIST!!!";
// }

// else if(!mysqli_stmt_prepare($stmt,$selects) ){
//     echo "SORRY SHIP NOT AVAILABLE AT YOUR PLACE!!!";

// }
 if(mysqli_stmt_prepare($stmt,$selects)){
    $stmt->execute();
    $stmt->bind_result($qwe);
    // $stmt->store_result();
    while($stmt->fetch()){
    }

  
    if($source_country=='AUS' and $destination_country=='HKG')
    {
        $distance=5695;
    }
    else if($source_country='AUS' and $destination_country='LKA')
    {
        $distance=6810;
    }
    else if($source_country='AUS' and $destination_country='IND')
    {
        $distance=7809;
    }
    else if($source_country='AUS' and $destination_country='IDN')
    {
        $distance=3455;        
    }
    else if($source_country='AUS' and $destination_country='JPN')
    {
        $distance=6848;        
    }
    else if($source_country='AUS' and $destination_country='SGP')
    {
        $distance=4374;        
    }
    else if($source_country='HKG' and $destination_country='AUS')
    {
        $distance=5695;        
    }
    else if($source_country='HKG' and $destination_country='IND')
    {
        $distance=3638;        
    }
    else if($source_country='HKG' and $destination_country='JPN')
    {
        $distance=2786;        
    }
    else if($source_country='HKG' and $destination_country='IDN')
    {
        $distance=2568;        
    }
    else if($source_country='HKG' and $destination_country='SGP')
    {
        $distance=2585;        
    }
    else if($source_country='HKG' and $destination_country='LKA')
    {
        $distance=3912;        
    }
    else if($source_country='IND' and $destination_country='AUS')
    {
        $distance=7809;        
    }
    else if($source_country='IND' and $destination_country='IDN')
    {
        $distance=8858;        
    }
    else if($source_country='IND' and $destination_country='JPN')
    {
        $distance=5956;        
    }
    else if($source_country='IND' and $destination_country='HKG')
    {
        $distance=3638;       
    }
    else if($source_country='IND' and $destination_country='SGP')
    {
        $distance=3532;        
    }
    else if($source_country='IND' and $destination_country='LKA')
    {
        $distance=30;        
    }
    else if($source_country='IDN' and $destination_country='AUS')
    {
        $distance=3455;        
    }
    else if($source_country='IDN' and $destination_country='IND')
    {
        $distance=8858;        
    }
    else if($source_country='IDN' and $destination_country='JPN')
    {
        $distance=4819;        
    }
    else if($source_country='IDN' and $destination_country='HKG')
    {
        $distance=2568;        
    }
    else if($source_country='IDN' and $destination_country='SGP')
    {
        $distance=1149;        
    }
    else if($source_country='IDN' and $destination_country='LKA')
    {
        $distance=3799;        
    }
    else if($source_country='JPN' and $destination_country='AUS')
    {
        $distance=6848;        
    }
    else if($source_country='JPN' and $destination_country='IND')
    {
        $distance=5956;        
    }
    else if($source_country='JPN' and $destination_country='HKG')
    {
        $distance=2786;        
    }
    else if($source_country='JPN' and $destination_country='IDN')
    {
        $distance=4819;        
    }
    else if($source_country='JPN' and $destination_country='SGP')
    {
        $distance=5246;        
    }
    else if($source_country='JPN' and $destination_country='LKA')
    {
        $distance=6589;        
    }
    else if($source_country='SGP' and $destination_country='AUS')
    {
        $distance=4374;        
    }
    else if($source_country='SGP' and $destination_country='IND')
    {
        $distance=3532;        
    }
    else if($source_country='SGP' and $destination_country='JPN')
    {
        $distance=5246;        
    }
    else if($source_country='SGP' and $destination_country='IDN')
    {
        $distance=1149;        
    }
    else if($source_country='SGP' and $destination_country='HKG')
    {
        $distance=2585;        
    }
    else if($source_country='SGP' and $destination_country='LKA')
    {
        $distance=5296;        
    }
    else if($source_country='LKA' and $destination_country='AUS')
    {
        $distance=6810;        
    }
    else if($source_country='LKA' and $destination_country='IND')
    {
        $distance=30;        
    }
    else if($source_country='LKA' and $destination_country='JPN')
    {
        $distance=6589;        
    }
    else if($source_country='LKA' and $destination_country='IDN')
    {
        $distance=3799;        
    }
    else if($source_country='LKA' and $destination_country='SGP')
    {
        $distance=5296;        
    }
    else if($source_country='LKA' and $destination_country='HKG')
    {
        $distance=3912;        
    }
$order_no=rand(1,1000000);
$import='IM';
$export='EX';
$amount=$weight*10 + $distance*5;
$processing='processing';
$insert="insert into order_table (order_no,total_amt,item_name,destination_country,weight,order_status,source_username,ship_no,source_country,source_i_e,destination_i_e,destination_username) values (?,?,?,?,?,?,?,?,?,?,?,?)";
// $stmt=$conn->prepare($selectu);
// $stmt->bind_param("s",$destination_username);
// $stmt->execute();
// $stmt->bind_result($destination_username);
// $stmt->store_result();
// $rnum= $stmt->num_rows;
// if($rnum!=0)
// {
// $stmt->close();

$stmt1=$conn->prepare($insert);
// echo $destination_country." ".$import." ".$export." ".$order_no."".$amount."".$item_name."".$destination_country."".$weight."".$processing."".$source_username."".$qwe."".$source_country."".$export."".$import."".$destination_username;
$stmt1->bind_param("iissississss",$order_no,$amount,$item_name,$destination_country,$weight,$processing,$source_username,$qwe,$source_country,$export,$import,$destination_username);
$stmt1->execute();
// echo"new record inserted";
// }
// else
// {
//     echo"already inserted";
//     die();
// }

$stmt->close();
$stmt1->close();
$conn->close();}
// insert into user(name,username,city,pincode,phone_no,password,email) values('$name','$username','$city',$pincode,'$phone_no','$password','$email')"
?>
<!-- '$order_no','$amount','$item_name','$destination_country','$weight','$processing','$source_username','$selects','$source_country','$export','$import','$destination_username' -->
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
              <td><?php echo $item_name; ?></td>
            </tr>
            <tr>
              <td>Subtotal</td>
              <td><?php echo $amount; ?></td>
            </tr>
            <tr>
              <td>Order number</td>
              <td><?php echo $order_no; ?></td>
            </tr>
             <p>note: keep a note of it you may require to track your order</p>
          </table><br>
         
        </div><!-- Yorder -->
       </div>
      </div>
</body>
</html>