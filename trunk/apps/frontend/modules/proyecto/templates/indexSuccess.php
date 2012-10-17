<h1>Proyectos List</h1>

<table>
  <thead>
    <tr>
      <th>Id proyecto</th>
      <th>Id administrador</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Comentarios</th>
      <th>F creacion</th>
      <th>F modificacion</th>
      <th>F finalizacion</th>
      <th>Activo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($proyectos as $proyecto): ?>
    <tr>
      <td><a href="<?php echo url_for('proyecto/show?id_proyecto='.$proyecto->getIdProyecto()) ?>"><?php echo $proyecto->getIdProyecto() ?></a></td>
      <td><?php echo $proyecto->getIdAdministrador() ?></td>
      <td><?php echo $proyecto->getNombre() ?></td>
      <td><?php echo $proyecto->getDescripcion() ?></td>
      <td><?php echo $proyecto->getComentarios() ?></td>
      <td><?php echo $proyecto->getFCreacion() ?></td>
      <td><?php echo $proyecto->getFModificacion() ?></td>
      <td><?php echo $proyecto->getFFinalizacion() ?></td>
      <td><?php echo $proyecto->getActivo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('proyecto/new') ?>">New</a>
