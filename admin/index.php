<!DOCTYPE html>
<?php
$rootdir = "../";
include('../layout/koneksi.php');
include('../layout/session.php');

if($_SESSION['rule'] != 1){
    header("location: /oilancer/index.php");    
}
?>

<html>

<head>
<!-- <script type="text/javascript">
    //window.alert("<?= $_SESSION['rule'] ?>")
    window.alert("Welcome Back <?= $_SESSION['login_session'] ?>")
</script> -->
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    
    <title>IOLancer - Selesaikan Pekerjaan Dengan Cepat</title>
    <link rel="stylesheet" type="text/css" href="<?= $rootdir ?>public/css/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $rootdir ?>lib/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?= $rootdir ?>lib/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?= $rootdir ?>public/css/app.css">

    <script src="<?= $rootdir ?>public/javascript/jquery.min.js"></script>
    <script src="<?= $rootdir ?>public/javascript/semantic.min.js"></script>
    <script type="<?= $rootdir ?>text/javascript" src="lib/slick/slick.min.js"></script>
    <script src="<?= $rootdir ?>public/javascript/following-menu.js"></script>
    <script src="<?= $rootdir ?>public/javascript/banner-carousel.js"></script>

</head>

<body>
<div class="full height">
    <div class="ui grid">

        <?php include 'layout/menu.php'; ?>
        <div class="thirteen wide column">
            <?php include 'layout/header.php'; ?>
            <!-- content --> 
                <div class="ui yellow segment" style="min-height: 700px">
                    
                    <?php 
                        $pages_dir = 'layout';
                            if (!empty($_GET['p'])){
                                $pages = scandir($pages_dir, 0);
                                unset($pages[0], $pages[1]);
                     
                                $p = $_GET['p'];

                                if(in_array($p.'.php', $pages)){

                                    
                                        include($pages_dir.'/'.$p.'.php');
                                   
                 
                                } else {
                                    include($pages_dir.'/'.'404'.'.php');
                                    //echo 'Halaman tidak ditemukan! :(';
                                    //header("location: /oilancer/admin/layout/404.php");
                                }
                            }
                            else {
                                include($pages_dir.'/dashboard.php');
                            }

                    ?>
                </div>
            <?php include 'layout/footer.php'; ?>  
        </div>
    
    </div>
</div>  

</body>

</html>