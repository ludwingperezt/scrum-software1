<table class="tablas">
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $persona->getId() ?></td>
    </tr>
    <tr>
      <th>Id facebook:</th>
      <td><?php echo $persona->getIdFacebook() ?></td>
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
      <th>Activo:</th>
      <td><?php echo $persona->getIsActivated() ?></td>
    </tr>
    <tr>
      <th>Creado:</th>
      <td><?php echo $persona->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Actualizado:</th>
      <td><?php echo $persona->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('persona/edit?id='.$persona->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('persona/index') ?>">Listado de Miembros del Proyecto</a>
