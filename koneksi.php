<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $databasename = "db_contact";
    $connection = mysql_connect($host, $username, $password) or die("Masalah Koneksi ... !!!");
    mysql_select_db($databasename, $connection) or die("Masalah Database ... !!!");
?>