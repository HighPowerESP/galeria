<br>
<br>
<br>
<br>
<?php
  include dirname(dirname(dirname(__FILE__)))."/common/utils.php";
  include dirname(dirname(dirname(__FILE__)))."/common/config.php";
  include dirname(dirname(dirname(__FILE__)))."/common/mysql.php";

  $connection = Connect($config['database']);

  $sql = "SELECT * FROM authors ORDER BY name ASC";

  $rows = ExecuteQuery($sql, $connection);
  
  //debug($rows);
?>
<div class="login-box">
  <h2>Nueva Foto</h2>
  <form name="newPhoto" method="post" action="/admin/actions/new_foto.act.php" enctype="multipart/form-data">
    <div class="user-box">
      <select name="author_id" id="author_id">
      <?php
        foreach ($rows as $row) {
          echo "<option value=".$row[0].">".$row[1]."</option>";
        }
      ?>
      </select>
      <label>Autor</label>
    </div>
    <div class="user-box">
      <input type="text" name="name" required="">
      <label>Nombre</label>
    </div>
    <div class="user-box">
      <label>Fichero</label>
      <br>
      <input type="file" name="fichero" id="fichero" placeholder="">
    </div>
    <div class="user-box">
      <label>Texto</label>
      <textarea name="text" id="text" cols="22" rows="3"></textarea>
    </div>
    <div class="user-box">
      <input type="checkbox" name="enabled" required="">
      <label>Activado</label>
    </div>
    <a href="#" onclick="document.newPhoto.submit();">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Añadir Foto
    </a>
  </form>
</div>