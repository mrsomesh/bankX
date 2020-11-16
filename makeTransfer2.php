<?php
session_start();
if ($_SESSION['current_authorization'] != 'user')
{
	header("Location: index.php");
	exit();
}
?>
<html>
<head>
<script type="text/javascript" src="script.js"></script>
<style type="text/css">
  ::-webkit-scrollbar 
      {
          background: black;
          width: 12px;
      }
       
      ::-webkit-scrollbar-track 
      {
          -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
          border-radius: 10px;
      }
       
      ::-webkit-scrollbar-thumb 
      {
          border-radius: 10px;
          -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
      }
      ::-webkit-scrollbar-thumb 
      {
        background: white;
      }
      ::-webkit-scrollbar-thumb:hover 
      {
        background: #ffea00;
      }
  ::placeholder
  {
    color:#000051;
    opacity: 1;
    font-family: Comic Sans MS, cursive, sans-serif;
    font-size: 18px;
  }
  .topnav 
    {
        position: fixed;
        overflow: hidden;
        background-color: #000000;
        top: 65;
        width: 100%;
        z-index: 3;
    }

    .topnav a 
    {
      float: left;
      color: #ffea00;
      font-weight: bold; 
      font-family: Comic Sans MS, cursive, sans-serif;
      text-align: center;
      padding: 14px 30px 14px 30px;
      text-decoration: none;
      font-size: 20px;
      transition-duration: 0.4s;
    }

    .topnav a:hover 
    {
      padding: 14px 20px 14px 20px;
      background-color: #ffea00;
      color: black;
    }

    .topnav a.active 
    {
      background-color: #000051;
      color: #ffea00;
    }
    .button 
    { 
          border: 1px solid grey; 
          border-radius: 10px;
          background-color:#ffea00; 
          color: #000051;
          font-weight: bold; 
          font-family: Comic Sans MS, cursive, sans-serif; 
          font-size: 25px;
          transition-duration: 0.4s;
          cursor: pointer;
    }
    .button1
    {
      padding: 40px 100px 40px 100px;
      background-color: #ffea00; 
      color: black; 
      box-shadow: 0 0 0 10px black;
      border-radius: 10px;
    }   
    .button2
    {
      padding: 40px 105px 40px 105px;
      background-color: #ffea00; 
      color: black; 
      box-shadow: 0 0 0 10px black;
      border-radius: 10px;
    }
    .button1:hover 
    {
      padding: 40px 90px 40px 90px;
      border: 1px solid black;
      background-color: black;
      box-shadow: 0 0 0 0px black;
      border-radius: 10px;
      color: #ffea00;
    }
    .button2:hover 
    {
      padding: 40px 95px 40px 95px;
      border: 1px solid black;
      background-color: black;
      box-shadow: 0 0 0 0px black;
      border-radius: 10px;
      color: #ffea00;
    }
</style>	
<title>Transfer</title>
<script language="JavaScript">
		function validated(){

			var deposit = document.tranf2.deposit.value;
			var balance = document.tranf2.balance.value;
			var depositint = parseInt(deposit);
			var deposit2 = deposit <= 99;
			var bal = balance-deposit;
			
			if(deposit==""){	
				window.alert("Please enter transfer value!");
				document.tranf2.deposit.focus();
				return false;
			}
			if(isNaN(depositint)){	
				window.alert("Please enter transfer value!");
				document.tranf2.deposit.focus();
				return false;
			}
			if(deposit2){	
				window.alert("Transfer value must not be less than 100 rupees!");
				return false;
			}
			if(bal < 1000){	
				window.alert("Sorry, your balance is not enough. Minimum balance in your account must not be less than 1000 rupees!");
				return false;
			}
}
</script>
</head>
<body onload="renderTime();" bgcolor='#000051' style="margin: 0px">
<?php

$transfer_account=$_POST["transfer_account"];

