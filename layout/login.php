<div class="login-section" id="div_login" style="display: 'none'">
		<div class="ui stackable middle aligned center aligned grid" id="top-login-regis">
		    <div class="column" id="content-login-regis">
		        <a href="?p=home">
		            <img class="ui centered medium image" src="public/images/logo-login.png">
		        </a>

		        <p class="ui header">Silahkan masuk ke dalam akun kamu</p>
		        <br>
			       
					        <div class="ui form">
					            <div class="field">
					                <input type="email" name="user" placeholder="E-mail" id="txtEmail">
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
					            <button class="ui fluid yellow button" value="Masuk" id="btnLogin">Login</button>
					            <br>
					            <a>Lupa Password?</a>
					  			

					        </div>
			        

					        <br>
					        <div class="ui horizontal divider">Atau</div>
						        <br>
						        <button class="ui facebook button"><i class="facebook icon"></i>Masuk dengan Facebook</button>
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
