<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <form action="penyewaanpost.php" method="post">
        judul buku : <input type="text" name="judulbuku"><br>
        kategori buku : <select name="kategoribuku">
            <option value="" selected></option>
            <option value="fiksi" selected>fiksi</option>
            <option value="non_fiksi" selected>non fiksi</option>
            <option value="karyailmiah" selected>karya ilmiah</option>
            <option value="majalah" selected>majalah</option><br>
        </select><br>
        Tanggal Pinjam <select name="date">
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <select name="month">
            <?php
            $month = array("januari", "februari", "maret", "april", "mei", "juni", "juli", "agustus", "september", "oktober", "november", "desember");
            foreach ($month as $mon) {
                echo "<option value='$month'>$mon </option>";
            }
            ?>
        </select>
            <select name="year">
                <?php
                for ($i = 2015; $i <= 2020; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
            <br>
            lama pinjam : <input type="number" name="lamapinjam"><br>
            Nama Anggota : <input type="text" name="Namaanggota"><br>
            Nama petugas : <select name="Namapetugas">
            <option value="" selected></option>
            <option value="Anggimarta" selected>Anggi marta</option>
            <option value="Sanaspermana" selected>Sanas permana</option>
            </select><br>
          

            <input name="btnSubmit" value="Simpan" type="submit" />
            <input name="btnCancel" value="batal" type="reset" />
    </form>
</body>

</html>