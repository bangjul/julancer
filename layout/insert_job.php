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


//upload foto--------------------------------
$file = $_FILES["fileToUpload"];
$file_name = $file['name'];
$file_size = $file['size'];
$file_tmp = $file['tmp_name'];
$file_type = $file['type'];
$target_dir = "uploads/";
//upload foto------------------------------------



$num0 = (rand(10,10000));
//session_start();
 $id_user=$_SESSION['id_user'];
 $job_file=$target_dir. $num0;
 $kategori=$_POST['kategori'];
 $judul=$_POST['judul-job'];
 $keterangan=$_POST['deskripsi'];
 $gaji=$_POST['gaji'];
 $tanggal_berahir=$_POST['tanggal_berahir'];
 $link=$_POST['link'];


$sql = "INSERT INTO pekerjaan(id_user, kategori, judul, keterangan, gambar_pekerjaan, gaji, tanggal_berahir, link) VALUES ('$id_user', '$kategori','$judul','$keterangan', '$job_file', '$gaji', '$tanggal_berahir', '$link')";

mysql_select_db('oilancer');
$retval = mysql_query( $sql, $conn );

//upload foto -----------------------------------------------------
$var = explode('.',$file['name']);
$namee = mysql_insert_id();
// $target_file = $target_dir .$_POST['judul-job']. ".".strtolower(array_pop($var)) ;
// $target_file = $target_dir .$namee. ".".strtolower(array_pop($var)) ;
$target_file = $job_file.".".strtolower(array_pop($var)) ;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
if($imageFileType != "jpg" && $imageFileType != "jpeg") {
    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    echo "Sorry, only JPG and jpeg files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($file_tmp, $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
//uploaf foto



if(! $retval ) {
	die('Could not enter data: ' . mysql_error());
}

//echo "Entered data successfully\n";
header("location: http://localhost/oilancer/");
//$this->redirect("http://localhost/oilancer/");
mysql_close($conn);
?>