include 'connection.php';
$query = "SELECT account_number, unique_id, username FROM  user_account WHERE account_number='$transfer_account'";
$result = mysqli_query($conn,$query) or die("SQL select statement failed");
$row = mysqli_fetch_array($result);  
if (mysqli_num_rows($result)){
			$account_number=$row["account_number"];
			$unique_id=$row["unique_id"];
			$username=$row["username"];
?> 
  <a href="user_account.php">
  <div class="Top Bar" style="z-index: 3; overflow: hidden; margin-top:0px; width: 100%;  position: fixed; top: 0; background-color: #ffea00; font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif; color: #000051; font-size:40px; text-align: center; padding: 5px;">
      <p style="margin: 0px;">BankX Banking Systems</p>
  </div>
  </a>
<div class="topnav">
  <a class="btn" href="user_account.php">Home</a>
  <a class="btn" href="ourbranches.html">Our Branches</a>
  <a class="btn" href="tutorials.html">Tutorials</a>
  <a class="btn" href="aboutUs.html">About Us</a>
  <a class="btn" href="deleteAccount.php">Delete Your Account</a>
  <a class="btn" href="contactUs.php">Contact Us</a>
  <div style="color: #ffea00; padding-top: 5px;padding-right:10px; float: right; font-family:Comic Sans MS, cursive, sans-serif; " id="clock" class="container"></div>
</div>
<form action='transfer_commit.php' method='post'  name='tranf2' onsubmit='return validated()';>
  <table style='border: 5px solid black; border-radius: 10px; margin: 130px 7.5px 10px 7.5px;' width="99%" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#000051">
    <tr> 
      <td width="50%">
        <div style="background-color: #000051; color: white;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif; font-size: 29px">
          <p style="margin: 0px; padding: 20px 10px 60px 20px;">Please Enter The Amount To Transfer To :</p>
        </div>
      </td>
      <td width="6%">&nbsp;</td>
      <td width="44%">&nbsp;</td>
    </tr>
    <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
      <td style="padding-left: 250px" align="left">Account Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
      <td align="left">&nbsp;</td>
      <td style="padding-left: 10px"><?php echo"$account_number"; ?>
		<input type='hidden' name='account_number' value='<?php echo"$account_number"; ?>'>
      </td>
    </tr>
    <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
      <td style="padding-left: 174px" align="left">Unique Identification Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
      <td align="left">&nbsp;</td>
      <td style="padding-left: 10px"><?php echo"$unique_id"; ?> 
      </td>
    </tr>
    <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
      <td style="padding-left: 281px" align="left">Full Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
      <td align="left">&nbsp;</td>
      <td style="padding-left: 10px"><?php echo"$username"; ?>
	  <?php	
      date_default_timezone_set("Asia/Kolkata");
			$day=date("j M Y");
			$time=date( "g:i:sa");
			echo "<input type='hidden' name='day' value='$day'>";
			echo "<input type='hidden' name='time' value='$time'>";
		?>
	  <?php
	}
	else
	{
		echo "<script language='JavaScript'>";
		echo "window.alert('Account number does not exist.')";
		echo "</script>"; 
		echo "<meta http-equiv='REFRESH' content='0; url=makeTransfer.php'>";
	}
		$query2 = "SELECT balance FROM  user_account WHERE account_number='$_SESSION[current_accountnumber]'";
		$result2 = mysqli_query($conn,$query2) or die("SQL select statement failed");
		$row = mysqli_fetch_array($result2);
		if (mysqli_num_rows($result2)){
		$balance=$row["balance"];
		echo "<input type='hidden' name='balance' value='$balance'>";
	}
?>
	  </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
      <td align="left" style="padding-left: 193px">Transfer Amount In Rupees&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
      <td align="left">&nbsp;</td>
      <td> 
        <input style="color:#000051;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; padding: 17px; border: 1px solid grey; border-radius: 10px" placeholder="Transfer Amount" type='text' name='deposit' size=10 maxlength=10> </td>
    </tr>
    <tr> 
      <td style="padding-bottom: 25px">&nbsp;</td>
      <td align="center">&nbsp; </td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table style="margin-top: 46px" width="100%" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#000051">
  <tr align="center"> 
    <td>
      <button class="button button1" type="submit">Transfer</button>
       </form>
      </td>
	  <td>
	<form action='makeTransfer.php' method='post' style="margin: 0px">
        <button class="button button2" type="submit">Go Back</button>
      </form></td>
  </tr>
 </table>
</body>
</html>