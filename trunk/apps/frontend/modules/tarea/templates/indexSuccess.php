<h1>Tareas List</h1>

<table>
  <thead>
    <tr>
      <th>Id tarea</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Tiempo estimado</th>
      <th>Id product backlog</th>
      <th>Id estado</th>
      <th>Id persona</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tareas as $tarea): ?>
    <tr>
      <td><a href="<?php echo url_for('tarea/show?id_tarea='.$tarea->getIdTarea()) ?>"><?php echo $tarea->getIdTarea() ?></a></td>
      <td><?php echo $tarea->getNombre() ?></td>
      <td><?php echo $tarea->getDescripcion() ?></td>
      <td><?php echo $tarea->getTiempoEstimado() ?></td>
      <td><?php echo $tarea->getIdProductBacklog() ?></td>
      <td><?php echo $tarea->getIdEstado() ?></td>
      <td><?php echo $tarea->getIdPersona() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tarea/new') ?>">New</a>
