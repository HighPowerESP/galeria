<?php

include dirname(dirname(dirname(__FILE__)))."/common/config.php";
include dirname(dirname(dirname(__FILE__)))."/common/mysql.php";


$conn = Connect( $config['database']);

$sql = "select * from authors order by name asc";

$rows = ExecuteQuery( $sql, $conn);

$conn->close();

?>
<br><br><br><br>
<div class="container">

    <div class="row">
        <div class="col-lg-12 text-lett">
            <h2 class="mt-5">Listado de autores</h2>
        </div>
    </div>

    <div class="row cuadro_listado_fotos">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Activo</th>
                        <th scope="col">Creado</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($rows as $row){
                            if($row['enabled'] == "1"){
                              $enabled = "<img src='../assets/img/activo.png' width=20px";
                            }else{
                              $enabled = "<img src='../assets/img/no_activo.png' width=20px";
                            }
                            
                            echo(

                                '<tr><td>'.$row['id'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$enabled.'</td>
                                <td>'.date("d/m/Y H:s:i", strtotime($row['created'])) . '</td>
                                <td><a href="#" OnClick="delete_post('. $row[0].')"><img src="../assets/img/delete_2.png" width=20px></a></td></tr>'

                            );

                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>