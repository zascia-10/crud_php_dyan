<?php
$hots = "localhost";
$user = "root";
$pass = "";
$db = "todo_list_dyann";

$mysqli = new mysqli($hots, $user, $pass, $db);
if ($mysqli->connect_errno) {
    die("koneksi gagal: " . $mysqli->connect_error);
}