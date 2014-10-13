<?php
    include './koneksi.php';
    $no = $_GET['id'];
    
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    
    $query = mysql_query("UPDATE tb_contact SET nama = '$nama', email = '$email' WHERE no = '$no'", $connection) or die(mysql_error());
    
    if ($query){
        ?>
<script language="JavaScript">
document.location='index.php'</script>
        <?php
    }
?>
