<?php
session_start();
unset($_SESSION["role"]);
header("Location: ./index.php");
exit;
?>