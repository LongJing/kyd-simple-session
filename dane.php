<?php
require_once('sessionskyd.php');

if(!isset($_SESSION['uzytkownikid'])) {
  header("location:index.php");
}

$_SESSION['tajne'] = 'haslotajne';
$_SESSION['poufne'] = 'haslopoufne';
?>
<a href="pokazdane.php">pokaz tajne dane</a>
