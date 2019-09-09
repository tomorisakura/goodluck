<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style/show_table.css">
    <title>Document</title>
</head>
<body>
<div class="posisi">
<table>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Status</th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th>Action</th>
        </tr>
        <?php 

        include 'koneksi/koneksi.php';

        $hint = $_GET["hint"];
        
        $i = 1;
        $kueri = "SELECT * FROM karyawan WHERE id_karyawan LIKE '%$hint%' OR nama LIKE '%$hint%'";
        $hasil = mysqli_query($con,$kueri);

        foreach ($hasil as $data ) {
        ?>
        <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $data['id_karyawan']; ?></td>
        <td><?php echo $data['nik']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['tgl_lahir']; ?></td>
        <td><?php echo $data['status']; ?></td>
        <td><?php echo $data['jk']; ?></td>
        <td><?php echo $data['jabatan']; ?></td>
        <td>
        <button id="btn_update"><a href="" >Update</a></button>
        <button id="btn_delete"><a href="" >Delete</a></button>
        </td>
        </tr>
        <?php } ?>
    </table>
    </div>
    <br>
    <br>
</body>
</html>