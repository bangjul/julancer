<?php
 //include "koneksi.php"; //panggil file koneksi.php yang telah dibuat
 //mengambil variabel yang dikirim oleh index.php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysql_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}

 $nama_lengkap=$_POST['namalengkap'];
 $nomortelepon=$_POST['nomortelepon'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $rule="3";

 // $nama_lengkap="lio";
 // $industri="aaaa";
 // $email="lio@gmal.com";
 // $password="123";
 // $rule="2";

 $sql = "INSERT INTO user(nama_lengkap, nomor_telepon, email, password, rule) VALUES ('$nama_lengkap','$nomortelepon','$email', '$password', '$rule')";

mysql_select_db('oilancer');
$retval = mysql_query( $sql, $conn );
if(! $retval ) {
die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
header("location: index.php");

mysql_close($conn);
?>