<?php
    include './koneksi.php';
    $no = $_GET['id'];
    
    $query = "DELETE FROM tb_contact WHERE no = $no";
    mysql_query($query) or die(mysql_error());
    ?>

<script language='JavaScript'>
document.location='index.php'</script>
<?php
?>
