<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select nama_lengkap from user where nama_lengkap = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['nama_lengkap'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>