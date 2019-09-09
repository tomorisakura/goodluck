<?php 

include 'koneksi/koneksi.php';

$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysqli_real_escape_string($con,$username);
$password = mysqli_real_escape_string($con,$password);

$kueri = "select * from pengguna where user = '$username' and password = '$password'";

$hasil = mysqli_query($con,$kueri) or die ("Failed".mysqli_error($con));

$row = mysqli_fetch_array($hasil);

if ($row['user'] == $username && $row['password'] == $password) {
    echo "Selamat Datang ".$row['user'];
    header('location: dashboard.php');
} else {
    echo"<script>alert ('username dan password salah');</script>";
    echo "<script> location.href='index.php' </script>";
}

?>