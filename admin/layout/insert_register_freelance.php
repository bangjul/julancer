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
$num0 = (rand(10,10000));
//upload foto------------------------------------

 $nama_lengkap=$_POST['namalengkap'];
 $nomortelepon=$_POST['nomortelepon'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $rule="3";
 $foto_profile=$target_dir. $num0;
 // $nama_lengkap="lio";
 // $industri="aaaa";
 // $email="lio@gmal.com";
 // $password="123";
 // $rule="2";

 $sql = "INSERT INTO user(nama_lengkap, nomor_telepon, email, password, rule, foto_profile) VALUES ('$nama_lengkap','$nomortelepon','$email', '$password', '$rule', '$foto_profile')";


mysql_select_db('oilancer');
$retval = mysql_query( $sql, $conn );

//upload foto -----------------------------------------------------
$var = explode('.',$file['name']);
//$namee = mysql_insert_id();

$target_file = "../".$foto_profile.".".strtolower(array_pop($var)) ;
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
echo "Entered data successfully\n";
header("location: /oilancer/admin/index.php?p=datafreelance");

mysql_close($conn);
?>