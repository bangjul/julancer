

<div class="register-section">
        <div class="ui stackable middle aligned center aligned grid" id="top-login-regis">
            <div class="column" id="content-login-regis">
                <a href="?p=home">
                    <img class="ui centered medium image" src="public/images/logo-login.png">
                </a>

                <p class="ui header">Daftar Akun Sekarang</p>
                <br>
                    
                           
                           <form class="ui form" method="post" action="?p=insert_register_client" enctype = "multipart/form-data">
                                <div class="field">
                                  <label>Nama Industri</label>
                                  <input type="text" name="namalengkap" placeholder="Nama Industri" required>
                                </div>
                                

                                <div class="field">
                                    <label>Industri</label>
                                    <select class="ui fluid dropdown" name="industri" required>
                                      <option value="">Pilih Industri</option>
                                          <option value="Akuntansi dan keuangan">Akuntansi dan keuangan</option>
                                          <option value="Arsitektur">Arsitektur</option>
                                          <option value="Fasion">Fasion</option>
                                          <option value="Fotografi">Fotografi</option>
                                          <option value="Industri">Industri</option>
                                          <option value="Internet">Internet</option>
                                          <option value="Kedokteran dan Farmasi">Kedokteran dan Farmasi</option>
                                          <option value="Konsultan">Konsultan</option>
                                          <option value="Olahraga">Olahraga</option>
                                          <option value="Politik">Politik</option>
                                          <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                  </div>

                                <div class="two fields">
                                  <div class="field">
                                    <label>Email</label>
                                    <input type="email" placeholder="contoh@mail.com" name="email" required>
                                  </div>
                                  <div class="field">
                                    <label>Password</label>
                                    <input type="password" placeholder="password" name="password" required>
                                  </div>
                                </div>
                                <div class="field">
                                  <label>Nomor Telepon</label>
                                  <input type="text" name="nomortelepon" placeholder="08*********" required>
                                </div>

                                <input class="ui grey" type="file" name="fileToUpload">Foto Profile</input>
                                  <br><br>

                                <div class="field">
                                  <label>Deskripsi Perusahaan</label>
                                  <textarea style="margin-top: 0px; margin-bottom: 0px; height: 176px;" name="deskripsi" required></textarea>
                                </div>
                                <div class="field">
                                  
                                    <label>Dengan klik Daftar, Anda menyetujui Syarat dan Ketentuan yang berlaku</label>
                                  
                                </div>
                                <button class="ui fluid yellow button" type="submit" value="submit">Daftar</button>
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

