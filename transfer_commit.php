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
	$account_number=$_POST["account_number"];
	$deposit=$_POST["deposit"];
	$time = $_POST["time"];
	$day = $_POST["day"];

	$query = "SELECT * FROM  user_account WHERE account_number = '$account_number'";
	$result = mysqli_query($conn,$query)
		or die("SQL select statement failed");
	while ($row = mysqli_fetch_array($result))
	{
	$account_number = $row["account_number"];
	$balance= $row["balance"];
	}
	$bal = $balance+$deposit;

	$query2 = "UPDATE user_account SET balance = '$bal' WHERE account_number = '$account_number'";
	$result2 = mysqli_query($conn,$query2);

	$query2 = "SELECT * FROM  user_account WHERE account_number = '$_SESSION[current_accountnumber]'";
	$result2 = mysqli_query($conn,$query2) or die("SQL select statement failed");
	while ($row = mysqli_fetch_array($result2))
	{
	$balance= $row["balance"];
	}
	$bal2 = $balance - $deposit;

	$query2 = "UPDATE user_account SET balance = '$bal2' WHERE account_number = '$_SESSION[current_accountnumber]'";
	$result2 = mysqli_query($conn,$query2);
	
	$query3 = "INSERT INTO transactions(account_number, amount, details, time, day)
		VALUES ('$_SESSION[current_accountnumber]', '$deposit', 'Transfer to $account_number', '$time', '$day')";
	$result3 = mysqli_query($conn,$query3);

	$query4 = "INSERT INTO transactions(account_number, amount, details, time, day)
		VALUES ('$account_number', '$deposit', 'Transfer from $_SESSION[current_accountnumber]', '$time', '$day')";
	$result4 = mysqli_query($conn,$query4);

	if ($result3 && $result4){
		header("Location: user_account.php");	
		}
		else{
		die(mysqli_error($conn));
		}
?>
</body>
</html>
