<?php
 
require "config.php";
$password=$_POST["password"];
$username=$_POST["username"];
// wrong order of insertion happening
$select="select username from admin where username=? Limit 1";
$insert="insert into admin(username,password) values(?,?)";
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
    $stmt->bind_param("ss",$username,$password);
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

?>