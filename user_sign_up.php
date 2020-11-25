<?php
 
require "config.php";
$name=$_POST["name"];
$city=$_POST["city"];
$pincode=$_POST["pincode"];
$password=$_POST["password"];
$username=$_POST["username"];
$phone_no=$_POST["phone_no"];
$email=$_POST["email"];
// wrong order of insertion happening
$select="select username from user where username=? Limit 1";
$insert="insert into user(username,password,name,email,phone_no,city,pincode) values('$username','$password','$name','$email','$phone_no','$city',$pincode)";
$stmt=$conn->prepare($select);
$stmt->bind_param("s",$username);
$stmt->execute();
$stmt->bind_result($username);
$stmt->store_result();
$rnum= $stmt->num_rows;
if($rnum==0)
{
    $stmt->close();
    $stmt=$conn->prepare($insert);
    $stmt->bind_param("ssssssi",$username,$password,$name,$email,$phone_no,$city,$pincode);
    $stmt->execute();
    echo"new record inserted";
}
else
{
    echo"already inserted";
    die();
}

$stmt->close();
$conn->close();
// insert into user(name,username,city,pincode,phone_no,password,email) values('$name','$username','$city',$pincode,'$phone_no','$password','$email')"
?>