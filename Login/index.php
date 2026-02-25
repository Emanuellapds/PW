<?php
session_start();

$_SESSION['user'] = 'Emanuella';
header('Location: welcome.php');
exit();