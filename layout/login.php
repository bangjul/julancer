<?php
   include("koneksi.php");
   include("session.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   	if($_POST['method'] == "db"){
   		// username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['namalengkap']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM user WHERE nama_lengkap = '$myusername' and password = '$mypassword' LIMIT 0,1";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	
      if($count == 1) {
         //session_register("nama_lengkap");
        $_SESSION['login_user'] = $myusername;
		$_SESSION['rule'] = $row['rule'];
		$_SESSION['login_method'] = "db";

         if($_SESSION['rule'] == 1){
         	header ("location: /oilancer/admin/index.php");
         }
         else if($_SESSION['rule'] == 2 || $_SESSION['rule'] == 3){
         	header("location: /oilancer/index.php");	
         }else{
         	echo "<script>windows.alert('Error')</script>";
         }
         
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   	}else if($_POST['method'] == "firebase"){
   		$_SESSION['login_user'] = $_POST['email'];
   		$_SESSION['email'] = $_POST['email'];
   		$_SESSION['id_user'] = $_POST['id'];
		$_SESSION['rule'] = 3;
		$_SESSION['login_method'] = "firebase";
		$_SESSION['foto_profile'] = $_POST['photoURL'];
		$_SESSION['login_session'] = $_POST['name'];
		$_SESSION['nomor_telepon'] = "-";
		$_SESSION['deskripsi'] = "-";

         if($_SESSION['rule'] == 1){
         	header ("location: /oilancer/admin/index.php");
         }
         else if($_SESSION['rule'] == 2 || $_SESSION['rule'] == 3){
         	header("location: /oilancer/index.php");	
         }else{
         	echo "<script>windows.alert('Error')</script>";
         }
   	}else{
   		echo "<script>windows.alert('yoyo')</script>";
   	}
   }
?>

<!-- <script>
	window.alert('tes');
	window.alert('<?= $count?>');
	window.alert('<?= $_SESSION['rule2'] ?>');
	window.alert('<?= $row['rule'] ?>');
</script> -->

<div class="login-section" id="div_login" style="display: 'none'">
		<div class="ui stackable middle aligned center aligned grid" id="top-login-regis">
		    <div class="column" id="content-login-regis">
		        <a href="?p=home">
		            <img class="ui centered medium image" src="public/images/logo-login.png">
		        </a>

		        <p class="ui header">Silahkan masuk ke dalam akun kamu</p>
		        <br>
			       
					        <form id="main_form" class="ui form" method="POST" action="">
					            <div class="field">
					                <input type="text" name="namalengkap" placeholder="username">
					            </div>
					            	
					            <br>
					            <div class="field">
					                <input type="password" name="password" placeholder="Password" id="txtPassword">
					            </div>
					            <input type="text" name="method" value="db" hidden>
					            <br>
					            <div class="inline fields">
					                <div class="inline field">
									    <div class="ui toggle checkbox">
									      <input type="checkbox" tabindex="0" class="hidden">
									      <label>Ingat Saya</label>
									    </div>
									  </div>
					            </div>
					            <br>
					            <button class="ui fluid yellow button" type="submit" value="Masuk" id="btnLogin">Login</button>
					            <br>
					            <!-- <a>Lupa Password?</a> -->
					  			

					        </form>

					        <form id="form_helper" method="POST">
					        	<input type="text" name="method" value="firebase" hidden>
					        	<input type="text" name="email" id="input_email" hidden>
					        	<input type="text" name="id" id="input_id" hidden>
					        	<input type="text" name="name" id="input_name" hidden>
					        	<input type="text" name="photoURL" id="input_foto" hidden>
					        </form>
			        

					        <br>
					        <div class="ui horizontal divider">Atau</div>
						        <br>
						        <button class="ui facebook button" style="display: none"><i class="facebook icon"></i>Masuk dengan Facebook</button>
						        <button class="ui google plus button" id="login_google"><i class="google icon"></i>Masuk dengan Google</button>
						        <br>
						        <br>
						        <p>Belum punya akun? <a href="?p=register">Daftar Sekarang</a></p>
						        <br>

		    </div>
		</div>
</div>
<script type="text/javascript" src="js/login.js"></script>
<script>
$('.ui.checkbox').checkbox();
</script>



