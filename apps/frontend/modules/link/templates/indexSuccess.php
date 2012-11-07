<h1>Listado de Links</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Proyecto</th>
      <th>Persona</th>
      <th>Direccion</th>
      <th>Descripcion</th>
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
      <td><?php echo $link->getDireccion() ?></td>
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
</table>

  <a href="<?php echo url_for('link/new') ?>">Crear Nuevo</a>
