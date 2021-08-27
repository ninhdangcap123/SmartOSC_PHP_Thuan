<?php

unset($_SESSION['login']);
session_destroy();
header('location:index.php?Controller=Student&action=login');
?>
