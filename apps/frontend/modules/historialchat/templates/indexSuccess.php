<h1>Listado de Chat</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Proyecto</th>
      <th>Persona</th>
      <th>Mensaje</th>
      <th>Created at</th>
      <th>Is activated</th>
      <th>Updated at</th>
	  <th>      </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($historialchats as $historialchat): ?>
    <tr>
      <td><a href="<?php echo url_for('historialchat/show?id='.$historialchat->getId()) ?>"><?php echo $historialchat->getId() ?></a></td>
      <td><?php echo $historialchat->getProyecto() ?></td>
      <td><?php echo $historialchat->getPersona() ?></td>
      <td><?php echo $historialchat->getMensaje() ?></td>
      <td><?php echo $historialchat->getCreatedAt() ?></td>
      <td><?php echo $historialchat->getIsActivated() ?></td>
      <td><?php echo $historialchat->getUpdatedAt() ?></td>
	  <td>
			&nbsp;<?php echo link_to('Eliminar', 'historialchat/delete?id='.$historialchat->getId(), array('method' => 'delete', 'confirm' => '¿Esta seguro de eliminar el registro de Chat?')) ?>	  
	  </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('historialchat/new') ?>">Crear Nuevo</a>
