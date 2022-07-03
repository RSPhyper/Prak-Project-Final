<?php
require 'koneksi.php';


if(isset($_POST["submit"]) ){
    if(tambah($_POST) > 0){
        echo "<script>
            alert ('Data berhasil ditambahkan');
            document.location.href='index.php';
        </script>";
    }
    else{
        echo "<script>
            alert ('Data gagal ditambahkan');
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- harus sesuai nama di database atau fill -->
    <form action="prosestambah.php" enctype="multipart/form-data" method="post">
        <table>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr>
                <td>gambar</td>
                <td>
                    <input type="file" name="gambar" id="">
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="tambah" id="Tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>