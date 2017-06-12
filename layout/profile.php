<!-- Kategori & List barang -->
<?php
  if(isset($_POST['btn-submit-token'])){
     $string = $_POST['string'];
     $auth_user->submitToken($string,$user_id);
  }
?>
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
                                        <img class="ui circular image" src="<?=$_SESSION['foto_profile']?>.jpg">
                                      </div>

                                    </div>
                                    <div class="content">
                                      <a class="header"><?php echo $_SESSION['nama_perusahaan'] ?></a>
                                      <div class="meta">
                                        <span class="cinema"><i class="mail icon"></i><?php echo $_SESSION['email'] ?></span>
                                      </div>
                                      <i class="call icon"></i><?php echo $_SESSION['nomor_telepon'] ?>
                                      
                                  </div>

                                </div>

                                <div class="ui divider" ></div>

                                      <div class="description"><h3>Keterangan</h3>
                                        <p><?php echo $_SESSION['deskripsi'] ?> 
                                      
                                    </div>

                            </div>
                        </section>

                        
                        <section class="ui very padded segment square">
                        
                        Job yang di unggah :
                        <div class="ui divider" ></div>
                            <div class="ui container">
                                <div class="ui divided items">
                                     
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

                                  $id_userAktif=$_SESSION['id_user'];
                                $queri="Select * From pekerjaan where id_user=$id_userAktif" ;  //menampikan SEMUA data dari tabel siswa
                                $hasil=MySQL_query ($queri);    //fungsi untuk SQL

                                // perintah untuk membaca dan mengambil data dalam bentuk array
                                while ($data = mysql_fetch_array ($hasil)){
                                $id = $data['id'];
                                echo '<div class="item">';
                                    echo '<div class="image">
                                        <img src="'.$data['gambar_pekerjaan'].'.jpg">
                                    </img>
                                    </div>';
                                    $tgl=date('d-m-Y');
                                    echo '<div class="content">
                                            <a class="header">'.$data['judul'].
                                            '</a>
                                            <div class="meta">
                                                <span class="cinema">'.'Posted '.$data['tanggal_upload'].'</span>
                                            </div>
                                            
                                            <div class="extra">
                                                <div class="ui label">
                                                <i class="dollar icon"></i>
                                                '.$data['gaji'].'
                                                </div>
                                                <div class="ui label">
                                                <i class="calendar icon"></i>
                                                '.$data['tanggal_berahir'].'
                                                </div>
                                                <div class="ui divider" ></div>
                                                  <div class="description">
                                                      <p>'.$data['keterangan'].'
                                                      </p>
                                                  </div>
                                                
                                                    <div class="ui right floated primary button">
                                                      Edit
                                                      <i class="right edit icon"></i>
                                                    </div>
                                                    <div class="ui right floated negative button" onclick="hapus">
                                                      Hapus
                                                      <i class="right remove icon"></i>
                                                    </div>
                                                
                                           </div>';
                                    echo '</div>';
                                echo '</div>';
                               
                                }
                            ?>
                            </div>
                        </section>

                    </div>
                </div>
                

            <div class="four wide column">
                <div class="category-section">
                  <button class="ui fluid green active button" onclick="edit()">
                    <i class="setting icon"></i>
                    Edit Profile
                  </button> 
                    <div class="ui menu square" id="category-lowongan">

                        <div class="ui card">
                          <div class="content">
                            Achievement
                          </div>
          
                          <div class="content">
                            <i class="check circle icon"></i>
                            Job Yang Terpasang : 2
                          </div>
                          
                        </div>
                        
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<div class="ui modal" id="modal">
  <i class="close icon"></i>
  <div class="header">
    Edit Profile
  </div>
  <!-- <div class="image content">
    <div class="image">
      An image can appear on left or an icon
    </div>
    <div class="description">
      A description can appear on the right
    </div>
  </div> -->



            <div class="register-section">
                    <div class="ui stackable middle aligned center aligned grid" id="top-login-regis">
                        <div class="column" id="content-login-regis">
                    
                           
                           <form class="ui form" method="post" enctype = "multipart/form-data" action="">
                                <div class="field">
                                  <label>Nama Industri</label>
                                  <input type="text" name="namalengkap" placeholder="<?php echo $_SESSION['nama_perusahaan'] ?>">
                                </div>
                                

                                <div class="field">
                                    <label>Industri</label>
                                    <select class="ui fluid dropdown" name="industri">
                                      <option value=""></option>
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
                                    <input type="email" placeholder="<?php echo $_SESSION['email'] ?>" name="email">
                                  </div>
                                  <div class="field">
                                    <label>Password</label>
                                    <input type="password" placeholder="*******" name="password">
                                  </div>
                                </div>
                                <div class="field">
                                  <label>Nomor Telepon</label>
                                  <input type="text" name="nomortelepon" placeholder="<?= $_SESSION['nomor_telepon'] ?>">
                                </div>

                                <input class="ui grey" type="file" name="fileToUpload">Foto Profile</input>
                                  <br><br>

                                <div class="field">
                                  <label>Deskripsi Perusahaan</label>
                                  <textarea style="margin-top: 0px; margin-bottom: 0px; height: 176px;" name="deskripsi" placeholder="<?php echo $_SESSION['deskripsi'] ?>"></textarea>
                                </div>
                                

                              </div>
                          </div>
                  </div>

  <div class="actions">
    <input type="submit" name="submit_profile">
  </div>
  </form>
</div>





<script type="text/javascript">

  function edit(){
    $('#modal')
      .modal('show')
    ;
  }

</script>