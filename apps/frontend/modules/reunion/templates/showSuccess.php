<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $reunion->getId() ?></td>
    </tr>
    <tr>
      <th>Proyecto:</th>
      <td><?php echo $reunion->getProyectoId() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $reunion->getPersonaId() ?></td>
    </tr>
    <tr>
      <th>Titulo:</th>
      <td><?php echo $reunion->getTitulo() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $reunion->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Anotaciones:</th>
      <td><?php echo $reunion->getAnotaciones() ?></td>
    </tr>
    <tr>
      <th>Fecha:</th>
      <td><?php echo $reunion->getFecha() ?></td>
    </tr>
    <tr>
      <th>Duracion:</th>
      <td><?php echo $reunion->getDuracion() ?></td>
    </tr>
    <tr>
      <th>Is activated:</th>
      <td><?php echo $reunion->getIsActivated() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('reunion/edit?id='.$reunion->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('reunion/index') ?>">List</a>
