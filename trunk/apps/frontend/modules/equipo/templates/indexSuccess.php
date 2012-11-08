<?php use_stylesheet('main.css');?>
<h1>Miembros del equipo</h1>
<table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="800" align="center">
  <thead>
    <tr>
      <th sort="Nombre">Nombre</th>
      <th sort="Rol">Rol</th>
      <th sort="Anotacion">Anotación</th>
      <th sort="Fecha de agregacion al proyecto">Fecha de agregación al proyecto</th>
      <th sort="Fecha de ultima modificacion">Fecha de última modificación</th>
	  <th>     </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($equipos as $equipo): ?>
    <tr>
      <td><a href="<?php echo url_for('equipo/show?id='.$equipo->getId()) ?>"><?php echo $equipo->getPersona()->getNombre() ?></a></td>
      <td><?php echo $equipo->getRol()->getNombre() ?></td>
      <td><?php echo $equipo->getNombre() ?></td>
      <td><?php echo $equipo->getCreatedAt() ?></td>
      <td><?php echo $equipo->getUpdatedAt() ?></td>
	  <td>
			&nbsp;<a href="<?php echo url_for('equipo/edit?id='.$equipo->getId()) ?>">Editar</a>&nbsp;
	  </td>
	  <td>
			&nbsp;<?php echo link_to('Eliminar', 'equipo/delete?id='.$equipo->getId(), array('method' => 'delete', 'confirm' => '¿Esta seguro de eliminar el Equipo?')) ?>&nbsp;
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
  <a href="<?php echo url_for('equipo/new') ?>">Agregar miembro</a>
