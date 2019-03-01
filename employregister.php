<html>
<head>
       <style link rel="stylesheet" href="style2.css">
	   </style>
</head>
<body>
<form id='register' action='register.php' method='post' accept-charset='UTF-8'>
<div class="form" >
<center><h1>Register</h1>
<input type='hidden' name='submitted' id='submitted' value='1'/><br>
<label for='name' >Company Name: </label>
<input type='text' name='name' id='name' maxlength="50" /><br>
<label for='email' >Email Address:</label>
<input type='text' name='email' id='email' maxlength="50" /><br>
<label for='username' >Number of Employee:</label>
<input type='text' name='username' id='username' maxlength="50" /><br>
<label for='password' >Phone Number:</label>
<input type='password' name='password' id='password' maxlength="50" /><br>
<input type='submit' name='Submit' value='Submit' />
</center>
</div>
</body>
</form>
</html>