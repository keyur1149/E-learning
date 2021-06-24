<?php

require_once "connect.php";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
        $uname = $link -> real_escape_string($_POST['username']);
		$pass = $link -> real_escape_string($_POST['userpassword']);
        $sql = "Select * from user where name='$uname' and password='$pass'";
		if ($result = $link -> query($sql)) {
		session_start();
		while($row = $result->fetch_assoc()) {
		$_SESSION['user'] = $row["user_name"];
		$_SESSION['userid'] = $row["user_id"];
		
        // echo $row['user_id'];
$cookie_name = $_SESSION['user'];
$cookie_value = $_SESSION['userid'];
setcookie($cookie_name, $cookie_value, time() + (3000), "/"); // 86400 = 1 day

       header("Location:afterlogin.php");
  }
		
		$result -> free_result();
}
    mysqli_close($link);
}
?>