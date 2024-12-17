<?php
$rootDir = $_SERVER['DOCUMENT_ROOT'].'/gacoan/';
 $Server="localhost";
 $User="root";
 $Pass="";
 $DB="gacoan";

 $koneksi = mysqli_connect($Server,$User,$Pass,$DB);

 if(mysqli_connect_errno()){
    echo"Failed to connect to MySQL". mysqli_connect_error();
    exit();
 }
?>