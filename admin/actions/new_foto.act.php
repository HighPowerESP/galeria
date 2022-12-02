<?php
  include dirname(dirname(dirname(__FILE__)))."/common/utils.php";
  include dirname(dirname(dirname(__FILE__)))."/common/config.php";
  include dirname(dirname(dirname(__FILE__)))."/common/mysql.php";

  $author_id = $_POST['author_id'];
  $name = $_POST['name'];
  $text = $_POST['text'];

  if (isset($_POST['enabled'])) {
    $enabled = 1;
  } else {
    $enabled = 0;
  }

  move_uploaded_file($_FILES['fichero']['tmp_name'], "../../images/" . $_FILES['fichero']['name']);
  
  $fichero = $_FILES['fichero']['name'];
  $size = $_FILES['fichero']['size'];

  $connection = Connect($config['database']);

  $sql = "INSERT INTO images(author_id, name, file, size, text, enabled) VALUES($author_id, '$name', '$fichero', '$size', '$text', $enabled)";

  $result = $connection->query($sql);

  $connection = null;

  header("location: ../home.php?page=listado");
?>