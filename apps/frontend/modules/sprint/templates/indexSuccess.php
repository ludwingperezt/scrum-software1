<h1>Lista de Sprints</h1>

<table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="800" align="center">
  <thead>
    <tr>
      <th sort="Nombre">Nombre </th>
	  <th sort="Proyecto">Proyecto </th>
      <th sort="Persona">Persona </th>
      <th sort="Estado">Estado </th>      
      <th sort="Descripcion">Descripcion </th>
      <th sort="Fecha inicio">Fecha inicio </th>
      <th sort="Fecha fin">Fecha fin </th>
      <th sort="Dias disponibles">Dias disponibles</th>
      <!--<th>Created at</th>
      <th>Updated at</th>-->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sprints as $sprint): ?>
    <tr>
      <td><a href="<?php echo url_for('sprint/show?id='.$sprint->getId()) ?>"><?php echo $sprint->getNombre() ?></a></td>
      <td><?php echo $sprint->getProyecto() ?></td>
      <td><?php echo $sprint->getPersona() ?></td>
      <td><?php echo $sprint->getEstado() ?></td>
      <td><?php echo $sprint->getDescripcion() ?></td>
      <td><?php echo $sprint->getFechaInicio() ?></td>
      <td><?php echo $sprint->getFechaFin() ?></td>
      <td><?php echo $sprint->getDiasDisponibles() ?></td>
      <!--<td><//?php echo $sprint->getCreatedAt() ?></td>
      <td><//?php echo $sprint->getUpdatedAt() ?></td>-->
	  <td>
			<a href="<?php echo url_for('sprint/edit?id='.$sprint->getId()) ?>">Editar</a>
	  </td>
	  <td>
			&nbsp;<?php echo link_to('Eliminar', 'sprint/delete?id='.$sprint->getId(), array('method' => 'delete', 'confirm' => '¿Esta seguro de eliminar este Sprint?')) ?>
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
  <a href="<?php echo url_for('sprint/new') ?>">Crear Sprint</a>
