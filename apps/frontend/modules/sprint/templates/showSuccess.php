<table>
  <tbody>
    <tr>
      <th>Id sprint:</th>
      <td><?php echo $sprint->getIdSprint() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $sprint->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $sprint->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Fecha inicio:</th>
      <td><?php echo $sprint->getFechaInicio() ?></td>
    </tr>
    <tr>
      <th>Fecha fin:</th>
      <td><?php echo $sprint->getFechaFin() ?></td>
    </tr>
    <tr>
      <th>Dias disponibles:</th>
      <td><?php echo $sprint->getDiasDisponibles() ?></td>
    </tr>
    <tr>
      <th>Id estado:</th>
      <td><?php echo $sprint->getIdEstado() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('sprint/edit?id_sprint='.$sprint->getIdSprint()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('sprint/index') ?>">List</a>
