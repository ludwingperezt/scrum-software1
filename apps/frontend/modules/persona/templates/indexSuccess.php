<h1>Listado de Personas del Proyecto</h1>

<table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="800" align="center">
  <thead>
    <tr>
      <th>Id</th>
      <th>Id facebook</th>
      <th sort="Nombre">Nombre</th>
      <th sort="Email">Email</th>
      <th sort="Telefono">Telefono</th>
      <th sort="Activo">Activo</th>
      <th>Creado</th>
      <th>Actualizado</th>
	  <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($personas as $persona): ?>
    <tr>
      <td><a href="<?php echo url_for('persona/show?id='.$persona->getId()) ?>"><?php echo $persona->getId() ?></a></td>
      <td><?php echo $persona->getIdFacebook() ?></td>
      <td><?php echo $persona->getNombre() ?></td>
      <td><?php echo $persona->getEmail() ?></td>
      <td><?php echo $persona->getTelefono() ?></td>
      <td><?php echo $persona->getIsActivated() ?></td>
      <td><?php echo $persona->getCreatedAt() ?></td>
      <td><?php echo $persona->getUpdatedAt() ?></td>
	  <td> 
			<a href="<?php echo url_for('persona/edit?id='.$persona->getId()) ?>">Editar</a>&nbsp;
	  </td>
	  <td>
			<?php echo link_to('Eliminar', 'persona/delete?id='.$persona->getId(), array('method' => 'delete', 'confirm' => '¿Esta seguro?')) ?>
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
  <a href="<?php echo url_for('persona/new') ?>">Agregar Persona</a>
