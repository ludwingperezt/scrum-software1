<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $productbacklog->getId() ?></td>
    </tr>
    <tr>
      <th>Proyecto:</th>
      <td><?php echo $productbacklog->getProyecto() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $productbacklog->getPersona() ?></td>
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
      <td><?php echo $productbacklog->getIsActivated() ?></td>
    </tr>
    <tr>
      <th>Creado:</th>
      <td><?php echo $productbacklog->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Actualizado:</th>
      <td><?php echo $productbacklog->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('productbacklog/edit?id='.$productbacklog->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('productbacklog/index') ?>">Lista de Product Backlogs</a>
