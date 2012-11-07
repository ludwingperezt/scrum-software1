<h1>Listado de reuniones del proyecto</h1>

<table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="800" align="center">
  <thead>
    <tr>
      <th sort="Titulo">Titulo</th>
      <th sort="Proyecto">Proyecto</th>
      <th sort="Persona">Persona</th>
      <!--<th>Titulo</th>-->
      <th sort="Descripcion">Descripcion</th>
      <th sort="Anotaciones">Anotaciones</th>
      <th sort="Fecha">Fecha</th>
      <th sort="Duracion">Duracion (hrs)</th>
	  <th>Acciones</th>
	  <th></th>
      <!--<th>Is activated</th>
      <th>Created at</th>
      <th>Updated at</th>-->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($reunions as $reunion): ?>
    <tr>
      <td><a href="<?php echo url_for('reunion/show?id='.$reunion->getId()) ?>"><?php echo $reunion->getTitulo() ?></a></td>
      <td><?php echo $reunion->getProyecto()->getNombre() ?></td>
      <td><?php echo $reunion->getPersona()->getNombre() ?></td>
      <!--<td><//?php echo $reunion->getTitulo() ?></td>-->
      <td><?php echo $reunion->getDescripcion() ?></td>
      <td><?php echo $reunion->getAnotaciones() ?></td>
      <td><?php echo $reunion->getFecha() ?></td>
      <td><?php echo $reunion->getDuracion() ?></td>
      <!--<td><//?php echo $reunion->getIsActivated() ?></td>
      <td><//?php echo $reunion->getCreatedAt() ?></td>
      <td><//?php echo $reunion->getUpdatedAt() ?></td>-->
	  <td> 
			<a href="<?php echo url_for('reunion/edit?id='.$reunion->getId()) ?>">Editar</a>
	  </td>
	  <td> 
			&nbsp;<?php echo link_to('Eliminar', 'reunion/delete?id='.$reunion->getId(), array('method' => 'delete', 'confirm' => '¿Está seguro de eliminar esta Reunion?')) ?>
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
<a href="<?php echo url_for('reunion/new') ?>">Crear Reunion</a>
