
<!-- Kategori & List barang -->
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
                                      <img src="<?=$_POST['gambar_pekerjaan']?>.jpg ">
                                    </div>
                                    <div class="content">
                                      <a class="header"><?= $_POST['judul'] ?></a>
                                      <div class="meta">
                                        <span class="cinema"><?= $_POST['tanggal_upload'] ?></span>
                                      </div>
                                      <div class="extra">
                                        <div class="ui label"><i class="dollar icon"></i> <?= $_POST['gaji'] ?></div>
                                        <div class="ui label"><i class="calendar icon"></i> <?= $_POST['tanggal_berahir'] ?></div>
                                      </div>
                                      <div class="meta">
                                        <span class="cinema">Link Resmi : <?= $_POST['link'] ?></span>
                                      </div>
                                      <div class="ui divider" ></div>

                                      <div class="description">Deskripsi :
                                        <p><?= $_POST['keterangan'] ?>
                                      
                                    </div>
                                  </div>

                                </div>
                            </div>
                        </section>

                        <!-- <section class="ui very padded segment square">
                            <div class="ui container">
                            <label>File Unggahan Client</label>
                                <div class="ui divided items">

                                    <div class="ui three cards">
                                        <?php for($x=0 ; $x < 3 ; $x++){
                                            echo '<a class="yellow card">
                                                    <div class="image">
                                                        <img src="public/images/grav.png">
                                                    </div>
                                                </a>';
                                        }
                                        ?>

                                    
                                    </div>

                                </div>
                            </div>
                        </section> -->

                        <!-- <div class="ui fluid floated primary button" onclick="redirect('<?= $_POST['link'] ?>')"> -->
                            <div class="ui fluid floated primary button" onclick="changeDetail('<?=$_POST['id']?>')">
                            Daftar Untuk Pekerjaan Ini
                            <i class="right chevron icon"></i>
                        </div>
                        <br>

                    </div>
                </div>
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
                                  
                                ?>
            <div class="four wide column">
                <div class="category-section">
                    <div class="ui vertical borderless menu square" id="category-lowongan">

                        <div class="ui card">
                          <div class="content">
                            Dipost Oleh :
                          </div>
                          
                            <div class="image"> 
                                <img src="<?=$foto_profile?>.jpg">
                            </div>
                          
                          <div class="content">
                            <i class="user icon"></i>
                            <?= "$nama_lengkap" ?>
                          </div>
                          <div class="content">
                            
                              <i class="call outline icon"></i>
                              <?= "$nomor_telepon" ?>
                            
                          </div>
                          <div class="content">
                            
                              <i class="mail outline icon"></i>
                              <?= "$email" ?>
                            
                          </div>
                        </div>
                        
                    </div>
                </div>
            </div>


        </div>
    </div>


    <form id="form_detail" method="POST" action="?p=daftar_lowongan" >
        <input type="text" name="id" id="id" hidden>        
    </form>
    <script type="text/javascript">
        function changeDetail(id){
            const form_detail = document.getElementById("form_detail");
            document.getElementById("id").value = ""+id;
            form_detail.submit();
            
        };
    </script>



    <script type="text/javascript">
      function redirect(url){
        window.location.replace("http://"+url);
      }
    </script>
</section>