<table>
  <tbody>
    <tr>
      <th>Id historial chat:</th>
      <td><?php echo $historialchat->getIdHistorialChat() ?></td>
    </tr>
    <tr>
      <th>Id persona:</th>
      <td><?php echo $historialchat->getIdPersona() ?></td>
    </tr>
    <tr>
      <th>Id proyecto:</th>
      <td><?php echo $historialchat->getIdProyecto() ?></td>
    </tr>
    <tr>
      <th>Mensaje:</th>
      <td><?php echo $historialchat->getMensaje() ?></td>
    </tr>
    <tr>
      <th>Fecha:</th>
      <td><?php echo $historialchat->getFecha() ?></td>
    </tr>
    <tr>
      <th>Activo:</th>
      <td><?php echo $historialchat->getActivo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('historialchat/edit?id_historial_chat='.$historialchat->getIdHistorialChat()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('historialchat/index') ?>">List</a>
