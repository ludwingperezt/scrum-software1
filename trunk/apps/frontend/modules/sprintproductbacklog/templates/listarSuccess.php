<h1>Lista de Product Backlogs disponibles</h1>

<table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="800" align="center">
  <thead>
    <tr>
	  <th sort="Nombre">Nombre</th>
      <th sort="Descripcion">Descripcion</th>
      <th sort="Prioridad">Prioridad</th>
      <th sort="Duracion">Duracion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($productbacklogs as $productbacklog): ?>
    <tr>
      <td><a href="<?php echo url_for('sprintproductbacklog/asignar?idsprint='.$idsprint.'&idproductbacklog='.$productbacklog->getId()) ?>"><?php echo $productbacklog->getNombre() ?></a></td>
      <td><?php echo $productbacklog->getDescripcion() ?></td>
      <td><?php echo $productbacklog->getPrioridad() ?></td>
      <td><?php echo $productbacklog->getDuracion() ?></td>
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
<a href="<?php echo url_for('sprintproductbacklog/index') ?>">Listado de Sprint ProductBacklog</a>
