<h1>Sprints List</h1>

<table>
  <thead>
    <tr>
      <th>Id sprint</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Fecha inicio</th>
      <th>Fecha fin</th>
      <th>Dias disponibles</th>
      <th>Id estado</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sprints as $sprint): ?>
    <tr>
      <td><a href="<?php echo url_for('sprint/show?id_sprint='.$sprint->getIdSprint()) ?>"><?php echo $sprint->getIdSprint() ?></a></td>
      <td><?php echo $sprint->getNombre() ?></td>
      <td><?php echo $sprint->getDescripcion() ?></td>
      <td><?php echo $sprint->getFechaInicio() ?></td>
      <td><?php echo $sprint->getFechaFin() ?></td>
      <td><?php echo $sprint->getDiasDisponibles() ?></td>
      <td><?php echo $sprint->getIdEstado() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('sprint/new') ?>">New</a>
