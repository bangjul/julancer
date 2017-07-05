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


$id_job = $_POST['id'];
$id_user = $_SESSION['id_user'];



$sql = "INSERT INTO daftar_pekerjaan(id_pekerjaan, id_user) VALUES ('$id_job', '$id_user')";

mysql_select_db('oilancer');
$retval = mysql_query( $sql, $conn );



if(! $retval ) {
    echo $id_job;
    echo $id_user;
	die('Could not enter data: ' . mysql_error());

}

//echo "Entered data successfully\n";
header("location: /oilancer/index.php");
//$this->redirect("http://localhost/oilancer/");
mysql_close($conn);
?>