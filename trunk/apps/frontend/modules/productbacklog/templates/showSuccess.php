<table>
  <tbody>
    <tr>
      <th>Id product backlog:</th>
      <td><?php echo $productbacklog->getIdProductBacklog() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $productbacklog->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $productbacklog->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Prioridad:</th>
      <td><?php echo $productbacklog->getPrioridad() ?></td>
    </tr>
    <tr>
      <th>Duracion:</th>
      <td><?php echo $productbacklog->getDuracion() ?></td>
    </tr>
    <tr>
      <th>Id proyecto:</th>
      <td><?php echo $productbacklog->getIdProyecto() ?></td>
    </tr>
    <tr>
      <th>Id persona:</th>
      <td><?php echo $productbacklog->getIdPersona() ?></td>
    </tr>
    <tr>
      <th>Activo:</th>
      <td><?php echo $productbacklog->getActivo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('productbacklog/edit?id_product_backlog='.$productbacklog->getIdProductBacklog()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('productbacklog/index') ?>">List</a>
