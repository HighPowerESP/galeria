<?php
    include "../../common/utils.php";
    include "../../common/config.php";
    include "../../common/mysql.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $connection = Connect($config['database']);

    $sql = "SELECT * FROM authors WHERE name = '$username' AND password = '$password'";

    $result = ExecuteQuery($sql,$connection);

    $connection = null;

    if (empty($result)) {
      header("location: ../index.php?page=login&error");
    } else {
      session_start();
      $_SESSION['id'] = $result[0]['id'];
      $_SESSION['user'] = $username;
      $_SESSION['email'] = $result[0]['email'];
      $_SESSION['session_id'] = session_id();

      header("location: ../home.php?page=listado");
    }
    