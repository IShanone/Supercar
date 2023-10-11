<?php

session_start(); 
session_destroy();
unset($_SESSION['utilisateur']);
header("Location: ../index.php");
exit();

?>