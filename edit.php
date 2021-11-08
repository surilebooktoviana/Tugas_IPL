<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: list.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>

<body>
    <header>
        <h3>Data Mahasiswa</h3>
    </header>

    <form action="edits.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

         <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama"
            placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="alamat">Jurusan: </label>
            <input type="text" name="jurusan"
            placeholder="jurusan" value="<?php echo $siswa['jurusan'] ?>" />
        </p>
        <p>
            <label for="nama">Fakultas: </label>
            <input type="text" name="Fakultas"
            placeholder="Fakultas" value="<?php echo $siswa['Fakultas'] ?>" />
        </p>
        <p>
            <input type="submit" value="simpan" name="simpan"/>
        </p>

        </fieldset>

    </form>

    </body>

</html>

