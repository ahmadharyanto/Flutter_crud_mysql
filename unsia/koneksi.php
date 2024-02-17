<?php
$connect = new mysqli("localhost","root","","givin_db"); 

if ($connect){
}else{
    echo "Koneksi Gagal";
    exit();
}
?>
