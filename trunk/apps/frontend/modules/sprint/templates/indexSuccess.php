<h1>Sprints List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Proyecto</th>
      <th>Persona</th>
      <th>Estado</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Fecha inicio</th>
      <th>Fecha fin</th>
      <th>Dias disponibles</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sprints as $sprint): ?>
    <tr>
      <td><a href="<?php echo url_for('sprint/show?id='.$sprint->getId()) ?>"><?php echo $sprint->getId() ?></a></td>
      <td><?php echo $sprint->getProyectoId() ?></td>
      <td><?php echo $sprint->getPersonaId() ?></td>
      <td><?php echo $sprint->getEstadoId() ?></td>
      <td><?php echo $sprint->getNombre() ?></td>
      <td><?php echo $sprint->getDescripcion() ?></td>
      <td><?php echo $sprint->getFechaInicio() ?></td>
      <td><?php echo $sprint->getFechaFin() ?></td>
      <td><?php echo $sprint->getDiasDisponibles() ?></td>
      <td><?php echo $sprint->getCreatedAt() ?></td>
      <td><?php echo $sprint->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('sprint/new') ?>">New</a>
