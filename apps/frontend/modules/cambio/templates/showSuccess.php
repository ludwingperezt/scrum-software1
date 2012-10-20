<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $cambio->getId() ?></td>
    </tr>
    <tr>
      <th>Proyecto:</th>
      <td><?php echo $cambio->getProyectoId() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $cambio->getPersonaId() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $cambio->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Fecha:</th>
      <td><?php echo $cambio->getFecha() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('cambio/edit?id='.$cambio->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('cambio/index') ?>">List</a>
