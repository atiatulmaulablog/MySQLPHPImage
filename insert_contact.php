<?php
    include './koneksi.php';
    $nama = $_POST['nama'];
    $email = $_POST['email'];
        
    if(isset($_POST['submit'])){
    $fileName = $_FILES['gambar']['name']; //mendapatkan nama file image
    $fileSize = $_FILES['gambar']['size']; //mendapatkan ukuran file image
    $fileError = $_FILES['gambar']['error']; //mendapatkan erro
    $uploaddir='./upload/';
    $lokasi=$uploaddir.$fileName;
    }
    
    if($fileSize > 0 || $fileError == 0){ //Jika tidak ada error
        $move = move_uploaded_file($_FILES['gambar']['tmp_name'],$lokasi); //simpan gambar ke folder upload
        if($move){
            $query = mysql_query("INSERT INTO tb_contact (nama, email, nama_gambar, lokasi_gambar) VALUES ('$nama', '$email', 
                '$fileName','$lokasi')") or die(mysql_error());
            if ($query){
                ?>
                <script language="JavaScript">
                document.location='index.php'</script>
                <?php
            }
        } else{
            echo "<h3>Failed! </h3>";
        }
    } else {
        echo "Failed to Upload : ".$fileError;
    }
?>
