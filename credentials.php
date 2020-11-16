<html>
<body bgcolor='#333333'>
<?php
	session_start();
	$account_number=$_POST["account_number"];
	$password=$_POST["password"];

	include 'connection.php';

	$query="SELECT * FROM credentials WHERE account_number='$account_number' AND password=MD5('$password')";
	$result=mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result); 
	if (mysqli_num_rows($result))
	{
		$account_number=$row["account_number"];
		$username=$row["username"];
		$authorization=$row["authorization"];
		$email = $row["email"];
		
		$_SESSION["current_accountnumber"]=$account_number;
		$_SESSION["current_username"]=$username;
		$_SESSION["current_authorization"]=$authorization;
		$_SESSION["current_email"]=$email;
		header("Location: user_account.php");
	}
	else
	{
		die("<script language='JavaScript'>
		window.alert('Sorry, Invalid Credentials!')
		</script>
		<meta http-equiv='REFRESH' content='0; url=index.php'>
		");
		mysqli_close($conn);
	}
?>
</body>
</html>