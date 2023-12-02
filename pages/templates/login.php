<?php
session_start();

$_SESSION['user'] = $_POST['email'];

header('Location: bemvindo.php');

?>