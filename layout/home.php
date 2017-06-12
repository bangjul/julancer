<!-- banner -->
    <div class="banner-section2">
                <!-- <img src="public/images/banner-2.jpg"> -->
        <div class="banner-section">
            <section class="ui segment banner slider square" id="banner">
                <div><img class="center-cropped" src="public/images/banner1.jpg"></div>
                <div><img class="center-cropped" src="public/images/banner2.jpg"></div>
                <div><img class="center-cropped" src="public/images/banner3.jpg"></div>
            </section>
            
        </div>
    </div>

<!-- kenapa menggunakan --> 

    <div class="custom-section">
        <div class="ui segment">
            <div class="ui container">
                <div class="segment" >
                    <div class="ui text container">
                            <div class="ui center aligned header">Kenapa Menggunakan IOLancer?</div>
                    </div>
                    <div class="ui divider"></div>
                    <div class="ui equal width padded grid">

                            <div class="column">
                                <div class="ui header">
                                    <i class="yellow star icon"></i>
                                    <div class="content">Lowongan Pekerjaan
                                        <div class="sub header">Berkualitas
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="ui header">
                                    <i class="yellow history icon"></i>
                                    <div class="content">Informasi
                                        <div class="sub header">Uptodate
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="ui header">
                                    <i class="yellow unhide icon"></i>
                                    <div class="content">Paling
                                        <div class="sub header">Terpercaya
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

<!-- kategori --> 

    <div class="kategori-section">
        <div class="ui  yellow segment">
            <div class="ui container">
                <div class="segment" >
                    <div class="ui text container">
                            <div class="ui center aligned header" style="margin-top: 30px">Temukan Pekerjaan Yang Tepat Untuk Kategori Jasa Ini</div>
                    </div>
                    
                    <div class="barang-section">
                        <div class="ui divider" style="margin-top: 30px; margin-bottom: 30px"></div>

                            <div class="ui container">
                                <div class="ui three stackable cards">

                                    <div class="card">
                                        <a class="image" href="?p=WD">
                                            <img src="public/images/website.jpg">
                                        </a>
                                        <div class="content">
                                            <a class="header" href="?p=lowongan">Website Development</a>
                                            <div class="meta">
                                                <a>Start from $100</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <a class="image" href="?p=CEO">
                                            <img src="public/images/ceo.jpg">
                                        </a>
                                        <div class="content">
                                            <a class="header" href="?p=lowongan">CEO Marketing</a>
                                            <div class="meta">
                                                <a>Start from $150</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <a class="image" href="?p=MA">
                                            <img src="public/images/mobile.jpg">
                                        </a>
                                        <div class="content">
                                            <a class="header" href="?p=lowongan">Mobile App</a>
                                            <div class="meta">
                                                <a>Start from $200</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <a class="image" href="?p=DM">
                                            <img src="public/images/design.jpg">
                                        </a>
                                        <div class="content">
                                            <a class="header" href="?p=lowongan">Design & Multimedia</a>
                                            <div class="meta">
                                                <a>Start from $80</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <a class="image" href="?p=DE">
                                            <img src="public/images/data.jpg">
                                        </a>
                                        <div class="content">
                                            <a class="header" href="?p=lowongan">Data Entry</a>
                                            <div class="meta">
                                                <a>Start from $50</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <a class="image" href="?p=WR">
                                            <img src="public/images/writing.jpg">
                                        </a>
                                        <div class="content">
                                            <a class="header" href="?p=lowongan">Writing</a>
                                            <div class="meta">
                                                <a>Start from $50</a>
                                            </div>
                                        </div>
                                    </div>

                                   
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

<!-- Info --> 
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
//jumlah perusahaan
$sql = "SELECT * FROM user where rule = '2'";
$query = mysql_query($sql);
$data = array();
while(($row = mysql_fetch_array($query)) != null){
    $data[] = $row;
}
$count = count($data);

//jumlah pekerjaan
$sql2 = "SELECT * FROM pekerjaan";
$query2 = mysql_query($sql2);
$data2 = array();
while(($row = mysql_fetch_array($query2)) != null){
    $data2[] = $row;
}
$count2 = count($data2);

//total gaji
$sql3 = "SELECT sum(gaji) FROM `pekerjaan` WHERE 1";

//echo "Jumlah data dari array PHP: $count2";

?>
    <div class="info-section">
        <div class="ui segment">
            <div class="ui container">
                <div class="segment" >
                    <div class="ui text container">
                            <div class="ui center aligned header"></div>
                    </div>

                    <div class="ui equal width padded grid">

                            <div class="column">
                                <div class="ui header">
                                    <i class="yellow server icon"></i>
                                    <div class="content"><?php echo $count2 ?>
                                        <div class="sub header">Job Terpasang
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="ui header">
                                    <i class="yellow dollar icon"></i>
                                    <div class="content">$909.090
                                        <div class="sub header">Jumlah Job Keseluruhan
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="ui header">
                                    <i class="yellow user icon"></i>
                                    <div class="content"><?php echo $count ?>
                                        <div class="sub header">Jumlah Perusahaan
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
  