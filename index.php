<!DOCTYPE html>
<html>
    
<head>
    <title>Data Mahasiswa</title>
</head>

<body>
    <header>
        <h2 style= "color: maroon";>Data Mahasiswa</h2>  
    </header>

    <h3>MENU</h3>
    <nav>
        <?php if (isset($_GET['status'])) : ?>
            <p>
                <?php
                if ($_GET['status'] == 'sukses') {
                    echo "Pendaftaran Berhasil";
                } else {
                    echo " Pendaftaran Gagal";
                }
                ?>
            </p>
        <?php endif; ?>
        <ul>
            <li><a href="daftar.php"> Daftar baru</a></li>
            <br>
            <li><a href="list.php"> list</a></li>
        </ul>
    </nav>

</body>
</html>


