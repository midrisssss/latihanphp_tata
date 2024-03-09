<?php
if(isset($_POST['btnSubmit'])){
    $Nama = $_POST["name"];
    $Email = $_POST["email"];
    $Password = $_POST["password"];
    $tgl  = $_POST["Tanggal_lahir"];
    $Programstudi = $_POST["Program_studi"];
    $Alamat = $_POST["Alamat"];
    $No = $_POST["Handphone"];
    $Jenis_kelamin = $_POST["Jenis_kelamin"];

    echo "Nama : $Nama<br>";
    echo "Email :  $Email<br>";
    echo "Password :  $Password<br>";
    echo "Tanggal lahir :  $tgl<br>";
    echo "Program studi :  $Programstudi<br>";
    echo "Alamat:  $Alamat<br>";
    echo "No:  $No<br>";
    echo "Jenis kelamin:  $Jenis_kelamin<br>";

    echo "Hii $Nama";
}
?>
