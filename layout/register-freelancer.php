<script type="text/javascript" src="js/register.js"></script>
<div class="register-section" >
        <div class="ui stackable middle aligned center aligned grid" id="top-login-regis">
            <div class="column" id="content-login-regis">
                <a href="?p=home">
                    <img class="ui centered medium image" src="public/images/logo-login.png">
                </a>

                <p class="ui header">Daftar Akun Sekarang</p>
                <br>
                    
                           <form class="ui form" method="post" action="?p=insert_register_freelance" enctype = "multipart/form-data">
                            <div class="field">
                              <label>Nama Lengkap</label>
                              <input type="text" name="namalengkap" placeholder="Nama Lengkap">
                            </div>
                                                        
                            <div class="two fields">
                              <div class="field">
                                <label>Email</label>
                                <input type="email" placeholder="Email" name="email">
                              </div>
                              <div class="field">
                                <label>Password</label>
                                <input type="password" placeholder="Password" name="password">
                              </div>
                            </div>

                            <div class="field">
                              <label>Nomor Telepon</label>
                              <input type="text" name="nomortelepon" placeholder="08*********">
                            </div>
                            <br>
                            <input class="ui grey" type="file" name="fileToUpload">Foto Profile</input>
                            <div class="field">
                              
                                <label>Dengan klik Daftar, Anda menyetujui Syarat dan Ketentuan yang berlaku</label>
                              
                            </div>
                            <button class="ui fluid yellow button" type="submit" value="daftar">Daftar</button>
                          </form>
                 
                    

                            <br>
                            <div class="ui horizontal divider">Atau</div>
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
