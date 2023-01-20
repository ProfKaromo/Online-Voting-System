<?php
	session_start();
	if(!isset($_SESSION['reg_no'])){
	header("location:login.php");
	}
	else{
?>
<html>
	<head>
		<link rel="shortcut icon" href="Images/logo.ico">
		<title>Contact Us</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet"type = "text/css" href="formcss.css">
		<script language="javascript" src="javascript/form_validation.js" type="text/javascript"></script>
		<script>
		function focus_field()
		{
			contact_form.name.focus();
		}
		function clearDefault(a)
		{
			if(a.defaultValue==a.value)
			{
				a.value="";
			}
		}
		</script>
	</head>
	<body align="center" onload="focus_field()">
	<br><br>
	<img src = "images/email.jpeg" height="130px" align = "center">
	<form id="contact_form" action="contact_exc.php" method="POST" onsubmit="return validateForm();" enctype="multipart/form-data">
	  <div class="row">
		<label class="required" for="fname">First Name:</label><br />
		<input id="name" name="fname" type="text" value="" size="30" onkeyup = "this.value=this.value.toUpperCase();" /><br />
		<span id="name_validation" class="error"></span>
	  </div>
	  
	  <div class="row">
		<label class="required" for="sname">Second Name:</label><br />
		<input id="name" name="sname" type="text" value="" size="30" onkeyup = "this.value=this.value.toUpperCase();" /><br />
		<span id="name_validation" class="error"></span>
	  </div>

	  <div class="row">
		<label class="required" for="phone_no">phone number:</label><br />
		<input id="phone_no" name="phone_no" type="text" value="" size="12" /><br />
		<span id="phone_no_validation" class="error"></span>
	  </div>

	  <div class="row">
		<label class="required" for="email">Your email:</label><br />
		<input id="email" name="email" type="text" value="" size="30" /><br />
		<span id="email_validation" class="error"></span>
	  </div>
	  <div class="row">
		<label class="required" for="message">Your message:</label><br />
		<textarea id="message" name="message" rows="5" cols="50" onfocus="clearDefault(this)">Write your message here...</textarea><br />
		<span id="message_validation" class="error"></span>
	  </div>
		
		<input type="submit" value="Send email" class="button"/>
	</form>

</body>

</html>
<?php
}
?>