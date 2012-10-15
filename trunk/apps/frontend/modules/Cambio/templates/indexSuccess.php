<h1>Cambios List</h1>

<table>
  <thead>
    <tr>
      <th>Id cambios</th>
      <th>Descripcion</th>
      <th>Fecha</th>
      <th>Proyecto id proyecto</th>
      <th>Persona id persona</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cambios as $cambio): ?>
    <tr>
      <td><a href="<?php echo url_for('Cambio/show?id_cambios='.$cambio->getIdCambios()) ?>"><?php echo $cambio->getIdCambios() ?></a></td>
      <td><?php echo $cambio->getDescripcion() ?></td>
      <td><?php echo $cambio->getFecha() ?></td>
      <td><?php echo $cambio->getProyectoIdProyecto() ?></td>
      <td><?php echo $cambio->getPersonaIdPersona() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('Cambio/new') ?>">New</a>
