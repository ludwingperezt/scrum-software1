<h1>Listado de Estados</h1>

<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Fecha de creación</th>
      <th>Ultima modificación</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($estados as $estado): ?>
    <tr>
      <td><a href="<?php echo url_for('estado/show?id='.$estado->getId()) ?>"><?php echo $estado->getNombre() ?></a></td>
      <td><?php echo $estado->getDescripcion() ?></td>
      <td><?php echo $estado->getCreatedAt() ?></td>
      <td><?php echo $estado->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('estado/new') ?>">New</a>
