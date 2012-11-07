<h1>Lista de sucesos</h1>

<table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="800" align="center">
  <thead>
    <tr>
      <th sort="Fecha">Fecha</th>
      <th sort="Proyecto">Proyecto</th>
      <th sort="Realizador">Realizador</th>
      <th> Descripcion del cambio</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cambios as $cambio): ?>
    <tr>
      <td><a href="<?php echo url_for('cambio/show?id='.$cambio->getId()) ?>"><?php echo $cambio->getCreatedAt() ?></a></td>
      <td><a href="<?php echo url_for('proyecto/show?id='.$cambio->getProyectoId()) ?>"><?php echo $cambio->getProyecto()->getNombre() ?></a></td>
      <td><a href="<?php echo url_for('persona/show?id='.$cambio->getPersonaId()) ?>"><?php echo $cambio->getPersona()->getNombre() ?></a></td>
      <td><?php echo $cambio->getDescripcion() ?></td>
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

