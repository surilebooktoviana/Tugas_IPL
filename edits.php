<?php
include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $Fakultas = $_POST['Fakultas'];

    $sql = " UPDATE mahasiswa SET nama='$nama', jurusan='$jurusan', Fakultas='$Fakultas' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list.php');
    } else {
        die("gagal menyimpan perubahan...");
    }

} else {
    die("akses dilarang...");
}

?>