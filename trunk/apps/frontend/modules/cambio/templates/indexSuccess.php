<h1>Cambios List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Proyecto</th>
      <th>Persona</th>
      <th>Descripcion</th>
      <th>Fecha</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cambios as $cambio): ?>
    <tr>
      <td><a href="<?php echo url_for('cambio/show?id='.$cambio->getId()) ?>"><?php echo $cambio->getId() ?></a></td>
      <td><?php echo $cambio->getProyectoId() ?></td>
      <td><?php echo $cambio->getPersonaId() ?></td>
      <td><?php echo $cambio->getDescripcion() ?></td>
      <td><?php echo $cambio->getFecha() ?></td>
      <td><?php echo $cambio->getCreatedAt() ?></td>
      <td><?php echo $cambio->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('cambio/new') ?>">New</a>
