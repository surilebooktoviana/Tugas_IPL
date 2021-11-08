<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
</head>

<body>
    <header>
        <h3>Data Mahasiswa</h3>
    </header>

    <form action="pendaftaran.php" method="POST">
        <fieldset>
            <p>
                <h3 style="color: maroon"> Nama </h3>
                <label for="nama"></label>
                <input type="text" name="nama"
                placeholder="nama lengkap" />
            </p>
            <p>
            <h3 style="color: maroon"> Jurusan </h3>
                <label for="alamat"></label>
                <input type="text" name="jurusan"
                placeholder="jurusan" />
            </p>
            <p>
                <h3 style="color: maroon"> Fakultas </h3>
                <label for="nama"></label>
                <input type="text" name="Fakultas"
                placeholder="Fakultas" />
            </p>
            <p>
                <input type="submit" value="Daftar"
                name="daftar" />
            </p>
        </fieldset>
    </form>
</body>
</html>