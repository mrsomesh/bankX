<?php
session_start();
if ($_SESSION["current_authorization"] != "user")
{
  header("Location: index.php");
  exit();
}
?>
<html>
<head>
	<title>Delete Your Account</title>
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
</head>
<body onload="renderTime();" bgcolor='#000051' style="margin: 0px">
	<?php
		include 'connection.php';
		$query = "SELECT * FROM  user_account WHERE account_number='$_SESSION[current_accountnumber]'";
		$result = mysqli_query($conn,$query) or die("SQL select statement failed");

		while ($row = mysqli_fetch_array($result))  {
		      $account_number=$row["account_number"];
		      $unique_id=$row["unique_id"];
		      $username=$row["username"];
		      $day=$row["day"];
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
	  <a class="btn active" href="deleteAccount.php">Delete Your Account</a>
	  <a class="btn" href="contactUs.php">Contact Us</a>
	  <div style="color: #ffea00; padding-top: 5px;padding-right:10px; float: right; font-family:Comic Sans MS, cursive, sans-serif; " id="clock" class="container"></div>
	</div>
	<table style='border: 5px solid black; border-radius: 10px; margin: 130px 7.5px 10px 7.5px;' width="99%" border="0" align="center" cellpadding="10" cellspacing="0" bgcolor="#000051">
		  <tr> 
		    <td align="left" width="50%">
		    	<div style="background-color: #000051; color: white;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px">
		  			<p style="margin: 0px; padding: 10px 10px 0px 20px;">Are You Sure You Want To Delete This Account?</p>
				</div>
			</td>
		    <td align="center">&nbsp;</td>
		    <td>&nbsp;</td>
		  </tr>
		  <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
		    <td width="33%" align="center"><b>Account Number</b></td>
		    <td width="6%" align="center">:</td>
		    <td width="61%"><b><?php echo"$account_number"; ?></b></td>
		  </tr>
		  <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
		    <td align="center"><b>Full Name</b></td>
		    <td align="center">:</td>
		    <td><b><?php echo"$username"; ?></b></td>
		  </tr>
		  <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
		    <td align="center"><b>Activated On</b></td>
		    <td align="center">:</td>
		    <td><b><?php echo"$day"; ?></b></td>
		  </tr>
		  <tr> 
		    <td align="right" style="padding-bottom: 50px">&nbsp;</td>
		    <td align="center">&nbsp;</td>
		    <td>&nbsp;</td>
		  </tr>
	</table>
	<?php
	  }
	?>
	<table style="margin-top: 105px" width="100%" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#000051">
	  <tr align="center"> 
	    <td>
	    	<form action='delete_commit.php' method='post' style="margin: 0px">
      			<button class="button button1" type="submit">Confirm</button>
	   		</form>
	    </td>
		<td>
			<form action='user_account.php' method='post' style="margin: 0px">
        		<button class="button button2" type="submit">Go Back</button>
	      	</form>
	  	</td>
	  </tr>
	</table>
</body>
</html>