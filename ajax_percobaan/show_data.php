<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style/show_table.css">
    <title>Data Karyawan</title>
</head>
<body>
    <div id="first">
<div class="head">
    <div class="back">
        <form action="" method="POST">
        <input type="text" name="txt_cari" id="text" placeholder="Cari Data">
        </form>
    </div>
</div>

<br>

<div id="kontent">
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
        
        $i = 1;
        $kueri = 'SELECT * FROM karyawan';
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

    </div>
    <div class="tengah">
        <form action="tambah_data.php">
            <input id="tambah_btn" type="submit" value="Tambah Karyawan">
        </form>
    </div>

    </div>
    <script src="java.js"></script>    
</body>
</html>