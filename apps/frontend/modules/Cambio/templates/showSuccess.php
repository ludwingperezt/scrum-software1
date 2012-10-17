<table>
  <tbody>
    <tr>
      <th>Id cambios:</th>
      <td><?php echo $cambio->getIdCambios() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $cambio->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Fecha:</th>
      <td><?php echo $cambio->getFecha() ?></td>
    </tr>
    <tr>
      <th>Proyecto id proyecto:</th>
      <td><?php echo $cambio->getProyectoIdProyecto() ?></td>
    </tr>
    <tr>
      <th>Persona id persona:</th>
      <td><?php echo $cambio->getPersonaIdPersona() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('Cambio/edit?id_cambios='.$cambio->getIdCambios()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('Cambio/index') ?>">List</a>
