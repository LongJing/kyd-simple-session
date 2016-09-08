<?php
require_once('sessionskyd.php');

if(!isset($_SESSION['uzytkownikid'])) {
  header("location:index.php");
}
echo "tajne: " . $_SESSION['tajne'];
echo "<br />poufne: " . $_SESSION['poufne'];
