<h1>Lista de Proyectos</h1>

<table>
  <thead>
    <tr>
      <th>Nombre</th>
	  <th>Persona</th>      
      <th>Descripcion</th>
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
      <td><a href="<?php echo url_for('proyecto/show?id='.$proyecto->getId()) ?>"><?php echo $proyecto->getNombre() ?></a></td>
      <td><?php echo $proyecto->getPersona() ?></td>
      <td><?php echo $proyecto->getDescripcion() ?></td>
      <td><?php echo $proyecto->getComentarios() ?></td>
      <!--<td><?php echo $proyecto->getCreatedAt() ?></td>
      <td><//?php echo $proyecto->getUpdatedAt() ?></td>
      <td><//?php echo $proyecto->getExpiresAt() ?></td>
      <td><//?php echo $proyecto->getIsActivated() ?></td>-->
	  <td> 
			&nbsp;<?php echo link_to('Eliminar', 'proyecto/delete?id='.$proyecto->getId(), array('method' => 'delete', 'confirm' => '¿Esta seguro de eliminar este Proyecto?')) ?>
	  </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('proyecto/new') ?>">Crear Proyecto</a>