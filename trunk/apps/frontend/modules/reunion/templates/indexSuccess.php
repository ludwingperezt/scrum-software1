<h1>Listado de reuniones del proyecto</h1>

<table>
  <thead>
    <tr>
      <th>Titulo</th>
      <th>Proyecto</th>
      <th>Persona</th>
      <!--<th>Titulo</th>-->
      <th>Descripcion</th>
      <th>Anotaciones</th>
      <th>Fecha</th>
      <th>Duracion (hrs)</th>
      <!--<th>Is activated</th>
      <th>Created at</th>
      <th>Updated at</th>-->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($reunions as $reunion): ?>
    <tr>
      <td><a href="<?php echo url_for('reunion/show?id='.$reunion->getId()) ?>"><?php echo $reunion->getTitulo() ?></a></td>
      <td><?php echo $reunion->getProyecto()->getNombre() ?></td>
      <td><?php echo $reunion->getPersona()->getNombre() ?></td>
      <!--<td><//?php echo $reunion->getTitulo() ?></td>-->
      <td><?php echo $reunion->getDescripcion() ?></td>
      <td><?php echo $reunion->getAnotaciones() ?></td>
      <td><?php echo $reunion->getFecha() ?></td>
      <td><?php echo $reunion->getDuracion() ?></td>
      <!--<td><//?php echo $reunion->getIsActivated() ?></td>
      <td><//?php echo $reunion->getCreatedAt() ?></td>
      <td><//?php echo $reunion->getUpdatedAt() ?></td>-->
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('reunion/new') ?>">Crear Reunion</a>
