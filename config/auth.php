<?php
require_once 'koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'");

if (mysqli_num_rows($query) == 1) {
    header('Location:../app ');
} else if ($username == '' || $password == '') {
    header('Location:../index.php?error=2');
} else {
    header('Location:../index.php?error=1');
}