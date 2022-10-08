<?php
session_start();
?>
<html>
<head><title>Login</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
<form action="login.php" method="POST">
Username <input  name="Username" type="text" placeholder="Username" /><br>
 Password <input  name="Password" type="password" placeholder="Password" /><br>
 <button type="submit">Login</button>
</form><br><br><br>
<form action="signup.php" method="POST">
 Firstname<input  name="Firstname"type="text" placeholder="Firstname" /><br>
 Lastname <input  name="Lastname" type="text" placeholder="Lastname" /><br>
 Username <input  name="Username" type="text" placeholder="Username" /><br>
 Password <input  name="Password" type="password" placeholder="Password" /><br>
  <button type="submit">Sign up</button>
  </form>
</body>
</html>