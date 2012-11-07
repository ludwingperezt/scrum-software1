<table>
  <tbody>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $equipo->getPersona()->getNombre() ?></td>
    </tr>
    <tr>
      <th>Rol:</th>
      <td><?php echo $equipo->getRol()->getNombre() ?></td>
    </tr>
    <tr>
      <th>Anotación:</th>
      <td><?php echo $equipo->getNombre() ?></td>
    </tr>
    <tr>
      <th>Fecha de agregación al proyecto:</th>
      <td><?php echo $equipo->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Fecha de última modificación:</th>
      <td><?php echo $equipo->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('equipo/edit?id='.$equipo->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('equipo/index') ?>">Volver al listado del Equipo</a>
