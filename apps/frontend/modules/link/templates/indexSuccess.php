<h1>Listado de Links</h1>

<table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="800" align="center">
  <thead>
    <tr>
      <th>Id</th>
      <th sort="Proyecto">Proyecto</th>
      <th sort="Persona">Persona</th>
      <th sort="Direccion">Direccion</th>
      <th sort="Descripcion">Descripcion</th>
      <th>Creado</th>
      <th>Actualizado</th>
	  <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($links as $link): ?>
    <tr>
      <td><a href="<?php echo url_for('link/show?id='.$link->getId()) ?>"><?php echo $link->getId() ?></a></td>
      <td><?php echo $link->getProyecto() ?></td>
      <td><?php echo $link->getPersona() ?></td>
      <td><?php echo '<a href="'.$link->getDireccion().'" target="_blank">'.$link->getDireccion().'</a>'?></td>
      <td><?php echo $link->getDescripcion() ?></td>
      <td><?php echo $link->getCreatedAt() ?></td>
      <td><?php echo $link->getUpdatedAt() ?></td>
	  <td>
			&nbsp;<a href="<?php echo url_for('link/edit?id='.$link->getId()) ?>">Editar</a>&nbsp;
	  </td>
	  <td>
			&nbsp;<?php echo link_to('Eliminar', 'link/delete?id='.$link->getId(), array('method' => 'delete', 'confirm' => '¿Esta seguro de eliminar este Link?')) ?>&nbsp;
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
  <a href="<?php echo url_for('link/new') ?>">Crear Nuevo</a>
