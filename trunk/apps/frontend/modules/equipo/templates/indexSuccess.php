<h1>Equipos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Proyecto</th>
      <th>Persona</th>
      <th>Rol</th>
      <th>Nombre</th>
      <th>Is activated</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($equipos as $equipo): ?>
    <tr>
      <td><a href="<?php echo url_for('equipo/show?id='.$equipo->getId()) ?>"><?php echo $equipo->getId() ?></a></td>
      <td><?php echo $equipo->getProyectoId() ?></td>
      <td><?php echo $equipo->getPersonaId() ?></td>
      <td><?php echo $equipo->getRolId() ?></td>
      <td><?php echo $equipo->getNombre() ?></td>
      <td><?php echo $equipo->getIsActivated() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('equipo/new') ?>">New</a>
