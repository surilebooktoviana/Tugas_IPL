<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>

<body>
    <header>
        <h2>Mahasiswa yang terdaftar</h2>
    </header>

    <nav>
        <a href="daftar.php">[+] Penambahan Mahasiswa</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Fakultas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM mahasiswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo  "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['jurusan']."</td>";
            echo "<td>".$siswa['Fakultas']."</td>";
            

            echo "<td>";
            echo "<a href='edit.php?id=".$siswa['id'].
            "'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id'].
            "'>Hapus</a>  ";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </tbody>
    </table>

    <p>Jumlah: <?php echo mysqli_num_rows($query)?></p>

    </body>
</html>