<h1>Links List</h1>

<table>
  <thead>
    <tr>
      <th>Id link</th>
      <th>Direccion</th>
      <th>Descripcion</th>
      <th>Id proyecto</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($links as $link): ?>
    <tr>
      <td><a href="<?php echo url_for('link/show?id_link='.$link->getIdLink()) ?>"><?php echo $link->getIdLink() ?></a></td>
      <td><?php echo $link->getDireccion() ?></td>
      <td><?php echo $link->getDescripcion() ?></td>
      <td><?php echo $link->getIdProyecto() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('link/new') ?>">New</a>
