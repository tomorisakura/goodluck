<?php 

include 'koneksi/koneksi.php';

$nik_karyawan = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tgl = $_POST['tgl_lahir'];
$status = $_POST['status'];
$jk_karyawan = $_POST['jk'];
$jabatan = $_POST['jabatan'];

$tgl = date("Y-m-d", strtotime($tgl));

$kueri = "INSERT INTO karyawan VALUES('','$nik_karyawan','$nama','$alamat','$tgl','$status','$jk_karyawan','$jabatan')";

if (mysqli_query($con, $kueri)) {
    echo "<script>alert ('Data Berhasil Disimpan');</script>";
    echo "<script> location.href='show_data.php' </script>";
}else {
    echo "<script>alert ('Gagal Menyimpan Data');</script>";
    echo "<script> location.href='tambah_data.php' </script>";
}

?>