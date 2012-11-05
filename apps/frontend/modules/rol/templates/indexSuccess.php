<h1>Listado de Roles</h1>

<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Fecha de creación</th>
      <th>Ultima actualización</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rols as $rol): ?>
    <tr>
      <td><a href="<?php echo url_for('rol/show?id='.$rol->getId()) ?>"><?php echo $rol->getNombre() ?></a></td>
      <td><?php echo $rol->getDescripcion() ?></td>
      <td><?php echo $rol->getCreatedAt() ?></td>
      <td><?php echo $rol->getUpdatedAt() ?></td>
	  <td> 
			&nbsp;<?php echo link_to('Eliminar', 'rol/delete?id='.$rol->getId(), array('method' => 'delete', 'confirm' => '¿Esta seguro de eliminar este Rol?')) ?> 
	  </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('rol/new') ?>">Nuevo rol</a>
