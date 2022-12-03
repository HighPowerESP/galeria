<?php
include dirname(dirname(dirname(__FILE__)))."/common/utils.php";
include dirname(dirname(dirname(__FILE__)))."/common/config.php";
include dirname(dirname(dirname(__FILE__)))."/common/mysql.php";


$conn = Connect( $config['database']);

$sql = "select * from authors order by name asc";
$rows = ExecuteQuery( $sql, $conn);

$sql_foto = "select * from images where id=". $_GET['id'];
$rows_f = ExecuteQuery( $sql_foto, $conn);

$rows_fotos = $rows_f[0];

if( $rows_fotos['text'] == 0){
    $enabled = 0;
}else{
    $enabled = 1;
}

?>


<div class="container">

    <div class="row">
        <div class="col-lg-12 text-lett">
            <h2 class="mt-5">Editar foto</h2>
        </div>
    </div>

    <div class="row form_new">
        <div class="col-lg-2 text-lett"></div>
        <div class="col-lg-10 text-lett"></div>

            <form role="form" action="actions/edit_foto_act.php">

                

            </form>

    
    </div>


</div>