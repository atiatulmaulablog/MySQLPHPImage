<?php 
    include './koneksi.php';
    $query = mysql_query("SELECT * FROM tb_contact", $connection) or die(mysql_error());
    $jumlah = mysql_num_rows($query);
    
    echo '<html>';
    echo '<head>';
    echo '</head>';
    echo '<title>MySQL PHP Demo By. Atiatul Maula</title>';
    echo '<body>';
    echo '<font color="#000000" face="Tohama" size=3>';  
    echo '<b><br>List Contact</b><br><br>';  
    echo '<a href="add.php" style="text-decoration: none"><font size=2>Add new contact</a><br>';
    echo '<br><table border="1" cellpadding="1" cellspacing="1" bordercolor="#0000AA" bgcolor="#ffffff">';
    echo '<tr bgcolor="#A0A0A0" height="30"><font color="#ffffff">';       
    echo '<th align="left">No</th>';     
    echo '<th align="left">Name</th>';
    echo '<th align="left">Email</th>';
    echo '<th align="left">Gambar</th>';
    echo '<th align="left">Aksi</th>';
    echo '</font></tr>';   
    
    $j=0;
    while ($row=  mysql_fetch_array($query)){
        echo '<tr bgcolor="#A0A0A0" height="30"><font color="#ffffff">';       
        echo '<th align="left">'; echo $row["no"]; echo '</th>';     
        echo '<th align="left">'; echo $row["nama"]; echo '</th>';
        echo '<th align="left">'; echo $row["email"]; echo '</th>';
        echo '<th align="left">'; echo '<img src="'.$row["lokasi_gambar"].'" width="100"/>'; echo '</th>';
        echo '<th align="left">'; 
            echo '<a href="delete.php?id='.$row["no"].'" style="text-decoration: none" title="delete"><font size=2>Delete</a><br>'; 
            echo '<a href="edit.php?id='.$row["no"].'" style="text-decoration: none" title="edit"><font size=2>Edit</a><br>'; echo '</th>';
        echo '</font></tr>';   
    }
    
    echo '</table>';  
    echo '</font>';
    echo '</body>'; 
    echo '</html>';
?>       