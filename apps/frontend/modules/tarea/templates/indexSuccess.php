<h1>Tareas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Persona</th>
      <th>Productbacklog</th>
      <th>Estado</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Tiempo estimado</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tareas as $tarea): ?>
    <tr>
      <td><a href="<?php echo url_for('tarea/show?id='.$tarea->getId()) ?>"><?php echo $tarea->getId() ?></a></td>
      <td><?php echo $tarea->getPersonaId() ?></td>
      <td><?php echo $tarea->getProductbacklogId() ?></td>
      <td><?php echo $tarea->getEstadoId() ?></td>
      <td><?php echo $tarea->getNombre() ?></td>
      <td><?php echo $tarea->getDescripcion() ?></td>
      <td><?php echo $tarea->getTiempoEstimado() ?></td>
      <td><?php echo $tarea->getCreatedAt() ?></td>
      <td><?php echo $tarea->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tarea/new') ?>">New</a>
