<?php
    include "koneksi.php"; //untuk menghubungan database
// harus sesuai yang ada didatabase agar tidak terjadi error
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $nama_file = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    $folder = "img/";
    $tambah = $_POST['tambah'];

    move_uploaded_file($source, $folder.$nama_file);
    if ($tambah){
        $sql = mysqli_query($conn, "INSERT INTO prakfinal VALUES(
        '',
        '$nama',
        '$deskripsi',
        '$nama_file')");

    if ($sql){ ?>
        <script>
            alert('tambah data sukses');
            window.location.href = "Admin.php"
        </script>

        <?php
        } else {
            echo "tambah data gagal";
        }
    }


    // // untuk cek error di php/else yang muncul
    // var_dump($nama variabel)
?>