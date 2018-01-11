<?php

// Database connection details
$db_host = "localhost";     // The host of the database
$db_username = "root";      // Database username
$db_password = "";          // Database password
$db_name = "sdi1400166";    // Database name

// Initialize a connection to the database
$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Start a new session if one doesn't exist
if (!isset($_SESSION))
    session_start();

$user = null;
// Check if user is logged in
if (!empty($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
    $query = "SELECT * FROM users WHERE id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();
}

require_once("utils.php");