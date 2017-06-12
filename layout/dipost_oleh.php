                                <?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "";

                                  // Create connection
                                  $conn = mysql_connect($servername, $username, $password);
                                  // Check connection
                                  if (!$conn) {
                                      die("Connection failed: " . mysql_connect_error());
                                  }
                                  mysql_select_db('oilancer');

                                  $id_user_upload = $_POST['id_user'];
                                  //$id_userAktif=$_SESSION['id_user'];
                                  $queri="Select * From user where id=$id_user_upload" ;  //menampikan SEMUA data dari tabel siswa
                                  $hasil=MySQL_query ($queri);    //fungsi untuk SQL

                                  $row = MySQL_fetch_assoc($hasil);
                                  $nama_lengkap= $row['nama_lengkap'];
                                  $email= $row['email'];
                                  $nomor_telepon= $row['nomor_telepon'];
                                  $foto_profile= $row['foto_profile'];
                                  $industri= $row['industri'];
                                  $deskripsi= $row['deskripsi'];

                                  
                                ?>
<!-- Kategori & List barang -->

<br>
<section class="category-top-section">
    <div class="ui container">
        <div class="ui stackable grid">


                <div class="twelve wide column">
                    <div class="title-product-section">

                        <section class="ui very padded segment square">
                            <div class="ui container">
                                <div class="ui divided items">
                                    

                                  <div class="item">
                                    <div class="image">
                                      <div class="item">
                                        <img class="ui circular image" src="<?=$foto_profile ?>.jpg">
                                      </div>

                                    </div>
                                    <div class="content">
                                      <a class="header"><?=$nama_lengkap ?></a>
                                      <div class="meta">
                                        <span class="cinema"><i class="mail icon"></i><?=$email ?></span>
                                      </div>
                                      <i class="call icon"></i><?=$nomor_telepon ?>
                                      
                                  </div>

                                </div>

                                <div class="ui divider" ></div>

                                      <div class="description"><h3>Keterangan</h3>
                                        <p><?=$deskripsi ?>
                                      
                                    </div>

                            </div>
                        </section>
                        <br><br>

                        
                        

                    </div>
                </div>

            <div class="four wide column">
                <div class="category-section">
                   
                    <div class="ui menu square" id="category-lowongan">

                        <div class="ui card">
                          <div class="content">
                            Alamat
                          </div>
          
                          <div class="content">
                            <i class="yellow marker icon"></i>
                            Jakarta, Indonesia
                          </div>
                          
                        </div>
                        
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<script type="text/javascript">
$('.ui.modal')
  .modal({
    blurring: true
  })
  .modal('show')
;
</script>