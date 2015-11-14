<?php
date_default_timezone_set('Asia/Jakarta');

$server = "localhost";
$username = "root";
$password = "";
$database = "online";

mysql_connect($server,$username,$password) or die ("Gagal");
mysql_select_db($database) or die ("Database tidak ditemukan");

$base_url="http://localhost/sias/";

?>