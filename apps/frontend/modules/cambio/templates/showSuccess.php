<table>
  <tbody>
    <tr>
      <th>Fecha:</th>
      <td><?php echo $cambio->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Proyecto:</th>
      <td><a href="<?php echo url_for('proyecto/show?id='.$cambio->getProyectoId()) ?>"><?php echo $cambio->getProyecto()->getNombre() ?></a></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><a href="<?php echo url_for('persona/show?id='.$cambio->getPersonaId()) ?>"><?php echo $cambio->getPersona()->getNombre() ?></a></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $cambio->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>
<hr />
&nbsp;
<a href="<?php echo url_for('cambio/index') ?>">Volver a lista</a>
