<?php
$hots = "localhost";
$user = "root";
$pass = "";
$db = "crud_php_dyan";

$mysqli = new mysqli($hots, $user, $pass, $db);
if ($mysqli->connect_errno) {
    die("koneksi gagal: " . $mysqli->connect_error);
}