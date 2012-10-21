<h1>Estados List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($estados as $estado): ?>
    <tr>
      <td><a href="<?php echo url_for('estado/show?id='.$estado->getId()) ?>"><?php echo $estado->getId() ?></a></td>
      <td><?php echo $estado->getNombre() ?></td>
      <td><?php echo $estado->getDescripcion() ?></td>
      <td><?php echo $estado->getCreatedAt() ?></td>
      <td><?php echo $estado->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('estado/new') ?>">New</a>
