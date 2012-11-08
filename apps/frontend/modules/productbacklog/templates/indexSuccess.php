<h1>Lista de Product Backlogs</h1>

<table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="800" align="center">
  <thead>
    <tr>
	  <th sort="Nombre">Nombre</th>
      <th sort="Proyecto">Proyecto</th>
      <th sort="Persona">Persona</th>
      <th sort="Descripcion">Descripcion</th>
      <th sort="Prioridad">Prioridad</th>
      <th sort="Duracion">Duracion</th>
      <!--<th>Is activated</th>
      <th>Created at</th>
      <th>Updated at</th>-->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($productbacklogs as $productbacklog): ?>
    <tr>
      <td><a href="<?php echo url_for('productbacklog/show?id='.$productbacklog->getId()) ?>"><?php echo $productbacklog->getNombre() ?></a></td>
      <td><?php echo $productbacklog->getProyecto() ?></td>
      <td><?php echo $productbacklog->getPersona() ?></td>
      <td><?php echo $productbacklog->getDescripcion() ?></td>
      <td><?php echo $productbacklog->getPrioridad() ?></td>
      <td><?php echo $productbacklog->getDuracion() ?></td>
      <!--<td><//?php echo $productbacklog->getIsActivated() ?></td>
      <td><//?php echo $productbacklog->getCreatedAt() ?></td>
      <td><//?php echo $productbacklog->getUpdatedAt() ?></td>-->
	  <td>
			&nbsp;<a href="<?php echo url_for('productbacklog/edit?id='.$productbacklog->getId()) ?>">Editar</a>&nbsp;
	  </td>
	  <td>
			&nbsp;<?php echo link_to('Eliminar', 'productbacklog/delete?id='.$productbacklog->getId(), array('method' => 'delete', 'confirm' => '¿Esta seguro de eliminar este ProductBacklog?')) ?>&nbsp;
	  </td>
	  <td>
			&nbsp;<a href="<?php echo url_for('tarea/indexFiltradoSprint?idPB='.$productbacklog->getId()) ?>">Tareas</a>&nbsp;
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
  <a href="<?php echo url_for('productbacklog/new') ?>">Agregar Product Backlog</a>
