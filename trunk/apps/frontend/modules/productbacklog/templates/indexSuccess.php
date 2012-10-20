<h1>Productbacklogs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Proyecto</th>
      <th>Persona</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Prioridad</th>
      <th>Duracion</th>
      <th>Activo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($productbacklogs as $productbacklog): ?>
    <tr>
      <td><a href="<?php echo url_for('productbacklog/show?id='.$productbacklog->getId()) ?>"><?php echo $productbacklog->getId() ?></a></td>
      <td><?php echo $productbacklog->getProyectoId() ?></td>
      <td><?php echo $productbacklog->getPersonaId() ?></td>
      <td><?php echo $productbacklog->getNombre() ?></td>
      <td><?php echo $productbacklog->getDescripcion() ?></td>
      <td><?php echo $productbacklog->getPrioridad() ?></td>
      <td><?php echo $productbacklog->getDuracion() ?></td>
      <td><?php echo $productbacklog->getActivo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('productbacklog/new') ?>">New</a>
