<h1>Lista de Proyectos</h1>

<table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="800" align="center">
  <thead>
    <tr>
      <th></th>
      <th sort="Nombre">Nombre</th>
      <th sort="Persona">Persona</th>      
      <th sort="Descripcion">Descripcion</th>
      <th>Comentarios</th>
      <!--<th>Created at</th>
      <th>Updated at</th>
      <th>Expires at</th>
      <th>Is activated</th>-->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($proyectos as $proyecto): ?>
    <tr>
      <td><a href="<?php echo url_for('proyecto/predeterminar?id='.$proyecto->getId()) ?>">Predeterminar</a></td>
      <td><a href="<?php echo url_for('proyecto/show?id='.$proyecto->getId()) ?>"><?php echo $proyecto->getNombre() ?></a></td>
      <td><?php echo $proyecto->getPersona() ?></td>
      <td><?php echo $proyecto->getDescripcion() ?></td>
      <td><?php echo $proyecto->getComentarios() ?></td>
      <!--<td><?php echo $proyecto->getCreatedAt() ?></td>
      <td><//?php echo $proyecto->getUpdatedAt() ?></td>
      <td><//?php echo $proyecto->getExpiresAt() ?></td>
      <td><//?php echo $proyecto->getIsActivated() ?></td>-->
	  <td> 
			<a href="<?php echo url_for('proyecto/edit?id='.$proyecto->getId()) ?>">Editar</a>
	  </td>
	  <td> 
			&nbsp;<?php echo link_to('Eliminar', 'proyecto/delete?id='.$proyecto->getId(), array('method' => 'delete', 'confirm' => '¿Esta seguro de eliminar este Proyecto?')) ?>
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
  <a href="<?php echo url_for('proyecto/new') ?>">Crear Proyecto</a>
