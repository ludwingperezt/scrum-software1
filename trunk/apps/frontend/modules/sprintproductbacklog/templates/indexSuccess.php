<h1>Lista de Sprint backlogs</h1>

<table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="800" align="center">
  <thead>
    <tr>
      <th sort="Sprint">Sprint</th>
      <th sort="Caracteristica (Backlog)">Caracteristica (backlog)</th>
      <th>Anotaciones</th>
      <th sort="Fecha de creacion">Fecha de creacion</th>
      <th sort="Fecha de modificacion">Fecha de modificacion</th>
	  <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sprintproductbacklogs as $sprintproductbacklog): ?>
    <tr>
      <td><a href="<?php echo url_for('sprint/show?id='.$sprintproductbacklog->getSprint()->getId()) ?>"><?php echo $sprintproductbacklog->getSprint()->getNombre() ?></a></td>
      <td><a href="<?php echo url_for('productbacklog/show?id='.$sprintproductbacklog->getProductbacklog()->getId()) ?>"><?php echo $sprintproductbacklog->getProductbacklog()->getNombre() ?></a></td>
      <td><a href="<?php echo url_for('sprintproductbacklog/show?id='.$sprintproductbacklog->getId()) ?>"><?php echo $sprintproductbacklog->getAnotaciones() ?></a></td>
      <td><?php echo $sprintproductbacklog->getCreatedAt() ?></td>
      <td><?php echo $sprintproductbacklog->getUpdatedAt() ?></td>
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
  <a href="<?php echo url_for('sprintproductbacklog/new') ?>">Nuevo Sprint backlog</a>
