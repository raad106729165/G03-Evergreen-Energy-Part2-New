<?php


session_start();
// if (!isset($_SESSION['username'])) { header("Location: login.php"); exit(); } 
// waiting for login page//
<?php
require_once("settings.php");

// connect to the database
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

// variables used later in the page
$msg = "";
$result = null;

if (!$conn) {
    $msg = "<p>Sorry, couldn't connect to the database right now.</p>";
} else {
    // queries go here
}
?>