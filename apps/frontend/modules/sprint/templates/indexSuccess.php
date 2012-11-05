<h1>Lista de Sprints</h1>

<table>
  <thead>
    <tr>
      <th>Nombre </th>
	  <th>Proyecto </th>
      <th>Persona </th>
      <th>Estado </th>      
      <th>Descripcion </th>
      <th>Fecha inicio </th>
      <th>Fecha fin </th>
      <th>Dias disponibles</th>
      <!--<th>Created at</th>
      <th>Updated at</th>-->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sprints as $sprint): ?>
    <tr>
      <td><a href="<?php echo url_for('sprint/show?id='.$sprint->getId()) ?>"><?php echo $sprint->getNombre() ?></a></td>
      <td><?php echo $sprint->getProyecto() ?></td>
      <td><?php echo $sprint->getPersona() ?></td>
      <td><?php echo $sprint->getEstado() ?></td>
      <td><?php echo $sprint->getDescripcion() ?></td>
      <td><?php echo $sprint->getFechaInicio() ?></td>
      <td><?php echo $sprint->getFechaFin() ?></td>
      <td><?php echo $sprint->getDiasDisponibles() ?></td>
      <!--<td><//?php echo $sprint->getCreatedAt() ?></td>
      <td><//?php echo $sprint->getUpdatedAt() ?></td>-->
	  <td>
			&nbsp;<?php echo link_to('Eliminar', 'sprint/delete?id='.$sprint->getId(), array('method' => 'delete', 'confirm' => '¿Esta seguro de eliminar este Sprint?')) ?>
	  </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('sprint/new') ?>">Crear Sprint</a>
