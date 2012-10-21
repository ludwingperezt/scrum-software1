<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $equipo->getId() ?></td>
    </tr>
    <tr>
      <th>Proyecto:</th>
      <td><?php echo $equipo->getProyectoId() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $equipo->getPersonaId() ?></td>
    </tr>
    <tr>
      <th>Rol:</th>
      <td><?php echo $equipo->getRolId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $equipo->getNombre() ?></td>
    </tr>
    <tr>
      <th>Is activated:</th>
      <td><?php echo $equipo->getIsActivated() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('equipo/edit?id='.$equipo->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('equipo/index') ?>">List</a>
