<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "ta";
$koneksi = mysqli_connect($host,$username,$password,$database);
if(mysqli_connect_error())
{
    echo "Koneksi database gagal";
} else {
    echo "";
}
?>