<?php
require_once('sessionskyd.php');

if(!isset($_SESSION['uzytkownikid'])) {
  header("location:loginform.php");
} else {
  echo "Witaj " . $_SESSION['uzytkownikid'];
}
