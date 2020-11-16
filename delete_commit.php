<html>
<head>
	<title></title>
</head>
<body bgcolor="#000051">
	<?php
		session_start();
		if ($_SESSION['current_authorization'] != 'user')
		{
			header("Location: index.php");
			exit();
		}
	?>
	<?php
		include 'connection.php';
		$query = "DELETE FROM credentials WHERE account_number = '$_SESSION[current_accountnumber]'";
		$result = mysqli_query($conn,$query)
			or die("SQL select statement failed");
		$query1 = "DELETE FROM user_account WHERE account_number = '$_SESSION[current_accountnumber]'";
		$result1 = mysqli_query($conn,$query1)
			or die("SQL select statement failed");	
		if ($result1){
		header("Location: index.php");	
		}
		else{
		die(mysqli_error($conn));
		}
	?>

</body>
</html>