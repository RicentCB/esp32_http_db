<!DOCTYPE html>
<html>
<head>
    <title>El arcoiris ADMIN</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Custom -->

</head>
<body >
    <?php
        if(!isset($_GET["page"])){
            include "modules/home.php";
        }else{
            switch ($_GET["page"]) {
                case 'home':
                case 'temp':
                    include "modules/".$_GET["page"].".php"; break;
                //Se solicita una pagina no especificada
                default: 
                    include "modules/404.php"; break;

            }
        }
    ?>

    <!-- SCRIPTS -->
    <script src="view/js/template.js"></script>
    <!-- /SCRIPTS -->
    
</body>
</html>
