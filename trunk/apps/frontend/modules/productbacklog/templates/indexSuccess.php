<h1>Lista de Product Backlogs</h1>

<table>
  <thead>
    <tr>
	  <th>Nombre</th>
      <th>Proyecto</th>
      <th>Persona</th>
      <th>Descripcion</th>
      <th>Prioridad</th>
      <th>Duracion</th>
      <!--<th>Is activated</th>
      <th>Created at</th>
      <th>Updated at</th>-->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($productbacklogs as $productbacklog): ?>
    <tr>
      <td><a href="<?php echo url_for('productbacklog/show?id='.$productbacklog->getId()) ?>"><?php echo $productbacklog->getNombre() ?></a></td>
      <td><?php echo $productbacklog->getProyecto() ?></td>
      <td><?php echo $productbacklog->getPersona() ?></td>
      <td><?php echo $productbacklog->getDescripcion() ?></td>
      <td><?php echo $productbacklog->getPrioridad() ?></td>
      <td><?php echo $productbacklog->getDuracion() ?></td>
      <!--<td><//?php echo $productbacklog->getIsActivated() ?></td>
      <td><//?php echo $productbacklog->getCreatedAt() ?></td>
      <td><//?php echo $productbacklog->getUpdatedAt() ?></td>-->
	  <td>
			&nbsp;<a href="<?php echo url_for('productbacklog/edit?id='.$productbacklog->getId()) ?>">Editar</a>&nbsp;
	  </td>
	  <td>
			&nbsp;<?php echo link_to('Eliminar', 'productbacklog/delete?id='.$productbacklog->getId(), array('method' => 'delete', 'confirm' => '�Esta seguro de eliminar este ProductBacklog?')) ?>&nbsp;
	  </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('productbacklog/new') ?>">A�adir Product Backlog</a>
