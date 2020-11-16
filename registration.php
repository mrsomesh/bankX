<html>
<head>
  <title>Register</title>
</head>
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
      padding: 40px 40px 40px 40px;
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
      padding: 40px 30px 40px 30px;
      border: 1px solid black;
      background-color: black;
      box-shadow: 0 0 0 0px black;
      border-radius: 10px;
      color: #ffea00;
    }
</style>
<script language="JavaScript">
		function validated(){

			var unique_id = document.regs.unique_id.value;
			var username = document.regs.username.value;
			var password = document.regs.password.value;
			var password2 = document.regs.password2.value;
      var gender = document.regs.gender.value;
      var email = document.regs.email.value;
      var mobile = document.regs.mobile.value;
      var state = document.regs.state.value;
      var pincode = document.regs.pincode.value;
			var balance = document.regs.balance.value;
			var balance_int = parseInt(balance);
			
			if(unique_id==""){	
				window.alert("Please enter your Unique Identification Number!");
				document.regs.unique_id.focus();
				return false;
			}
			if(username==""){	
				window.alert("Please enter your Name!");
				document.regs.username.focus();
				return false;
			}
			if(password==""){	
				window.alert("Please write your Password!");
				document.regs.password.focus();
				return false;
			}
			if(password2==""){	
				window.alert("Please Re-Enter your Password!");
				document.regs.password2.focus();
				return false;
			}
			if(password !=password2){	
				window.alert("Passwords do not match!");
				return false;
			}
      if(gender==""){
        window.alert("Please select your gender!");
        document.regs.gender.focus();
        return false;
      }
      if(email==""){
        window.alert("Please enter your email!");
        document.regs.email.focus();
        return false;
      }
      if(mobile==""){
        window.alert("Please enter your mobile number!");
        document.regs.mobile.focus();
        return false;
      }
      if(state==""){
        window.alert("Please select a state!");
        document.regs.state.focus();
        return false;
      }
      if(pincode==""){
        window.alert("Please enter your pincode!");
        document.regs.pincode.focus();
        return false;
      }
			if(isNaN(balance_int)){	
				window.alert("Please enter deposit amount!");
				document.regs.balance.focus();
				return false;
			}
			if(balance < 1000){	
				window.alert("Deposit must not less than 1000 rupees!");
				return false;
			}
}
</script>
<body bgcolor='#000051' style="margin: 0px">
  <a href="index.php">
  <div class="Top Bar" style="z-index: 3; overflow: hidden; margin-top:0px; width: 100%;  position: fixed; top: 0; background-color: #ffea00; font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif; color: #000051; font-size:40px; text-align: center; padding: 5px;">
      <p style="margin: 0px;">BankX Banking Systems</p>
  </div>
  </a>  
<form action='registration_commit.php' method='post'  name='regs' onsubmit='return validated()';>
  <table style='border: 5px solid black; border-radius: 10px; margin: 80px 7.5px 15px 7.5px;' width="99%" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#000051">
    <tr> 
      <td align="right">&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
      <td width="30%" align="right">Unique Identification Number </td>
      <td width="4%" align="center">:</td>
      <td width="66%"><input style="color:#000051;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; padding: 18px; border: 1px solid grey; border-radius: 10px" placeholder="Eg. EYR854654" type='text' name='unique_id' size=24 maxlength=12> Aadhar/Pan Number (AlphaNumeric only) </td>
    </tr>
    <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
      <td align="right">Full Name</td>
      <td align="center">:</td>
      <td><input style="color:#000051;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; padding: 18px; border: 1px solid grey; border-radius: 10px" placeholder="Eg. Test User" type='name' name='username' size=24 maxlength=40> Alphabets only </td>
    </tr>
    <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
      <td align="right">Password</td>
      <td align="center">:</td>
      <td><input style="color:#000051;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; padding: 18px; border: 1px solid grey; border-radius: 10px" placeholder="Password" type='password' name='password' size=24 maxlength=10> 6-10 chars (1 alpha & 1 numeric must) </td>
    </tr>
    <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
      <td align="right">Re-Enter Password </td>
      <td align="center">:</td>
      <td><input style="color:#000051;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; padding: 18px; border: 1px solid grey; border-radius: 10px" placeholder="Password" type='password' name='password2' size=24 maxlength=10> 6-10 chars (1 alpha & 1 numeric must)</td>
    </tr>
    <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px;"> 
      <td align="right" style="padding-top: 10px;padding-bottom: 10px;">Gender</td>
      <td align="center">:</td>
      <td><input style="color: #000051" type="radio" name="gender" value="Male" required="required"> Male
          <input type="radio" name="gender" value="Female"> Female
          <input type="radio" name="gender" value="Other"> Other
      </td>
    </tr>
    <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
      <td align="right">Email</td>
      <td align="center">:</td>
      <td><input style="color:#000051;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; padding: 18px; border: 1px solid grey; border-radius: 10px" placeholder="Eg. example@ymail.com" type='Email' name='email' size=24 maxlength=50></td>
    </tr>
    <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
      <td align="right">Mobile</td>
      <td align="center">:</td>
      <td><input style="color:#000051;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; padding: 18px; border: 1px solid grey; border-radius: 10px" placeholder="Eg. 2223334445" type='text' name='mobile' size=24 maxlength=11> Maximum 11 digits (Numeric) </td>
    </tr>
    <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
      <td align="right">State</td>
      <td align="center">:</td>
      <td><select style="font-family: Comic Sans MS, cursive, sans-serif; font-weight: bold; color: #000051; font-size: 18px; padding-top: 15px; padding-bottom: 15px; padding-left: 16px; padding-right: 49px; border: 1px solid grey; border-radius: 10px" name="state" id="state" class="form-control" required="required">
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
            <option value="Daman and Diu">Daman and Diu</option>
            <option value="Delhi">Delhi</option>
            <option value="Lakshadweep">Lakshadweep</option>
            <option value="Puducherry">Puducherry</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="West Bengal">West Bengal</option>
          </select></td>
    </tr>
    <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
      <td align="right">PinCode</td>
      <td align="center">:</td>
      <td><input style="color:#000051;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; padding: 18px; border: 1px solid grey; border-radius: 10px" placeholder="Eg. 711101" type='text' name='pincode' size=24 maxlength=6> 6 Digits (Numeric)</td>
    </tr>
    <tr style="color: white;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-size: 25px"> 
      <td align="right">Deposit (Rs)</td>
      <td align="center">:</td>
      <td><input style="color:#000051;font-weight: bold; font-family: Comic Sans MS, cursive, sans-serif;font-size: 18px; padding: 18px; border: 1px solid grey; border-radius: 10px" placeholder="Eg. 10000" type='text' name='balance' size=24 maxlength=10> Minimum 1000 Rupees </td>
    </tr>
    <tr> 
      <td style="padding-bottom: 0px;" align="right">&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td> 
        <?php
           date_default_timezone_set("Asia/Kolkata");	
			     $day=date("j M Y");
			     $time=date( "g:i:sa");
			     echo "<input type='hidden' name='day' value='$day'>";
			     echo "<input type='hidden' name='time' value='$time'>";
			  ?>
      </td>
      <td align="center">&nbsp; </td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#000051">
  <tr align="center"> 
    <td>
       <button class="button button1" type="submit">Register</button>
      </td>
      <td>
        <button class="button button2" type="reset" onclick="location.href='index.php'">Go Back To Home</button>
    </td>
  </tr>
 </table>
</form>
</body>
</html>