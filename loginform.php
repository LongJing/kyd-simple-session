<?php
require_once('sessionskyd.php');
?>
<html>
<head>
  <title>login form</title>
</head>
<body>
  <form method="post" action="checklogin1.php">
    <p>Użytkownik</p>
    <input name="myusername" type="text" id="myusername">
    <p>Hasło</p>
    <input name="mypassword" type="password" id="mypassword">
    <input type="submit" name="Submit" value="Wejdź"></td>
  </form>
</body>
</html>
