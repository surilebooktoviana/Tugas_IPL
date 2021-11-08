<?php

include("config.php");

if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $fakultas = $_POST['Fakultas'];

    $sql = "INSERT INTO mahasiswa (nama, jurusan, Fakultas) VALUE
    ('$nama', '$jurusan', '$Fakultas')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>