<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $historialchat->getId() ?></td>
    </tr>
    <tr>
      <th>Proyecto:</th>
      <td><?php echo $historialchat->getProyecto() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $historialchat->getPersona()->getNombre() ?></td>
    </tr>
    <tr>
      <th>Mensaje:</th>
      <td><?php echo $historialchat->getMensaje() ?></td>
    </tr>
    <tr>
      <th>Creado:</th>
      <td><?php echo $historialchat->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Activo:</th>
      <td><?php echo $historialchat->getIsActivated() ?></td>
    </tr>
    <tr>
      <th>Actualizado:</th>
      <td><?php echo $historialchat->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('historialchat/edit?id='.$historialchat->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('historialchat/index') ?>">Listado de Chat</a>
