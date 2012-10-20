<h1>Estados List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($estados as $estado): ?>
    <tr>
      <td><a href="<?php echo url_for('estado/show?id='.$estado->getId()) ?>"><?php echo $estado->getId() ?></a></td>
      <td><?php echo $estado->getNombre() ?></td>
      <td><?php echo $estado->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('estado/new') ?>">New</a>
