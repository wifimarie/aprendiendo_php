

<?php
$server = 'localhost';
$user = 'marie';
$pass = 'aresyyoforever';
$db = 'marie_database';

$conn = mysqli_connect($server, $user, $pass) or die("error");

$selectdb = mysqli_select_db($conn, $db) or die("error");
?>