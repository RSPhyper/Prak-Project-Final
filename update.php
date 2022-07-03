<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Document</title>
    </head>

    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $sql = mysqli_query($conn,"SELECT * FROM prakfinal 
    WHERE id = '$id'");
    foreach ($sql as $data => $key) : ?>

    <body>
        <form action="proses_edit.php" method="GET">
            <table>
                <tr>
                    <td><input type="number" name="id"
                    value="<?=$key['id']?>" hidden></td>
                </tr>
                <tr>
                    <td>nama</td>
                    <td><input type="text" name="nama" 
                    value="<?=$key['nama'] ?>"></td>
                </tr>
                <tr>
                    <td>jurusan</td>
                    <td><input type="text" name="deskripsi" 
                    value="<?=$key['deskripsi'] ?>"></td>
                </tr>
                <tr>
                    <td>gambar</td>
                    <td><input type="file" name="img" 
                    value="<?=$key['img'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="edit" 
                    value="update Data"></td>
                </tr>
            </table>
        </form>
    </body>
    <?php endforeach; ?>
</html>