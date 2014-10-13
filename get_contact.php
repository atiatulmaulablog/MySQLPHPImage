<?php
    include './koneksi.php';
    
    $row = array();
    $no = $_GET['no'];
    
    $select = mysql_query("SELECT * FROM tb_contact WHERE no = $no");
    
    while ($r = mysql_fetch_assoc($select)){
        $row[] = $r;
    }
    
    echo '{"data" : '.  json_encode($row).'}';
?>
