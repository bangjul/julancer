
<!DOCTYPE html>
<html>

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    
    <title>IOLancer - Selesaikan Pekerjaan Dengan Cepat</title>
    <link rel="stylesheet" type="text/css" href="public/css/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="public/css/app.css">

    <script src="public/javascript/jquery.min.js"></script>
    <script src="public/javascript/semantic.min.js"></script>
    <script type="text/javascript" src="lib/slick/slick.min.js"></script>
    <script src="public/javascript/following-menu.js"></script>
    <script src="public/javascript/banner-carousel.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.0.0/firebase.js"></script>

</head>

<body>


<!-- header -->


        
    
<?php 
    $pages_dir = 'layout';
        if (!empty($_GET['p'])){
            $pages = scandir($pages_dir, 0);
            unset($pages[0], $pages[1]);
 
            $p = $_GET['p'];

            if(in_array($p.'.php', $pages)){

                if($p=='login' || $p=='logout'){
                    include($pages_dir.'/'.$p.'.php');
                }
                else{
                    include 'layout/header.php';
                    include($pages_dir.'/'.$p.'.php');
                    include 'layout/footer.php';
                }
                
            } else {
                //echo 'Halaman tidak ditemukan! :(';
                include($pages_dir.'/'.'404'.'.php');
            }
        }
        else {
            include 'layout/header.php';
            include($pages_dir.'/home.php');
            include 'layout/footer.php';
        }

?>

  <!-- Footer -->


</body>

</html>