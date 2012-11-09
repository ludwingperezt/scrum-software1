
<h1>Sprint</h1>
<table class="tablas">
  <tbody>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $sprintproductbacklog->getSprint()->getNombre() ?></td>
    </tr>
    <tr>
      <th>Estado del sprint:</th>
      <td><?php echo $sprintproductbacklog->getSprint()->getEstado() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $sprintproductbacklog->getSprint()->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Fecha inicio:</th>
      <td><?php echo $sprintproductbacklog->getSprint()->getFechaInicio() ?></td>
    </tr>
    <tr>
      <th>Fecha fin:</th>
      <td><?php echo $sprintproductbacklog->getSprint()->getFechaFin() ?></td>
    </tr>
    <tr>
      <th>Dias disponibles:</th>
      <td><?php echo $sprintproductbacklog->getSprint()->getDiasDisponibles() ?></td>
    </tr>
  </tbody>
</table>
<br>
<h1>Backlogs asignados</h1>
<table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="800" align="center">
  <thead>
    <tr>
	<th>Anotaciones</th>
      <th sort="Caracteristica (Backlog)">Caracteristica (backlog)</th>
      <th sort="Prioridad">Prioridad</th>
      <th sort="Duracion">Duracion (días)</th>
	  <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sprintproductbacklogs as $sprintproductbacklog): ?>
    <tr>
	<td><?php echo $sprintproductbacklog->getAnotaciones() ?></td>
      <td><a href="<?php echo url_for('productbacklog/show?id='.$sprintproductbacklog->getProductbacklog()->getId()) ?>"><?php echo $sprintproductbacklog->getProductbacklog()->getNombre() ?></a></td>
      <td><?php echo $sprintproductbacklog->getProductbacklog()->getPrioridad() ?></td>
      <td><?php echo $sprintproductbacklog->getProductbacklog()->getDuracion() ?></td>
	  <td>
			&nbsp;<a href="<?php echo url_for('sprintproductbacklog/edit?id='.$sprintproductbacklog->getId()) ?>">Editar</a>&nbsp;
			&nbsp;<?php echo link_to('Eliminar', 'sprintproductbacklog/delete?id='.$sprintproductbacklog->getId(), array('method' => 'delete', 'confirm' => '¿Esta seguro de eliminar este SprintProductBacklog?')) ?>&nbsp;
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

<hr />

<a href="<?php echo url_for('sprintproductbacklog/listar?idsprint='.$sprintproductbacklog->getSprint()->getId()) ?>">Agregar backlog</a>
&nbsp;
<a href="<?php echo url_for('sprintproductbacklog/index') ?>">Listado de Sprint ProductBacklog</a>
