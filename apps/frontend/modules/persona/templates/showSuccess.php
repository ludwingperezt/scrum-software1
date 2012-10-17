<table>
  <tbody>
    <tr>
      <th>Id persona:</th>
      <td><?php echo $persona->getIdPersona() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $persona->getNombre() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $persona->getEmail() ?></td>
    </tr>
    <tr>
      <th>Telefono:</th>
      <td><?php echo $persona->getTelefono() ?></td>
    </tr>
    <tr>
      <th>Contraseña:</th>
      <td><?php echo $persona->getContraseña() ?></td>
    </tr>
    <tr>
      <th>Activo:</th>
      <td><?php echo $persona->getActivo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('persona/edit?id_persona='.$persona->getIdPersona()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('persona/index') ?>">List</a>
