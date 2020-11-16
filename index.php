<?php
session_start();
session_destroy();
?>
<html>
<head>
<title>BankX</title>
<script language="JavaScript">
		function validated(){

			var account_number = document.creds.account_number.value;
			var password = document.creds.password.value;
			
			if(account_number==""){	
				window.alert("Please enter your account number!");
				document.creds.account_number.focus();
				return false;
			}
			if(password==""){	
				window.alert("Please enter your password!");
				document.creds.password.focus();
				return false;
			}
}
</script>
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
	.button 
    { 
          background-color:#ffea00; 
          border: 1px #000051;
          color: #000051;
          font-family: Comic Sans MS, cursive, sans-serif; 
          font-size: 20px;
          transition-duration: 0.4s;
          cursor: pointer;
    }
    .button1
    {
      padding: 12px 35px 12px 35px;
      background-color: #000051; 
      color: white; 
      box-shadow: 0 0 0 5px black;
      border-radius: 10px;
      margin-right: 5px;
    }   
    .button2
    {
      padding: 12px 35px 12px 35px;
      background-color: #000051; 
      color: white; 
      box-shadow: 0 0 0 5px black;
      border-radius: 10px;
      margin-left: 5px;
    }
    .button1:hover 
    {
      padding: 12px 35px 12px 35px;
      background-color: black;
      box-shadow: 0 0 0 0px black;
      border-radius: 10px;
      color: #ffea00;
    }
    .button2:hover 
    {
      padding: 12px 35px 12px 35px;
      background-color: black;
      box-shadow: 0 0 0 0px black;
      border-radius: 10px;
      color: #ffea00;
    }
</style>
</head>

<body bgcolor='#000051'>
<br><br><br><br><br>
<form action='credentials.php' method='post' name='creds' onsubmit='return validated()';>
<table style="border: 1px solid grey; border-radius: 10px" width="40%" align="center" cellpadding="30" cellspacing="0" bgcolor="#ffea00">
  <tr align="center"> 
    <td colspan="3"><font style="font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif; color: #000051; font-size:40px">BankX Banking Systems</font></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td align="center"><input required="required" style="color:#000051;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; padding: 18px; border: 1px solid grey; border-radius: 10px" placeholder="Account Number" type='text' name='account_number' size=20 maxlength=20></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td align="center"><input required="required" style="color:#000051;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; padding: 18px; border: 1px solid grey; border-radius: 10px" placeholder="Password" type='password' name='password' size=20 maxlength=10></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td align="center">
    <button class="button button1" type="reset" onclick="location.href='registration.php'">Sign Up</button>	
    <button class="button button2" type="submit">Sign In</button>
	</td>
    <td>&nbsp;</td>
  </tr>
</table></form>
</body>
</html>