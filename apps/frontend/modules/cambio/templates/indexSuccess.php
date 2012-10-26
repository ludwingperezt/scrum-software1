<h1>Lista de sucesos</h1>

<table>
  <thead>
    <tr>
      <th>Fecha</th>
      <th>Proyecto</th>
      <th>Realizador</th>
      <th>Descripcion del cambio</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cambios as $cambio): ?>
    <tr>
      <td><a href="<?php echo url_for('cambio/show?id='.$cambio->getId()) ?>"><?php echo $cambio->getCreatedAt() ?></a></td>
      <td><a href="<?php echo url_for('proyecto/show?id='.$cambio->getProyecto()->getNombre()) ?>"><?php echo $cambio->getProyecto()->getNombre() ?></a></td>
      <td><a href="<?php echo url_for('persona/show?id='.$cambio->getPersona()->getNombre()) ?>"><?php echo $cambio->getPersona()->getNombre() ?></a></td>
      <td><?php echo $cambio->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

