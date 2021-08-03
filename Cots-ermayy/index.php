<?php

include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM peserta ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labibah Raihanatul Salwa-COTS-Backend</title>
</head>
<body>
    <h2>TABEL DAFTAR PESERTA LOMBA MOBILE LEGEND</h2>
    <table border='1'>
    <tr>
        <th>Nama Peserta</th>
        <th>Kelas</th>
        <th>Nama Akun ML</th>
        <th>Aksi</th>
    </tr>
    <?php  
    while($data_peserta = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data_peserta['nama_peserta']."</td>";
        echo "<td>".$data_peserta['kelas']."</td>";
        echo "<td>".$data_peserta['akun_ml']."</td>";    
        echo "<td><a href='#'><button style='color: blue;'>Edit</button></a> | <a href='#'><button style='color: red;'>Delete</button></a></td></tr>";        
    }
    ?>
    </table>
</body>
</html><?php

include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM peserta ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Erna Mayy-COTS-Backend</title>
</head>
<body>
    <h2>TABEL DAFTAR PESERTA LOMBA MOBILE LEGEND</h2>
    <table border='1'>
    <tr>
        <th>Nama Peserta</th>
        <th>Kelas</th>
        <th>Nama Akun ML</th>
        <th>Aksi</th>
    </tr>
    <?php  
    while($data_peserta = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data_peserta['nama_peserta']."</td>";
        echo "<td>".$data_peserta['kelas']."</td>";
        echo "<td>".$data_peserta['akun_ml']."</td>";    
        echo "<td><a href='#'><button style='color: blue;'>Edit</button></a> | <a href='#'><button style='color: red;'>Delete</button></a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>