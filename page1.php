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

}
else{
    ?>

    <html>
        <body>
            <form action ="" method="post">
                Nama : <input type="text" name="name"><br>
                Email : <input type="email" name="email"><br>
                Password : <input type="text" name="password"><br>
                Tanggal lahir : <input type="date" name="Tanggal lahir"><br>
                Program studi : <select name="Program studi">
                    <option value="" selected></option>
                    <option value="sistem informasi" selected>sistem informasi</option>
                    <option value="ilmu komputer" selected>ilmu komputer</option>
                    <option value="manajemen" selected>manajemen</option>
                    <option value="teknik industri" selected>teknik industri</option>
                    <option value="psikologi" selected>psikologi</option>
                    <option value="ilmu komunikasi" selected>ilmu komunikasi</option>
                    <option value="sastra inggris" selected>sastra inggris</option>
                </select><br>
                Alamat : <input type="text" name="Alamat"><br>
                No : <input type="text" name="Handphone"><br>
                Jenis kelamin: <input type="radio" name="Jenis_kelamin"value="perempuan">perempuan
                <input type="radio" name="subject"value="pria">pria<br>
                
                <input name="btnSubmit" value="save" type="submit"onclick="signup()"/>
                <input name="btnCancel" value="cancel" type="reset"/>
            </form>
            <script>
        function signup(){
            alert("Berhasil!");
        }
    </script>
        </body>
    </html>
    <?php
}
?>



