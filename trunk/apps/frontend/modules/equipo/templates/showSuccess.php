<table>
  <tbody>
    <tr>
      <th>Id equipo:</th>
      <td><?php echo $equipo->getIdEquipo() ?></td>
    </tr>
    <tr>
      <th>Id rol:</th>
      <td><?php echo $equipo->getIdRol() ?></td>
    </tr>
    <tr>
      <th>Id persona:</th>
      <td><?php echo $equipo->getIdPersona() ?></td>
    </tr>
    <tr>
      <th>Id proyecto:</th>
      <td><?php echo $equipo->getIdProyecto() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $equipo->getNombre() ?></td>
    </tr>
    <tr>
      <th>Activo:</th>
      <td><?php echo $equipo->getActivo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('equipo/edit?id_equipo='.$equipo->getIdEquipo()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('equipo/index') ?>">List</a>
