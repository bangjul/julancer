<?php
   include("koneksi.php");
   include("session.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
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
   }
?>

<script>
	window.alert('tes');
	window.alert('<?= $count?>');
	window.alert('<?= $_SESSION['rule2'] ?>');
	window.alert('<?= $row['rule'] ?>');
</script>




<div class="login-section" id="div_login" style="display: 'none'">
		<div class="ui stackable middle aligned center aligned grid" id="top-login-regis">
		    <div class="column" id="content-login-regis">
		        <a href="?p=home">
		            <img class="ui centered medium image" src="public/images/logo-login.png">
		        </a>

		        <p class="ui header">Silahkan masuk ke dalam akun kamu</p>
		        <br>
			       
					        <form class="ui form" method="POST" action="">
					            <div class="field">
					                <input type="text" name="namalengkap" placeholder="username">
					            </div>
					            	
					            <br>
					            <div class="field">
					                <input type="password" name="password" placeholder="Password" id="txtPassword">
					            </div>
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



