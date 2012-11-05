<h1>Listado de Estados</h1>

<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Fecha de creación</th>
      <th>Ultima modificación</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($estados as $estado): ?>
    <tr>
      <td><a href="<?php echo url_for('estado/show?id='.$estado->getId()) ?>"><?php echo $estado->getNombre() ?></a></td>
      <td><?php echo $estado->getDescripcion() ?></td>
      <td><?php echo $estado->getCreatedAt() ?></td>
      <td><?php echo $estado->getUpdatedAt() ?></td>
	  <td>
			&nbsp;<?php echo link_to('Eliminar', 'estado/delete?id='.$estado->getId(), array('method' => 'delete', 'confirm' => '¿Esta seguro de eliminar el Estado?')) ?>	  
	  </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('estado/new') ?>">Nuevo Estado</a>
