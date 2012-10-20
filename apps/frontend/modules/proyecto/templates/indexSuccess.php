<h1>Proyectos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Persona</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Comentarios</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Expires at</th>
      <th>Activo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($proyectos as $proyecto): ?>
    <tr>
      <td><a href="<?php echo url_for('proyecto/show?id='.$proyecto->getId()) ?>"><?php echo $proyecto->getId() ?></a></td>
      <td><?php echo $proyecto->getPersonaId() ?></td>
      <td><?php echo $proyecto->getNombre() ?></td>
      <td><?php echo $proyecto->getDescripcion() ?></td>
      <td><?php echo $proyecto->getComentarios() ?></td>
      <td><?php echo $proyecto->getCreatedAt() ?></td>
      <td><?php echo $proyecto->getUpdatedAt() ?></td>
      <td><?php echo $proyecto->getExpiresAt() ?></td>
      <td><?php echo $proyecto->getActivo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('proyecto/new') ?>">New</a>
