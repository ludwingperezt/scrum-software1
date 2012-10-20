<h1>Reunions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Proyecto</th>
      <th>Persona</th>
      <th>Titulo</th>
      <th>Descripcion</th>
      <th>Anotaciones</th>
      <th>Fecha</th>
      <th>Duracion</th>
      <th>Activo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($reunions as $reunion): ?>
    <tr>
      <td><a href="<?php echo url_for('reunion/show?id='.$reunion->getId()) ?>"><?php echo $reunion->getId() ?></a></td>
      <td><?php echo $reunion->getProyectoId() ?></td>
      <td><?php echo $reunion->getPersonaId() ?></td>
      <td><?php echo $reunion->getTitulo() ?></td>
      <td><?php echo $reunion->getDescripcion() ?></td>
      <td><?php echo $reunion->getAnotaciones() ?></td>
      <td><?php echo $reunion->getFecha() ?></td>
      <td><?php echo $reunion->getDuracion() ?></td>
      <td><?php echo $reunion->getActivo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('reunion/new') ?>">New</a>
