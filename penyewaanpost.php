<?php
if(isset($_POST['btnSubmit'])){
    $judul = $_POST["judulbuku"];
    $kategori = $_POST["kategoribuku"];
    $tgl  = $_POST["date"];
    $lamapinjam = $_POST["lamapinjam"];
    $namaanggota = $_POST["Namaanggota"];
    $namapetugas = $_POST["Namapetugas"];
    
      $harga=0;
      if ($kategori == "karyailmiah") {
          $harga = 10000;
      }
      else {
          $harga = 5000;
      }
      $total = $harga*$lamapinjam;
  

    echo "Judul buku : $judul<br>";
    echo "Kategori buku :  $kategori<br>";
    echo "tanggal pinjam :  $tgl<br>";
    echo "lama pinjam :  $lamapinjam<br>";
    echo "Nama anggota :  $namaanggota<br>";
    echo "Nama petugas :  $namapetugas<br>";
    echo "Total : $total "; 

    
}
?>

