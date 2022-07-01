<?php
    include "koneksi.php"; //untuk menghubungan database
// harus sesuai yang ada didatabase agar tidak terjadi error
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    // $gambar = $_POST['img'];

    $gambar = $_FILES['img']['name'];
    // $foto1 = %$_FILES['foto']['tmp_name'];

    // // tentukan lokasi file yang akan dipindahkan
    // $foto3 = 'gambar/';
    // // pindahkan file
    // $foto4 = move_uploaded_file($foto1, $foto3, $foto);

    $tambah = $_POST['tambah'];
    if ($tambah){
        $sql = mysqli_query($conn, "INSERT INTO prakfinal
        VALUES('','$nama','$deskripsi','$gambar')");
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
    $namaFile = $_FILES['img']['name'];
        $tmpName = $_FILES['img']['tmp_name'];
    
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo    "<script>
                        alert('yg di upload bukan gambar!');
                    </script>";
            return false;
        }
    
        move_uploaded_file($tmpName, 'img/' . $namaFile);
        return $namaFile;

    // // untuk cek error di php/else yang muncul
    // var_dump($nama variabel)
?>