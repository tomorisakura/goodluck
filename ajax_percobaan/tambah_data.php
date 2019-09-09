<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style/add_table.css">
    <title>Tambah Karyawan</title>
</head>
<body>
    <div class="head">
    <h3>Tambah Karyawan</h3>
    </div>
    <div class="tengah">
        <form action="proses_simpan.php" method="POST" class="form">
            <table>
                <tr>
                    <td> <p>NIK</p> </td>
                    <td> <input type="text" name="nik" class="box_btn"> </td>
                </tr>
                <div class="spasi"></div>
                <tr>     
                    <td> <p>Nama</p> </td>
                    <td> <input type="text" name="nama" class="box_btn"> </td>
                </tr>
                <tr>        
                    <td> <p>Alamat</p> </td>
                    <td> <input type="text" name="alamat" class="box_btn"> </td>
                </tr>
                <tr>
                    <td> <p>Tanggal Lahir</p> </td>
                    <td><input type="date" placeholder="Tanggal Lahir" name="tgl_lahir" id="" class="box_btn"></td>
                </tr>
                <tr>
                    <td> <p>Status</p> </td>
                    <td><select name="status" id="" class="box_btn">
                        <option>-PILIH-</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Menikah">Menikah</option>
                    </select></td>
                </tr>
                <tr>
                    <td> <p>Jenis Kelamin</p> </td>
                    <td> <input type="radio" required="required" name="jk" value="Laki - Laki">Laki - Laki
                    <input type="radio" required="required" name="jk" value="Perempuan">Perempuan </td>
                </tr>
                <tr>        
                    <td> <p>Jabatan</p> </td>
                    <td><select name="jabatan" id="" class="box_btn"> 
                            <option >-PILIH-</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="Operator">Operator</option>
                            <option value="Manager">Manager</option>
                        </select> </td>
                </tr>
                <tr>
                    <td><input type="submit" name="save_data" value="Simpan" id="btn_simpan"></td>
                </tr>    
            </table>
        </form>
    </div>
</body>
</html>