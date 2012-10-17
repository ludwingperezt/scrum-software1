<h1>Personas List</h1>

<table>
  <thead>
    <tr>
      <th>Id persona</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Telefono</th>
      <th>Contraseña</th>
      <th>Activo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($personas as $persona): ?>
    <tr>
      <td><a href="<?php echo url_for('persona/show?id_persona='.$persona->getIdPersona()) ?>"><?php echo $persona->getIdPersona() ?></a></td>
      <td><?php echo $persona->getNombre() ?></td>
      <td><?php echo $persona->getEmail() ?></td>
      <td><?php echo $persona->getTelefono() ?></td>
      <td><?php echo $persona->getContraseña() ?></td>
      <td><?php echo $persona->getActivo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('persona/new') ?>">New</a>
