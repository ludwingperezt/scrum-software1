<h1>Lista de Sprint backlogs</h1>

<table>
  <thead>
    <tr>
      <th>Sprint</th>
      <th>Caracteristica (backlog)</th>
      <th>Anotaciones</th>
      <th>Fecha de creacion</th>
      <th>Fecha de modificacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sprintproductbacklogs as $sprintproductbacklog): ?>
    <tr>
      <td><a href="<?php echo url_for('sprint/show?id='.$sprintproductbacklog->getSprint()->getId()) ?>"><?php echo $sprintproductbacklog->getSprint()->getNombre() ?></a></td>
      <td><a href="<?php echo url_for('productbacklog/show?id='.$sprintproductbacklog->getProductbacklog()->getId()) ?>"><?php echo $sprintproductbacklog->getProductbacklog()->getNombre() ?></a></td>
      <td><a href="<?php echo url_for('sprintproductbacklog/show?id='.$sprintproductbacklog->getId()) ?>"><?php echo $sprintproductbacklog->getAnotaciones() ?></a></td>
      <td><?php echo $sprintproductbacklog->getCreatedAt() ?></td>
      <td><?php echo $sprintproductbacklog->getUpdatedAt() ?></td>
	  <td>
			<a href="<?php echo url_for('sprintproductbacklog/edit?id='.$sprintproductbacklog->getId()) ?>">Editar</a>
	  </td>
	  <td>
			&nbsp;<?php echo link_to('Eliminar', 'sprintproductbacklog/delete?id='.$sprintproductbacklog->getId(), array('method' => 'delete', 'confirm' => '¿Esta seguro de eliminar este SprintProductBacklog?')) ?>
	  </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('sprintproductbacklog/new') ?>">Nuevo Sprint backlog</a>
