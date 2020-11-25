<?php
// if(isset($_POST['login-button'])){
	$username=$_POST["username"];
	$pwd=$_POST["pass"];
	$type;
	session_start();
    require 'config.php';
	    if(mysqli_connect_error()){
	        die("connect error");
	    }else{
	        $selectc="select * from user where username=? ";
	        $stmt=mysqli_stmt_init($conn);
	        //prepare a prepared statement
	        if(!mysqli_stmt_prepare($stmt,$selectc)){
	            echo "my sql error";
	        }else{ 
	            mysqli_stmt_bind_param($stmt,"s",$username);
	            mysqli_stmt_execute($stmt);
	            $resultc=mysqli_stmt_get_result($stmt);
	            $rowcountc=mysqli_num_rows($resultc);
	            if($rowcountc){ 
	            	$row=mysqli_fetch_assoc($resultc);
	            	if($row['password']==$pwd){
	            		$_SESSION['username']=$username;
	            		header('Location:user.php');	
	            	}else{
	            		printf("Incorrect password");
	            	}
				}
				
	        }
	    $stmt->close();
		// $stmt1->close();
	        mysqli_close($conn);
	    }
// }

?>