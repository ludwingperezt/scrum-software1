<h1>Listado de Links</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Proyecto</th>
      <th>Persona</th>
      <th>Direccion</th>
      <th>Descripcion</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($links as $link): ?>
    <tr>
      <td><a href="<?php echo url_for('link/show?id='.$link->getId()) ?>"><?php echo $link->getId() ?></a></td>
      <td><?php echo $link->getProyecto() ?></td>
      <td><?php echo $link->getPersona() ?></td>
      <td><?php echo $link->getDireccion() ?></td>
      <td><?php echo $link->getDescripcion() ?></td>
      <td><?php echo $link->getCreatedAt() ?></td>
      <td><?php echo $link->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('link/new') ?>">Crear Nuevo</a>
