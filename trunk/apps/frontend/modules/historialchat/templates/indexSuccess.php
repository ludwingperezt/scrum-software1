<h1>Listado de Chat</h1>

<table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="800" align="center">
  <thead>
    <tr>
      <th>Id</th>
      <th sort="Proyecto">Proyecto</th>
      <th sort="Persona">Persona</th>
      <th sort="Mensaje">Mensaje</th>
      <th>Creado</th>
      <th>Activo</th>
      <th>Actualizado</th>
	  <th>Opciones</th>
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
			&nbsp;<a href="<?php echo url_for('historialchat/edit?id='.$historialchat->getId()) ?>">Editar</a>&nbsp;
	  </td>
	  <td>
			&nbsp;<?php echo link_to('Eliminar', 'historialchat/delete?id='.$historialchat->getId(), array('method' => 'delete', 'confirm' => '¿Esta seguro de eliminar el registro de Chat?')) ?>&nbsp;
	  </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
  <tfoot class="nav">
		<tr>
			<td colspan=7>
				<div class="pagination"></div>
				<div class="paginationTitle">Pagina</div>
				<div class="selectPerPage"></div>
				<div class="status"></div>
			</td>
		</tr>
	</tfoot>
</table>
<br>
  <a href="<?php echo url_for('historialchat/new') ?>">Crear Nuevo</a>
