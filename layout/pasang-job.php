<br>
<div class="pasang-job-section">
      <div class="ui stackable middle aligned center aligned grid" id="top-login-regis">
            <div class="column" id="content-pasang-job">
                <a href="?p=home">
                    <img class="ui centered medium image" src="public/images/logo-login.png">
                </a>

                <p class="ui header">Jelaskan Kebutuhan Anda</p>
                <br>
                    
                      <form class="ui form" method="post" action="?p=insert_job" enctype = "multipart/form-data">

                           <div class="field">
                                <label>Pilih kategori</label>
                                <select class="ui fluid dropdown" name="kategori" required>
                                  <option value="">kategori</option>
                                      <option value="Website Development">Website Development</option>
                                      <option value="CEO Marketing">CEO Marketing</option>
                                      <option value="Mobile App">Mobile App</option>
                                      <option value="Design dan Multimedia">Design dan Multimedia</option>
                                      <option value="Data Entri">Data Entri</option>
                                      <option value="Writing">Writing</option>
                                </select>
                              </div>

                            <div class="field">
                              <label>Pekerjaan Apa yang Anda Butuhkan?</label>
                              <input type="text" name="judul-job" placeholder=" " required>
                            </div>
                            <div class="field">
                              <label>Jelaskan Kebutuhan Anda Secara Lengkap</label>
                              <textarea style="margin-top: 0px; margin-bottom: 0px; height: 176px;" name="deskripsi" required></textarea>
                            </div>

                            <input class="ui grey" type="file" name="fileToUpload">upload file</input>
                            <br>
                            <a>misal : logo / profile perusahaan</a>
                            
                           
                            <br><br>
                            <div class="ui fluid labeled input">
                              <div class="ui label">
                                <i class="yellow dollar icon"></i>
                              </div>
                              <input type="text" placeholder="Gaji" name="gaji" required>
                              <div class="ui basic label">.00</div>
                            </div>
                            <br>
                            <label>Kapan lamaran ini ditutup</label>
                            <div class="ui fluid labeled input">
                                <div class="ui label">
                                  <i class="yellow calendar icon"></i>
                                </div>
                                <input type="date" name="tanggal_berahir" required>
                            </div>
                            <br>
                            <div class="field">
                              <label>Link Resmi</label>
                              <input type="text" name="link" placeholder="http://www.oilancer.com" required>
                            </div>
                            <br>

                            <button class="ui fluid yellow button" type="submit" value="submit">Submit Job</button>
                      </form>
                    <br>
                 

            </div>
        </div>
</div>
<script>
$('.special.cards .image').dimmer({
  on: 'hover'
});
</script>