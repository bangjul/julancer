<?php
   
   session_start();
   
   if(empty($_SESSION['login_user'])){

   }else{
      $user_check = $_SESSION['login_user'];
   
      $ses_sql = mysqli_query($db,"select id, nama_lengkap, email, nomor_telepon, industri, deskripsi, rule, foto_profile from user where nama_lengkap = '$user_check' ");
      
      $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

      
      $_SESSION['login_session'] = $row['nama_lengkap'];
      $_SESSION['id_user'] = $row['id'];
      $_SESSION['nama_perusahaan'] = $row['nama_lengkap'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['nomor_telepon'] = $row['nomor_telepon'];
      $_SESSION['industri'] = $row['industri'];
      $_SESSION['deskripsi'] = $row['deskripsi'];
      $_SESSION['foto_profile'] = $row['foto_profile'];
      $_SESSION['rule'] = $row['rule'];
      
      // if(!isset($_SESSION['login_user'])){
      //    header("HTTP/1.0 404 Not Found");
         
      // }
   }
?>