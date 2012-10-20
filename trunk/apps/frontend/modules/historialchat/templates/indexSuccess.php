<h1>Historialchats List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Proyecto</th>
      <th>Persona</th>
      <th>Mensaje</th>
      <th>Created at</th>
      <th>Activo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($historialchats as $historialchat): ?>
    <tr>
      <td><a href="<?php echo url_for('historialchat/show?id='.$historialchat->getId()) ?>"><?php echo $historialchat->getId() ?></a></td>
      <td><?php echo $historialchat->getProyectoId() ?></td>
      <td><?php echo $historialchat->getPersonaId() ?></td>
      <td><?php echo $historialchat->getMensaje() ?></td>
      <td><?php echo $historialchat->getCreatedAt() ?></td>
      <td><?php echo $historialchat->getActivo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('historialchat/new') ?>">New</a>
