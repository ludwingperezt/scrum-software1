<h1>Lista de Tareas para el ProductBacklog</h1>

<table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="800" align="center">
  <thead>
    <tr>
      <th>Id</th>
      <th sort="Estado">Estado</th>
      <th sort="Nombre">Nombre</th>
      <th sort="Descripcion">Descripcion</th>
      <th sort="Tiempo estimado">Tiempo estimado</th>
      <th sort="Fecha de creacion">Fecha de creacion</th>
      <th sort="Fecha de modificacion">Fecha de modificacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tareas as $tarea): ?>
    <tr>
      <td><a href="<?php echo url_for('tarea/show?id='.$tarea->getId()) ?>"><?php echo $tarea->getId() ?></a></td>
      <td><?php echo $tarea->getEstado() ?></td>
      <td><?php echo $tarea->getNombre() ?></td>
      <td><?php echo $tarea->getDescripcion() ?></td>
      <td><?php echo $tarea->getTiempoEstimado() ?></td>
      <td><?php echo $tarea->getCreatedAt() ?></td>
      <td><?php echo $tarea->getUpdatedAt() ?></td>
	  <td>
			&nbsp;<a href="<?php echo url_for('tarea/edit?id='.$tarea->getId()) ?>">Editar</a>&nbsp;
	  </td>
	  <td>
			&nbsp;<?php echo link_to('Eliminar', 'tarea/delete?id='.$tarea->getId(), array('method' => 'delete', 'confirm' => '¿Esta Seguro de eliminar esta Tarea?')) ?>&nbsp;
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
  <a href="<?php echo url_for('productbacklog/index') ?>">Volver al Listado de ProductBacklogs</a>
