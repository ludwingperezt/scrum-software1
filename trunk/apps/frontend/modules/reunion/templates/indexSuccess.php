<h1>Reunions List</h1>

<table>
  <thead>
    <tr>
      <th>Id reunion</th>
      <th>Titulo</th>
      <th>Descripcion</th>
      <th>Anotaciones</th>
      <th>Fecha</th>
      <th>Duracion</th>
      <th>Id proyecto</th>
      <th>Id persona</th>
      <th>Activo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($reunions as $reunion): ?>
    <tr>
      <td><a href="<?php echo url_for('reunion/show?id_reunion='.$reunion->getIdReunion()) ?>"><?php echo $reunion->getIdReunion() ?></a></td>
      <td><?php echo $reunion->getTitulo() ?></td>
      <td><?php echo $reunion->getDescripcion() ?></td>
      <td><?php echo $reunion->getAnotaciones() ?></td>
      <td><?php echo $reunion->getFecha() ?></td>
      <td><?php echo $reunion->getDuracion() ?></td>
      <td><?php echo $reunion->getIdProyecto() ?></td>
      <td><?php echo $reunion->getIdPersona() ?></td>
      <td><?php echo $reunion->getActivo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('reunion/new') ?>">New</a>
