<?php

    include "../../common/utils.php";
    include "../../common/config.php";
    include "../../common/mysql.php";
    
    $display_name = $_POST['display_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if( isset( $_POST['enabled'])){
        $enabled = 1;
    }else{
        $enabled = 0;
    }

    $connection = Connect($config['database']);
    
    $sql = "insert into authors ( display_name, email, password, enabled) values ('$display', '$email', '$password', '$enabled')";

    $return = Execute( $sql, $connection);

    $connection = null;