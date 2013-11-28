<?php require_once 'helper/getBaseUrl.php';?>

<!DOCTYPE html>
<html lang="de-DE">
    <head>
        <meta charset="utf-8" />
        <title>Travelbidding.com</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="description" content="???" />
        <meta name="keywords" content="???" />
        <meta name="author" content="???" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <base href="<?php echo getBaseUrl(); ?>" target="_blank">
        
        <link rel="stylesheet" href="<?php echo getBaseUrl(); ?>min/?f=less/reset.less,less/fontello.less,less/transition.min.less,less/base.less" type="text/css">
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        
        <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body class="noJs">
        <script>
            //<![CDATA[
            (function(b){b.className = b.className.replace(/noJs/, 'js');})(document.body);
            //]]>
        </script>

        <?php 
            include('loader.php');
        ?>

        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/base.js" type="text/javascript"></script>
    </body>
</html>