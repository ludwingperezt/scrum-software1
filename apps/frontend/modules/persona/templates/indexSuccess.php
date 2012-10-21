<h1>Personas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Id facebook</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Telefono</th>
      <th>Is activated</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($personas as $persona): ?>
    <tr>
      <td><a href="<?php echo url_for('persona/show?id='.$persona->getId()) ?>"><?php echo $persona->getId() ?></a></td>
      <td><?php echo $persona->getIdFacebook() ?></td>
      <td><?php echo $persona->getNombre() ?></td>
      <td><?php echo $persona->getEmail() ?></td>
      <td><?php echo $persona->getTelefono() ?></td>
      <td><?php echo $persona->getIsActivated() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('persona/new') ?>">New</a>
