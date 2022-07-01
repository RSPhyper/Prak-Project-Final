<?php
include "koneksi.php";

$id = $_GET['id'];
$sql = mysqli_query($conn, "DELETE FROM prakfinal WHERE id ='$id'");
if($sql) { ?>
    <script>
    alert('Hapus data sukses');
    window.location.href= "Admin.php";
    </script>
    <?php
}else{
    echo "Hapus data gagal";
}
?>