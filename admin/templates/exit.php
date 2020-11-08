<?php
session_start();
unset ($_SESSION['$logSESS']);
session_destroy();
header("location: index.php");
exit;
?>
