<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $productbacklog->getId() ?></td>
    </tr>
    <tr>
      <th>Proyecto:</th>
      <td><?php echo $productbacklog->getProyectoId() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $productbacklog->getPersonaId() ?></td>
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
      <th>Activo:</th>
      <td><?php echo $productbacklog->getActivo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('productbacklog/edit?id='.$productbacklog->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('productbacklog/index') ?>">List</a>
