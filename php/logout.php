<?php

session_start();
Session_destroy();
header('location:loggin.php');
die();

?>