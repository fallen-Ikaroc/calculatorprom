<?php
  $nameDB = "price";
  $nameSERVER = "localhost";
  $nameUSER = "root";
  $passUSER = "";
  mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));

  if (isset ($_POST['login'])) {$loginDB = $_POST['login'];}
  if (isset ($_POST['pass'])) {$passDB = $_POST['pass'];}

  if(isset($loginDB) AND isset($passDB)){
    $passDB = md5($passDB);
    $resultlp = mysql_query("SELECT login,pass FROM user WHERE login='$loginDB'");
    $log_and_pass = mysql_fetch_array($resultlp);
    if($log_and_pass != ""){
      if($loginDB == $log_and_pass[login] AND $passDB == $log_and_pass[pass]){
        echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
      }
      else {
        echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/">';
        exit;
      }
    }
    else {
      echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/">';
      exit;
    }
  }
  else {
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/">';
    exit;
  }

?>
