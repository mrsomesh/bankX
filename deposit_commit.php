<html>
<body bgcolor='#333333'>
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
	$deposit=$_POST["deposit"];
	$time = $_POST["time"];
	$day = $_POST["day"];

	$query = "SELECT * FROM  user_account WHERE account_number = '$_SESSION[current_accountnumber]'";
	$result = mysqli_query($conn,$query)
		or die("SQL select statement failed");
	while ($row = mysqli_fetch_array($result))
	{
	$account_number = $row["account_number"];
	$balance= $row["balance"];	
	}
	$bal = $balance+$deposit;

	$query2 = "UPDATE user_account SET balance = '$bal' WHERE account_number = '$_SESSION[current_accountnumber]'";
	$result2 = mysqli_query($conn,$query2);
	
	$query3 = "INSERT INTO transactions(account_number, amount, details, time, day)
		VALUES ('$_SESSION[current_accountnumber]', '$deposit', 'Deposit', '$time', '$day')";
	$result3 = mysqli_query($conn,$query3);

	if ($result3){
		header("Location: user_account.php");	
		}
		else{
		die(mysqli_error($conn));
		}
?>
</body>
</html>
