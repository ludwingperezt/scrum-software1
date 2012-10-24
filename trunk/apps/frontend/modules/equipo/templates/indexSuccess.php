<h1>Equipos List</h1>

<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Rol</th>
      <th>Anotación</th>
      <th>Fecha de agregación al proyecto</th>
      <th>Fecha de última modificación</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($equipos as $equipo): ?>
    <tr>
      <td><a href="<?php echo url_for('equipo/show?id='.$equipo->getId()) ?>"><?php echo $equipo->getPersona()->getNombre() ?></a></td>
      <td><?php echo $equipo->getRol()->getNombre() ?></td>
      <td><?php echo $equipo->getNombre() ?></td>
      <td><?php echo $equipo->getCreatedAt() ?></td>
      <td><?php echo $equipo->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('equipo/new') ?>">New</a>
