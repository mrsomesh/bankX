<html>
<body bgcolor='#333333'>
<?php
	
	include 'connection.php';
	
	$query = "SELECT * FROM  account_numbers WHERE status='no' order by id  LIMIT 0,1";
	$result = mysqli_query($conn,$query)
		or die("SQL select statement failed");
	$row = mysqli_fetch_array($result); 
	if (mysqli_num_rows($result)){

	$account_number = $row["account_number"];
	$unique_id = $_POST["unique_id"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$gender = $_POST["gender"];
	$email = $_POST["email"];
	$mobile = $_POST["mobile"];
	$state = $_POST["state"];
	$pincode = $_POST["pincode"];
	$balance= $_POST["balance"];
	$time = $_POST["time"];
	$day = $_POST["day"];

	if(!preg_match("/^[a-zA-Z0-9]*$/",$unique_id))
	{
		die("<script language='JavaScript'>
		window.alert('Sorry, Unique Id can only consist of alphabets and numbers!')
		</script>
		<meta http-equiv='REFRESH' content='0; url=registration.php'>
		");
	}

	if(!preg_match("/^[a-zA-Z-' ]*$/",$username))
	{
		die("<script language='JavaScript'>
		window.alert('Sorry, Name can only consist of alphabets and whitespaces!')
		</script>
		<meta http-equiv='REFRESH' content='0; url=registration.php'>
		");
	}
	if(!preg_match("/^[1-9][0-9]{0,7}$/",$balance))
	{
		die("<script language='JavaScript'>
		window.alert('Sorry, balance value can only be between 1000 and 10000000!')
		</script>
		<meta http-equiv='REFRESH' content='0; url=registration.php'>
		");	
	}
	if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,10}$/', $password)) 
	{
		die("<script language='JavaScript'>
		window.alert('Password must consist of a number and a letter and must be of 6-10 characters in length. (Use of !@#$% is encouraged)')
		</script>
		<meta http-equiv='REFRESH' content='0; url=registration.php'>
		");			
	}
	if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
	{
		die("<script language='JavaScript'>
		window.alert('Incorrect Email Format!')
		</script>
		<meta http-equiv='REFRESH' content='0; url=registration.php'>
		");	
	}
	if(!preg_match("/^(\+\d{1,3}[- ]?)?\d{10}$/", $mobile))
	{
		die("<script language='JavaScript'>
		window.alert('Mobile Number Format Error!')
		</script>
		<meta http-equiv='REFRESH' content='0; url=registration.php'>
		");	
	}
	if(!preg_match("/^[1-9][0-9]{0,5}$/",$pincode))
	{
		die("<script language='JavaScript'>
		window.alert('Pincode format error!')
		</script>
		<meta http-equiv='REFRESH' content='0; url=registration.php'>
		");	
	}


	$query2 = "INSERT INTO user_account(account_number, unique_id, username, balance, day)
		VALUES ('$account_number', '$unique_id', '$username', '$balance', '$day')";

	$result2 = mysqli_query($conn,$query2)
			or die("
		<script language='JavaScript'>
		window.alert('Sorry, you are already registered!')
		</script>
		<meta http-equiv='REFRESH' content='0; url=registration.php'>
		");

	$query3 = "INSERT INTO credentials(account_number, unique_id, username, password, gender, email, mobile, state, pincode, authorization)
		VALUES ('$account_number', '$unique_id', '$username',  MD5('$password'), '$gender', '$email', '$mobile', '$state', '$pincode', 'user')";

	$result3 = mysqli_query($conn,$query3)
			or die("
		<script language='JavaScript'>
		window.alert('Sorry, you are already registered!')
		</script>
		<meta http-equiv='REFRESH' content='0; url=registration.php'>
		");

	$query4 = "INSERT INTO transactions(account_number, amount, details, time, day)
		VALUES ('$account_number', '$balance', 'Deposit',  '$time', '$day')";

	$result4 = mysqli_query($conn,$query4);

	$query5 = "UPDATE account_numbers SET status = 'yes' WHERE account_number = '$account_number'";
	$result5 = mysqli_query($conn,$query5);

	if ($result5){
		header("Location: registration_status.php?account_number=$account_number");	
		}
		else{
		die(mysqli_error($conn));
		}
	}
	else{
	echo "<script language='JavaScript'>
		window.alert('System error, Ask administrator for further details!')
		</script>
		<meta http-equiv='REFRESH' content='0; url=index.php'>";
	}
?>
</body>
</html>