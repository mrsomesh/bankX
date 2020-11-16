<?php
session_start();
if ($_SESSION['current_authorization'] != 'user')
{
	header("Location: index.php");
	exit();
}
?>
<?php
function sanitize_my_email($field)
{
	$field = filter_var($field,FILTER_SANITIZE_EMAIL);
	if(filter_var($field,FILTER_VALIDATE_EMAIL))
	{
		return true;
	}
	else
	{
		return false;
	}
}
$to_email = "mr.someshdave@gmail.com";
$subject =  filter_var(($_POST["subject"] . " in Account Number " . $_SESSION['current_accountnumber']),FILTER_SANITIZE_STRING);
$body = filter_var(($_POST["message"]),FILTER_SANITIZE_STRING);
$current_email = $_SESSION['current_email'];
$headers = "From: ".$current_email."\r\n"."Reply-To: ".$current_email."\r\n";
$secure = sanitize_my_email($to_email);
if($secure == false)
{
	echo "Invalid";
}
else
{
	if (mail($to_email, $subject, $body, $headers)) 
	{
		header("Location: contactUs_status.php");
	} else 
	{
	    die("Error: Contact Administrator");
	}
}