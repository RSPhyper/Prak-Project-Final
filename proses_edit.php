<?php

include "koneksi.php";
$id = $_GET['id_mahasiswa'];
$nim = $_GET['nim'];
$nama = $_GET['nama'];
$jurusan = $_GET['jurusan'];
$JK = $_GET['JK'];
$agama = $_GET['agama'];

$edit = $_GET['edit'];

if ($edit){
    $sql = mysqli_query($koneksi, "UPDATE pertemuan2
    SET id = '$id',nim = '$nim',nama = '$nama',jurusan = '$jurusan',
    JK = '$JK',agama = '$agama'
    WHERE id = '$id'");
        if ($sql){ ?>
        <script>
            alert('Update Data Sukses');
            window.location.href = "tampilan.php";
        </script>
        <?php
        }else{
            echo "Update data gagal";
        }
}
