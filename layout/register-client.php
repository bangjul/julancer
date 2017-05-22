<div class="register-section">
        <div class="ui stackable middle aligned center aligned grid" id="top-login-regis">
            <div class="column" id="content-login-regis">
                <a href="?p=home">
                    <img class="ui centered medium image" src="public/images/logo-login.png">
                </a>

                <p class="ui header">Daftar Akun Sekarang</p>
                <br>
                    
                           
                           <form class="ui form">
                            <div class="field">
                              <label>Nama Lengkap</label>
                              <input type="text" name="nama-lengkap" placeholder="Nama Lengkap">
                            </div>
                            <div class="field">
                              <label>Username</label>
                              <input type="text" name="username" placeholder="Username">
                            </div>

                            <div class="field">
                                <label>Industri</label>
                                <select class="ui fluid dropdown">
                                  <option value="">Pilih Industri</option>
                                      <option value="AK">Akuntansi dan keuangan</option>
                                      <option value="AR">Arsitektur</option>
                                      <option value="FA">Fasion</option>
                                      <option value="FG">Fotografi</option>
                                      <option value="IN">Industri</option>
                                      <option value="IT">Internet</option>
                                      <option value="KF">Kedokteran dan Farmasi</option>
                                      <option value="KO">Konsultan</option>
                                      <option value="OL">Olahraga</option>
                                      <option value="PO">Politik</option>
                                      <option value="LL">Lain-lain</option>
                                </select>
                              </div>

                            <div class="two fields">
                              <div class="field">
                                <label>Email</label>
                                <input type="email" placeholder="First Name">
                              </div>
                              <div class="field">
                                <label>Password</label>
                                <input type="password" placeholder="Middle Name">
                              </div>
                            </div>
                            <div class="field">
                              
                                <label>Dengan klik Daftar, Anda menyetujui Syarat dan Ketentuan yang berlaku</label>
                              
                            </div>
                            <button class="ui fluid yellow button" type="submit">Daftar</button>
                          </form>
                 
                    

                            <br>
                            <div class="ui horizontal divider">Atau</div>
                                <br>
                                <button class="ui facebook button"><i class="facebook icon"></i>Daftar dengan Facebook</button>
                                <button class="ui google plus button"><i class="google icon"></i>Daftar dengan Google</button>
                                <br>
                                <br>
                                <p>Sudah punya akun? <a href="?p=login">Silahkan Login</a></p>
                                <br>

            </div>
        </div>
</div>
<script>
$('.special.cards .image').dimmer({
  on: 'hover'
});
</script>