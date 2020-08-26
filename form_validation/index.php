<?php
    if (isset($_POST['btn'])) {
    	$username = $_POST['username'];
    	$password = $_POST['password'];
    	if (strlen($username)<=8) {
    		echo "<span style='color:red;'>username should be more than 8 character</span>";
    	}else{
    		echo "ok";
    	}
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form validation</title>
</head>
<body>
<form action="" method="POST">
	 Username : <input type="text" name="username" placeholder="enter username"><br><br>
     Password : <input type="password" name="password" placeholder="enter password"><br><br>
     <input type="submit" name="btn" value="submit">
</form>
</body>
</html>