<?php
    include('koneksi.php');
   include('session.php');
   if($_SESSION['rule'] == 1){
    header("location: /oilancer/admin/index.php");    
}
?>

<!-- <script type="text/javascript">
    window.alert("<?=$_SESSION['rule']?>");
</script> -->
<script src="https://www.gstatic.com/firebasejs/4.0.0/firebase.js"></script>
<script type="text/javascript" src="js/header.js"></script>
             <div class="ui fixed borderless menu square">
                <div class="ui container">
                    <div class="item">
                        <a href="?p=home"><img class="ui small image" src="public/images/logo-oi.png" ></a>
                    </div>
                    <div class="right item">
                        <div class="item">
                            <div class="ui input">
                                <input type="text" placeholder="Apa yang anda cari ?">
                                <button class="ui icon yellow button">
                                    <i class="search icon"></i>
                                </button>
                            </div>
                        </div>
                                <a class="item" href="?p=lowongan">
                                        <div class="content">
                                            LOWONGAN KERJA
                                        </div>
                                </a>
                        <?php
                            if(!empty($_SESSION['login_session'])){
                                ?>
                                <a class="item" href="?p=pasang-job">
                                        <div class="content">
                                            PASANG JOB
                                        </div>
                                </a>
                                
                                    <a href="?p=profile">
                                    <div class="item" style="display: block; text-align: center;" id="btnUser">
                                        <div class="ui mini circular image">
                                          <img src="<?=$_SESSION['foto_profile']?>.jpg">
                                        </div>
                                        <div class="middle aligned content">
                                          <a class="header"><?php echo $_SESSION['login_session'] ?></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a  href="?p=logout"><button class="hidden ui yellow button masuk" id="btnLogout" style="display: block;"><i class="grey sign in icon"></i>Logout</button></a>
                                    </div>
                                    </a>
                                <?php
                            }else{
                                ?>
                                    <div class="item">
                                        <a  href="?p=login"><button class="hidden ui yellow button masuk" id="btnLoginHeader"><i class="grey sign in icon"></i>Masuk</button></a>
                                    </div>
                                    <div class="item">
                                        <a href="?p=register"><button class="ui basic yellow button daftar" id="btnRegisterHeader"><i class="grey add user icon"></i>Daftar</button></a>
                                    </div>
                                <?php
                            }
                        ?>
                        
                        <!-- <div class="item">
                            <button class="ui basic yellow button daftar" id="btnLogoutHeader" style="display: none"><i class="grey add user icon"></i>Logout</button>
                        </div>
                         -->
                        
                        
                    </div>
                </div>
            </div>

