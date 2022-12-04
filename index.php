<?php

include "./common/utils.php";
include "./common/config.php";
include "./common/mysql.php";

$conn = Connect($config['database']);
$sql = "SELECT * from images where enabled = 1 order by id desc";
$rows = ExecuteQuery($sql, $conn);
$conn->close();

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Gallery</title>
    <!-- CSS -->        
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
        <link rel="stylesheet" href="./admin/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./admin/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="./admin/assets/css/animate.css">
        <link rel="stylesheet" href="./admin/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="admin/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./admin/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./admin/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./admin/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="./admin/assets/ico/apple-touch-icon-57-precomposed.png">
        
        <link href="./assets/css/estiloForm.css" rel="stylesheet">
    </head>

    <body>
    
    	<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-fixed-top navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href=""></a>
				</div>
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="./admin/index.php?page=login">Iniciar Sesion</a></li>
						<li><a class="btn btn-link-3" href="./admin/index.php?page=register">Registrarse</a></li>
					</ul>
				</div>
			</div>
		</nav>
        <br>
        <br>

        <div class="container">
            <div class="row">
                <?php
                if($rows != null){
                ?>
                <div class="col-lg-12">
                    <h1 class="page-header">Gallery</h1>
                </div>
                
                <?php
                
                        foreach($rows as $row){
                        echo "<div class='col-lg-3 col-md-4 col-xs-6 thumb'>
                        <a class='thumbnail' href='#'>
                            <img class='img-responsive css_img' src='./images/".$row['file']."' alt=''>
                        </a>" . $row['name'] . "</div>";
                    }
                }else{
                    print "<h2>No hay imagenes actualmente</h2>";
                }
                ?>
            </div>
        </div>

        <!-- Javascript -->
        <script src="./admin/assets/js/jquery-1.11.1.min.js"></script>
        <script src="./admin/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="./admin/assets/js/jquery.backstretch.min.js"></script>
        <script src="./admin/assets/js/wow.min.js"></script>
        <script src="./admin/assets/js/retina-1.1.0.min.js"></script>
        <script src="./admin/assets/js/waypoints.min.js"></script>
        <script src="./admin/assets/js/scripts.js"></script>
</body>
</html>
