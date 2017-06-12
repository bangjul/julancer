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


?>


<!-- Kategori & List barang -->
<br>
<section class="category-top-section">
    <div class="ui container">
        <div class="ui stackable grid">
            <div class="three wide column">
                <div class="category-section">
                    <div class="ui vertical borderless menu square" id="category-lowongan">

                        <div class="item">
                            <div class="ui header">
                                Kategori
                            </div>
                        </div>
                        <!-- <?php 
                        $list_kategory = ['Website Development', 'CEO Marketing', 'Mobile App', 'Design dan Multimedia', 'Data Entry', 'Writing'];
                        for($i = 0; $i < sizeof($list_kategory); $i++){ 
                            echo '<a class="item kategori">'.$list_kategory[$i].'</a>';
                        }
                        ?> -->
                        
                            <a class="item kategori" value="Website Development" href="?p=WD">Website Development</a>
                            <a class="item kategori" value="CEO Marketing" >CEO Marketing</a>
                            <a class="item kategori" value="Mobile App" >Mobile App</a>
                            <a class="item kategori" value="Design dan Mutilmedia" >Design dan Mutilmedia</a>
                            <a class="item kategori" value="Data Entri" >Data Entri</a>
                            <a class="item kategori" value="Writing" >Writing</a>
                        
                    </div>
                </div>
            </div>

            <div class="thirteen wide column">
                <div class="title-product-section">
                    <section class="ui padded segment square">
                        <div class="ui container">
                            <div class="ui fluid action input">
                              <input type="text" placeholder="Search...">
                              <button class="ui icon button">
                                <i class="search icon"></i>
                              </button>
                            </div>
                            <br>
                            <!-- <div class="field">
                                <select class="ui fluid dropdown">
                                  <option value="LT">Lowongan Terbaru</option>
                                      <option value="BT">Bayaran Tertinggi</option>
                                      <option value="AB">Akan Berahir</option>
                                      
                                </select>
                              </div> -->

                        </div>
                    </section>

                <section class="ui very padded segment square">
                    <div class="ui container">
                        <div class="ui divided items">
                            <?php

                                $queri="Select * From pekerjaan where kategori = 'Website Development'";  //menampikan SEMUA data dari tabel siswa
                                $hasil=MySQL_query ($queri);    //fungsi untuk SQL

                                // perintah untuk membaca dan mengambil data dalam bentuk array
                                while ($data = mysql_fetch_array ($hasil)){
                                $id = $data['id'];
                            //for($x = 0; $x < 5; $x++) {

                                ?>
                                <div class="item">
                                    <div class="image">
                                        <img src="<?=$data['gambar_pekerjaan']?>.jpg">
                                    </img>
                                    </div>
                                    <div class="content">
                                            <a class="header"><?=$data['judul']?></a>
                                            <div class="meta">
                                                <span class="cinema">Posted <?=$data['tanggal_upload']?></span>
                                            </div>
                                            <div class="description">
                                                <p><?=$data['keterangan']?>
                                                </p>
                                            </div>
                                            <div class="extra">
                                                <div class="ui label">
                                                <i class="dollar icon"></i>
                                                <?=$data['gaji']?>
                                                </div>
                                                <div class="ui label">
                                                <i class="calendar icon"></i>
                                                <?=$data['tanggal_berahir']?>
                                                </div>
                                                <div class="ui divider" ></div>
                                                    <div class="ui right floated primary button" onclick="changeDetail('<?=$data['id']?>', '<?=$data['id_user']?>','<?=$data['kategori']?>', '<?=$data['judul']?>', '<?=$data['keterangan']?>', '<?=$data['gambar_pekerjaan']?>', '<?=$data['gaji']?>', '<?=$data['tanggal_upload']?>', '<?=$data['tanggal_berahir']?>', '<?=$data['link']?>')" >
                                                      Buka
                                                      <i class="right chevron icon"></i>
                                                    </div>

                                           </div>
                                    </div>
                                </div>
                               <?php 
                                 }
                            ?>

                        </div>
                    </div>
                </section> 

                         

                </div>
            </div>

        </div>
    </div>
    <form id="form_detail" method="POST" action="?p=lowongan-detail" >
        <input type="text" name="id" id="id" hidden>
        <input type="text" name="id_user" id="id_user" hidden>
        <input type="text" name="kategori" id="kategori" hidden>
        <input type="text" name="judul" id="judul" hidden>
        <input type="textarea" name="keterangan" id="keterangan" hidden>
        <input type="text" name="gambar_pekerjaan" id="gambar_pekerjaan" hidden>
        <input type="text" name="gaji" id="gaji" hidden>
        <input type="text" name="tanggal_upload" id="tanggal_upload" hidden>
        <input type="text" name="tanggal_berahir" id="tanggal_berahir" hidden>
        <input type="text" name="link" id="link" hidden>
        
    </form>
    <script type="text/javascript">
        function changeDetail(id,id_user,kategori,judul, keterangan, gambar_pekerjaan, gaji, tanggal_upload, tanggal_berahir, link){
            const form_detail = document.getElementById("form_detail");
            document.getElementById("id").value = ""+id;
            document.getElementById("id_user").value = ""+id_user;
            document.getElementById("kategori").value = ""+kategori;
            document.getElementById("judul").value = ""+judul;
            document.getElementById("keterangan").value = ""+keterangan;
            document.getElementById("gambar_pekerjaan").value = ""+gambar_pekerjaan;
            document.getElementById("tanggal_upload").value = ""+tanggal_upload;
            document.getElementById("tanggal_berahir").value = ""+tanggal_berahir;
            document.getElementById("gaji").value = ""+gaji;
            document.getElementById("link").value = ""+link;

            form_detail.submit();
            
        };
    </script>
</section>
