<h1>Historialchats List</h1>

<table>
  <thead>
    <tr>
      <th>Id historial chat</th>
      <th>Id persona</th>
      <th>Id proyecto</th>
      <th>Mensaje</th>
      <th>Fecha</th>
      <th>Activo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($historialchats as $historialchat): ?>
    <tr>
      <td><a href="<?php echo url_for('historialchat/show?id_historial_chat='.$historialchat->getIdHistorialChat()) ?>"><?php echo $historialchat->getIdHistorialChat() ?></a></td>
      <td><?php echo $historialchat->getIdPersona() ?></td>
      <td><?php echo $historialchat->getIdProyecto() ?></td>
      <td><?php echo $historialchat->getMensaje() ?></td>
      <td><?php echo $historialchat->getFecha() ?></td>
      <td><?php echo $historialchat->getActivo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('historialchat/new') ?>">New</a>
