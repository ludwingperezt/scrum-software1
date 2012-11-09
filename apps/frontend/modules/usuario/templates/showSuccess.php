<table class="tablas">
  <tbody>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $usuario->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Apellido:</th>
      <td><?php echo $usuario->getLastName() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $usuario->getEmailAddress() ?></td>
    </tr>
    <tr>
      <th>Usuario:</th>
      <td><?php echo $usuario->getUsername() ?></td>
    </tr>
    <tr>
      <th>Fecha de registro:</th>
      <td><?php echo $usuario->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Fecha de ultimo ingreso:</th>
      <td><?php echo $usuario->getLastLogin() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('usuario/edit?id='.$usuario->getId()) ?>">Editar perfil	</a>
&nbsp;
<?php echo link_to('Eliminar', 'usuario/delete?id='.$usuario->getId(), array('method' => 'delete', 'confirm' => '¿Esta seguro de cancelar su cuenta?')) ?>&nbsp;
