<?php
session_destroy();
unset($_SESSION['utilisateur']);
header('Location:?p=accueil');
exit();
