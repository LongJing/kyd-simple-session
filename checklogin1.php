<?php
require_once('sessionskyd.php');

$users = ['janek'=>'1234','stefek'=>'2345'];

if(!isset($_SESSION['uzytkownikid'])) {

    if(!empty($_POST['myusername']) && !empty($_POST['mypassword'])) {

			$myusername=$_POST['myusername'];
			$mypassword=$_POST['mypassword'];

			$myusername = stripslashes($myusername);
			$mypassword = stripslashes($mypassword);

      if( array_key_exists($myusername, $users) ) {
        if( $users[$myusername] == $mypassword ) {
          $_SESSION['uzytkownikid'] = $myusername;
					header("location:dane.php");
        } else {
          echo "nie prawidłowe hasło";
        }
      } else {
        echo "nie prawidłowy user";
      }
  } else {
    echo "puste dane";
  }
}
