<?php use_stylesheet('main.css');?>
<h1>Miembros del equipo</h1>
<table class="tablas">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Rol</th>
      <th>Anotación</th>
      <th>Fecha de agregación al proyecto</th>
      <th>Fecha de última modificación</th>
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
			<a href="<?php echo url_for('equipo/edit?id='.$equipo->getId()) ?>">Editar</a>
	  </td>
	  <td>
			&nbsp;<?php echo link_to('Eliminar', 'equipo/delete?id='.$equipo->getId(), array('method' => 'delete', 'confirm' => '¿Esta seguro de eliminar el Equipo?')) ?>	
	  </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('equipo/new') ?>">Agregar miembro</a>
