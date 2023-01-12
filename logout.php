<?php
session_start();

unset($_SESSION['sess_user']);
unset($_SESSION['sess_password']);

header('location: index.php');
?>