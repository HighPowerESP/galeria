<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Gallery</title>

    <!-- Bootstrap Core CSS -->
    <link href="./assets/example/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./assets/example/css/thumbnail-gallery.css" rel="stylesheet">
    <link href="../assets/css/estiloForm.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
    include "./includes/menu.php";

    $page = $_GET['page'];

    switch ($page) {
        case 'listado':
            include "./actions/listado.act.php";
            include "includes/listado.php";
            break;
            
        case 'autores':
            include "./includes/listado.inc.php";

        case 'new':
            include "includes/new_foto.php";
            break;

        case 'edit':
            include "includes/edit_foto.inc.php";
            break;
        
    }
?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>