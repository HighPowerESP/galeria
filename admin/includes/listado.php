<br>
<br>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-lett">
      <h2 class="mt-5">Listado de fotos</h2>
    </div>
  </div>
        <ul class="nav navbar-nav" style="margin-left: 44%;">
          <li><a class="btn btn-link-3" href="home.php?page=new">Nueva Foto</a></li>
        </ul>
<br><br><br><br>
  <div class="row cuadro_listado_fotos">
    <div class="col-lg-12">
      <table class="table">
        <thead>
        <tr>
          <th scope="col" >#</th>
          <th scope="col" >Nombre autor</th>
          <th scope="col" >Fichero</th>
          <th scope="col" >Creado</th>
          <th scope="col" >Activo</th>
          <th scope="col" >Editar</th>
          <th scope="col" >Eliminar</th>
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

              '<tr"><td>'.$row['id'].'</td>
              <td>'.$row['author'].'</td>
              <td>'.$row['name'].'</td>
              <td>'.date("d/m/Y H:s:i", strtotime($row['created'])) . '</td>
              <td>'.$enabled.'</td>
              <td><a href="home.php?page=edit&id='. $row[0].'"><img src="../assets/img/edit2.png" width=20px></a></td>
              <td><a href="#" OnClick="delete_post('. $row[0].')"><img src="../assets/img/delete_2.png" width=20px></a></td></tr>'
              
            
            );


            }
          ?>

        </tbody>
      </table>


    </div>


  </div>
  
</div>