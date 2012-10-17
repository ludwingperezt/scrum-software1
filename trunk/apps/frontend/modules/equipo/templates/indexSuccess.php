<h1>Equipos List</h1>

<table>
  <thead>
    <tr>
      <th>Id equipo</th>
      <th>Id rol</th>
      <th>Id persona</th>
      <th>Id proyecto</th>
      <th>Nombre</th>
      <th>Activo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($equipos as $equipo): ?>
    <tr>
      <td><a href="<?php echo url_for('equipo/show?id_equipo='.$equipo->getIdEquipo()) ?>"><?php echo $equipo->getIdEquipo() ?></a></td>
      <td><?php echo $equipo->getIdRol() ?></td>
      <td><?php echo $equipo->getIdPersona() ?></td>
      <td><?php echo $equipo->getIdProyecto() ?></td>
      <td><?php echo $equipo->getNombre() ?></td>
      <td><?php echo $equipo->getActivo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('equipo/new') ?>">New</a>
