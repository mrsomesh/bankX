<html>
<head>
  <title>Account Number</title>
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
    .button 
    { 
          border: 1px solid grey; 
          border-radius: 10px;
          background-color:#ffea00; 
          color: #000051;
          font-weight: bold; 
          font-family: Comic Sans MS, cursive, sans-serif; 
          font-size: 22px;
          transition-duration: 0.4s;
          cursor: pointer;
    }
    .button1
    {
      padding: 40px 40px 40px 40px;
      background-color: #ffea00; 
      color: black; 
      box-shadow: 0 0 0 10px black;
      border-radius: 10px;
    }
    .button1:hover 
    {
      padding: 40px 30px 40px 30px;
      border: 1px solid black;
      background-color: black;
      box-shadow: 0 0 0 0px black;
      border-radius: 10px;
      color: #ffea00;
    }
  </style>
</head>
<body bgcolor='#000051' style="margin: 0px"> 
  <a href="index.php">
  <div class="Top Bar" style="z-index: 3; overflow: hidden; margin-top:0px; width: 100%;  position: fixed; top: 0; background-color: #ffea00; font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif; color: #000051; font-size:40px; text-align: center; padding: 5px;">
      <p style="margin: 0px;">BankX Banking Systems</p>
  </div>
  </a>
<table style="margin-top: 70px;" width="100%">
  <tr align="center">
    <td width="50%" style="padding: 20px 10px 20px 10px; text-align: left; background-color: #000051; color: white;font-family: Comic Sans MS, cursive, sans-serif; font-size: 35px">
      Account Numbers Of You and Friends
    </td>
    <td width="50%" style="padding: 10px;">
      <button class="button button1" type="reset" onclick="location.href='user_account.php'">Go Back To Login Page To Start Using Your Account</button>
    </td>
  </tr>
</table>
<?php
$account_number='account_number';
include 'connection.php';
$query = "SELECT * FROM  user_account WHERE account_number=$account_number ORDER BY id DESC";
$result = mysqli_query($conn,$query) or die("SQL select statement failed");
while ($row = mysqli_fetch_array($result))  {
			$account_number=$row["account_number"];
			$unique_id=$row["unique_id"];
			$username=$row["username"];
			$day=$row["day"];
?>

<table style="border: 5px solid black; border-radius: 10px; margin: 15px 2px 15px 6px;" width="99%" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#000051">
  <tr> 
    <td align="right">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
    <td width="45%" align="center">Account Number</td>
    <td width="10%" align="center">:</td>
    <td width="45%" align="center"><?php echo"$account_number"; ?></td>
  </tr>
  <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
    <td align="center">Identity Card</td>
    <td align="center">:</td>
    <td align="center"><?php echo"$unique_id"; ?></td>
  </tr>
  <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
    <td align="center">Full Name</td>
    <td align="center">:<br> 
    </td>
    <td align="center"><?php echo"$username"; ?></td>
  </tr>
  <tr> 
    <td align="right">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
	}
?>
<table width="100%">
  <tr align="center">
    <td>
      
    </td>
  </tr>
</table>
</body>
</html>
