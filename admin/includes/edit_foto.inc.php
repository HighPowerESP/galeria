<?php
include dirname(dirname(dirname(__FILE__))) . "/common/utils.php";
include dirname(dirname(dirname(__FILE__))) . "/common/config.php";
include dirname(dirname(dirname(__FILE__))) . "/common/mysql.php";

$conn = Connect($config['database']);

$sql = "select * from authors order by name asc";
$rows = ExecuteQuery($sql, $conn);

$sql_foto = "select * from images where id=" . $_GET['id'];
$rows_f = ExecuteQuery($sql_foto, $conn);

$rows_fotos = $rows_f[0];

if ($rows_fotos['text'] == 0) {
    $enabled = 0;
    $e = "";
} else {
    $enabled = 1;
    $e = "checked";
}

?>


<div class="login-box">
    <h2>Editar Foto</h2>
    <form name="editFoto" role="form" method="post" action="./actions/edit_foto.act.php" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="<?php echo $rows_fotos['id']; ?>" ; <div class="user-box">
        <div class="user-box">
        <label>Autor</label>
        <select name="author_id" id="author_id">
            <?php
            foreach ($rows as $row) {
                if ($row[0] == $rows_fotos['author_id']) {
                    echo "<option value='$row[0]' selected>" . $row[1] . "</option>";
                } else {
                    echo "<option value='$row[0]>$row[1]</option>'";
                }
            }
            ?>
        </select>
        
</div>
<br>
<div class="user-box">
    <input type="text" name="name" required="" value="<?php echo $rows_fotos['name']; ?>">
    <label>Nombre</label>
</div>
<div class="user-box">
    <label>Fichero</label>
    <br>
    <input type="file" name="fichero" id="fichero" placeholder="">
    <?php echo $rows_fotos['file']; ?>
</div>
<br>
<div class="user-box">
    <label>Texto</label>
    <textarea name="text" id="text" cols="22" rows="3"><?php echo $rows_fotos['text']; ?></textarea>
</div>
<br>
<div class="user-box">
    <input type="checkbox" name="enabled" required="" <?php echo $e; ?>>
    <label>Activado</label>
</div>
<a href="#" onclick="document.editFoto.submit();">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    Editar foto
</a>
</form>

</div>