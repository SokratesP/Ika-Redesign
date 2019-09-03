<?php

require '../inc/config.php';

// No user has logged in, no need to log out
if ($user == null) {
    header('Location: index.php');
}

$user = null;

session_destroy();

/*session_unset();*/
header('Location: index.php');
