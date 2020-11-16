<html>
<head>
	<title>Contact Us</title>
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
	      padding: 40px 105px 40px 105px;
	      background-color: #ffea00; 
	      color: black;  
	      box-shadow: 0 0 0 10px black;
	      border-radius: 10px;
	    }   
	    .button2
	    {
	      padding: 40px 40px 40px 40px;
	      background-color: #ffea00; 
	      color: black;  
	      box-shadow: 0 0 0 10px black;
	      border-radius: 10px;
	    }
	    .button1:hover 
	    {
	      padding: 40px 95px 40px 95px;
	      border: 1px solid black;
	      background-color: black;
	      box-shadow: 0 0 0 0px black;
	      border-radius: 10px;
	      color: #ffea00;
	    }
	    .button2:hover 
	    {
	      padding: 40px 30px 40px 30px;
	      border: 1px solid black;
	      background-color: black;
	      box-shadow: 0 0 0 0px black;
	      border-radius: 10px;
	      color: #ffea00;
	    }
	</style>
	<script type="text/javascript">
		function validated(){
			var subject = document.ema.subject.value;
			var message = document.ema.message.value;
			if(subject==""){	
				window.alert("Please enter your issue!");
				document.ema.subject.focus();
				return false;
			}
			if(message==""){	
				window.alert("Please enter your desciption!");
				document.ema.message.focus();
				return false;
			}
		}
	</script>
</head>
<body onload="renderTime();" bgcolor='#000051' style="margin: 0px">
<a href="user_account.php">
<div class="Top Bar" style="z-index: 3; overflow: hidden; margin-top:0px; width: 100%;  position: fixed; top: 0; background-color: #ffea00; font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif; color: #000051; font-size:40px; text-align: center; padding: 5px;">
		<p style="margin: 0px;">BankX Banking Systems</p>
</div>
</a>
<div class="topnav">
		<a class="" href="user_account.php">Home</a>
	    <a class="" href="ourbranches.html">Our Branches</a>
	  	<a class="" href="tutorials.html">Tutorials</a>  
	  	<a class="" href="aboutUs.html">About Us</a>
	  	<a class="" href="deleteAccount.php">Delete Your Account</a>
		<a class="active" href="contactUs.php">Contact Us</a>
	  <div style="color: #ffea00; padding-top: 5px;padding-right:10px; float: right; font-family:Comic Sans MS, cursive, sans-serif; " id="clock" class="container"></div>
</div>
<form action='email_commit.php' method='post'  name='ema' onsubmit='return validated()';>
	<table style='border: 5px solid black; border-radius: 10px; margin: 130px 7.5px 10px 7.5px;' width="99%" border="0" align="center" cellpadding="10" cellspacing="0" bgcolor="#000051">
		<tr>
			<td align="left" width="40%">
    			<div style="background-color: #000051; color: white;font-family: Comic Sans MS, cursive, sans-serif; font-size: 40px">
  					<p style="margin: 0px; padding: 10px 10px 0px 20px;">Drop Us Your Query!</p>
				</div>
			</td>
    		<td align="center" width="5%">&nbsp;</td>
    		<td width="55%">&nbsp;</td>
		</tr>
		<tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px">
			<td align="left" width="40%" style="padding-left: 35px">What is the issue about</td>
    		<td align="center" width="5%">:</td>
    		<td width="55%" align="center"><input style="color:#000051;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; padding: 18px; border: 1px solid grey; border-radius: 10px" placeholder="Eg. Deposit Failure/Balance not showing" type='text' name="subject" size=48 maxlength=100></td>
		</tr>
		<tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px">
			<td align="left" width="40%" style="padding-left: 35px">Describe Your Issue</td>
    		<td align="center" width="5%">:</td>
    		<td width="55%" align="center">
    			<textarea style="padding: 17px; color:#000051;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; border: 1px solid grey; border-radius: 10px" name="message" rows="7" cols="51" placeholder="Eg. My previous deposit dated dd/mm/yyyy at hh:mm hrs is not reflecting in my account statement. Would request a quick resolution on the same."></textarea>
    		</td>
		</tr>
	</table>
	<table style="margin-top: 19px" width="100%" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#000051">
	  <tr align="center"> 
	    <td>
	       <button class="button button1" type="submit">Submit</button>
	      </td>
	      <td>
	        <button class="button button2" type="reset" onclick="location.href='user_account.php'">Go Back To Home</button>
	    </td>
	  </tr>
	</table>
</form>
</body>
</html>