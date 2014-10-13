<?php
    include './koneksi.php';
    $no = $_GET['id'];
    
    $query = mysql_query("SELECT * FROM tb_contact WHERE no = $no");
    while ($row = mysql_fetch_array($query)){
        $nama = $row['nama'];
        $email = $row['email'];
        
        echo '<html>';
        echo '<body>'; 
        echo '<b>Edit Contact</b>';      
        echo '<table align="left">';
        echo '<form method="post" action="update.php?id='.$no.'" enctype="multipart/form-data">';
        echo '<br>';
        echo '<tr>';
        echo '<td>Nama</td><td>:</td><td><input type="text" name="nama" size="30" value="'.$nama.'"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Email</td><td>:</td><td><input type="text" name="email" size="30" value="'.$email.'"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td></td><td></td>';
        echo '<td>';
        echo '<input type="submit" value="Update">';
        echo '<a href="index.php" style="text-decoration: none">Back</a>'; 
        echo '</td>'; 
        echo '</tr>'; 
        echo '</form>'; 
        echo '</table>'; 
        echo '</body>'; 
        echo '</html>';
    }
    
?>