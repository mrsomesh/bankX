<!DOCTYPE html>
<html>
<head>
	<title>Query Status</title>
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
  			top: 0;
  			width: 100%;
  			margin-top: 65px;
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
<body onload="renderTime();" bgcolor='#000051' style="margin: 0px">
	<a href="index.php">
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
	  <a class="active" href="contactUs.php">Contact Us</a>
	  <div style="color: #ffea00; padding-top: 5px;padding-right:10px; float: right; font-family:Comic Sans MS, cursive, sans-serif; " id="clock" class="container"></div>
	</div>
  <table style="margin-top: 130px; margin-left: 7px; border: 5px solid black; border-radius: 10px" width="99%";>
  	<tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 32px">
			<td style="text-align: justify; padding: 20px;">
					Dear Customer, your issue has been forwarded to our team.<br>
					You can rest assured that your issue will be resolved soon. Our executives would be contacting you on your registered Email-ID shortly.<br>
					Till then you can continue to use our services.<br>
					Thank You!
			</td>
		</tr>
  </table>
  <table style="margin-top: 20px" width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#000051">
		    <tr align="center">
		    	<td>
				   <form action='user_account.php' method='post'>
				   	<button class="button button1" type="submit">Go Back To Home Page</button>				   	
				   </form>
				</td>
			</tr>
	</table>
</body>
</html>