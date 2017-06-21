<?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// // Create connection
// $conn = mysql_connect($servername, $username, $password);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysql_connect_error());
// }
// mysql_select_db('oilancer');
// echo $_POST['id'];
?>


<!-- Kategori & List barang -->
<br>
<section class="category-top-section">
    <div class="ui container">
        <section class="ui very padded segment square">
            <div class="ui container">
                <div class="ui divided items">
                            <?php
                                echo $_POST['id'];
                                $id_job = $_POST['id'];
                                $queri="Select * From pekerjaan  ";  //menampikan SEMUA data dari tabel siswa
                                //$queri = "SELECT user.nama_lengkap, user.email, user.nomor_telepon, user.foto_profile FROM daftar_pekerjaan, user WHERE user.id = daftar_pekerjaan.id_user AND daftar_pekerjaan.id_pekerjaan = $id_job ";
                                $hasil=mysql_query($queri);    //fungsi untuk SQL

                                // perintah untuk membaca dan mengambil data dalam bentuk array
                                while ($data = mysql_fetch_array ($hasil)){
                                //$id = $data['id'];
    
                                ?>
                                <div class="item">
                                    <div class="image">
                                        <img src="<?=$data['foto_profile']?>.jpg">
                                    </img>
                                    </div>
                                    <div class="content">
                                            <a class="header"><?=$data['nama_lengkap']?></a>
                                            <div class="meta">
                                                <span class="cinema">Email :  <?=$data['email']?></span>
                                            </div>
                                            <div class="meta">
                                                <span class="cinema">Telepon :  <?=$data['nomor_telepon']?></span>
                                            </div>
                                            <div class="ui divider" ></div>
                                            <div class="description">
                                                <p><?=$data['deskripsi']?>
                                                </p>
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
</section>
