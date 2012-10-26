<h1>Tareas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Persona</th>
      <th>Product backlog</th>
      <th>Estado</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Tiempo estimado</th>
      <th>Fecha de creacion</th>
      <th>Fecha de modificacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tareas as $tarea): ?>
    <tr>
      <td><a href="<?php echo url_for('tarea/show?id='.$tarea->getId()) ?>"><?php echo $tarea->getId() ?></a></td>
      <td><?php echo $tarea->getPersona() ?></td>
      <td><?php echo $tarea->getProductbacklog() ?></td>
      <td><?php echo $tarea->getEstado() ?></td>
      <td><?php echo $tarea->getNombre() ?></td>
      <td><?php echo $tarea->getDescripcion() ?></td>
      <td><?php echo $tarea->getTiempoEstimado() ?></td>
      <td><?php echo $tarea->getCreatedAt() ?></td>
      <td><?php echo $tarea->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tarea/new') ?>">Crear Nuevo</a>
